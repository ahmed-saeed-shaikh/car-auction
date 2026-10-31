<?php include('header.php');?>
			
			


<section class="main-container">
			   
		<h1 style="display:none">Empty Heading</h1>

			<!--Page Header-->
			<div class="header">
				<div class="header-content">
					<div class="page-title"><i class="icon-display4"></i>DHL Request</div>
					<ul class="breadcrumb">
						<li><a href="index.html"></a></li>
						<li class="active">DHL </li>
					</ul>
				</div>
			</div>
			
			<?php
			   include("show_message.php");
			?>
			<!-- /Page Header-->

			<div class="container-fluid page-content">
				
				<div class="row">

					<!-- Leads -->
					<div class="col-md-12 col-sm-12">
						<div class="panel panel-flat border-none">
							<div class="panel-body p-b-10">
								  			  
							
								        <?php
 
if(isset($_GET['dhl_id'])){
	foreach($ob->sel_dhlByID() as $dhll){
echo('<form action="main.php" method="get">
					 <input type="hidden" name="dhl_id" id="v_id" value="'.$dhll['dhl_id'].'"/>
								        <div class="row">
								            <div class="col-md-12 mt-50">

								                <div class="row">

								                    <div class="col-md-12">
								                        <label>Stock Id            </label>
								                        
							 <input type="text" name="v_id" class="form-control" value="'.$dhll['v_id'].'"/>
								                    </div>
								                    
								                </div>
								              
								              
								              
								              
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Name
								                        </label>
			<input type="text" placeholder="Customer Name" name="cust_name" class="form-control" value="'.$dhll['c_name'].'"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Contact Number
								                        </label>
								       <input type="text" name="cust_no" placeholder="Contact Number" class="form-control" value="'.$dhll['c_no'].'"/>
								                    </div>
								                </div>
								                
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Address
								                        </label>
								                        
								       <input type="text" placeholder="Customer Address"  name="cust_addr" class="form-control" value="'.$dhll['c_add'].'"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Notify Person Name
								                        </label>
								                        
								          <input type="text" placeholder="Notify Person Name" name="p_name" class="form-control"  value="'.$dhll['person'].'"/>
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-6">
								                    <label>
								                    Country
								                    </label>
								                        <select class="form-control">
								                           
								                        
								                        ');
								                        foreach($ob->echoCountries() as $vals)
								                        {
								                            if($dhll['country'] == $vals)
								                            {
								                              echo('<option selected value="'.$vals.'">'.$vals.'</option>');    
								                            }
								                            else
								                            {
								                                echo('<option value="'.$vals.'">'.$vals.'</option>');
								                            }
								                            
								                        }
								                        echo('</select>
								    
								                    </div>
								                    <div class="col-md-4">
								                        <label>
								                           Invoice Amount
								                        </label>
								                        
								                        <input  name="amount" placeholder="Invoice Amount" class="form-control" value="'.$dhll['price'].'">
								                        
								                    </div>
								                    <div class="col-md-2">
								                        <label>
								                           Price Type
								                        </label>
								                        <select  name="type" placeholder="" class="form-control">
								                        ');
														if($dhll['p_type'] == "C&F"){
									echo('
								                  <option value="C&F" selected>C&F</option>
								              <option value="FOB">FOB</option>
								                        ');	

														}
										else{
			echo('					<option value="C&F" >C&F</option>
								              <option selected value="FOB">FOB</option>');

										}				
								          echo('              
								                        </select>

								                        
								                    </div>
								                    
								                     
								                    </div>
								                    
								                    <div class="row">
								                    <div class="col-md-12">
								                        <input type="submit" class="form-control btn theme-btn btn-primary" style="color:white;margin-top:20px;" value="Update DHL" name="dhl-update-btn"/>
								                    </div>
								                </div>
								                
								                
								            </div>
								        </div>
								        </form>');

}}
else{
    echo('	<form action="main.php" method="get">
					 <input type="hidden" name="v_id" id="v_id" value=" "/>
								        <div class="row">
								            <div class="col-md-12 mt-50">

								                <div class="row">

								                    <div class="col-md-9">
								                        <label>Stock Id            </label>
								                        
								                        <input type="text" name="v_id" id="st_id" class="form-control"  />
								                    </div>
								                    <div class="col-md-3">
								                        <label style="color:#fff">Stock Id            </label>
								                        <br>
								                        
								                        <input type="button" id="get_vehicle" name="" value="Get Vehicle" class="btn btn-danger btn-block"  />
								                    </div>
								                    <div class="col-md-6">
								                     
								                     <div class="alert alert-danger" id="mxg" style="display:none;font-size:12px">
                                                       <strong>No consigne found</strong>.
                                                     </div>
                                                     
								                    </div>
								                </div>
								                
								                <div class="row">
								    
								    <div class="col-md-12 mt-50">
								        <table class="table table-bordered">
								            <tr>
								                <th>
								                    Stock Id
								                </th>
								                <th>
								                    Description
								                </th>
								                
								               
								                
								                <th>
								                    Action
								                </th>
								                
								            </tr>
								            
								           <tbody id="cars">
								          
								                
								           </tbody>
								           </table>
								           </div>
								           </div>
								              
								              
								              <br><br>
								              
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Name
								                        </label>
			<input type="text" placeholder="Customer Name" name="cust_name" class="form-control" required  />
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Contact Number
								                        </label>
								       <input type="text" name="cust_no" placeholder="Contact Number" class="form-control" required />
								                    </div>
								                </div>
								                
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Address
								                        </label>
								                        
								       <input type="text" placeholder="Customer Address"  name="cust_addr" class="form-control"required  />
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Notify Person Details
								                        </label>
								                        
								          <input type="text" placeholder="Notify Person Name" name="p_name" class="form-control" required />
								                    </div>
								                </div>
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                           Country
								                        </label>
								                        
								    <select name="country" class="form-control" required  />
								     <option value=""><-- Select Country --></option>
								                        ');
								                        
								                        
								                      
 

                          foreach($ob->echoCountries() as $vals)
                          {
                              echo("<option value='$vals'>$vals</option>");
                          }
                          echo('
								    </select>
								                    </div>
								                    <div class="col-md-4">
								                        <label>
								                           Invoice Amount
								                        </label>
								                        
								                        <input  name="amount" placeholder="Invoice Amount" class="form-control" required>
								                        
								                    </div>
								                    <div class="col-md-2">
								                        <label>
								                           Price Type
								                        </label>
								                        
								                        <select  name="type" placeholder="" class="form-control">
								                        	<option value="C&F">C&F</option>
								                        	<option value="FOB">FOB</option>
								                        </select>
								                        
								                    </div>
								                    
								                     
								                    </div>
								                    
								                    <div class="row">
								                    <div class="col-md-12">
								                        <input type="submit" class="form-control btn theme-btn btn-primary" style="color:white;margin-top:20px;" name="dhl-btn"/>
								                    </div>
								                </div>
								                
								                
								            </div>
								        </div>
								        </form>');
}

?>
								
								
							</div>
							</div>
							
					</div>
				</div>
	
			

			</section>
			
			<script>
			    
			  document.getElementById('get_vehicle').addEventListener('click',function()
			    {
			        $.ajax(
			        {
			            type : "get",
			            url  : "main.php",
			            data : {sel_for_dhl:"", st_id : document.getElementById('st_id').value},
			            success : function(response)
			            {
			                if(response !=1)
			                {
			                    document.getElementById('cars').innerHTML = response;
			                document.getElementById('v_id').value = document.getElementById('st_id').value;
			                }
			                else
			                {
			                   document.getElementById('mxg').style.display="block";
			                }
			            }
			        }
			        );
			    });
			    
			</script>
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






