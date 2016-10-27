@extends('default.main')


@section('content')
    
<div class="row">

      <h3 class="title1">Picture upload</h3>

  <table class="table table-hover">
    <tr>
  {{Form::open(array('url'=>'euploadpicture','files'=>true))}}
      <td>
  {{Form::hidden('project_id',$projectId)}}

  {{ Form::file('image',null, array('class'=>'upload',
                       'placeholder'=>'Choose image'))}}
        
      </td>
      <td>
        
<button class="btn btn-primary next_section " type="submit">

            Add <i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
  </button>
      </td>
    
  {{Form::close()}}
    </tr>
  </table>




</div>
<div class="row">

@foreach($projectimages as $projectimage)
  <div class="col-md-4">
    {{Form::open(array('url'=>'emp/deletepicture'))}}
     {{Form::hidden('picture_id',$projectimage->id)}}
    
 <button class="btn delete_btn delete_pic"> <i class="fa fa-times fa-lg" aria-hidden="true"></i></button>

  {{Html::image($projectimage->image,null, array('class'=>'', 'style'=>'width:100%' ))}}

  {{Form::close()}}
  </div>
  @endforeach


</div>


      <div class="row" class="col-md-4 ">
              <div class="col-sm-4">
        
        </div>
{{ Form::open(array('url'=>'emp/valuationview')) }}  
              
      {{Form::hidden('projectId',$projectId)}}
        <div class="col-sm-4">
                <a class="btn btn-primary next_section" href='{{URL::to("emp/constructioncompositionback/$projectId")}}'>
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 

                   </a>


<button class="btn btn-primary next_section" type="submit">
                  Continue  <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>




      {{Form::close()}}             
        </div>
        <div class="col-sm-4">
        
        </div>
          {{ Form::close()}}
          </div>

@endsection