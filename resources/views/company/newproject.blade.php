
@extends('default.main')


@section('content')

@include('common.errors')

{{ Form::open(array('url'=>'cmp/projcust')) }} 
               {{ Form::hidden('_token', csrf_token() )  }}

              {{Form::hidden('company_id', auth()->guard('employers')->user()->id) }}

      <div class="signup-page">
        <h3 class="title1">Client Identification</h3>
        <p class="creating">Describe the owner of the property which you are going to valuate.</p>
        <div class="sign-up-row ">
          <h5>Client Information :</h5>
          <div class="sign-u">
            <div class="sign-up1">
              <h4>First Name* :</h4>
            </div>
            <div class="sign-up2">
              
                     {{ Form::text('first_name',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>$first_name))}}
              
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="sign-u">
            <div class="sign-up1">
              <h4>Last Name* :</h4>
            </div>
            <div class="sign-up2">
             
           {{ Form::text('last_name',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>$last_name))}}
             
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="sign-u">
            <div class="sign-up1">
              <h4>Email Address* :</h4>
            </div>
            <div class="sign-up2">
             
                 {{ Form::text('email',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>$email))}}
             
      
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="sign-u">
            <div class="sign-up1">
              <h4>Telephone Number* :</h4>
            </div>
            <div class="sign-up2">
             
                  {{ Form::text('telephone',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>$telephone))}}

             
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="sign-u">
            <div class="sign-up1">
              <h4>ID Card number* :</h4>
            </div>
            <div class="sign-up2">
              
                     {{ Form::text('id_card',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>$id_card))}}



                 <div class="row" class="col-md-4 ">
                <button class="btn btn-primary next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
          {{ Form::close()}}
          </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          
          </div>
      </div>
@endsection