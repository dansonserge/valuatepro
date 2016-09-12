<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\PostImage;
use Auth;
use Intervention\Image\Facades\Image as Image;



class PostController extends Controller
{
    
    public function postIndex(Request $request){

    	 $validation= Post::validate($request->all());

      if($validation->fails()){ 
        
          return redirect()->back()
          ->withErrors($validation->errors())
         
         ->withInput();
      }
      else{
          $post=new Post;
          $post->title=$request->title;
          $post->post_text=$request->post_text;

          $image = $request->file('image');
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          $path = public_path('images/posts/' . $filename);
          Image::make($image->getRealPath())->resize(498,498)->save($path);
          $post->image = 'images/posts/'.$filename;
          $post->post_text=$request->post_text;
          $post->category_id=$request->category_id;
        
          $request->user()->post()->save($post);

          return redirect()->back()
          ->with('success','New post updated');
      }


    }


}
