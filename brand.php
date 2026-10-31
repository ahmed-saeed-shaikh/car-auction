<?php include('header.php');
$ob->brand();
 $ob->model_add();
 $ob->features();
?>

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
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADD BRAND</div>
          </div>
                <form action="" method="post"  enctype="multipart/form-data" >
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-lg-12">Brand Name</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" name="name" placeholder="Enter Brand Name">
              </div>
            </div>
            <div class="form-group mt-70">
              <label class="control-label col-lg-12">Brand Logo</label>
              <div class="col-lg-12">
                <input type="file" name="img" class="file-styled-primary-icon ">
              </div>
            </div>
            <br>
            <div class="form-group mt-70">
              <div class="col-lg-12">
                <button type="submit" name="brand" class="btn theme-btn btn-primary "><i class="icon-checkmark position-left"></i> Add Brand</button>
              </div>
            </div>
          </form>
          </div>
        </div>




      </div>


      <div class="col-md-6">
   <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADD MODEL</div>
          </div>
          <div class="panel-body">

          	 <div class="form-group">
              <form method="post">
								<label class="control-label col-lg-12">Maker Name</label>
								       <div class="col-lg-12">
									<select class="select-multiple-drag" name="maker">
										<option selected disabled=""> Select Maker</option>
								  <?php foreach($ob->brand_select() as $mak){ 
                    echo('<option value="'.$mak['b_id'].'" >'.$mak['b_name'].'</option>
                    
                    ');}
                    ?>
									</select>
								</div>
							</div>

            <div class="form-group mt-70">
              <label class="control-label col-lg-12">Model Name</label>
              <div class="col-lg-12">
                <input type="text" name="model" class="form-control" name="model" placeholder="Enter Model Name">
              </div>
            </div>
          
            <br>
            <div class="form-group mt-70">
              <div class="col-lg-12">
                <button type="submit" name="model-add" class="btn  theme-btn btn-primary pull-right"><i class="icon-checkmark position-left"></i> Add Model</button>
              </div>
            </div>
          </form>
          </div>
        </div>

        
      </div>
      </div>

      <br>
 <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADD FEATURES</div>
          </div>
          <div class="panel-body">
          	 <div class="form-group">
              <form method="post">
              <label class="control-label col-lg-12">Features Name</label>
              <div class="col-lg-12">
                <input type="text" class="form-control"  name="name" placeholder="Enter Features Name">
              </div>
            </div>


            <div class="form-group ">
              
              <div class="col-lg-12 mt-20">
                <input type="submit"  name="features"  class="btn btn-primary theme-btn">
              </div>
            </div>
          </form>
          </div></div>
     

      </div>
    </div>
  </div>


<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/pages/forms/form_inputs_basic.js"></script>