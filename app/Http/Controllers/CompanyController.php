<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Employer;
use App\Http\Requests;
use Auth;
use App\Employerproject;
use App\Customer;
use DB;
use App\Propertycategory;
use App\Intendeduse;

use App\Mainresidential;
use App\Annex;
use App\Employerprojectimage;


use Intervention\Image\Facades\Image as Image;



class CompanyController extends Controller{

  protected $guards = 'employers';

    public function getSignupview(){

     return view('company.signup')->with('title','Company Registration');
     }
     public function postSignup(Request $request){
       $validation=Employer::validate($request->all());

      if($validation->fails()){ 
        
          return redirect()->back()
          ->withErrors($validation->errors())
         
         ->withInput();
      }
  
      else{
        $employer= new Employer;

        $employer->company_name= $request->company_name;
        $employer->first_name= $request->first_name;
        $employer->last_name= $request->last_name;
        $employer->telephone= $request->telephone;
        $employer->professional_status= $request->professional_status;
        $employer->campany_address= $request->campany_address;
        $employer->province= $request->province;
        $employer->district= $request->district;
        $employer->sector= $request->sector;
        $employer->cell= $request->cell;
        $employer->village= $request->village;
        $employer->reg_no_in_certified_valuers= $request->reg_no_in_certified_valuers;
        $employer->email = $request->email;
        $employer->password= Hash::make($request->password);
        $employer->save();

   
        return redirect()->back()
        ->with('success','Welcome to ValuatePro, please Login');
        
    }
      
    }
     
    public function getIndex(){
    return view('company.index')->with('title','Dashboard');

  }
public function getSigninview(){
    return view('company.signin')->with('title','Log in');

  }
  public function postSignin(Request $request){
               $cmp= auth()->guard('employers');
         if( $cmp->attempt(array('email'=>$request->email,'password'=>$request->password))){
              
            return redirect('cmp/index')->with('success','Successfully signed in');
         }
        else {
               return redirect()->back()->with('login-error','Your Email or Password is not correct,try again!');
             }

  }


  public function getLogout(){
     Auth::guard('employers')->logout();

    return redirect('/');
  }


  public function getNewproject(){

    return view('company.newproject')->with('title','New project');
  }



public function postProjcust(Request $request){
    $validation=employerproject::validate($request->all());
          if($validation->fails()){

            return redirect()->back()
            ->withErrors($validation->errors())
            ->withInput();

          }
              else{
                $project= new Employerproject;

                 $datacust=[
                            'company_id'=> $request->company_id,
                            'first_name'=> $request->first_name,
                            'last_name'=> $request->last_name,
                            'telephone'=>$request->telephone,
                            'email'=> $request->email,
                            'id_card'=> $request->id_card
                     
                           ];
                 

                $projectId= DB::table('employerprojects')->insertGetId($datacust);
                }




                    return redirect('projectdescview/'.$projectId);
         


  }

  public function getProjectdescview($id){
   $propertycategories= new Propertycategory;

   $names=Employerproject::where('id',$id)->get();
     

  return view('company.project_description',['propertycategories'=>$propertycategories])
  ->with('projectId',$id)
  ->with('title','Property Description')
  ->with('names', $names[0]->first_name.' '.$names[0]->last_name);
  
}

  public function postProjdesc(Request $request){

             
                   


        
      
          $validation=Employerproject::validate($request->all());
          if($validation->fails()){

            return redirect()->back()
            ->withErrors($validation->errors())
            ->withInput();

          }
              else{

                    $project=Employerproject::find($request->project_id);

                          if($request->category_property_id==null){
                            return redirect()->back()->with('error','Please choose a property category')->withInput();

                          }
                          
                 $projdata= [
                             'created_time'=>$request->created_time,
                             'plot_no'=>$request->plot_no,
                             'is_open_market_value'=>$request->is_open_market_value,
                             'is_forced_sale_value'=>$request->is_forced_sale_value,
                             'is_insurable_value'=> $request->is_insurable_value,
                             'upi_no'=>$request->upi_no,
                             'province'=>$request->province,
                             'district'=> $request->district,
                             'cell'=> $request->cell,
                             'sector'=> $request->sector,
                             'village'=>$request->village,
                             'category_property_id'=>$request->category_property_id
                            ];
                            $project->update($projdata);

                            $intendeduse=new Intendeduse;

                            return redirect('executivesummaryview/'.$request->project_id);


      }


  }
   public function getExecutivesummaryview($id){
    $intendeduse=new Intendeduse;
    return view('company.executive_summary',['intendeduses'=> $intendeduse])
    ->with('title','Executive Summary')
    ->with('projectId', $id);
  }


