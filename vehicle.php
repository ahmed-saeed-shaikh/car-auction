<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Brand</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADD VEHICLE</div>
          </div>
          <div class="panel-body">
            <form method="post" action="main.php" enctype="multipart/form-data">
           <div class="row">
<div class="col-md-6">
  <div class="form-group">
                  <label>Select Maker</label>
                  <select data-placeholder="Select Maker" class="select-size-sm" name="v_brand">
<option value="AZ">Select Maker</option>
                    <?php
                    foreach($ob->select_brand() as $brands)
                    {
                      echo('<option value="'.$brands['b_id'].'">'.$brands['b_name'].'</option>');
                    }
                    ?>
                      
                   
                      
                  
                    
                    
                  </select>
                </div>

                
              </div>


              <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Vehicle Model</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Model Here" name="v_model" >
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Model Grade</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Model Here" name="v_grade" >
                  </div>
                </div>

 <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Vehicle Type</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Type Here" name="v_type" >
                  </div>
                </div>
</div>
<div class="row">
  <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Chassis Code </label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Chassis Code  Here" name="v_chassis_code" >
                  </div>
                </div>



                <div class="col-md-6 mt-20">
                           <div class="form-group">
                    <label class="control-label">Vehicle CC</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle CC Here" name="v_cc" >
                  </div>
                </div>
  </div>
  <div class="row">
     <div class="col-md-6 mt-20">
                <div class="form-group ">
                    <label class="control-label">Fuel</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Fuel Here" name="v_fuel" >
                  </div>
                </div>
 
                <div class="col-md-6 mt-20">
                     <div class="form-group">
                    <label class="control-label">Vehicle Transmission</label>
                    <select type="text" id="firstName" class="form-control"  name="v_transmission" >
                    <option>Automatic</option>
                    <option >Manual</option>
                    <option >CVT</option>
                    <option >DSG</option>
                    <option>Tip Tronic</option>
</select>
                  </div>
                  
                </div>
  </div>
  <div class="row">
      <div class="col-md-6 mt-20">
                     <div class="form-group">
                    <label class="control-label">Vehicle Year of Manufacture</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Year of Manufacture Here" name="v_manufacture" >
                  </div>
                 
                </div>


                 <div class="col-md-6 mt-20">
                    <div class="form-group">
                    <label class="control-label">Vehicle Color</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle color Here" name="v_color" >
                  </div>
                  
                </div>
  </div>
  <div class="row">
     <div class="col-md-6 mt-20">
                <div class="form-group">
                    <label class="control-label">Vehicle Driving Handle</label>
                    <select  class="form-control" placeholder="Enter Vehicle Driving Handle  Here" name="v_dh" required>
                    <option>Select One</option>
                     <option>Right Handed</option>
                      <option>Left Handed</option>
                    </select>
                  </div>
                </div>


                 <div class="col-md-6 mt-20">
                 <div class="form-group">
                    <label class="control-label">Doors / Seats</label>
                    <input type="text"  class="form-control" placeholder="Enter Vehicle Price Here" name="v_ds" >
                  </div>
                </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-20">
                     <div class="form-group">
                    <label class="control-label">Dimension</label>
                    <input type="text"  class="form-control" placeholder="Enter Vehicle Price Here" name="v_dimension" >
                  </div>
                
                </div>

                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Vehicle Price</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Price Here" name="v_price" >
                  </div>
                </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-20">
                    
                  <div class="form-group">
                    <label class="control-label">Mileage</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Mileage Here" name="v_mileage" >
                  </div>
                </div>

                <div class="col-md-6 mt-20">
              
                <div class="form-group">
                    <label class="control-label">Location </label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Location Here" name="v_location" >
                  </div>
                </div>
</div>

  <div class="row">
<div class="col-md-12 mt-20">
  <div class="form-group">
                  <label>Add Features</label>
                
                  <select required multiple data-placeholder="Add Features" name="v_things[]" id='myselect' class="select-size-sm">

                  <?php

                  foreach($ob->features_s() as $things)
                    {
                      echo('<option value="'.$things['name'].'">'.$things['name'].'</option>');
                    }

                  ?>
                 
                  </select>
                </div>

                
              </div>
            </div>

 <div class="row"> 
              <div class="col-md-12 mt-20">
              <div class="form-group">
                    <label class="control-label">Remarks</label>
                    <textarea type="text" class="form-control" placeholder="Enter Remarks Here" name="v_remarks" rows="4"></textarea>
                  </div>
              
              </div>
              
              
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Any file format upload</h5>
          </div>
          <div class="panel-body">
            
              <div class="form-group">
                <input name="v_img[]" id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
              </div>
            
          </div>
        </div>
                </div>

              </div>
<div class="row">
          <div class="col-md-12 mt-20">
            <div class="form-group ">
              
                <button name="add_vehicle" type="submit" class="btn btn-block theme-btn btn-primary"><i class="icon-cogs position-left"></i> ADD VEHICLE</button>
              </div>
            </div>
          </div>
        </form>
          </div>
        </div>





      </div>


      
      </div>

      <br>
 
    </div>
 
</section>
<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/plugins/uploaders/bootstrap-uploader/bootstrap-uploader.js"></script>
<script src="lib/js/pages/extensions/extension_bootstrap_uploader.js"></script>