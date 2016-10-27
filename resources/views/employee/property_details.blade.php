<?php 
$x=0;
$y=0;
?>
@extends('default.main')



@section('content')



<div class="row">

      <h3 class="title1">Property Details:</h3>

      <div class="col-sm-12">
        <div class="col-sm-6">
      <table>
      <tr>
      <td>
        <label for="focusedinput" class="col-sm-2 control-label">Plot</label>
      </td>
      <td>
        <div class="col-sm-4">
               {{$area}}
        </div>
      </td> 
      </tr>
      </table>
      </div>

      <div class="col-sm-6">

      <table>
        <tr>
          <td>
            <label for="focusedinput" class=" control-label">Current Year</label>
          </td>
          <td>
            <div class="col-sm-4">
                {{$current_year}}
              
            </div>
          </td>
        </tr>
      </table>

      </div>

      </div>
       

     <hr><hr>
   
    <div class="col-md-6 mainresidentialborder">
        <div class="">
        
          <table class="table table-hover">
            <tr >
                <th>Main residential</th>
                <th>Construction Year</th>
              <th>Area</th>

            </tr>

           @foreach($mainresidentials as $mainresidential)
              
            <tr>
              <td>Main residential 
              <?php
                 $x++;
              echo $x;
               ?>
              </td>
              <td>{{$mainresidential->construction_year}}</td>
              <td>{{$mainresidential->area}}</td>

              <td>
               {{ Form::open(array('url'=>'emp/mainresidentialdelete')) }} 
               {{ Form::hidden('mainresidential_id', $mainresidential->id )  }}
               {{ Form::hidden('project_id', $mainresidential->project_id )  }}
               <input type="submit" hidden class="delegte_btn">

  <button class="btn btn-danger delete_btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
               {{ Form::close()}}

            </td>
            </tr>
            @endforeach
          </table>
  

<a class="btn btn-primary next_section add-mainresidential">
                    Add <i class="fa fa-plus-circle fa-lg add-mainresidential" aria-hidden="true"></i>
                   </a>
        </div>

    </div>
     <div class="col-md-6">

     <div class="">
        
          <table class="table table-hover">
            <tr >
                <th>Annex</th>
                <th>Construction Year</th>
                <th>Area</th>

            </tr>

           @foreach($annexes as $annex)
              
            <tr>
              <td>Annex 
              <?php
                 $y++;
              echo $y;
               ?>
              </td>
              <td>{{$annex->construction_year}}</td>
              <td>{{$annex->area}}</td>
              <td>
               {{ Form::open(array('url'=>'emp/annexdelete')) }} 
               {{ Form::hidden('annex_id', $annex->id )  }}
               {{ Form::hidden('project_id', $annex->project_id )  }}
               <input type="submit" hidden class="delegte_btn">

  <button class="btn btn-danger delete_btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
               {{ Form::close()}}

    </td>
            </tr>
            @endforeach
          </table>
  

                  <a class="btn btn-primary next_section add-annex">
                    Add <i class="fa fa-plus-circle fa-lg add-annex" aria-hidden="true"></i>
                   </a>
        </div>
      
    </div>

</div>


        <div class="row" class="col-md-4 ">
 
                  {{Form::open(array('url'=>'emp/constructiondetailsview')) }} 
                   {{Form::hidden('projectid',$projectId)}}
                        <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">

                 <a class="btn btn-primary next_section" href='{{URL::to("emp/executivesummaryback/$projectId")}}'>
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



