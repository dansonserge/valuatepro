
@extends('default.main')




@section('content')

@include('common.errors')
@include('common.notification')


{{ Form::open(array('url'=>'cmp/projdesc')) }} 
               {{ Form::hidden('_token', csrf_token() )  }}

              {{Form::hidden('company_id', auth()->guard('employers')->user()->id) }}
              {{Form::hidden('project_id', $projectId) }}
    <h3 class="title1">Project description:</h3>
        <form class="form-horizontal">
              <div class="form-group">
                <div class="control-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-4 controls">
                    <div class="input-group">
      
<!--start calendar code-->

                     {{ Form::text('created_time',null,array('id'=>'date','class'=>'form-control form-control1','placeholder'=>'MM/DD/YYYY'))}}
                     
                     <label for="date" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
                    </label>
                    </div><p class="help-block"><i>ex:2016/01/01</i></p>
                    </div>
                    </div> 

       


<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->



<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="created_time"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>

    
  <!--end calendar code-->



            <label for="focusedinput" class="col-sm-2 control-label">UPI number</label>
          <div class="col-sm-4">
  {{ Form::text('upi_no',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>'Parcel UPI number'))}}
     <p class="help-block"><i>ex:1/03/05/02/205</i></p>
          </div>     
         <label for="focusedinput" class="col-sm-2 control-label">Plot number</label>
          <div class="col-sm-4">
         {{ Form::text('plot_no',null,array('class'=>'form-control1', 'id'=>'focusedinput','placeholder'=>'Parcel plot number'))}}

          </div>    
          
          <label for="focusedinput" class="col-sm-2 control-label">Owner's name</label>
          <div class="col-sm-4">
          {{ Form::text('owner_names',null,array('class'=>'form-control1','disabled' => 'true','id'=>'focusedinput','placeholder'=>$names))}}

          <p class="help-block"><i>ex:Godefroid</i></p>
          </div>
          
          <label for="selector1" class="col-sm-2 control-label">Value Type</label>
          <div class="col-sm-4">
          <table>
            <tr>
               <td>Open Market Value</td>
               <td>&nbsp &nbsp &nbsp &nbsp{{Form::checkbox('is_open_market_value',1) }}</td>
            </tr>
            <tr>
            <td>Forced Sale Value</td>
            <td>&nbsp &nbsp &nbsp &nbsp{{Form::checkbox('is_forced_sale_value',1) }}</td>
              
            </tr>
            <tr>
             <td>Insurable value</td>
            <td>&nbsp &nbsp &nbsp &nbsp{{Form::checkbox('is_insurable_value',1) }}</td>
              
            </tr>
          </table>

          

      

          <p class="help-block"><i>select the property value type</i></p> 
          </div>
    
                <label for="selector1" class="col-sm-2 control-label">Property Category</label>
          <div class="col-sm-4">


               {!! Form::select('category_property_id',$propertycategories->lists('category','id'), null, array('class'=>'form-control', 'placeholder'=>'Property Category','div'=>'category')) !!}
                    <p class="help-block"><i>Choose Property Category</i></p> 

          </div>




          <label for="focusedinput" class="col-sm-2 control-label">Province</label>
          <div class="col-sm-4">
          <select name="province" id="selector1" class="form-control" data-live-search="true">
              <optgroup label="Rwanda" data-max-options="2">
              <option>Kigali</option>
              <option>Eastern</option>
              <option>Northern</option>             
              <option>Southern </option>
              <option>Western</option>
              </optgroup>
          </select><p class="help-block"><i>Provide the propery location</i></p> 
          </div>
             <label for="focusedinput" class="col-sm-2 control-label">District</label>
          <div class="col-sm-4">
          <select name="district" id="selector1" class="form-control" data-show-subtext="true" data-live-search="true">
              <optgroup label="Kigali" data-max-options="2">
              <option>Gasabo</option>
              <option>Kicukiro</option>
              <option>Nyarugenge</option> 
              </optgroup>

              <optgroup label="Eastern" data-max-options="2">
                <option>Bugesera</option>             
                <option>Gatsibo</option>              
                <option>Kayonza</option>
                <option>Kirehe</option>             
                <option>Ngoma</option>              
                <option>Nyagatare</option>
                <option>Rwamagana</option>              
                <option>Gasabo</option>             
                <option>Kayonza</option>
                <option>Kirehe</option>             
                <option>Ngoma</option>              
                <option>Nyagatare</option>
              </optgroup>

              <optgroup label="Northern" data-max-options="2">
                <option>Burera</option>
                <option>Gakenke</option>
                <option>Gicumbi</option>              
                <option>Musanze </option>
                <option>Rulindo</option>
              </optgroup>
                            
             <optgroup label="Southern" data-max-options="2">
              <option>Gisagara</option>
              <option>Huye</option>
              <option>Kamonyi</option>              
              <option>Muhanga </option>
              <option>Nyamagabe</option>
              <option>Nyanza</option>
              <option>Nyaruguru</option>
              <option>Ruhango</option>  
             </optgroup>

              <optgroup label="western" data-max-options="2">         
              <option>Karongi </option>
              <option>Ngororero</option>
              <option>Nyabihu</option>
              <option>Nyamasheke</option>
              <option>Rubavu</option>             
              <option>Rusizi </option>
              <option>Rutsiro</option>
              </optgroup>



          </select><p class="help-block"><i>Provide the propery location</i></p> 
           </div>
          


          <label for="focusedinput" class="col-sm-2 control-label">Sector</label>
          <div class="col-sm-4">
          <select name="sector" id="selector1" class="form-control" data-live-search="true">
              <optgroup label="Eastern" data-max-options="2">
              <option>Gashora</option>              
              <option>Juru</option>             
              <option>Kamabuye</option>
              <option>Mareba</option>
              <option>Mayange</option>
              <option>Musenyi </option>             
              <option>Mwogo </option>
              <option>Ngeruka</option>
              <option>Ntarama</option>
              <option>Nyamata</option>
              <option>Nyarugenge</option>             
              <option>Rilima </option>
              <option>Ruhuha</option>
              <option>Rweru</option>
              <option>Shyara</option>
              <option>Gasange</option>              
              <option>Gatsibo</option>
              <option>Gitoki</option>
              <option>Kabarore</option>
              <option>Kageyo</option>
              <option>Kiramuruzi</option>             
              <option>Kiziguro</option>
              <option>Muhura</option>
              <option>Murambi</option>
              <option>Ngarama</option>
              <option>Nyagihanga</option>             
              <option>Remera </option>
              <option>Rugarama</option>
              <option>Rwimbogo</option>
              <option>Gahini</option>
              <option>Kabare</option>             
              <option>Kabarondo </option>
              <option>Mukarange</option>
              <option>Murama</option>
              <option>Murundi</option>
              <option>Mwiri</option>              
              <option>Ndego </option>
              <option>Nyamirama</option>
              <option>Rukara</option>
              <option>Ruramira</option>
              <option>Rwinkwavu</option>              
              <option>Gahara </option>
              <option>Gatore</option>
              <option>Kigarama</option>
              <option>Kigina</option>
              <option>Mahama</option>             
              <option>Mpanga </option>
              <option>Musaza</option>

              <option>Mushikiri</option>
              <option>Nasho</option>
              <option>Nyamugari</option>              
              <option>Nyarubuye </option>
              <option>Gashanda</option>
              <option>Jarama</option>
              <option>Karembo</option>
              <option>Kazo</option>             
              <option>Kibungo</option>
              <option>Mugesera</option>
            
              <option>Rukomo</option>
              <option>Rwempasha</option>              
              <option>Rwimiyaga</option>
              <option>Tabagwe</option>
              <option>Fumbwe</option>
              <option>Gahengeri</option>


              </optgroup>
          </select><p class="help-block"><i>Provide the propery location</i></p> 
          </div>


          <label for="focusedinput" class="col-sm-2 control-label">Cell</label>
          <div class="col-sm-4">
          <select name="cell" id="selector1" class="form-control" data-live-search="true">
              <optgroup label="Eastern" data-max-options="2">
              <option>Kageyo</option>
              <option>Kiramuruzi</option>             
              <option>Kiziguro</option>
              <option>Muhura</option>
              <option>Murambi</option>
              <option>Ngarama</option>
              <option>Nyagihanga</option>             
              <option>Remera </option>
              <option>Rugarama</option>
              <option>Rwimbogo</option>
              <option>Gahini</option>
              <option>Kabare</option>             
              <option>Kabarondo </option>
              <option>Mukarange</option>
              <option>Murama</option>
              <option>Murundi</option>
              <option>Mwiri</option>              
              <option>Ndego </option>
              <option>Nyamirama</option>
              <option>Rukara</option>
              </optgroup>
          </select><p class="help-block"><i>Provide the Cell</i></p> 
          </div>


          <label for="focusedinput" class="col-sm-2 control-label">Village</label>
          <div class="col-sm-4">
          <select name="village" id="selector1" class="form-control" data-live-search="true">
              <optgroup label="Eastern" data-max-options="2">
              <option>Rugarama</option>
              <option>Rwimbogo</option>
              <option>Gahini</option>
              <option>Kabare</option>             
              <option>Kabarondo </option>
              <option>Mukarange</option>
              <option>Murama</option>
              <option>Murundi</option>
              <option>Mwiri</option>              
              <option>Ndego </option>
              <option>Nyamirama</option>
              <option>Rukara</option>
              <option>Ruramira</option>
              <option>Rwinkwavu</option>              
              <option>Gahara </option>
              <option>Gatore</option>
              <option>Kigarama</option>
              <option>Kigina</option>
              <option>Mahama</option>     
              </optgroup>
          </select><p class="help-block"><i>Provide the propery location</i></p> 
          </div>

    </div>
                <!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>

<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            autoclose: true,
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
</script>
        <br>



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

 
                   </div>
          {{ Form::close()}}
      </div> 


   
@endsection