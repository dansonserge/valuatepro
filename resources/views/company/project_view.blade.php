


@extends('default.main')
@section('content')

  <div class="signup-page">
        
<div class="cover_page">
	

         <h3 class="title1">PROJECT VIEW</h3>
         <div class="row">
         	
   <div class="certified_valuer_details col-md-2">
	    <p> {{$certified_valuer_names}} <br>
	        {{$certified_valuer_registration_no}}<br>
	        {{$certified_valuer_telephone_number}}
	    </p>
   </div>
         </div>
   


   	<div class="row ribbon">
   		
	            <p>
	       	        PROPERTY VALUATION OF PLOT NO {{$plot_no}} LOCATED IN,<br>
			        {{$cell}} CELL,{{$sector}} SECTOR,{{$district}} DISTRICT, {{$province}} 

			        @if($province=='kigali')
			        city
			        @else
			        province
			        @endif

	            </p>

	            <p>
	            	UPI NO: {{$upi_no}} <br>
	            	OWNER : {{$owner}}
	            </p>

     </div>
          
</div>
    
       <div class="table_content">

       <h3>TABLE OF CONTENTS</h3>
			         <ol>
					            <li>Introduction</li>
					            <li>Executive summary</li>
					            <li>Term and reference</li>
					            <li>Limit conditions</li>

					            <li>Date inspection</li>
					            <li>Situation/Location</li>

					            <li>Tenure and Ownership</li>

					            <li>Improvements/Development</li>

					            <li>Valuation</li>

					            <li>Valuation certification</li>
			          </ol>

       </div>  


       <div class="page-content">
          <h3>0.0 INTRODUCTION</h3>
       	     <h5>Aim of property valuation</h5>
                 
     <p>
     	 
   As requested by <b>{{$owner}}</b>, to carry out a servey / Valuation of his property in
    <b>{{$upi_no}}</b>, located in
<b>{{$cell}}</b> CELL,<b>{{$sector}} </b>SECTOR,<b>{{$district}} </b>DISTRICT,
 <b>{{$province}} </b>@if($province=='kigali')
			        city
			        @else
			        province
			        @endif, on 16th May 2016, we conducted the site/field survey 
			        together with the client for data collection
			        leading to this final report. <b>{{$owner}}</b>, needs to know 
			        the actual value for his property located in <b>{{$upi_no}}</b>, localted in
