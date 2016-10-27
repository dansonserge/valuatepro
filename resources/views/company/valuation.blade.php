

@extends('default.main')

@section('content')
<div class="row">

      <h3 class="title1">Valuation page</h3>




 <a class="btn btn-primary next_section" href='{{URL::to("cmp/pictureuploadview/$projectId")}}'>
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 

                   </a>

 
</div>


{{ Form::open(array('url'=>'cmp/projectview')) }}  
              
      {{Form::hidden('projectId',$projectId)}}

<button class="btn btn-primary next_section" type="submit" >
                  View the whole project<i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>

@endsection








