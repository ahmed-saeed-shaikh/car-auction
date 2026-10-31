<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Shipment Details</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">SHIPMENT DETAILS</div>
          </div>
          <div class="panel-body">
            <h3>Shipment Id: <?php echo($_GET['ship_id'])?></h3>
                        <form action="main.php" method="get">
                        <?php
                          foreach($ob->sel_dhlById() as $dhl)
                          {
                              echo('
								              <input type="hidden" name="ship_id" id="ship_id" value="'.$dhl['dhl_id'].'"/>
								        <div class="row">
								            <div class="col-md-12 mt-50">
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Name
								                        </label>
								                        
								                        <input type="text" name="cust_name" class="form-control" value="'.$dhl['cust_name'].'"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Contact Number
								                        </label>
								                        
								                        <input type="text" name="cust_no" class="form-control" value="'.$dhl['cust_no'].'"/>
								                    </div>
								                </div>
								                
								                <div class="row">
								                    <div class="col-md-6">
								                        <label>
								                            Customer Address
								                        </label>
								                        
								                        <input type="text" name="cust_addr" class="form-control" value="'.$dhl['cust_addr'].'"/>
								                    </div>
								                    <div class="col-md-6">
								                        <label>
								                            Notify Person Name
								                        </label>
								                        
								                        <input type="text" name="p_name" class="form-control" value="'.$dhl['person_name'].'"/>
								                    </div>
								                </div>
								                <div class="row">
								                   
								                    
								                    <div class="col-md-6">
								                        <label>
								                            Shipment Type
								                        </label>
								                        
								                        <select  name="ship_type" class="form-control">');
								                        if($dhl['shipment_type'] == "DHL")
								                        {
								                            echo('
								                            <option value="DHL" selected>
								                                DHL
								                            </option>
								                            ');
								                        }
								                        else
								                        {
								                            echo('<option value="RORO" selected>
								                                RORO
								                            </option>');
								                        }
								                            echo('
								                            
								                        </select>
								                    </div>
								               
								                    
								                    <div class="col-md-6">
								                        
								                        <label>
								                            Lot Number
								                        </label>
								                        
								                        <input type="number" name="lot_no" class="form-control" value="'.$dhl['lot_no'].'"/>
								                    </div>
								                    </div>
								                    
								                    <div class="row">
								                    
								                    <div class="col-md-6">
								                      <label>
								                       Stock Id
								                      </label>
								                      
								                      <input type="number" value="'.$dhl['stock_id'].'" name="v_id" class="form-control"/>
								                    </div>
								                    
								                    <div class="col-md-6">
								                      <label>
								                       DHL Amount
								                      </label>
								                      
								                      <input type="number" value="'.$dhl['dhl_amount'].'" name="dhl_amount" class="form-control"/>
								                    </div>
								                    
								                    </div>
								                    <div class="row">
								                    <div class="col-md-6">
								                    
								                        <input type="submit" class="form-control btn theme-btn btn-primary" style="color:white;margin-top:20px;" name="update_shipment"/>
								                    </div>
								                </div>
								                
								                
								            </div>
								        </div>
								        ');
                          }
                        ?>
                                   </form>
								
           
            
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
  </div>
</section>
<?php include('footer.php');?>
