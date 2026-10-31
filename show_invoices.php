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
  <div class="container page-content">
  
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
                  <th>Invoice Id</th>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Consigner Name</th>
                  <th>Consinger Address</th>
                  <th>Assigned By</th>
                  <th>Action</th>
                </tr>
              </thead>
     
            <tbody>
                
                <?php
                 foreach($ob->sel_invoices() as $in)
                 {
                     echo("<tr>
                     
                     <td>".$in['num']."</td>
                     <td>".$in['cname']."</td>
                     <td>".$in['cadd']."</td>
                     <td>".$in['coname']."</td>
                     <td>".$in['coadd']."</td>
                     <td>".$in['email']."</td>
                     ");
                     
                     echo('
                     <td class="text-center">
                      <ul class="icons-list">
                        <li><a href="invoice_template.html" target="_blank"><i class=""></i></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a target="_blank" href="stock-invoice.php?no='.$in['num'].'"><i class="icon-eye2"></i> View</a></li>
                            
                                 <li>
                                  <a data-item-id="'.$in['num'].'" onclick="open_pop('.$in['num'].',this)"><i class="fa fa-trash"></i>Delete</a>
                                  </li>
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                     
                     </tr>');
                 }
                ?>
                
            </tbody>
     
            </table>
                  </div>
                  </div></div></div> 

<?php
include('footer.php');

?>

<script src="lib/js/plugins/notifications/sweetalert.js"></script>
<script src="lib/js/pages/extensions/extension_sweet_alert.js"></script>