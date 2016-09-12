@extends('default.main')
@section('content')

@include('common.notification')

<div class="tester">

{{Auth::user()->first_name}}<br>
{{Auth::user()->last_name}}<br>
{{Auth::user()->email}}<br>

	
</div>

<h2>Valuator Dashboard</h2>
  <a href="{{ URL::to('empp/newproject')}}" class="">Create a new Project</a>


<hr>   

  <a href="{{ URL::to('emp/logout')}}" class="">Valuator Logout</a>  <br><br>


  <a href="{{ URL::to('/')}}" class="">Home</a>

@endsection