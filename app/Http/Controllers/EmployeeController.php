<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Employee;
use Auth;
class EmployeeController extends Controller
{
protected $guard = 'employees';
	public function getIndex(){
		return view('employee.index')->with('title','Valuator Account');
	}
    public function getSignupview(){

    	$employer= new Employer;
    	return view('employee.signup',['employer'=>$employer])->with('title','Valuator Subscription');
    }

    public function postSignup(Request $request){
       $validation=Employee::validate($request->all());

      if($validation->fails()){ 
        
          return redirect()->back()
          ->withErrors($validation->errors())
         
         ->withInput();
      }

      else{



         $employee=new Employee;

        $employee->employer_id=$request->employer_id;
        $employee->first_name= $request->first_name;
        $employee->last_name= $request->last_name;
        $employee->telephone= $request->telephone;
        
       /* $employee->province= $request->province;
        $employee->district= $request->district;
        $employee->sector= $request->sector;
        $employee->cell= $request->cell;
        $employee->village= $request->village;*/
        

        

        $employee->email = $request->email;
        $employee->password= Hash::make($request->password);
        $employee->save();
        Auth::login($employee);
        return redirect('employer/dashboard')
        ->with('success','Welcome to ValuatePro');
        
     }
  }
   public function getSigninview(){
   	return view('employee.signin')->with('title','Valuator Login');

   }


   public function postSignin(Request $request){
   	 if(  Auth::attempt(array('email'=>$request->email,'password'=>$request->password))){

            return redirect('emp/index')->with('success','Successfully signed in');
         }
        else {
               return redirect()->back()->with('login-error','Your Email or Password is not correct,try again!');
             }

   }
  public function getLogout(){
    Auth::logout();
    return redirect('/');
  }



}