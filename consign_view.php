<?php include('header.php');
$ob->brand();
 $ob->model_add();
 $ob->features();
?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Vehicle </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">CONSIGNING DETAILS</div>
          </div>
                
          <?php
          
          foreach($ob->consign_sel_id() as $consign) {
           
          echo('<table class="table">
                  <thead class="borders">
                    <tr>
                      <th>Title </th>
                      <th>Data</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Stock ID</td>
                      <td>'.$consign['v_id'].'</td>
                   
                      
                    </tr>
                    <tr>
                      <td>Customer Name</td>
                       <td>'.$consign['cust_name'].'</td>
                   
                   
                    </tr>
                    <tr>
                      <td>Customer Number</td>
                       <td>'.$consign['cust_no'].'</td>
                     
                    </tr>
                    <tr>
                      <td>Customer address</td>                   
                      <td>'.$consign['cust_addr'].'</td>
                   
                    </tr>

                    <tr>
                      <td>Notify Person</td>
                    <td>'.$consign['person_name'].'</td>
                     
                    </tr>

                   
                      <tr>
                      <td>Shipment Type</td>
                      <td>'.$consign['shipment_type'].'</td>


                        <tr>

                         <tr>
                      <td>Discharging Port</td>
                      <td>'.$consign['discharging_port'].'</td>


                        <tr>

                         <tr>
                      <td>ETA</td>
                      <td>'.$consign['ETA'].'</td>


                        <tr>

                         <tr>
                      <td>Departure Port</td>
                      <td>'.$consign['departure_port'].'</td>


                        <tr>

                         <tr>
                      <td>ETD</td>
                      <td>'.$consign['ETD'].'</td>


                        <tr>
                      <td>Consign Date</td>
                       <td>'.$consign['con_date'].'</td>
                      </tr>

                        
                        ');}
                        ?>
 
                     

                      </table>
                       
          </div>
        </div>
        <div class="col-md-4">
          
           <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">DHL  DETAILS</div>
          </div>
<?php
foreach($ob->dhl_sl_id($consign['v_id']) as $dhll){}
echo('<table class="table">
                  <thead class="borders">
                    <tr>
                      <th>Title </th>
                      <th>Data</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Stock ID</td>
                      <td>'.$dhll['v_id'].'</td>
                   
                      
                    </tr>
                    <tr>
                      <td>Customer Name</td>
                       <td>'.$dhll['c_name'].'</td>
                   
                   
                    </tr>
                    <tr>
                      <td>Customer Number</td>
                       <td>'.$dhll['c_no'].'</td>
                     
                    </tr>

                      <tr>
                      <td>Customer Address</td>
                       <td>'.$dhll['c_add'].'</td>
                     
                    </tr>

                      <tr>
                      <td>Notify person</td>
                       <td>'.$dhll['person'].'</td>
                     
                    </tr> 
                      <tr>
                      <td>Country</td>
                       <td>'.$dhll['country'].'</td>
                     
                    </tr> 
                      
                      <tr>
                      <td>Invoice Amount</td>
                       <td>'.$dhll['price'].$dhll['p_type'].'</td>
                     
                    </tr> 
                     
                      <tr>
                      <td>Action</td>
            <td><a href="dhl.php?dhl_id='.$dhll['dhl_id'].'" class="text-danger">Update</a></td>
                                           
                    </tr> 

                    </table>');
?>
        </div>
</div></div> 
</div>
</section>

<?php include('footer.php');?>
<!-- Page scripts -->
<script src="lib/js/plugins/owl.carousel.js"></script>
<script src="lib/js/pages/extensions/extension_owl_carousel.js"></script>