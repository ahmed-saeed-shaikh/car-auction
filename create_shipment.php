<?php include('header.php');?>
			
			


<section class="main-container">
			   
		<h1 style="display:none">Empty Heading</h1>

			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title"><i class="icon-display4"></i>Consigning Vehicle</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li class="active">Consigning Vehicle</li>
					</ul>
				</div>
			</div>
			<!-- /Page Header-->

			<div class="container-fluid page-content">
				
				<div class="row">

					<!-- Leads -->
					<div class="col-md-9 col-sm-9">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10">
								 
								<form action="main.php" method="get">
								            <input type="hidden" name="v_id" id="v_id" value="<?php echo($_GET['stock_id'])?>"/>
								        <div class="row">
								            <div class="col-md-12 mt-50">
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>Stock Id            </label>
								                        
								                        <input type="text" name="v_id" class="form-control" value="<?php echo($_GET['stock_id'])?>"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Lot Number
								                        </label>
								                        
								                        <input type="text" name="lot_no" placeholder="Lot Number" class="form-control"/>
								                    </div>
								                </div>
								              
								              
								              
								              
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Name
								                        </label>
								                        
								                        <input type="text" placeholder="Customer Name" name="cust_name" class="form-control"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Contact Number
								                        </label>
								                        
								                        <input type="text" name="cust_no" placeholder="Contact Number" class="form-control"/>
								                    </div>
								                </div>
								                
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Address
								                        </label>
								                        
								                        <input type="text" placeholder="Customer Address"  name="cust_addr" class="form-control"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Notify Person Name
								                        </label>
								                        
								                        <input type="text" placeholder="Notify Person Name" name="p_name" class="form-control"/>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-3">
								                        <label>
								                           Country
								                        </label>
								                        
								                        <input type="text" placeholder="Country" name="country" class="form-control"/>
								                    </div>
								                    <div class="col-md-3">
								                        <label>
								                           SHIPPING INFO
								                        </label>
								                        
								                        <input  name="shipinfo" placeholder="SHIPPING INFO" class="form-control">
								                        
								                    </div>
								                    
								                    <div class="col-md-6">
								                        <label>
								                           Departure Port
								                        </label>
								                        
								                        <input   placeholder=" Departure Port" name="d_port" class="form-control">
								                            
								                       
								                    </div>
								                </div>
								                
								                <div class="row">
								                    
								                    <div class="col-md-4">
								                        
								                        <label> ETD</label>
								                        
								                        <input type="number" placeholder="ETD" name="etd" class="form-control"/>
								                    </div>
								                     <div class="col-md-4">
								                        
								                        <label>
								                            ETA
								                        </label>
								                        
								                        <input type="number" placeholder="ETA" name="eta" class="form-control"/>
								                    </div>
								                    <div class="col-md-4">
								                        
								                        <label>
								                            Vessel Name
								                        </label>
								                        
								                        <input type="text" placeholder="Vessel Name" name="v_name" class="form-control"/>
								                    </div>
								                   
								                    </div>
								                    
								                     <div class="row">
								                    
								                    <div class="col-md-4">
								                        
								                        <label> Discharging Port</label>
								                        
								                        <input type="number" placeholder="Discharging Port" name="dport" class="form-control"/>
								                    </div>
								                    
								                     <div class="col-md-4">
								                        
								                        <label> Container</label>
								                        
								                        <input type="number" placeholder="Container" name="con" class="form-control"/>
								                    </div>
								                    
								                     <div class="col-md-4">
								                        
								                        <label> Shipment type</label>
								                        
								                        <select name="ship_type" class="form-control" >
								                            <option value="RORO">RORO</option>
								                            <option value="Container">CONTAINER</option>
								                        </select>
								                    </div>
								                    
								                    
								                    </div>
								                    
								                    <div class="row">
								                    <div class="col-md-12">
								                        <input type="submit" class="form-control btn theme-btn btn-primary" style="color:white;margin-top:20px;" name="c_ship"/>
								                    </div>
								                </div>
								                
								                
								            </div>
								        </div>
								        </form>
								
								
							</div>
							</div>
							
					</div>
				</div>
	
			

			</section>
						<!-- Footer -->

<script src="lib/js/core/jquery/jquery.easing.min.js"></script>
<script src="lib/js/charts/jquery.easypiechart.min.js"></script>
<script src="lib/js/charts/raphael-min.js"></script>
<script src="lib/js/charts/morris.min.js"></script>
<script src="lib/js/charts/highcharts.js"></script>
<script src="lib/js/charts/highcharts-more.js"></script>
<script src="lib/js/maps/jvectormap/jvectormap.min.js"></script>
<script src="lib/js/maps/jvectormap/map_files/world.js"></script>
<script src="lib/js/pages/dashboard.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
		<?php include('footer.php');		?>






