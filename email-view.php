<?php include('header.php');

?>
<section class="main-container">
		<h1 style="display:none">Empty Heading</h1>

			<div class="container-fluid no-padding-l no-padding-r">

				<div class="container-sidebar">

					<!-- Sidebar -->
					<div class="secondary-sidebar">
					    <nav class="navbar no-margin-b">
							<div class="p-10 p-t-15 p-b-20">
								
							</div>

				            
					    </nav>
					</div>
					<!-- /Sidebar -->

				</div>

				<div class="container-aside">
	<form class="form-horizontal" method="post" action="main.php" enctype="multipart/form-data" style="    position: relative;
    left: -116px;
}">
					<!-- Top buttons -->
					<div class="p-15 header no-margin-b">
						<div class="list-buttons">
							

						

							<div class="clearfix"></div>

						

							

							


					<!-- /Top buttons -->

					<!-- Emails list -->
					
					<!-- /New email (Compose) -->

					<!-- Single email -->
					<?php  
					foreach ($ob->email_select_details()  as $mail) {
						  $date = date_create($mail['date']);
					$daa =  date_format($date,"d-F-Y");
						
					
					echo('
					<div class="panel panel-flat email" style="display:;">
						<div class="panel-body p-20">
							<h1 class="text-light no-margin-t">'.$mail['too'].'</h1>
							
							<hr>
							<ul class="media-list">
								<li class="media">
									<div class="media-left p-r-15">
										<a href="#"><img src="http://via.placeholder.com/60x60" class="img-circle" alt=""></a>
									</div>
									<div class="media-body">
										<p class="m-b-0">');
					foreach($ob->session() as $usa){

						echo($usa['email']);
					}
echo('
					</p>'.$daa.'
										<p class="text-sm">

										</p>
									</div>
								</li>
							</ul>
							<hr>
							
							

							<div class="row">
							');
							foreach(json_decode($mail['con_img'],true) as $ban){
							    
							echo('
							<img src="img/temp_images/'.$ban.'" alt="" class="img-responsive img-100" style="width:200px; height:auto;float: left; margin-left:5px">
							
											');}
									foreach(json_decode($mail['att'],true) as $img_a){

						echo ('<div class="col-md-2 col-sm-2">
									<div class="panel"><div class="panel-body p-5"><img src="img/emails/'.$img_a.'" alt="" class="img-responsive img-100" style="width:150px; height:100px"></div>
										<div class="panel-footer p-5 p-l-10 p-r-10">
											<i class="icon-attachment icon-sm position-left"></i>'.substr($img_a,0,15).'
										</div></div>
								</div>');

									}
echo('
										
									
								

							</div>
							'.$mail['content'].'

						
							
					</div>
					');}
					?>
					<!-- /Single email -->

				</div>
				<div class="clearfix"></div>

			</div>
				</div>
					</div>
						</div>

	<?php
	include('footer.php');
	?>		
	<script src="lib/assets/editors/tinymce/tinymce.min.js"></script>
<script src="lib/js/pages/apps/emails.js"></script>
<script src="lib/js/plugins/uploaders/bootstrap-uploader/bootstrap-uploader.js"></script>
<script src="lib/js/pages/extensions/extension_bootstrap_uploader.js"></script>