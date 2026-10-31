<?php include('header.php');
?>


<section class="main-container">
		<h1 style="display:none">Empty Heading</h1>

			<div class="container-fluid ">

		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
    
   
    	
$("#frmEnquiry").on('submit',(function(e){
	e.preventDefault();
	$('#modal_default').modal('show');
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "mail-send.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		 document.getElementById('emai-sent').style.display="none";
		 document.getElementById('email-show').style.display="block";
		      
		      
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		
		});
	}
}));

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	$("#userName").removeClass("invalid");
	$("#userEmail").removeClass("invalid");
	$("#subject").removeClass("invalid");
	$("#content").removeClass("invalid");
	
	if(!$("#userName").val()) {
		$("#userName").addClass("invalid");
        $("#userName").attr("title","Required");
        valid = false;
	}
    if(!$("#userEmail").val()) {
        $("#userEmail").addClass("invalid");
        $("#userEmail").attr("title","Required");
        valid = false;
    }
    if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail").addClass("invalid");
        $("#userEmail").attr("title","Invalid Email");
        valid = false;
    }
	if(!$("#subject").val()) {
		$("#subject").addClass("invalid");
        $("#subject").attr("title","Required");
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content").addClass("invalid");
        $("#content").attr("title","Required");
		valid = false;
	}
	
	return valid;
}

});

</script>
</div>

				<div class="container-aside" style="width:100% !important ;margin:0px !important">
				    

	    <form  class="form-horizontal" id="frmEnquiry" action="" method="post" enctype='multipart/form-data' style="position: relative;
    left: -116px;">
	         <div id="mail-status"></div>
					<!-- Top buttons -->
					<div class="p-15 header no-margin-b">
						<div class="list-buttons">
							<button type="button" class="btn bg-danger-400" id="compose">Compose New</button>

							<div class="btn-group pull-right">
								<button type="button" class="btn bg-default"><i class="icon-arrow-left12"></i></button>
								<button type="button" class="btn bg-default"><i class="icon-arrow-right13"></i></button>
							</div>

							<div class="clearfix"></div>

							

						

							<div class="btn-group m-t-10 pull-right">
								
								
							</div>
						</div>

						<div class="new-buttons" style="display:none;">
							<button type="button" class="btn bg-grey m-r-10 back"><i class="icon-arrow-left13"></i></button>
							<input	type="submit" value="Send"   class="btnAction btn bg-info-400 theme-btn" >
							       
						

							<div class="btn-group pull-right">
								<input  type="file" class="btn btn-default" multiple="true" name="attachment[]">
								<button type="button" class="btn btn-default">Attachment</button>
							</div>
						</div>

						<div class="email-buttons" style="display:none;">
							<button type="button" class="btn bg-grey m-r-10 back"><i class="icon-arrow-left13"></i></button>

							<div class="btn-group m-r-10">
								<button type="button" class="btn btn-default" data-popup="tooltip" data-placement="top" data-original-title="Archive"><i class="icon-archive"></i></button>
								<button type="button" class="btn btn-default" data-popup="tooltip" data-placement="top" data-original-title="Report"><i class="icon-spam"></i></button>
								<button type="button" class="btn btn-default" data-popup="tooltip" data-placement="top" data-original-title="Delete"><i class="icon-bin"></i></button>
							</div>

							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-folder2"></i><i class="icon-arrow-down5"></i>
								</button>
								
							</div>

							<div class="clearfix"></div>

						
						</div>
					</div>
					<!-- /Top buttons -->
				
