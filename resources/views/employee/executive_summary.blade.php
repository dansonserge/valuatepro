
@extends('default.main')



@section('content')

@include('common.errors')
@include('common.notification')


{{ Form::open(array('url'=>'emp/projectexec')) }} 
               {{ Form::hidden('_token', csrf_token() )  }}

              {{Form::hidden('company_id', Auth::user()->company_id) }}
              {{Form::hidden('project_id', $projectId)}}

     
      <div class="signup-page">
         <h3 class="title1">Executive Summary</h3>
<div class="form-group row">
                
         <div class="col-md-6">
         <div class="myinput">
           
         </div>
           



                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Width</label>
                    <div class=" controls">
                    <div class="input-group">

                {{ Form::text('width',null,array('class'=>'form-control1 width', 'id'=>'focusedinput','placeholder'=>'Width'))}}

                    
                    </div><p class="help-block"><i>Please enter the width.</i></p>
                    </div>
                    </div> 




                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Height</label>
                    <div class="controls">
                    <div class="input-group">

                {{ Form::text('height',null,array('class'=>'form-control1 height', 'id'=>'focusedinput','placeholder'=>'Height'))}}

                    
                    </div><p class="help-block"><i>Please enter the height.</i></p>
                    </div>
                    </div>

                     <div class="control-group">
                    <label for="focusedinput" class="control-label">Area</label>
                    <div class="controls">
                    <div class="input-group">

                {{ Form::text('area',null,array('class'=>'form-control1 area', 'id'=>'focusedinput','placeholder'=> $area,'readonly'))}}


                    </div><p class="help-block"><i>Please enter the height.</i></p>
                    </div>
                    </div>
          
         </div>

          <div class="col-md-6">
         <div class="control-group">
                    <label for="focusedinput" class="control-label">The intended use</label>
                    <div class="controls">
                    <div class="input-group">

               {!! Form::select('intended_use_id',$intendeduses->lists('use_name','id'), null, array('class'=>'form-control', 'placeholder'=>'Intended use')) !!}


                    </div><p class="help-block"><i>Please select the intended use.</i></p>
                    </div>
                    </div> 
          <div class="control-group">
                    <label for="focusedinput" class="control-label">Physical condition</label>
                    <div class="controls">
                    <div class="input-group">

               <!--  {{ Form::textarea('width',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>'Area', 'rows'=>'10'))}}
 -->
                    <textarea name="physical_condition" cols="65" rows="5">
                      
                     @if(isset($physical_conditions))
                       {{$physical_conditions}}
                      @endif
                    </textarea>

                    </div><p class="help-block"><i>Please enter the physical condition of the property.</i></p>
                    </div>
                    </div>
          
         </div>
        
      </div>

      </div>
      <div class="row" class="col-md-4 ">
              <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
              
                 <a class="btn btn-primary next_section" href='{{URL::to("cmp/projectdescback/$projectId")}}'>
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 </a>

<button class="btn btn-primary next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
        </div>
        <div class="col-sm-4">
        
        </div>
          {{ Form::close()}}
          </div>

          <script type="text/javascript">
             $(function(){
             
                 $('.height').change(function(){
                var width=$('.width').val();
                var height=$('.height').val();
                var area=width*height;
                $('.area').val(area);
               
                 });

                  $('.width').change(function(){
                var width=$('.width').val();
                var height=$('.height').val();
                var area=width*height;
                $('.area').val(area);
               
                 });
                

            
             });

          </script>

   
@endsection