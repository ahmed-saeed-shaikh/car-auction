<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.php"></a></li>
        <li class="active">User</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default ">
          <div class="panel-heading panel-theme">
            <div class="panel-title">USER PROFILE</div>
          </div>
          <div class="panel-body">
        <div class="panel panel-flat">
					<div class="panel-body">
						

<div class="row">
	<?php

	   foreach($ob->user_profile($_GET['user_id']) as $pro){
	   	echo('
					<div class="col-lg-3 col-sm-4">

						<!-- User thumbnail -->
						<div class="thumbnail">
							<div class="thumb thumb-rounded">
								<img src="http://admin.auctionhouse.jp/img/user/'.$pro['image'].'" alt="">
							</div>
							<div class="caption text-center">
								<h3 class="no-margin">'.$pro['full_name'].' <small class="display-block">

');
	   	 if($pro['role'] == 2){
										echo('Admin');
										}
										else {
										echo('Agent');
										}

	   	echo('



								</small></h3>
								
							</div>
						</div>
						<!-- /user thumbnail -->


					</div>
					<div class="col-lg-9 col-sm-8">
						<div class="panel panel-flat">
							
							
						</div>

						<div class="panel panel-flat">
							<div class="panel-heading">
								<div class="panel-title"><i class="fa fa-user position-left"></i>About - '.$pro['full_name'].'</div>
							</div>
							<div class="panel-body">
								<table class="table table-borderless table-striped">
									<tbody>
										
										<tr>
											<td><strong>Email</strong></td>
											<td><a href="javascript:void(0)">'.$pro['email'].'</a></td>
										</tr>
										<tr>
											<td><strong>User  Name</strong></td>
											<td><a href="javascript:void(0)">'.$pro['user_name'].'</a></td>
										</tr>
										<tr>
											<td><strong>Running Query</strong></td>
											<td><a href="javascript:void(0)" class="label label-danger">'.$pro['data'].'</a></td>
										</tr>
										<tr>
											<td><strong>Completed Query</strong></td>
											<td><a href="javascript:void(0)" class="label label-success">168</a></td>
										</tr>

											<tr>
											<td><strong>Created on</strong></td>
											<td><a href="javascript:void(0)" >'.substr($pro['date'],0,10).'</a></td>
										</tr>

										<tr>
											<td><strong>Account Status</strong></td>
											<td>
												');

if($pro['active'] == 1){
										echo('<a href="javascript:void(0)" class="label label-success">Active</a>');
										}
										
										else {
									echo('<a href="javascript:void(0)" class="label label-danger">Suspend</a>');
										}
	   	echo('
												
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

							
						
					</div>
				</div>


</div>

      </div>

');}?>
     

        
      </div>
      <br>

     

      </div>
    </div>
  </div>
</section>
<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>