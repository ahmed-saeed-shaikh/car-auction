<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Stock Invoice</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">STOCK INVOICE</div>
          </div>
          <div class="panel-body">
            
<table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
                <thead class="borders">
                  <tr>
                    <th>Invoice No</th>
                
                    <th>Issued to</th>
                     <th>Customer Address</th>
                    <th>Consignee Name </th>
                    
       
                    <th>Agent</th>
                       <th>Date</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                  foreach($ob->session() as $user){
                      if($user['role']==2){
                         foreach($ob->invoice_select() as $da) { 
              $date=date_create($da['date_time']);
$daa =  date_format($date,"d-F-Y");
  echo (' <tr>
                    <td>#'.$da['num'].'</td>
                    <td><h4 class="no-margin"><a href="#">'.$da['cname'].'</a> </h4></td>
                    <td>'.$da['cadd'].'</td>                 
                  
                    
                      <td> '.$da['coname'].'  </td>
                    
                   <td> '.$da['full_name'].'  </td>
                      <span class="label label-danger"> </span>
                    </td>
                     <td> '.$daa.'  </td>
                    <td class="text-center">
                      <ul class="icons-list">
                        <li><a href="invoice_template.html" target="_blank"><i class=""></i></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a target="_blank" href="stock-invoice.php?no='.$da['num'].'"><i class="icon-eye2"></i> View</a></li>
                            
                                 <li>
                                  <a data-item-id="'.$in['num'].'" onclick="open_pop('.$in['num'].',this)"><i class="fa fa-trash"></i>Delete</a>
                                  </li>
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                  </tr></tbody>');
                  
}
                      }
                      else{



foreach($ob->invoice_select_user($user['id']) as $da) { 
              $date=date_create($da['date_time']);
$daa =  date_format($date,"d-F-Y");
  echo (' <tr>
                    <td>#'.$da['num'].'</td>
                    <td><h4 class="no-margin"><a href="#">'.$da['cname'].'</a> </h4></td>
                    <td>'.$da['cadd'].'</td>                 
                  
                    
                      <td> '.$da['coname'].'  </td>
                    
                   <td> '.$da['full_name'].'  </td>
                      <span class="label label-danger"> </span>
                    </td>
                     <td> '.$daa.'  </td>
                    <td class="text-center">
                      <ul class="icons-list">
                        <li><a href="invoice_template.html" target="_blank"><i class=""></i></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-eye2"></i> View</a></li>
                            <li><a href="#"><i class="icon-printer2"></i> Print</a></li>
                            
                          </ul>
                        </li>
                      </ul>
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
