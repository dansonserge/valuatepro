<?php
  if(!isset($projectId)){
    $projectId=0;
  }
?>
<div class=" sidebar" role="navigation">
  <div class="navbar-collapse">
   <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
     <ul class="nav" id="side-menu">
      <li>
        <a href="{{URL::to('cmp/index')}}" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
         </li>
          <li>
           <a ><i class="fa fa-check-square-o nav_icon"></i>Introduction<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li>
             <a class=" next_section" href='{{URL::to("cmp/newprojectback/$projectId")}}'>
             <i class=" fa fa-cogs nav_icon" aria-hidden="true"></i>Clients Identification
             </a>
                </li>
                <li>
             <a class=" next_section" href='{{URL::to("cmp/projectdescback/$projectId")}}'>
             <i class=" fa fa-cogs nav_icon" aria-hidden="true"></i>Project Description
             </a>
                </li>

              
              </ul>
              <!-- //nav-second-level -->
            </li>

            <li>
             <a class=" next_section" href='{{URL::to("cmp/executivesummaryback/$projectId")}}'>
             <i class=" fa fa-cogs nav_icon" aria-hidden="true"></i>Executive Summary
             </a>
            </li>

            <li>
             <a class=" next_section" href='{{URL::to("cmp/propertydetailsback/$projectId")}}'>
             <i class="fa fa-th-large nav_icon" aria-hidden="true"></i>Property Details
             </a>              
            </li>


            <li>
             <a class=" next_section" href='{{URL::to("cmp/constructiondetailsback/$projectId")}}'>
             <i class="fa fa-table nav_icon" aria-hidden="true"></i>Construction Details
             </a>
            </li>


            <li class="">
             <a class=" next_section" href='{{URL::to("cmp/situationlocationback/$projectId")}}'>
             <i class="fa fa-book nav_icon" aria-hidden="true"></i>Situation/Location 
             </a>
            </li>


            <li>              
              <a class=" next_section" href='{{URL::to("cmp/constructioncompositionback/$projectId")}}'>
              <i class="fa fa-file-text-o nav_icon" aria-hidden="true"></i>Construction Composition
              </a>
            </li>


            <li>     
             <a class=" next_section" href='{{URL::to("cmp/pictureuploadview/$projectId")}}'>
             <i class="fa fa-upload nav_icon" aria-hidden="true"></i>Picture Upload
             </a>
            </li>


            <li>
              <a href="#"><i class="fa fa-upload nav_icon"></i>Valuation </a>
            </li>

           <li>
              <a href="#"><i class="fa fa-upload nav_icon"></i>View whole project </a>
            </li>

          
          </ul>
          <!-- //sidebar-collapse -->
        </nav>
      </div>
    </div>
