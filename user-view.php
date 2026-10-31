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
            <div class="panel-title">VIEW USER</div>
          </div>
          <div class="panel-body">
        <div class="panel panel-flat">
					<div class="panel-body">
						<div class="row">
<?php
	foreach($ob->user_view() as $user) {
	echo('						<div class="col-md-3 col-sm-6">
								<div class="our-team1">
								<a href="user-profile.php?user_id='.$user['id'].'">	<div class="team_img">

										<img  src="http://admin.auctionhouse.jp/img/user/'.$user['image'].'" alt="">
										
									</div>
									<div class="team-content">
										<h3 class="title">'.$user['full_name'].'</h3>
										<span class="post">');
	 if($user['role'] == 2){
										echo('Admin');
										}
										else {
										echo('Agent');
										}
	echo('

										</span>
									</div>
								</div>
								</a>
							</div>
							');}?>

						</div>
					</div>
				</div>


</div>

      </div>


     

        
      </div>
      <br>

     

      </div>
    </div>

<?php include('footer.php');?>
