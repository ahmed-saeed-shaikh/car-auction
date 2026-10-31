<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Brand</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">AUCTION  INVOICE</div>
          </div>
          <div class="panel-body">
            <table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
              <thead class="borders">
               
                <?php

           foreach($ob->session() as $user){
              if($user['role'] == 2){
                  echo(' <tr>
                  <th>Invoice No</th>
                  <th>Issued to</th>
                  
                  <th>Agent</th>
                  <th>Amount</th>
                  <th>Date</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>');
 foreach($ob->auction_invoice_select() as $inv) { 
              $date=date_create($inv['date']);
      $tdate =  date_format($date,"Y-F-d");
  echo (' <tr>
                    <td>#'.$inv['invoice_num'].'</td>
                    <td><h4 class="no-margin"><a href="#">'.$inv['name'].'</a> </h4></td>
                                    
                  
                    
                    <td>'.$inv['full_name'].'</td>  
                    
                      <td> <h4 class="no-margin text-semibold text-danger-light">$ '.$inv['price'].'  </h4></td>
                      <span class="label label-danger"> </span>
                    </td>
                     <td>'.$tdate.'</td>  
                    <td class="text-center">
                      <ul class="icons-list">
                        <li><a href="invoice_template.html" target="_blank"><i class=""></i></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="auction-invoice.php?no='.$inv['invoice_num'].'"><i class="icon-eye2"></i> View</a></li>
                            <li>
                                  <a data-item-id="'.$inv['invoice_num'].'" onclick="open_pop('.$inv['invoice_num'].',this)"><i class="fa fa-trash"></i>Delete</a>
                                  </li>
                            
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                  </tr>');
}

              }
              else{

echo(' <tr>
                  <th>Invoice No</th>
                  <th>Issued to</th>
                  
                  <th>Address</th>
                  
                  <th>Amount</th>
                    <th>Date</th>
                  <th class="text-center">Actions</th>
                </tr>  </thead>
              <tbody>');
foreach($ob->select_all_auction_invoice() as $inv) { 
              $date=date_create($inv['date']);
      $tdate =  date_format($date,"Y-M-d");
  echo (' <tr>
                    <td>#'.$inv['invoice_num'].'</td>
                    <td><h4 class="no-margin"><a href="#">'.$inv['name'].'</a> </h4></td>
                    <td>'.$inv['address'].'</td>                 
                  
                    
           
                    
                      <td> <h4 class="no-margin text-semibold text-danger-light">$ '.$inv['price'].'  </h4></td>
                      <span class="label label-danger"> </span>
                    </td>
                     <td>'.$tdate.'</td>  
                    <td class="text-center">
                    
                      
                       
                           <a href="auction-invoice.php?no='.$inv['invoice_num'].'"><i class="icon-eye2"></i> View</a>
                            
                            
                           
                       
                    </td>
                  </tr>');
}


              }
           }
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
