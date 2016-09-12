@if(Session::has('success'))
    
         <span class="alert alert-success notifications"> {!! Session::get('success') !!} </span>
         
       @endif

       @if(Session::has('warning'))
       
         <span class="alert alert-warning notifications"> {!! Session::get('warning') !!} </span>
       
       

       @endif

       @if(Session::has('error'))
                   <span class="alert alert-danger notifications"> {!! Session::get('error') !!} </span>
     
       

       @endif
       @if(Session::has('message'))
        <span class="alert alert-warning notifications"> {!! Session::get('message') !!}  </span>
       @endif


       @if($errors->has())
  <div class="alert alert-danger notifications">
     Please,Try again!
  </div>

@endif

