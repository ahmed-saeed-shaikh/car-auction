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
            <table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
              <thead class="borders">
                  <tr>
								        <th>Stock Id</th>
								        <th>Lot No</th>
								        <th>Name</th>
								        <th>Number</th>
								        <th> Address</th>
								        <th>Person Name</th>
								        <th>Price</th>
								         
								        <th>Ship Type</th>
								        <th>Ship Date</th>
								        <th>Action</th>
								        
								    </tr>
              </thead>
              <tbody>
               <?php
								    
								       $ob->sel_shipmentDetails(); 
								      
								 
								    
								    
								    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
  </div>
</section>
<?php include('footer.php');?>
