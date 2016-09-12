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

     
                    <textarea name="compdet_mainres" cols="65" rows="5"></textarea>
                    </div><p class="help-block"><i>Please enter the main residential house composition details.</i></p>
                    </div>
     
         

 </div>
  <div class="row">
          <div class="control-group">
                    <label for="focusedinput" class="control-label">Annex</label>
                    <div class="controls">
                    <div class="input-group">

  
                    <textarea name="compdet_annex" cols="65" rows="5"></textarea>
                    </div><p class="help-block"><i>Please enter the Annex composition details.</i></p>
                    </div>
                    </div>

                    {{Form::hidden('project_id',$projectId)}}

         
 <div class="row" class="col-md-4">
          <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
                <button class="btn btn-primary next_section" type="submit">
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back 
                   </button>
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