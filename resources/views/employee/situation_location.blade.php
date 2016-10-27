@extends('default.main')


@section('content')

   
<div class="row">

      <h3 class="title1">Situation/Location:</h3>

<label for="focusedinput" class="col-sm-12 control-label">Level of development is the area<br><p class="help-block"><i>Development determinant: </i></p></label>
				

                				     {{Form::open(array('url'=>'emp/situationlocation'))}}
			
                <div class="row">

                   <label for="focusedinput" class="col-sm-2 control-label">Unit Price</label>
                   <div class="col-sm-4">
                    {{ Form::text('unit_price',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>' land Unit Price '))}}
                       <p class="help-block"><i>ex:write the land unit price in that region</i></p>
                   </div> 
                   


                    
               <table class="table table-hover">
                   <tr>
                       <th>N<sup>o</sup></th>
                       <th>Development determinent</th>
                       <th>Choose</th>
                      
                   </tr>

              
                   <tr>
                       <td>1.</td>
                       <td>Is there tarmac main road?</td>
                       <td>

 @if(isset($is_tarmac_main_road))
 @if($is_tarmac_main_road=='1')
 <input name="is_tarmac_main_road" type="checkbox" checked value="1" >                        @endif
 @if($is_tarmac_main_road=='0')
 <input name="is_tarmac_main_road" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_tarmac_main_road" type="checkbox" unchecked value="1" > 
 @endif      
                       </td>
                       </tr>
                       <tr>
                           <td>2.</td>
                           <td>Are there tertiary tarmac road?</td>
                           <td>


 @if(isset($is_tertiary_tarmac_road))
 @if($is_tertiary_tarmac_road=='1')
 <input name="is_tertiary_tarmac_road" type="checkbox" checked value="1" >                        @endif
 @if($is_tertiary_tarmac_road=='0')
 <input name="is_tertiary_tarmac_road" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_tertiary_tarmac_road" type="checkbox" unchecked value="1" > 
 @endif         
                            </td>
                       </tr>

                       <tr>
                           <td>3.</td>
                           <td>Is there storm water drainage facility in the interior of the area?</td>
                           <td>
       
 @if(isset($is_storm_water))
 @if($is_storm_water=='1')
 <input name="is_storm_water" type="checkbox" checked value="1" >
 @endif
 @if($is_storm_water=='0')
 <input name="is_storm_water" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_storm_water" type="checkbox" unchecked value="1" > 
 @endif     

                            </td>
                       </tr>

                       <tr>
                           <td>4.</td>
                           <td>Is there waste water drainage facility in the area?</td>
                           <td>
        
 @if(isset($is__waste_water))
 @if($is__waste_water=='1')
 <input name="is__waste_water" type="checkbox" checked value="1" >
 @endif
 @if($is__waste_water=='0')
 <input name="is__waste_water" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is__waste_water" type="checkbox" unchecked value="1" > 
 @endif 

                            </td>
                       </tr>

                       <tr>
                           <td>5.</td>
                           <td> Is there power supply line?</td>
                           <td>
    
 @if(isset($is_power_supply))
 @if($is_power_supply=='1')
 <input name="is_power_supply" type="checkbox" checked value="1" >
 @endif
 @if($is_power_supply=='0')
 <input name="is_power_supply" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_power_supply" type="checkbox" unchecked value="1" > 
 @endif        
                            </td>
                       </tr>

                       <tr>
                           <td>6.</td>
                           <td>Is there water supply line?</td>
                           <td>
       

 @if(isset($is_water_supply))
 @if($is_water_supply=='1')
 <input name="is_water_supply" type="checkbox" checked value="1" >
 @endif
 @if($is_water_supply=='0')
 <input name="is_water_supply" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_water_supply" type="checkbox" unchecked value="1" > 
 @endif           
                            </td>
                       </tr>

                       <tr>
                           <td>7.</td>
                           <td>Are there fine hydrant terminals?</td>
                           <td>
        

 @if(isset($is_fire_hydrant))
 @if($is_fire_hydrant=='1')
 <input name="is_fire_hydrant" type="checkbox" checked value="1" >
 @endif
 @if($is_fire_hydrant=='0')
 <input name="is_fire_hydrant" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_fire_hydrant" type="checkbox" unchecked value="1" > 
 @endif          
                            </td>
                       </tr>

                       <tr>
                           <td>8.</td>
                           <td>Is there fiber optic line?</td>
                           <td>
        

 @if(isset($is_fiber_optic))
 @if($is_fiber_optic=='1')
 <input name="is_fiber_optic" type="checkbox" checked value="1" >
 @endif
 @if($is_fiber_optic=='0')
 <input name="is_fiber_optic" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_fiber_optic" type="checkbox" unchecked value="1" > 
 @endif          

                            </td>
                       </tr>

                       <tr>
                           <td>9.</td>
                           <td>Is public transport adequate?</td>
                           <td>

 @if(isset($is_public_transport))
 @if($is_public_transport=='1')
 <input name="is_public_transport" type="checkbox" checked value="1" >
 @endif
 @if($is_public_transport=='0')
 <input name="is_public_transport" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_public_transport" type="checkbox" unchecked value="1" > 
 @endif               
                </td>
                       </tr>

                       <tr>
                           <td>10.</td>
                           <td>Is there a shopping center?</td>
                           <td>
      

 @if(isset($is_shopping_center))
 @if($is_shopping_center=='1')
 <input name="is_shopping_center" type="checkbox" checked value="1" >
 @endif
 @if($is_shopping_center=='0')
 <input name="is_shopping_center" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_shopping_center" type="checkbox" unchecked value="1" > 
 @endif 

                            </td>
                       </tr>

                       <tr>
                           <td>11.</td>
                           <td>Is there accessible nursey school on the area?</td>
                           <td>
     
 @if(isset($is_nursery_school))
 @if($is_nursery_school=='1')
 <input name="is_nursery_school" type="checkbox" checked value="1" >
 @endif
 @if($is_nursery_school=='0')
 <input name="is_nursery_school" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_nursery_school" type="checkbox" unchecked value="1" > 
 @endif         
                            </td>
                       </tr>

                       <tr>
                           <td>12.</td>
                           <td>Is there accessible secondary school in the area?</td>
                           <td>
     

 @if(isset($is_secondary_school))
 @if($is_secondary_school=='1')
 <input name="is_secondary_school" type="checkbox" checked value="1" >
 @endif
 @if($is_secondary_school=='0')
 <input name="is_secondary_school" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_secondary_school" type="checkbox" unchecked value="1" > 
 @endif         
                            </td>
                       </tr>

                       <tr>
                           <td>13.</td>
                           <td>Is there accessible university in the area?</td>
                           <td>
        

 @if(isset($is_university))
 @if($is_university=='1')
 <input name="is_university" type="checkbox" checked value="1" >
 @endif
 @if($is_university=='0')
 <input name="is_university" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_university" type="checkbox" unchecked value="1" > 
 @endif         

                            </td>
                       </tr>

                       <tr>
                           <td>14.</td>
                           <td>Is there big number job provider( factory, hotel, market etc)?</td>
                           <td>
       

 @if(isset($is_job_providers))
 @if($is_job_providers=='1')
 <input name="is_job_providers" type="checkbox" checked value="1" >
 @endif
 @if($is_job_providers=='0')
 <input name="is_job_providers" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_job_providers" type="checkbox" unchecked value="1" > 
 @endif            
                            </td>
                       </tr>

                       <tr>
                           <td>15.</td>
                           <td> Are there sporting/ exercises facilities (gym)?</td>
                           <td>
        

 @if(isset($is_sporting_facility))
 @if($is_sporting_facility=='1')
 <input name="is_sporting_facility" type="checkbox" checked value="1" >
 @endif
 @if($is_sporting_facility=='0')
 <input name="is_sporting_facility" type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_sporting_facility" type="checkbox" unchecked value="1" > 
 @endif            
                                     </td>
                       </tr>

                       <tr>
                           <td>16.</td>
                           <td>Is there children play ground?</td>
                           <td>
    
 @if(isset($is_play_ground ))
 @if($is_play_ground =='1')
 <input name="is_play_ground " type="checkbox" checked value="1" >
 @endif
 @if($is_play_ground =='0')
 <input name="is_play_ground " type="checkbox" unchecked value="1" >       
 @endif                 
 @else
 <input name="is_play_ground " type="checkbox" unchecked value="1" > 
 @endif            

                            </td>
                       </tr>

                       
               </table>
                </div>

               <div class="row" class="col-md-4 ">
                           <div class="col-sm-4">
        
        </div>
        <div class="col-sm-4">
                <a class="btn btn-primary next_section" href='{{URL::to("emp/constructiondetailsback/$projectId")}}'>
                 <i class=" fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>  Back
                 </a>
<button class="btn btn-primary next_section" type="submit">
                    Continue <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i>
                   </button>
        </div>
        <div class="col-sm-4">
        
        </div>

                   {{Form::hidden('project_id',$projectId)}}

                   {{Form::close()}}
               </div>


			  </div>
	
@endsection