<?php
include('header.php');
?>
<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Vehicle</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
  
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Vehicle</div>
          </div>
          
          <div class="table-responsive">
              
                
           
                    
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                    <th>Image</th>

 <th>Maker</th>
<th>Model</th>
<th>Chassis Code</th>
<th>Year </th>
<th>Price</th>


<th>View Details</th>
                </tr>
              </thead>
                <tbody>
            
 <?php

                   $ob->vehicle_view_agent(); 
                    
                    
                    
                    ?>

              <tbody>
                  </table>
                  </div>
                  </div></div></div> 

<?php
include('footer.php');

?>

<script src="lib/js/plugins/notifications/sweetalert.js"></script>
<script src="lib/js/pages/extensions/extension_sweet_alert.js"></script>