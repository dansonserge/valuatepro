@extends('default.main')


@section('content')

   
<div class="row">

      <h3 class="title1">Situation/Location:</h3>

<label for="focusedinput" class="col-sm-12 control-label">Level of development is the area<br><p class="help-block"><i>Development determinant: </i></p></label>
				

                				
			
                <div class="row">
                    
               <table class="table table-hover">
                   <tr>
                       <th>N<sup>o</sup></th>
                       <th>Development determinent</th>
                       <th>Choose</th>
                      
                   </tr>

                   {{Form::open(array('url'=>'cmp/situationlocation'))}}
                   <tr>
                       <td>1.</td>
                       <td>Is there tarmac main road?</td>
                       <td>
        <input name="is_tarmac_main_road" type="checkbox" unchecked value="1" >       
                       </td>
                       </tr>
                       <tr>
                           <td>2.</td>
                           <td>Are there tertiary tarmac road?</td>
                           <td>
        <input name="is_tertiary_tarmac_road" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>3.</td>
                           <td>Is there storm water drainage facility in the interior of the area?</td>
                           <td>
        <input name="is_storm_water" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>4.</td>
                           <td>Is there waste water drainage facility in the area?</td>
                           <td>
        <input name="is__waste_water" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>5.</td>
                           <td> Is there power supply line?</td>
                           <td>
        <input name="is_power_supply" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>6.</td>
                           <td>Is there water supply line?</td>
                           <td>
        <input name="is_water_supply" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>7.</td>
                           <td>Are there fine hydrant terminals?</td>
                           <td>
        <input name="is_fire_hydrant" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>8.</td>
                           <td>Is there fiber optic line?</td>
                           <td>
        <input name="is_fiber_optic" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>9.</td>
                           <td>Is public transport adequate?</td>
                           <td>
        <input name="is_public_transport" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>10.</td>
                           <td>Is there a shopping center?</td>
                           <td>
        <input name="is_shopping_center" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>11.</td>
                           <td>Is there accessible nursey school on the area?</td>
                           <td>
        <input name="is_nursery_school" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>12.</td>
                           <td>Is there accessible secondary school in the area?</td>
                           <td>
        <input name="is_secondary_school" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>13.</td>
                           <td>Is there accessible university in the area?</td>
                           <td>
        <input name="is_university" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>14.</td>
                           <td>Is there big number job provider( factory, hotel, market etc)?</td>
                           <td>
        <input name="is_job_providers" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>15.</td>
                           <td> Are there sporting/ exercises facilities (gym)?</td>
                           <td>
        <input name="is_sporting_facility" type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       <tr>
                           <td>16.</td>
                           <td>Is there children play ground?</td>
                           <td>
        <input name="is_play_ground " type="checkbox" unchecked value="1" > 
                            </td>
                       </tr>

                       
               </table>
                </div>

               <div class="row" class="col-md-4 ">
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

                   {{Form::hidden('project_id',$projectId)}}

                   {{Form::close()}}
               </div>


			  </div>
	
@endsection