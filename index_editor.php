
 
<section class="main-container">
			   
		<h1 style="display:none">Empty Heading</h1>

			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title"><i class="icon-display4"></i> Dashboard</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li class="active">Dashboards</li>
					</ul>
				</div>
			</div>
			<!-- /Page Header-->

			<div class="container-fluid page-content">
				<div class="row">

					<!-- Leads -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<img src="https://www.auctionhouse.jp/img/icons/bid.png" style="height: 60px;  width: 70px;">	
									</div>
                            		<a href="view-bid.php">

									<div class="col-md-6 col-xs-6 no-padding">
										
									 
										  
										
										  
										  <span class="">BIDS </span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
										       
								  <?php
                   echo $ob->p_bids_month();
                    
                    ?> 
                                    
                                     <i class="icon-arrow-up16 text-success text-size-large"></i></div>
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
					<!-- /Leads -->
<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
											<img src="https://www.auctionhouse.jp/img/icons/ship.png" style="height: 60px;width: 80px;">
									</div>
										<a href="consign_Details.php">
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="">Consignee</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10"> <i class="icon-arrow-down16 text-danger text-size-large"></i>
<?php
                   echo $ob->p_cons_month();
                    
                    ?>
						</div>			</div>
						</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Payments -->
				
					<!-- /Payments -->

					<!-- Sales -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
											<img src="img/box.png" style="height: 60px;width: 80px;">
									</div>
										<a href="dhl-view.php">
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="">DHL </span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10"> <i class="icon-arrow-down16 text-danger text-size-large"></i>
<?php
                    echo $ob->p_dhl_month();
                    
                    ?></a>
						</div>			</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<img src="img/inquires.png" style="height: 60px;width: 80px;">
									</div>
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="" style="margin: auto;display: table">Inquiries</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10 text-center">
										    
										       <?php 
                echo $ob->p_inq_month();
                
                    ?>
									</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
				
				
				</div>
				<div class="row">

					<!-- Leads -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<div id="leads"></div>
									</div>
									<a href="month-inquiry.php?tok=dep">
									<div class="col-md-6 col-xs-6 no-padding">
										  <span class="">Total Deposite</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10"> 

         <?php echo number_format($ob->today_dep_month());
      
         ?>
 
    </div>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Leads -->

					<!-- Payments -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<div id="payment"></div>
									</div>
									<a href="month-inquiry.php?tok=alloc">
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="" style="margin: auto;display: table">Total Allocated Funds</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10 text-center"><?php
echo number_format($ob->today_allo_month())

?></div>

									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Payments -->

					<!-- Sales -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<div id="sales"></div>
									</div>
										<a href="month-inquiry.php?tok=exp">
									<div class="col-md-6 col-xs-6 no-padding">
									<span class="">Expense</span>
									<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
									    <?php
echo number_format($ob->today_exp_month());
?>
									    
									     <i class="icon-arrow-up16 text-success text-size-large"></i></div>
								</div>
								</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Sales -->

					<!-- Orders -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="col-md-6 col-xs-6">
									<div class="row">
										<div id="orders"></div>
									</div>
								</div>
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="">Balance</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10"><?php
 $to = ($ob->today_allo_month()+$ob->today_exp_month()) -  $ob->today_dep_month();
 echo $to;

?><i class="icon-arrow-down16 text-danger text-size-large"></i></div>

									</div>
							</div>
						</div>
					</div>
					<!-- /Orders -->
				</div>