<?php 
foreach($ob->email_select() as $da){
  $daa = date_create($da['date']);
					$date =  date_format($daa,"d-F-Y");
echo('		<ul class="panel media-list media-list-linked media-list-bordered emails-list no-border-top">
						<li class="media border-left-xlg border-left-info cursor-pointer" style="height:150px;overflow:auto">
							
							<a href="email-view.php?mail='.$da['id'].'"><div class="" style="padding:20px;">
								<div class="media-left">
									<img src="http://via.placeholder.com/60x60" class="img-circle" alt="">
								</div>

								<div class="media-body">
									<div class="media-heading"><div class="label label-info position-left">Work</div>'.$da['subject'].'</div>
									'.$da['too'].'
							<h4>	'.strip_tags($da['content']).'</h4>

									<div class="media-options">
										<i class="icon-attachment"></i>
										<span class="date">'.$date.'</span>
										<div class="star">
											<input  type="checkbox" value="1" checked="">
												<label></label>
										</div>
									</div>
								</div>

							</div>
							</a>
						</li>

					 </ul>

					');}
 ?>


					<!-- New email (Compose) -->
					<div class="panel panel-flat new-email p-30" style="display:none;">
						<div class="panel-body">
						
								<fieldset>
									<div class="form-group">
										<label class="control-label col-md-2 col-sm-2 text-right">To</label>
										<div class="col-md-10 col-sm-10">
											<input type="text" class="form-control" name="to">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2 col-sm-2 text-right">Subject</label>
										<div class="col-md-10 col-sm-10">
											<input type="text" class="form-control" name="subject" id="subject">
										</div>
									</div>

									<div class="form-group">
									
										   		<label class="control-label col-md-2 col-sm-2 text-right">Images</label>
										    
									
										<div class="col-md-10 col-sm-10">
										    	<div class="input-group">
											<input type="file" class="form-control" name="image[]" id="in_email" multiple >
													<span class="input-group-addon"><i class="fa fa-upload" id="icons"></i><img src="img/tick.png" id="af" style="height:20px;width:20px;display:none;"><div class="loader04" id="load" style="display:none;"></div></span>
										</div>
									</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-2 col-sm-2 text-right">Content</label>
										<div class="col-md-10 col-sm-10">
											<textarea class="basic-editor" name="content" id="content"></textarea>
										</div>
									</div>
								<?php
								foreach($ob->session() as $na){
								    echo('<input type="hidden" name="userEmail" id="userEmail"
            class="demoInputBox" placeholder="Email" value="'.$na['email'].'">');
								    
								}
								?>
								
             <div>
        <input
            type="hidden" name="userName" id="userName"
            class="demoInputBox" placeholder="Name" value="Auction House">
    </div>
       
        
								</fieldset>
							</form>
							<div id="loader-icon" style="display: none;">
    <img src="LoaderIcon.gif" />
</div>
							
						</div>
					</div>
					<!-- /New email (Compose) -->

					<!-- Single email -->
					
					<!-- /Single email -->

				</div>
				<div class="clearfix"></div>

<script>
    
    
    document.getElementById('in_email').addEventListener('change',function()
    {
        sendImage();
    });
    function sendImage()
    {   document.getElementById('load').style.display="block";
        document.getElementById('icons').style.display="none";
        formData = new FormData($("#frmEnquiry")[0]);
        formData.append("myname",document.getElementsByName('image')[0]);
        $.ajax({
            url : "ck_req.php",
            type : "post",
            processData: false,
            contentType: false,
            data :  formData,
            success : function(response)
            {
                  document.getElementById('load').style.display="none";
                  document.getElementById('af').style.display="block";
                  
            }
        });
        
        
    }
    
    
    
</script>
	
			<div id="modal_default" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-body">
							   
							    <div class="" id="emai-sent">
							         <div class="loader07"></div>
							        	<h1 style="text-align: center;position: relative;top: 40px;">Please Wait</h1>
								<p style="position: relative;top: 32px;text-align: center;">Email is being sent </p>
							    </div>
							       <div class="" id="email-show" style="display:none">
							           <img src='img/rik.gif' class='load_img'/>
							    	<h1 style="text-align: center;position: relative;top: -40px;">Your Email Has been sent</h1>
							    	<button class="btn btn-danger theme-btn" style="    display: block;
    margin: auto;
    position: relative;
    top: -48px;" data-dismiss="modal" >OK</button>
							
							</div>
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
<!-- Page scripts -->
