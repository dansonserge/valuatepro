
<!DOCTYPE HTML>
<html>
<head>
<title>ValuatePro | {{$title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->

{{Html::style('css/bootstrap.css')}}

<!-- Custom CSS -->
{{Html::style('css/dslayout.css')}}

<!-- font CSS -->
<!-- font-awesome icons -->
{{Html::style('css/font-awesome.css')}}

{{Html::script('js/jquery.min.js')}}



<!-- //font-awesome icons -->
 <!-- js-->
{{Html::script('js/modernizr.custom.js')}}


<!--webfonts-->
{{Html::style('//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic')}}

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">



<!--//webfonts--> 
<!--animate-->

{{Html::style('css/animate.css')}}
{{Html::script('js/wow.min.js')}}




  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!-- chart -->

{{Html::script('js/Chart.js')}}

<!-- //chart -->
<!--Calender-->

{{Html::script('js/underscore-min.js')}}
{{Html::script('js/moment-2.2.1.js')}}

{{Html::script('js/metisMenu.min.js')}}
{{Html::script('js/custom.js')}}
{{Html::style('css/custom.css')}}




<!--End Calender-->
<!-- Metis Menu -->


<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    <!-- @yield('side_bar') -->

@if($title=='Dashboard')

   @include('common.dashboard_sidebar')

@elseif($title=='Valuer Dashboard')

   @include('common.dashboard_sidebar_valuer')


   @else


   @include('common.sidebar')
@endif

    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
          <a href="index.html">
            <h1>ValuatePro</h1>
            <span>Make the right move</span>
          </a>
        </div>
        <div>
        @if(isset($projectId))
        {{$projectId}}
        @else
        {{0}}
        @endif
        </div>
        <!--//logo-->
        <!--search-box-->
<!--//end-search-box-->
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">

          <li class="dropdown head-dpdn">
              <a href="{{URL::to('/')}}" class="dropdown-toggle" ><i class="fa fa-home fa-lg"></i></a>
              
            </li>
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 3 completed Projected</h3>
                  </div>
                </li>
                <li><a href="#">
                   <div class="user_img">
                   {{Html::image('images/dbimg/user_default.png',null, array('class'=>'img-responsive'))}}
                   </div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                <li class="odd"><a href="#">
                  <div class="user_img">
                    {{Html::image('images/dbimg/user_default.png',null)}}
                  </div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                  <div class="clearfix"></div>  
                </a></li>
                <li><a href="#">
                   <div class="user_img">     {{Html::image('images/dbimg/user_default.png',null)}}</div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                <li>
                  <div class="notification_bottom">
                    <a href="#">View all Project</a>
                  </div> 
                </li>
              </ul>
            </li>
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 3 rejected Projects</h3>
                  </div>
                </li>
                <li><a href="#">
                  <div class="user_img">
                     {{Html::image('images/dbimg/user_default.png',null)}}
                  </div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 <li class="odd"><a href="#">
                  <div class="user_img">  
                  {{Html::image('images/dbimg/user_default.png',null)}}</div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                 </a></li>
                 <li><a href="#">
                  <div class="user_img">     
                  {{Html::image('images/dbimg/user_default.png',null)}}</div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                 </a></li>
                 <li>
                  <div class="notification_bottom">
                    <a href="#">See all rejected projected projects</a>
                  </div> 
                </li>
              </ul>
            </li> 
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 8 pending projects(Uncompleted)</h3>
                  </div>
                </li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Kicukiro/Kagarama</span><span class="percentage">40%</span>
                    <div class="clearfix"></div>  
                  </div>
                  <div class="progress progress-striped active">
                    <div class="bar yellow" style="width:40%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">kicukiro/niboyi</span><span class="percentage">90%</span>
                     <div class="clearfix"></div> 
                  </div>
                  <div class="progress progress-striped active">
                     <div class="bar green" style="width:90%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Nyarugenge/Nyamirambo</span><span class="percentage">33%</span>
                    <div class="clearfix"></div>  
                  </div>
                   <div class="progress progress-striped active">
                     <div class="bar red" style="width: 33%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Gasabo/Kacyiru</span><span class="percentage">80%</span>
                     <div class="clearfix"></div> 
                  </div>
                  <div class="progress progress-striped active">
                     <div class="bar  blue" style="width: 80%;"></div>
                  </div>
                </a></li>
                <li>
                  <div class="notification_bottom">
                    <a href="#">See all pending Projects</a>
                  </div> 
                </li>
              </ul>
            </li> 
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">   
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"> 

                  
                  {{Html::image('images/dbimg/christian.jpg',null)}} 
                  
                  </span> 
                  <div class="user-name">
                    <p> 
                        @if(auth()->guard('employers')->check())

                        {{auth()->guard('employers')->user()->first_name}} 
                        @endif
                         @if(Auth::check())
                         {{Auth::user()->first_name}}
                          @endif

                      
                    </p>

                    <span>
                       @if(auth()->guard('employers')->check())

                 
                    Certified Valuer
                    @endif
                     @if(Auth::check())
                     {{Auth::user()->last_name}}
                      @endif
                    </span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
              @if(auth()->guard('employers')->check())
                <li> <a href="{{URL::to('cmp/logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                @endif
                @if(Auth::check())
                       <li> <a href="{{URL::to('emp/logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
               @endif
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      


@yield('content')


    <!--footer-->
    
        <!--//footer-->
  </div>
  <!-- Classie -->
  <div class="footer">
       <p>&copy; 2016 ValuatePro. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Chris & Danson</a></p>
    </div>
{{Html::script('js/classie.js')}}


    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->

{{Html::script('js/jquery.nicescroll.js')}}
  
{{Html::script('js/scripts.js')}}





  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
{{Html::script('js/bootstrap.js')}}

</body>
</html>