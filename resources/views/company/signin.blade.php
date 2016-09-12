@extends('default.main')

@section('content')

<div class="col-md-3"></div>
<div class="col-md-6">
  
  @include('common.login-error')
          <div class="form_header"><h2>Employer Account</h2></div>
           <div class="login">
           {!! Form::open(array('url'=>'cmp/signin')) !!} 
                 

                  

                    
                <div class="form-group input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
               {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'Email')) !!}
               
            </div>
            
 
            
             <div class="form-group input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>

               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
             </div>
            
            
            

            {!! Form::submit('Login', array('class'=>'btn btn-primary btn-block')) !!}

           {!! Form::close()!!}

            <p><a href="#">Forgot password?</a></p>
           </div>
  <a href="{{ URL::to('/')}}" class="">Home</a><br><br>
</div>
<div class="col-md-3"></div>

<br><br><br>

           
           @endsection
