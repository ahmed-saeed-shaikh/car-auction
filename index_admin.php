<section class="main-container">
			   
		<h1 style="display:none">Empty Heading</h1>

			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title"><i class="icon-display4"></i> Dashboard</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li class="active">Dashboard</li>
					</ul>
				</div>
			</div>
			<!-- /Page Header-->

			<div class="container-fluid page-content sp">
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
										 <?php
foreach ($ob->session() as $role)
{
    if ($role['role'] == 2)
    {
        echo ('<span class="">Total Deposite</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">');

        echo (number_format($ob->today_deposite() , !($ob->today_deposite() == (int)$ob->today_deposite()) * 2));

    }
    else
    {
        echo ('<span class="">Balance</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">');
        if ($ob->agent_balance() == null)
        {
            echo (0.00);
        }
        else
        {
            $number = $ob->agent_balance();
            setlocale(LC_MONETARY, "en_US");
            echo money_format("%n", $number);

        }
    }
}

?>   </div>
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
if ($ob->today_allocated() != null)
{
    echo (number_format($ob->today_allocated() , !($ob->today_allocated() == (int)$ob->today_allocated()) * 2));

}
else
{
    echo (0);
}

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
echo (number_format($ob->total_Exp() , !($ob->total_Exp() == (int)$ob->total_Exp()) * 2))
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
echo number_format($ob->balance() , !($ob->balance() == (int)$ob->balance()) * 2);

?><i class="icon-arrow-down16 text-danger text-size-large"></i></div>

									</div>
							</div>
						</div>
					</div>
					<!-- /Orders -->
				</div>
<br>
			 	<div class="row">

					<!-- Leads -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<img src="https://www.auctionhouse.jp/img/icons/bid.png" style="height: 60px;  width: 70px;">
									</div>
									<a href="status.php?bids=true">
									<div class="col-md-6 col-xs-6 no-padding">
									 <span class="">Pending Bids</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
										    <?php
if ($ob->p_bids() >= 1)
{
    echo $ob->p_bids();
}
else
{
    echo 0;
}
?>   <i class="icon-arrow-up16 text-success text-size-large"></i>
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
										<img src="https://www.auctionhouse.jp/img/icons/ship.png" style="height: 60px;width: 80px;">
									</div>
									<a href="status.php?consignne=true">
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="" style="margin: auto;display: table">Pending Consignee</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10 text-center"><?php
if ($ob->p_cons() >= 1)
{
    echo $ob->p_cons();
}
else
{
    echo 0;
}

?>
                                       <i class="icon-arrow-up16 text-success text-size-large"></i>
                                    </div>

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
									<img src="img/box.png" style="height: 60px;width: 80px;">
									</div>
										<a href="status.php?dhl=true">
									<div class="col-md-6 col-xs-6 no-padding">
									<span class="">Pending DHL</span>
									<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
									    <?php
echo ($ob->p_dhl())
?>
									    
									     <i class="icon-arrow-up16 text-success text-size-large"></i></div>
								</div>
								</a>
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
										<a href="status.php?inq=true">
									<div class="col-md-6 col-xs-6 no-padding">
									<span class="">Pending Inquires</span>
									<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
									    <?php
echo ($ob->p_inq())
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
				 
					<!-- /Orders -->
				</div>
		  
		  <br>
		  
		   	<div class="row">

					<!-- Leads -->
					<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
										<img src="https://icon-library.com/images/vehicle-icon-vector/vehicle-icon-vector-8.jpg" style="height: 60px;  width: 70px;">
									</div>
									<a href="vehicle-view.php">
									<div class="col-md-6 col-xs-6 no-padding">
									 <span class="">In Stock</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
										    <?php
echo $ob->in_stock();

?>   <i class="icon-arrow-up16 text-success text-size-large"></i>
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
										<img src="https://image.flaticon.com/icons/png/512/2156/2156144.png" style="height: 60px;width: 80px;">
									</div>
									<a href="sold.php">
									<div class="col-md-6 col-xs-6 no-padding">
										<span class="" style="margin: auto;display: table">Out Stock</span>
										<div class="x3 text-light no-padding no-margin m-t-10 m-b-10 text-center"><?php
echo $ob->out_stock();

?>
                                       <i class="icon-arrow-up16 text-success text-size-large"></i>
                                    </div>

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
									<img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/new-car-1-970957.png" style="height: 60px;width: 80px;">
									</div>
										<a href="offer.php">
									<div class="col-md-6 col-xs-6 no-padding">
									<span class="">New Arrival</span>
									<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
									    <?php
echo ($ob->new_arr());
?>
									    
									     <i class="icon-arrow-up16 text-success text-size-large"></i></div>
								</div>
								</a>
								</div>
							</div>
						</div>
					</div>
					
						<div class="col-md-3 col-sm-6">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10 panel-default">
								<div class="row">
									<div class="col-md-6 col-xs-6">
									<img src="img/16214034.png" style="height: 60px;width: 80px;">
									</div>
										<a href="reserved.php">
									<div class="col-md-6 col-xs-6 no-padding">
									<span class="">Reserved</span>
									<div class="x3 text-light no-padding no-margin m-t-10 m-b-10">
									    <?php
echo ($ob->reserveds());
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
				 
					<!-- /Orders -->
				</div>

			</section>
