@extends('default.main')


@section('content')
    
<div class="row">

      <h3 class="title1">Picture upload</h3>

  <table class="table table-hover">
    <tr>
  {{Form::open(array('url'=>'uploadpicture','files'=>true))}}
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
    {{Form::open(array('url'=>'cmp/deletepicture'))}}
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
        <div class="col-sm-4">
                <button class="btn btn-primary next_section" type="submit">
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 {{ Form::open(array('url'=>'cmp/projectview')) }}  
              
      {{Form::hidden('projectId',$projectId)}}

                   </button>
<button class="btn btn-primary next_section" type="submit">
                  Review whole project  <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>

      {{Form::close()}}             
        </div>
        <div class="col-sm-4">
        
        </div>
          {{ Form::close()}}
          </div>

@endsection