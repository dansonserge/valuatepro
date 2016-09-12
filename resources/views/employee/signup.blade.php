 @extends('default.main')


@section('content')

<div class="col-md-3">
  
</div>
<div class="col-md-6">
  
 <div class="signup-div">
           
           @include('common.errors');
            {!! Form::open(array('url'=>'emp/signup')) !!} 
               {!! Form::hidden('_token', csrf_token() )  !!}
             
                 <div class="col-md-12">

           
                 <fieldset>
                   <legend>Personal Information</legend>
                  <div class="form-group">
                      
               {!! Form::select('employer_id',$employer->lists('company_name','id'), null, array('class'=>'form-control', 'placeholder'=>'Company','div'=>'category')) !!}
                    </div>
                    

                    <div class="form-group">
                      
               {!! Form::text('first_name','',array('class'=>'form-control','placeholder'=>'First Name')) !!}
                    </div>
                    <div class="form-group">
                      
               {!! Form::text('last_name','',array('class'=>'form-control','placeholder'=>'Last Name')) !!}
                    </div>

                    <div class="form-group">
                      
               {!! Form::text('telephone','',array('class'=>'form-control','placeholder'=>'Telephone')) !!}
                    </div>


                    
                    
                    
                   
                 </fieldset>
                 </div>

                   <!-- <div class="col-md-4">
                    <fieldset>
                 <legend>Location</legend>
                  <div class="form-group">
                      
               {!! Form::select('province',array('Kigali'=>'Kigali','Northern Province'=>'Northern Province','Western Province'=>'Western Province'), null, array('class'=>'form-control', 'placeholder'=>'Province')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('district',array('Gasabo'=>'Gasabo','Kicukiro'=>'Kicukiro','Nyarugenge'=>'Nyarugenge'), null, array('class'=>'form-control', 'placeholder'=>'District')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('sector',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Sector')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('cell',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Cell')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('village',array('Kabuga'=>'Kabuga','Nyakabanda'=>'Nyakabanda','Kabeza'=>'Kabeza'), null, array('class'=>'form-control', 'placeholder'=>'Village')) !!}
                    </div>

                    
                    </fieldset>
                     
                   </div> -->
                   <div class="col-md-12">


                   <fieldset>
                     <legend>Email & Password</legend>
                     <div class="form-group">
                      
               {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'Email')) !!}
                    </div>
               
                   <div class="form-group">
               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
                    
                   </div>
                    <div class="form-group">
               {!! Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Confirm Password')) !!}
            </div>
                   </fieldset>
                     

                {!! Form::submit('Sign up', array('class'=>'btn btn-primary btn-block')) !!}

           {!! Form::close()!!}
                      <p>By signing up, you agree to our <b> Terms & Privacy Policy.</b></p>

                 </div>

                 
                   </div>
                   


           
                    



                    
		      
		        
		        
		        

		        
           </div>
</div>


<div class="col-md-3">
  
</div>
           @endsection