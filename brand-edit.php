<?php include('header.php');
$ob->update_brand();
echo('

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
<div class="panel panel-default">
<div class="panel-heading panel-theme">
  <div class="panel-title">ADD FEATURES</div>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12">

<div class="form-group">
');
  foreach($ob->brand_select_update() as $ed){
echo('
<form method="post" enctype="multipart/form-data">
<div class="row">
 <div class="col-md-6">
      <div class="form-group" style="position: relative;left: -11px;margin:0px">
              <input id="file-5" class="file" type="file" data-upload-url="#" name="img">
            <input type="hidden" name="hi" value="'.$ed['b_logo'].'">
      </div>
      <p class="text-danger">If you want to change the Image then use this</p>
    </div>


    <div class="col-md-6">
 <img src="img/brand/'.$ed['b_logo'].'" style="width:250px;margin:auto;display:table">
<br>

 
  
  <label class="control-label col-lg-12 mt-20">Maker Name</label>
  <div class="col-lg-12">
    <input type="text" class="form-control"   name="name" placeholder="Enter Maker Name" value="'.$ed['b_name'].'">
  </div>
  </div>
  </div>
 
<div class="row">
<div class="col-md-12 mt-20">
<button type="submit" name="update" class="btn theme-btn btn-primary "><i class="icon-checkmark position-left"></i> Add Brand</button>
</div>
</div>
</form>
  </div>
  </div>
  </div>

');}

 include('footer.php');?>
