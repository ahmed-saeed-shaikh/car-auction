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
            <div class="panel-title">EDIT VEHICLE</div>
          </div>
          <?php
          include('show_message.php');
           foreach($ob->vehicle_edit_select() as $edit){
            echo('
          <div class="panel-body">
            <form method="post" action="main.php" enctype="multipart/form-data" id="myform">
           <div class="row">
<div class="col-md-6">
  <div class="form-group">
                  <label>Select Maker</label>
                  <select id="brand" data-placeholder="Select Maker" class="select-size-sm" name="v_brand">
<option value="AZ">Select Maker</option>
                    ');
                  
                    foreach($ob->select_brand() as $brands)
                    {
                      if($edit['b_name'] !=$brands['b_name'])
                      {
                        echo('<option value="'.$brands['b_id'].'">'.$brands['b_name'].'</option>');
                      }
                      else
                      {
                        echo('<option selected value="'.$brands['b_id'].'">'.$brands['b_name'].'</option>');
                      }
                      
                    }
                    echo (';
                      
                   
                      
                  
                    
                    
                  </select>
                </div>

                
              </div>


              <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Vehicle Model</label>
                                        <input class="form-control" value="'.$edit['v_model'].'" name="v_model"> 
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Model Grade</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Model Here" name="v_grade" value="'.$edit['v_grade'].'">
                  </div>
                </div>

 <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Vehicle Type</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Type Here" name="v_type" value="'.$edit['v_type'].'">
                  </div>
                </div>
</div>
<div class="row">
  <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Chassis Code </label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Chassis Code  Here" name="v_chassis_code" value="'.$edit['v_chassis_code'].'">  
                  </div>
                </div>



                <div class="col-md-6 mt-20">
                           <div class="form-group">
                    <label class="control-label">Vehicle CC</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle CC Here" name="v_cc" value="'.$edit['v_cc'].'">  
                  </div>
                </div>
  </div>
  <div class="row">
     <div class="col-md-6 mt-20">
                <div class="form-group ">
                    <label class="control-label">Fuel</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Fuel Here" name="v_fuel" value="'.$edit['v_fuel'].'">  
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
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Year of Manufacture Here" name="v_manufacture"value="'.$edit['v_manufacture'].'">  
                  </div>
                 
                </div>


                 <div class="col-md-6 mt-20">
                    <div class="form-group">
                    <label class="control-label">Vehicle Color</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle color Here" name="v_color" value="'.$edit['v_color'].'">  
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
                    <input type="text"  class="form-control" placeholder="Enter Vehicle Price Here" name="v_ds" value="'.$edit['v_ds'].'">  
                  </div>
                </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-20">
                     <div class="form-group">
                    <label class="control-label">Dimension</label>
                    <input type="text"  class="form-control" placeholder="Enter Vehicle Price Here" name="v_dimension"value="'.$edit['v_dimension'].'">  
                  </div>
                
                </div>

                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Vehicle Price</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Price Here" name="v_price" value="'.$edit['price'].'">  
                  </div>
                </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-20">
                    
                  <div class="form-group">
                    <label class="control-label">Mileage</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Mileage Here" name="v_mileage" value="'.$edit['v_mileage'].'">  
                  </div>
                </div>

                <div class="col-md-6 mt-20">
              
                <div class="form-group">
                    <label class="control-label">Location </label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Vehicle Location Here" name="v_location" value="'.$edit['location'].'">  
                </div>
</div>
</div>
<div class="row">
<div class="col-md-6 mt-20">
 <div class="form-group">
                    <label class="control-label">Status</label>
                    <select  class="form-control" placeholder="Enter Vehicle Driving Handle  Here" name="v_status" required>

                     ');
  if($edit['s'] ==1){
            echo('<option selected value="1">Stock In</option>
                <option value="2">Stock Out</option>
                    <option id="off" value="3">New Arrivals</option>
                         <option  value="4">Reserved</option>
                    ');
            }
            else if($edit['s'] ==2){
              
            echo('<option selected value="2">Stock Out</option>
            <option value="1">Stock In</option>
                    <option id="off" value="3">New Arrivals</option>
                         <option  value="4">Reserved</option>
                    ');
              }
            else if($edit['s'] ==3){
              echo('<option selected id="off" value="3">New Arrivals</option>
              <option value="1">Stock In</option>
                    <option  value="2">Stock out</option>
                    <option  value="4">Reserved</option>
                    ');
              }
              else if($edit['s'] ==4){
              echo('
              <option selected id="off" value="4">Reserved</option>
              <option value="1">Stock In</option>
                  <option  value="2">Stock out</option>
                  <option  value="3">New Arrival</option>
                    
                    ');
              } 
echo('
                    
                    </select>
                  </div>

</div>
 
 <div class="col-md-2  mt-20">
 
   <div class="form-group">
                    <label class="control-label">Role</label>
                    <select  class="form-control" placeholder="Enter Vehicle Driving Handle  Here" name="role" id="role">
                    <option value="User">
                      User
                    </option>
                    
                    <option selected value="Agent">
                      Agent
                    </option>
                    
                    
                    </select>
   </div>
                    
 
 </div>
 
 
 <div class="col-md-3 mt-20">
 
 
  <div class="form-group">
    <label>Agent/User</label>
    <select class="form-control" id="sel_us_ag">
    
    
     
    </select>
    
    </div>

 </div>
 
 
  <div class="col-md-6 mt-20" style="visibility:hidden">
 
 
  <div class="form-group">
  
  <div style="min-height:80px;border:1px solid black">
  
  <ul id="units"></ul>
  
  </div>
  
  </div>
  </div>
 
</div>
  <div class="row">
  
 

<div class="col-md-12 mt-20">

<div class="form-group">
									<label>Assign</label>
									<div class="assigns_shell" id="assign_shell">
									  
									  
									</div>
									
								</div>
								<br>
  <div class="form-group">
                  <label>Add Features</label>
                
                  <select required multiple data-placeholder="Add Features" name="v_things[]" id="myselect" class="select-size-sm">

                    ');
                  foreach(json_decode($edit['things']) as $thi){
                      echo('<option selected>'.$thi.'</option>');
                      

                  }




                  foreach($ob->features_s() as $things)
                    {
                      echo('<option '.$things['name'].'>'.$things['name'].'</option>');
                    }

                  echo('
                 
                  </select>
                </div>

                
              </div>
            </div>

 <div class="row"> 
              <div class="col-md-12 mt-20">
              <div class="form-group">
                    <label class="control-label">Remarks</label>
<textarea type="text" class="form-control" placeholder="Enter Remarks Here" name="v_remarks" rows="4">'.$edit['remarks'].' </textarea>
                  </div>
              
              </div>
              
              
              </div>
              <div class="row">
                <div class="col-md-12">
                 ');

 foreach(json_decode($edit['img']) as $imgg){
  if($imgg != ""){

                      echo('<a class="btn theme-btn btn-danger btn-img">X</a><img src="img/vehicle/'.$imgg.'" class="edit_img">');

                  }
                }
                  echo('

                </div>

              </div>

<a class="btn btn btn-primary" data-toggle="modal" data-target="#modal_large">Add More Images</a>

<div id="modal_large" class="modal fade">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title">Add More Images</div>
              </div>

              <div class="modal-body">
                <p> 
                 <div class="form-group">
                <input name="v_img[]" id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
              </div></p>
              </div>
              
              <input type="hidden" id="hid_units" name="hid_units" value='.$edit['assignTo'].' >

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
<script>

function sub_form()
{
    document.getElementById("myform").submit();
}

</script>

<div class="row">
          <div class="col-md-12 mt-20">
            <div class="form-group ">
            <input type="hidden" name="updt_vehicle"/>
              <input type="hidden" name="updt_img" id="updt_image" value='.$edit["img"].'>
              <input type="hidden" name="vid" value="'.$_GET['q'].'"/>
                <button  type="submit" onclick="sub_form()" class="btn btn-block theme-btn btn-primary"><i class="icon-cogs position-left"></i> Update Vehicle</button>
                
              </div>
            </div>
          </div>
        </form>
          </div>
        </div>
<input type="hidden" value="'.$_GET['q'].'" id="vehicle"/>
');
           }?>



      </div>


      
      </div>

      <br>
 
    </div>
 
</section>
<script>
  
  var close = document.getElementsByName('cell-close');
  var cell = document.getElementsByClassName('cells');
  var s = 0;



  function updt_image(a)
  {

    $(a).next().remove();
    $(a).remove();
    var imgs = [];
    var image = document.getElementById('updt_image');
    var elems = document.getElementsByClassName('edit_img');
    for(let i = 0;i<elems.length; i++)
    {
      imgs.push(elems[i].src.substring(43));
    }
    image.value = JSON.stringify(imgs);
  }
var btn_imgs = document.getElementsByClassName('btn-img');

for(var i  = 0; i<btn_imgs.length; i++)
{
  btn_imgs[i].addEventListener('click',function()
    {
      updt_image(this);
      
    });
}




    
var select_role = document.getElementById('select_role');
var show_selected = document.getElementById('show_selected');
var units = {};
if(document.getElementById('hid_units').value != null && document.getElementById('hid_units').value != "")
{
    units = JSON.parse(document.getElementById('hid_units').value);
}




function sel_units_by_role()
{
    $.ajax({
        type : "get",
        url  : "main.php",
        data : {sel_by_role : "" , role : document.getElementById('role').value},
        success : function(response)
        {
            document.getElementById('sel_us_ag').innerHTML = response;
            
        }
    });
}



function select_units(a)
{
    
    var tok = document.getElementById('assign_shell');
        tok.innerHTML += '<span class="cells">'+a+'<i name="cell-close">X</i></span>';
        
     var close = document.getElementsByName('cell-close');
         var cell = document.getElementsByClassName('cells');
         var s = 0;
         /*   
        for(j=0;j<close.length;j++)
  {
      
      
      s = j;
      close[j].addEventListener('click',function()
      {
          console.log(s);
          cell[s].remove();
      });
  }
        */
        if(close.length > 1)
        {
            close[0].addEventListener('click',function()
            {
                cell[0].remove();
            });
            close[1].addEventListener('click',function()
            {
                cell[1].remove();
            });
        }
        else
        {
            close[0].addEventListener('click',function()
            {
                cell[0].remove();
            });
        }
        
    
}

document.getElementById('role').addEventListener('change',function()
{
    sel_units_by_role();
   
    
});

document.getElementById('sel_us_ag').addEventListener('change',function()
{
    
    select_units(this.value);
    
    
    var size = Object.getOwnPropertyNames(units).length;
    
    
    
      units[size] = {type : document.getElementById('role').value,
                         id   : this.value
            }
            
        
        
       
        

    
    document.getElementById('hid_units').value = JSON.stringify(units);
    
})



</script>
<?php include('footer.php');?>

<script>
    
    sel_units_by_role();
    
</script>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/plugins/uploaders/bootstrap-uploader/bootstrap-uploader.js"></script>
<script src="lib/js/pages/extensions/extension_bootstrap_uploader.js"></script>
<script type="text/javascript">
<script src="lib/js/forms/tagsinput.min.js"></script>
<script src="lib/js/forms/tokenfield.min.js"></script>
<script src="lib/js/forms/typeahead.bundle.min.js"></script>
<script src="lib/js/pages/forms/form_tag_inputs.js"></script>
  

</script>