  public function postProjectexec(Request $request){
    
     if($request->intended_use_id==null){
                            return redirect()->back()->with('error','Please choose an intended use!')->withInput();

                          }

    $area = $request->height* $request->width;
    $project=Employerproject::find($request->project_id);

   $projdata=[
   'area'=>$area,
   'intended_use_id'=>$request->intended_use_id,
   'physical_conditions'=>$request->physical_condition
  ];

   $project->update($projdata);

     // return $this->getPropertydetailsview($request->project_id);
     return redirect('propertydetailsview/'.$request->project_id);

      
    
  }
public function getPropertydetailsview($id){
   $mainresidential= new Mainresidential;

   $annex=new Annex;
   $plot_size= Employerproject::where('id',$id)->get();

  
   
        $mainresidential= $mainresidential->where('project_id',$id)->get();

         $annex=$annex->where('project_id',$id)->get();
    return view('company.property_details',['mainresidentials'=>$mainresidential,'annexes'=>$annex])->with('title','Property Details')
 ->with('projectId', $id)->with('area', $plot_size[0]->area)->with('title','Property Details');

  }

  public function postAddmainresidential(Request $request){
          $project= new Mainresidential;
      
    $area = $request->height* $request->width;

   $projdata=[
   'area'=>$area,
   'project_id'=>$request->project_id,
  ];

   $project->create($projdata);
     
     return redirect('propertydetailsview/'.$request->project_id);
  }

  public function postAddannex(Request $request){
          $project= new Annex;
      
    $area = $request->height* $request->width;

   $projdata=[
   'area'=>$area,
   'project_id'=>$request->project_id,
  ];

   $project->create($projdata);
     
     return redirect('propertydetailsview/'.$request->project_id);
  }




  public function postMainresidentialdelete(Request $request){

    $mainresidential= Mainresidential::find($request->mainresidential_id);

    $mainresidential->delete();

     return redirect('propertydetailsview/'.$request->project_id);




  }
   public function postAnnexdelete(Request $request){

    $annex= Annex::find($request->annex_id);

    $annex->delete();

     return redirect('propertydetailsview/'.$request->project_id);

}


public function postConstructiondetailsview(Request $request){
    
    return view('company.construction_details')->with('title','Contruction Details')
 ->with('projectId', $request->projectid);

  }

  public function postConstructiondetails(Request $request){

    $project=Employerproject::find($request->project_id);

   $projdata=[
   'construction_details_mainresidentials'=>$request->constdet_mainres,
   'construction_details_annexes'=>$request->constdet_annex
  
  ];

   $project->update($projdata);

     
     return redirect('situationlocationview/'.$request->project_id);

      
 
  }

  public function getSituationlocationview($id){
      
    return view('company.situation_location')->with('title','Situation Location')->with('projectId',$id)->with('title','Situation Location');

  }

  public function postSituationlocation(Request $request){
     $project=employerproject::find($request->project_id);

   $projdata=[
   
   'is_tarmac_main_road'=>$request->is_tarmac_main_road,
   'is_tertiary_tarmac_road'=>$request->is_tertiary_tarmac_road,
   'is_storm_water'=>$request->is_storm_water,
   'is__waste_water'=>$request->is__waste_water,
   'is_power_supply'=>$request->is_power_supply,
   'is_water_supply'=>$request->is_water_supply,
   'is_fire_hydrant'=>$request->is_fire_hydrant,
   'is_fiber_optic'=>$request->is_fiber_optic,
   'is_public_transport'=>$request->is_public_transport,
   'is_shopping_center'=>$request->is_shopping_center,
   'is_nursery_school'=>$request->is_nursery_school,
   'is_secondary_school'=>$request->is_secondary_school,
   'is_university'=>$request->is_university,
   'is_job_providers'=>$request->is_job_providers,
   'is_sporting_facility'=>$request->is_sporting_facility,
   'is_play_ground'=>$request->is_play_ground 
     
       ];


     $project->update($projdata);
      return redirect('constructioncompositionview/'.$request->project_id);

  
     }

    public function getConstructioncompositionview($id){
      return view('company.construction_composition')->with('title','Contruction Composition')
      ->with('projectId',$id)->with('title','Construction Composition');
    }

    public function postConstructioncomposition(Request $request){
     $project=Employerproject::find($request->project_id);

   $projdata=[
   'cons_composition_details_mainresidentials'=>$request->compdet_mainres,
   'cons_composition_details_annexes'=>$request->compdet_annex
  
  ];

   $project->update($projdata);

     
     return redirect('pictureuploadview/'.$request->project_id);

     }

    public function getPictureuploadview($id){


     $projectimages=Employerprojectimage::where('project_id',$id)->get();

 

      return view('company.picture_upload',['projectimages'=>$projectimages])
      ->with('title','Upload picture')
      ->with('projectId',$id);



    }

