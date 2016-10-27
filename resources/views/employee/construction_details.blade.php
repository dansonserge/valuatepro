@extends('default.main')


@section('content')
    
<div class="row">

      <h3 class="title1">Construction details:</h3>

 <div class="row">

     {{Form::open(array('url'=>'emp/constructiondetails'))}}
          <div class="control-group">


                    <label for="focusedinput" class="control-label">Main residential house</label>
                    <div class="controls">
                    <div class="input-group">

     
                    <textarea name="constdet_mainres" cols="65" rows="5">
                      
                      @if(isset($construction_details_mainresidentials))
                       {{$construction_details_mainresidentials}}
                      @endif
                    </textarea>
                    </div><p class="help-block"><i>Please enter the main residential house details.</i></p>
                    </div>
     
         

 </div>
  <div class="row">
          <div class="control-group">
                    <label for="focusedinput" class="control-label">Annex</label>
                    <div class="controls">
                    <div class="input-group">

  
                    <textarea name="constdet_annex" cols="65" rows="5">
                      @if(isset($construction_details_annexes))
                       {{$construction_details_annexes}}
                      @endif
                    </textarea>
                    </div><p class="help-block"><i>Please enter the Annex details.</i></p>
                    </div>
                    </div>

                    {{Form::hidden('project_id',$projectId)}}

         
 <div class="row" class="col-md-4">
          <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
                 <a class="btn btn-primary next_section" href='{{URL::to("cmp/propertydetailsback/$projectId")}}'>
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 </a>

     <button class="btn btn-primary next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
        </div>
        <div class="col-sm-4">
        
        </div>
          
     {{Form::close()}}
 	 
 </div>
 </div>
 </div>
 </div>





@endsection