<div class="modal fade" tabindex="-1" role="dialog" id="main_residential_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Main residential</h4>
      </div>
      <div class="modal-body">
         
            

                    {{ Form::open(array('url'=>'emp/addmainresidential')) }} 


                      <label for="focusedinput" class="control-label">Construction Year</label>
                      <div class="controls">
                      <div class="input-group">

                     {{ Form::text('construction_year',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>' Construction year '))}}
                      </div><p class="help-block"><i>ex:write when the Main residential house was constructed</i></p>
                      </div>


                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Width</label>
                    <div class=" controls">
                    <div class="input-group">

                {{ Form::text('width',null,array('class'=>'form-control1 width', 'id'=>'focusedinput','placeholder'=>'Width'))}}

                    
                    </div><p class="help-block"><i>Please enter the width.</i></p>
                    </div>
                    </div> 




                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Height</label>
                    <div class="controls">
                    <div class="input-group">

                {{ Form::text('height',null,array('class'=>'form-control1 height', 'id'=>'focusedinput','placeholder'=>'Height'))}}

                    
                    </div><p class="help-block"><i>Please enter the height.</i></p>
                    </div>
                    </div>

                     <div class="control-group">
                    <label for="focusedinput" class="control-label">Area</label>
                    <div class="controls">
                    <div class="input-group">
                
               

                {{ Form::text('area',null,array('class'=>'form-control1 area', 'id'=>'focusedinput','placeholder'=>'Area','readonly'))}}

                    
                    </div><p class="help-block"><i>The area of the main residential.</i></p>
                    </div>
                    </div>
          
          
         </div>
         

          <script type="text/javascript">
             $(function(){
             
                 $('.height').change(function(){
                var width=$('.width').val();
                var height=$('.height').val();
                var area=width*height;
                $('.area').val(area);
               
                 });

                  $('.width').change(function(){
                var width=$('.width').val();
                var height=$('.height').val();
                var area=width*height;
                $('.area').val(area);
               
                 });
                
              
            
             });

          </script>

   



               {{ Form::hidden('_token', csrf_token() )  }}
               {{ Form::hidden('project_id', $projectId )  }}

                
              


      <div class="modal-footer">
     
         <button class="btn btn-primary btn-block next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
               {{ Form::close()}}

       </div>

         
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<div class="modal fade" tabindex="-1" role="dialog" id="annex_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Annex</h4>
      </div>
      <div class="modal-body">
         
            

                    {{ Form::open(array('url'=>'emp/addannex')) }} 



                     <label for="focusedinput" class="control-label">Construction Year</label>
                      <div class="controls">
                      <div class="input-group">
                     {{ Form::text('construction_year',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>' Construction year '))}}
                          </div><p class="help-block"><i>ex:write when the Annex was constructed</i></p>
                          </div>

                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Width</label>
                    <div class=" controls">
                    <div class="input-group">

                {{ Form::text('width',null,array('class'=>'form-control1 width1', 'id'=>'focusedinput','placeholder'=>'Width'))}}

                    
                    </div><p class="help-block"><i>Please enter the width.</i></p>
                    </div>
                    </div> 




                    <div class="control-group">
                    <label for="focusedinput" class="control-label">Height</label>
                    <div class="controls">
                    <div class="input-group">

                {{ Form::text('height',null,array('class'=>'form-control1 height1', 'id'=>'focusedinput','placeholder'=>'Height'))}}

                    
                    </div><p class="help-block"><i>Please enter the height.</i></p>
                    </div>
                    </div>

                     <div class="control-group">
                    <label for="focusedinput" class="control-label">Area</label>
                    <div class="controls">
                    <div class="input-group">
                
               

                {{ Form::text('area',null,array('class'=>'form-control1 area1', 'id'=>'focusedinput','placeholder'=>'Area','readonly'))}}

                    
                    </div><p class="help-block"><i>The area of the main residential.</i></p>
                    </div>
                    </div>
          
          
         </div>
         

          <script type="text/javascript">
             $(function(){
             
                 $('.height1').change(function(){
                var width=$('.width1').val();
                var height=$('.height1').val();
                var area=width*height;
                $('.area1').val(area);
               
                 });

                  $('.width1').change(function(){
                var width=$('.width1').val();
                var height=$('.height1').val();
                var area=width*height;
                $('.area1').val(area);
               
                 });
                
              
            
             });

          </script>

   


   



               {{ Form::hidden('_token', csrf_token() )  }}
               {{ Form::hidden('project_id', $projectId )  }}

                
              

             


         
   <div class="modal-footer">
     
         <button class="btn btn-primary btn-block next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
               {{ Form::close()}}
 
       </div>

   

       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->













@endsection