    public function postPictureupload(Request $request){
        $employerprojectimage=new Employerprojectimage;
     
        
       $validation= Employerprojectimage::validate($request->all());

      if($validation->fails()){ 
        
          return redirect()->back()
          ->withErrors($validation->errors())
         
         ->withInput();
      }
      else{

          $cmpimage=new Employerprojectimage;
           $image = $request->file('image');
          $filename  = time() . '.' . $image->getClientOriginalExtension();

          $path = public_path('images/employerprojectsimages/' . $filename);


          Image::make($image->getRealPath())->resize(498,498)->save($path);
           $cmpimage->image = 'images/employerprojectsimages/'.$filename;
            $cmpimage->project_id=$request->project_id;
            $cmpimage->save();

          return redirect()->back()
          ->with('success','image uploaded!');
      }


    }

    public function postDeletepicture(Request $request){


      $imagetodelete= Employerprojectimage::find($request->picture_id);

      $imagetodelete->delete();

      return redirect()->back()->with('success','The picture deleted successfully!');

    }

        public function postProjectview(Request $request){
           
           $project= Employerproject::where('id',$request->projectId)->get();
           $certified_valuer_obj= Employer::where('id',$project[0]->company_id)->get();
           $certified_valuer_names= $certified_valuer_obj[0]->first_name.' '.$certified_valuer_obj[0]->last_name;
           
           $project_images= Employerprojectimage::where('project_id',$request->projectId)->get();         
            
          
             
         
          
          
              

       return view('company.project_view',['project_images'=>$project_images])
                    ->with('title','Project View')
                    ->with('certified_valuer',$certified_valuer_obj)
                    ->with('certified_valuer_names',$certified_valuer_names)
                    ->with('certified_valuer_registration_no',$certified_valuer_obj[0]->reg_no_in_certified_valuers)
                    ->with('certified_valuer_telephone_number',$certified_valuer_obj[0]->telephone)
                    ->with('certified_valuer_professional_status',$certified_valuer_obj[0]->professional_status)
                    ->with('certified_valuer_reg_no', $certified_valuer_obj[0]->reg_no_in_certified_valuers)


                    ->with('plot_no',$project[0]->plot_no)
                    ->with('cell',$project[0]->cell)
                    ->with('sector',$project[0]->sector)
                    ->with('district',$project[0]->district)
                    ->with('province',$project[0]->province)
                    ->with('upi_no',$project[0]->upi_no)
                    ->with('owner',$project[0]->first_name.' '.$project[0]->last_name)
                    ->with('is_open_market_value',$project[0]->is_open_market_value)
                    ->with('is_forced_sale_value',$project[0]->is_forced_sale_value)
                    ->with('is_insurable_value',$project[0]->is_insurable_value)



                    ->with('campany_address',$certified_valuer_obj[0]->campany_address)
                    ->with('district',$certified_valuer_obj[0]->district)
                    ->with('sector',$certified_valuer_obj[0]->sector)
                    ->with('cell',$certified_valuer_obj[0]->cell)
                    ->with('village',$certified_valuer_obj[0]->village)

                    ->with('intended_use_id',$project[0]->intended_use_id)

                    ->with('physical_conditions',$project[0]->physical_conditions)

                    ->with('plot_no',$project[0]->plot_no)

                    ->with('is_tarmac_main_road',$project[0]->is_tarmac_main_road)
                    ->with('is_tertiary_tarmac_road',$project[0]->is_tertiary_tarmac_road)
                    ->with('is_storm_water',$project[0]->is_storm_water)
                    ->with('is__waste_water',$project[0]->is__waste_water)
                    ->with('is_power_supply',$project[0]->is_power_supply)
                    ->with('is_water_supply',$project[0]->is_water_supply)
                    ->with('is_fire_hydrant',$project[0]->is_fire_hydrant)
                    ->with('is_fiber_optic',$project[0]->is_fiber_optic)
                    ->with('is_public_transport',$project[0]->is_public_transport)
                    ->with('is_shopping_center',$project[0]->is_shopping_center)
                    ->with('is_nursery_school',$project[0]->is_nursery_school)
                    ->with('is_secondary_school',$project[0]->is_secondary_school)
                    ->with('is_university',$project[0]->is_university)
                    ->with('is_job_providers',$project[0]->is_job_providers)
                    ->with('is_sporting_facility',$project[0]->is_sporting_facility)
                    ->with('is_play_ground',$project[0]->is_play_ground)

                    ->with('area',$project[0]->area)
                    ->with('intended_use_id',$project[0]->intended_use_id)

                    ->with('construction_details_mainresidentials',$project[0]->construction_details_mainresidentials)
                    ->with('construction_details_annexes',$project[0]->construction_details_annexes)

                    ->with('cons_composition_details_mainresidentials',$project[0]->cons_composition_details_mainresidentials)
                    ->with('cons_composition_details_annexes',$project[0]->cons_composition_details_annexes)

                    ->with('professional_status',$certified_valuer_obj[0]->professional_status)
                    ->with('reg_no_in_certified_valuers',$certified_valuer_obj[0]->reg_no_in_certified_valuers)

                    ->with('category_property_id',$project[0]->category_property_id)









              ;
        }

}