</div>
<div class="col-md-12">
	<div class="container-fluid page-content">

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Your Bids</div>
					</div>

					<div class="table-responsive">
					 <table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
							<thead>
							<tr>
                  
                  <th>Lot</th>
                  <th>Maker</th>
                  <th style="width:10px">Model</th>
                  <th>Bid Price</th>
                  <th>Result</th>
                
                  <th>Status</th>
                  <th>Date</th>
              
                </tr>
							</thead>
							<tbody>
							   <?php
           foreach($ob->session() as $user){
 foreach($ob->sel_bid() as $bid) { 
              $date=date_create($bid['bid_date']);
      $tdate =  date_format($date,"Y-M-d");
  echo (' <tr>
                    
                    <td><h4 class="no-margin"><a href="#">'.$bid['bit_alotNumb'].'</a> </h4></td>
                    <td>'.$bid['b_name'].'</td>                 
                  
                    
                    <td>'.$bid['bid_vModel'].'</td>  
                    <td>'. number_format($bid['bid_amount'], !($bid['bid_amount'] == (int)$bid['bid_amount']) * 2).'</td>

                    <td>'. number_format($bid['final_bid_price'], !($bid['final_bid_price'] == (int)$bid['final_bid_price']) * 2).'</td>
                    
                    <td>
                 ');
                  if($bid['bid_status'] == 1){
                          echo('<span class="label label-primary">Pending </span>');
                          
                      }
                      if($bid['bid_status'] == 2){
                          echo('<span class="label label-warning">Sold to Other</span>');
                          
                      }
                           if($bid['bid_status'] == 3){
                          echo('<span style="background-color:green" class="label label-sucsess">Bought</span>');
                          
                      }
                           if($bid['bid_status'] == 4){
                          echo('<span class="label label-danger">Canclled</span>');
                          
                      }
                        if($bid['bid_status'] == 5){
                          echo('<span class="label label-info">Unsold</span>');
                          
                      }
                      if($bid['bid_status'] == 6){
                          echo('<span class="label label-info">Bid Updated</span>');
                          
                      }
                      if($bid['bid_status'] == 7){
                          echo('<span class="label label-info">Auctioned High</span>');
                          
                      }
                      
                      
                      
                 echo('
                     
                  </td>
                  
                   
                     <td>'.$tdate.'</td>  
                         
                   
                  </tr>');
}

          
    
           }
                 ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			
				<div class="container-fluid page-content">

				<div class="panel panel-default">
					<div class="panel-heading panel-theme">
						<div class="panel-title">Inquiries</div>
					</div>

					<div class="table-responsive">
						<table class="table table-hover user-list" id="datatable">
							<thead>
						 
                  <tr>
                 
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                
                  <th>Contact</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              
                </tr>
						
						
							</thead>
							<tbody>
							 <?php 
						 
							 foreach($ob->assign_inq_agent_wise_month() as $vic){
                  $a = substr($vic['inq_date_time'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  
                  <td>'.$vic['inq_fn'].'</td>
                   <td>'.$vic['inq_country'].'</td>
                  <td>'.$final_date.'</td>
                
                  <td>'.$vic['inq_pno'].'</td>
               
               ');
                  if($vic['inq_status'] == 1){
        echo('<td><span class="label label-danger">Unread</span></td>');
      }
      
     else if($vic['inq_status'] == 2){
        echo('<td><span class="label label-warning">In Process</span></td>');
      }

     else if($vic['inq_status'] == 3){
                  echo('<td><a href="javascript:void(0)" class="label label-primary">Abort</a></td>');

              }
             else if($vic['inq_status'] == 4){
                  echo('<td><a href="javascript:void(0)" class="label label-success">Deliverd</a></td>');

              }
               echo('
                  <td class="text-center">
                  <a href="inquires-view.php?inq-id='.$vic['inq_id'].'"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>');}
                
                ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			
			 </div>
		

			 
			

			 

			</section>
			<script>
			
			 
			 document.addEventListener('DOMContentLoaded', function() {
    $('.hist_content').on('mouseover',function()
			    {
			        $('.hist_more_container').show(200);
			        
			    });
			    
			    $('.hist_content').on('mouseout',function()
			    {
			        $('.hist_more_container').hide(200);
			        
			    });
			    
			    $('.hist_more_container').on('mouseover',function()
			    {
			        $('.hist_more_container').show(200);
			        
			    });
			    
			    
}, false);
			    
			</script>