<b>{{$cell}}</b> CELL,<b>{{$sector}} </b>SECTOR,<b>{{$district}} </b>DISTRICT,
 <b>{{$province}} </b>@if($province=='kigali')
			        city
			        @else
			        province
			        @endif .


     </p>

     <p>
     	After expressing the idea he assigned me to prepate for hom the valuation report and to advise 
     	on the following:<br>

    @if($is_open_market_value==1)
      - Open market value<br>
    @endif

    @if($is_forced_sale_value==1)
      - Forced sale value<br>
    @endif

    @if($is_insurable_value==1)
      - Insurable value<br>
    @endif
    </p>
    <p>
    	
    Therefore this valuation report establishes:
    <ul>
    	<li>
    		Residential House
    	</li>
    	<li>
    		Annex
    	</li>
    	<li>
    		The current(price) of the land
    	</li>
    </ul>
    </p>
    <p>
    	<h5>THE VALUER</h5>
    	<b>Names: {{$certified_valuer_names}}</b><br>

    	<b>Proffesional status:{{$certified_valuer_professional_status}}</b><br>
    	<b>Institute of real property Valuers-Rwanda</b><br>
    	<b>Registration number in certificated in Certified Valuers Register: {{$certified_valuer_reg_no}}</b><br>
    	Address:<br>
    	Tel:
    	    {{$certified_valuer_telephone_number}}


    </p>



       </div>
      

      <div class="page-content">
          <h3>1.0 Executive summary</h3>
       	


       </div>
       <div class="page-content">
          <h3>2.0 Term and reference</h3>
       	


       </div>
       <div class="page-content">
          <h3>3.0 Limit conditions</h3>
       	


       </div>

       <div class="page-content">
          <h3>4.0 Date inspection</h3>
       	


       </div><div class="page-content">
          <h3>5.0 Situation/Location</h3>
       	


       </div>
       <div class="page-content">
          <h3>6.0 Situation/Location</h3>
       	


       </div>
       <div class="page-content">
          <h3>7.0 Tenure and Ownership</h3>
       	


       </div>
       <div class="page-content">
          <h3>8.0 Valuation</h3>
       	


       </div>
       <div class="page-content">
          <h3>9.0 Valuation certification</h3>
       	
      

       </div>





            </br>
            </br>

             <h3>1.0 EXECUTIVE SUMMARY</h3>
			<table class="table table-bordered table-sm">

				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Name of Valuer</td>
				      <td>Mr. {{$certified_valuer_names}} </td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Qualification</td>
				      <td>Certified Valuer</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Registration</td>
				      <td>N<sup><b>o</b></sup> of registration : {{$certified_valuer_registration_no}}</td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Address</td>
				      <td>Office : {{$district}}, {{$sector}}, {{$cell}}, {{$village}}, {{$campany_address}} </td>
				    </tr>
				  </tbody>
            </table>


             </br>
            </br>

			<table class="table table-bordered table-sm">

				  <tbody>
				    <tr>
				      <td>Valuation report number : <b>confused about that number!</b></td>
				      
				      <td colspan="2">Date: <b>{{$created_time}}</b> </td>
				    </tr>
				    <tr>
				      <td rowspan="2"></br>Property Identification</td>
				      <td>Category of The Property</td>
				      <td>
				      <b>
						@if($category_property_id=='1')
				        High standard
				        @elseif($category_property_id=='2')
				        Medium standard
				        @else
				        Low Medium
				        @endif
			            </b>.
				      </td>
				    </tr>
				    <tr>
				      <td>The intended use</td>
				      <td><b>
						@if($intended_use_id=='1')
				        Residential
				        @else
				        Commercial
				        @endif
			            </b>.
			            </td>
				    </tr>
				    <tr>
				      <td rowspan="2"></br>Location</td>
				      <td colspan="2">Category of The Property</td>
				      
				    </tr>
				    <tr>
				      <td colspan="2">Location {{$cell}} CELL,{{$sector}} SECTOR,{{$district}} DISTRICT, {{$province}} @if($province=='kigali')
			        city
			        @else
			        province
			        @endif</td>
				      
				    </tr>

				    <tr>
				      <td></br>Physical conditions of the property</td>
				      
				      <td colspan="2">The Property is in the following conditions:
				      </br>{{$physical_conditions}}
                      </td>
				    </tr>

				    <tr>
				      <td>Ownership</td>
				      
				      <td colspan="2">Owned by: <b>{{$certified_valuer_names}} </b> </td>
				    </tr>

				    <tr>
				      <td>Established Values</td>
				      
				      <td colspan="2"><b>Open Market Value: Rwf...</b></br>
				      <b>Forced Sale Value: Rwf...</b></br>
				      <b>insurance Value: Rwf...</b>
				       </td>
				    </tr>

				  </tbody>
            </table>
            <p><b>Prepared by Mr. {{$certified_valuer_names}} </b></p>
            </br>


             <h3>2.0 TERMS OF REFERENCE</h3>
             </br>
             <p>Further instructions on the 16<sup>th</sup> May 2016 by {{$certified_valuer_names}}, We inspected the above surveyed property with the view of advising on its Open Market Value and accordingly submit our report and valuation as follows.</p>
             <h5><u>Definition of Value</u></h5>
             <p>The <b>Open Market Value</b> means the best price at which the sale of an interest in a property might reasonably be expected to have been completed unconditionally for cash consideration on the date of assessment, assuming;
             </p>
             <ol>
             	<li>A willing seller;</li>
             	<li>That, prior to the date of assessment, there had been a reasonable period for proper marketing of the property for the agreement of the price and the terms and for the completion of the sale;</li>
             	<li>That the state of the market, level of values and other circumstances were, on any earlier assumed date of exchange of contracts, the same as on the date of assessment;</li>
             	<li>That no account is taken of any additional bid by a purchaser with a special interest</li>
             </ol>
             <p>The <b>Forced Sale Value</b> is the price at which the property might reasonably be expected to sell, subject to a limited and defined period for sale</p>
             </br>

             <h3>3.0 Limiting Conditions</h3>
             </br>
             <b>This report and valuation is subject to the following limiting conditions:</b>
             <ol>
             	<li>Neither the whole nor any part of this Report and valuation or any reference to it may be included in any published document, circular or statement and nor may it be published in any way without the prior written approval of the Company of the form and context in which it may appear.</li>
             	<li>Where it is stated in the report that information has been supplied to the Company by another party, this information is believed to reliable but the Company can accept no responsibility if this should prove not to be so. Where information is given without being</li>
             	<li>Attributed directly to another party, this information has been obtained by our search of records and examination of documents or by enquiry from government or other appropriate departments.</li>
             	<li>The responsibility of the company in connection with this report and valuation is limited to {{$certified_valuer_names}} to whom the report is addressed.</li>
             	<li>The values assessed in this report are for the subject property and any allocation of values between parts of the property apply only in the terms, and for the purpose, of this report. the assessed should not be used in conjuction with any other assessment, as they may prove incorrect if so used.</li>
             	<li>Whilst due care is taken to note significant building defects in the course of our inspection, this is a report and valuation and not a structural survey and on guarantee is given in respect of rot, termite, pest infestation or other defects whether exposed of unexposed.</li>
             	<li>Where Open Market Values are assessed, they reflect the full contract value and noaccount is taken of any liability for taxation on sale or of the costs involved in effecting a sale.</li>
             	<li>The Valuation is only valid if in original and without alteration and signed and stamped. We do not guarantee the validity or authenticity of any copies that may be presented to any person, organisation or entity as being made from the original.</li>
             </ol>
             </br>

             <h3>4.0 Date of Inspection</h3>
             The property was inspected for valuation purpose on the 16<sup>th</sup> May, 2016.
             </br>
             <h3>5.0 Situation/Location</h3>
             The Property is located on Plot <b>N<sup>o</sup>: {{$plot_no}} </b> in: <b> {{$cell}} CELL,{{$sector}} SECTOR,{{$district}} DISTRICT, {{$province}} @if($province=='kigali')
			        city
			        @else
			        province
			        @endif
            </b>

            <h5>Level of development is the area</h5>
            There is more development in the area. The following is the actual situation:

            <div class="table-responsive">
				  <table class="table table-bordered">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Development determinant</th>
					      <th>Yes</th>
					      <th>No</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Is there tarmac main road?</td>
					      <td>   @if($is_tarmac_main_road=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
			              </td>
					      <td>
					      	@if($is_tarmac_main_road=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Are there tertiary tarmac roads?</td>
					      <td> @if($is_tertiary_tarmac_road=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
						  </td>
					      <td>
					      	@if($is_tertiary_tarmac_road=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Is there storm water drainage facility in the interior of the area?</td>
					      <td>
					      	 @if($is_storm_water=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_storm_water=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td>Is there waste water drainage facility in the area?</td>
					      <td>
					      	 @if($is__waste_water=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is__waste_water=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">5</th>
					      <td>Is there Power supply line?</td>
					      <td>
					      	 @if($is_power_supply=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_power_supply=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">6</th>
					      <td>Is there water supply line?</td>
					      <td>
					      	 @if($is_water_supply=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_water_supply=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">7</th>
					      <td>Are there fire hydrant terminals?</td>
					      <td>
					      	 @if($is_fire_hydrant=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_fire_hydrant=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">8</th>
					      <td>Is there fiber optic line?</td>
					      <td>
					      	 @if($is_fiber_optic=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_fiber_optic=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">9</th>
					      <td>Is public transport adequate?</td>
					      <td>
					      	 @if($is_public_transport=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_public_transport=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">10</th>
					      <td>Is there a shopping center?</td>
					      <td>
					      	 @if($is_shopping_center=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_shopping_center=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">11</th>
					      <td>Is there accessible nursery school in the area?</td>
					      <td>
					      	 @if($is_nursery_school=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_nursery_school=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">12</th>
					      <td>Is there accessible secondary school in the area?</td>
					      <td>
					      	 @if($is_secondary_school=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_secondary_school=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">13</th>
					      <td>Is there accessible university in the area?</td>
					      <td>
					      	 @if($is_university=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_university=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">14</th>
					      <td>Is there big number job provider (factory, hotel, market etc)?</td>
					      <td>
					      	 @if($is_job_providers=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_job_providers=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">15</th>
					      <td>Are there sporting/exercises facilities(gym etc)?</td>
					      <td>
					      	 @if($is_sporting_facility=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_sporting_facility=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>
					    <tr>
					      <th scope="row">16</th>
					      <td>Is there children play ground?</td>
					      <td>
					      	 @if($is_play_ground=='1')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					      <td>
					      	@if($is_play_ground=='0')
						        <i class="fa fa-check" aria-hidden="true"></i>
						        @else
						        
						        @endif
					      </td>
					   
					    </tr>

					  </tbody>
					</table>
			</div>
			</br>

			<h3>6.0 Tenure and Ownership</h3>
			This property is owned by <b>{{$certified_valuer_names}}</b>.
			</br>
			The property is on the Plot N<sup>o</sup>: {{$plot_no}} 
			and measures {{$area}}m<sup>2</sup>. 
			The use as per the development on the land is 
            <b>
			@if($intended_use_id=='1')
	        Residential
	        @else
	        Commercial
	        @endif
            </b>.

            <h3>7.0 Improvements/Developments</h3>
            The plot is developed with 
            @if($intended_use_id=='1')
	        Residential
	        @else
	        Commercial
	        @endif house

	        <h5>7.1 Property Details</h5>

            <table class="table table-bordered table-sm">
				  <thead>
				    <tr>
				      <th>N<sup>o</sup></th>
				      <th>Description</th>
				      <th>Measure</th>
				     
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1.</th>
				      <td>Main Residential House</td>
				      <td><b>not found</b></td>
				     
				    </tr>
				    <tr>
				      <th scope="row">2.</th>
				      <td>Annex</td>
				      <td><b>not found</b></td>
				     
				    </tr>
				    <tr>
				      <th scope="row">3.</th>
				      <td>Plot</td>
				      <td>{{$plot_no}}</td>
				    </tr>
				  </tbody>
           </table>

           <h5>7.2 Construction Details</h5>
           <ul>
           	<li> <b>Main Residential House</b></li>
             {{$construction_details_mainresidentials}}
           </ul>
           <ul>
           	<li> <b>Annexes</b></li>
           	{{$construction_details_annexes}}
           </ul>

           </br>

             <h5>7.3 Construction Composition</h5>
             <b>Physical details: Main House </b></br>
                 {{$cons_composition_details_mainresidentials}}
             </br>
             <b>Physical Details: Annex</b></br>
                 {{$cons_composition_details_annexes}}


             <h3>8.0 VALUATION</h3>
             <h5>8.1 Residential House</h5>
             pppppppp

             <h5>8.2 Annexes</h5>
             ppppppp

             <h3>9.0 LAND</h3>
             <u>NOTE</u>: This valuation is governed by gazetted law <b>N<sup>o</sup>17/2010 of 12/05/2010</b> which establishes and organizes the profession of real property valuation in Rwanda.
             Based on the Market value in the area, we found out that the average price of land per square meter is 35000 Frw.

             </br>



           	<table class="table table-bordered table-sm">

				  <tbody>
				    <tr>
				      <td><b><u>PLOT</u></b>
				      </br>
				      	- Parcel area</br>
				      	- Unit Price</br>
				      	- Actual value for Plot
				      </td>
				      <td>
				      </br>
				         {{$area}} m<sup>2</sup></br>
				      	  35000 RWF/ m<sup>2</sup></br>
				      	  <b>not found</b>
				      </td>
				    </tr>
				  </tbody>
            </table>

            </br>

            <h4><u>RECAPITULATION</u></h4>
            </br>

            <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th>N<sup>o</sup></th>
				      <th>Description</th>
				      <th>Amount</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Main Residential house</td>
				      <td><b>Not found</b></td>
				   
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Annex</td>
				      <td><b>Not found</b></td>
				
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Plot</td>
				      <td><b>Not found</b></td>
				    </tr>
				    <tr>
				      <th scope="row"></th>
				      <td>Open Market Value</td>
				      <td><b>Not found</b></td>
				 
				    </tr>
				    <tr>
				      <th scope="row"></th>
				      <td>Forced Sale Value</td>
				      <td><b>Not found</b></td>
				    </tr>
				    <tr>
				      <th scope="row"></th>
				      <td>Insurance Value</td>
				      <td><b>Not found</b></td>
				    </tr>
				  </tbody>
			</table>

			</br>

			<b><u>Valuation Certification</u></b>
			</br>
			With regard to the forgoing remarks, we are of the opinion that the Open Market Value of the subject property of <b>{{$certified_valuer_names}}</b>, located in <b>{{$cell}} CELL</b>,<b>{{$sector}} SECTOR</b>,<b>{{$district}} DISTRICT</b>,
            <b>{{$province}}
             @if($province=='kigali')
			        city
			        @else
			        province
			        @endif .
			        </b>
			<b>on Plot {{$plot_no}}; UPI: {{$upi_no}};</b> In view of the foregoing particulars and the present day economic circumstances, we value the <b> House, ANNEX AND PLOT OF Mr. {{$certified_valuer_names}}, AT HIS {{$sector}} HOME IN {{$district}} DISTRICT,</b> as at today's date as follows:
			</br>
			<ol>
				<li>Open Market Value: Rwf <b>Not found</b></li>
				<li>Forced Sale Value: Rwf <b>Not found</b></li>
				<li>Insurance Value: Rwf <b>Not found</b></li>
			</ol>
			</br>
	<b>Done at Kigali, 18<sup>th</sup> May 2016</b>
	</br>
	</br><b>
	THE VALUER
	Name: {{$certified_valuer_names}}</br>
	Professional status:{{$professional_status}}</br>
	Institute of Real Property Valuers-Rwanda</br>
	REgistration number in Certified Valuers Register:{{$reg_no_in_certified_valuers}}</br>
	Address: {{$district}} , {{$sector}}, {{$cell}}, {{$village}}, {{$campany_address}}</br>
	Tel: {{$certified_valuer_telephone_number}}</b>









             



 </div>




@endsection