@extends('default.main')

@section('content')



<div class="row">

      <h3 class="title1">Construction composition</h3>

</div>



<div class="row">

     {{Form::open(array('url'=>'cmp/constructioncomposition'))}}
          <div class="control-group">
                    <label for="focusedinput" class="control-label">Main residential house</label>
                    <div class="controls">
                    <div class="input-group">

     
                    <textarea name="compdet_mainres"  class="construction_comp" cols="65" rows="5">
                      @if(isset($cons_composition_details_mainresidentials))
                       {{$cons_composition_details_mainresidentials}}
                      @endif
                    </textarea>
                    </div><p class="help-block"><i>Please enter the main residential house composition details.</i></p>
                    </div>
     
         

 </div>
  <div class="row">
          <div class="control-group">
                    <label for="focusedinput" class="control-label">Annex</label>
                    <div class="controls">
                    <div class="input-group">

  
                    <textarea name="compdet_annex" class="construction_comp" cols="65" rows="5">
                      

                      @if(isset($cons_composition_details_annexes))
                       {{$cons_composition_details_annexes}}
                      @endif
                    </textarea>
                    </div><p class="help-block"><i>Please enter the Annex composition details.</i></p>
                    </div>
                    </div>

                    {{Form::hidden('project_id',$projectId)}}

         
 <div class="row" class="col-md-4">
          <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
    <a class="btn btn-primary next_section" href='{{URL::to("cmp/situationlocationback/$projectId")}}'>
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



@endsection