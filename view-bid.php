<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Bid</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">BIDS</div>
          </div>
          <div class="panel-body">
            <table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
              <thead class="borders">
                <tr>
                  
                  <th>Lot</th>
                  <th>Maker</th>
                  <th>Model</th>
                <th>Bid Price</th>
                <th>Result</th>
                <th>Country</th>
             
                  <th>Agent</th>
              
                    
                  <th>Group</th>
                  <th>Unit</th>
                  <th>Date</th>
                  <th>Status</th>
                                   <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php

           foreach($ob->session() as $user){
              
 foreach($ob->sel_bid() as $bid) { 
              $date=date_create($bid['bid_date']);
      $tdate =  date_format($date,"Y-M-d");
  echo (' <tr>
                    
                    <td><h4 class="no-margin"><a href="#">'.$bid['bit_alotNumb'].'</a> </h4></td>
                    <td>'.$bid['b_name'].'</td>                 
                  
                    
                    <td>'.$bid['bid_vModel'].'</td>  
                        <td>'.number_format($bid['bid_amount'], !($bid['bid_amount'] == (int)$bid['bid_amount']) * 2).'</td>  
                        <td>'.number_format($bid['final_bid_price'], !($bid['final_bid_price'] == (int)$bid['final_bid_price']) * 2).'</td>
                        <td>'.$bid['country'].'</td>
                        
            
                     <td>'.$bid['full_name'].'</td>
                      <td>'.$bid['bid_group'].'</td>
                      
                      <td>'.$bid['bid_unit'].'</td>
                      
                   
                     <td>'.$tdate.'</td>  
                    <td>
                 ');
                  if($bid['bid_status'] == 1){
                          echo('<span class="label label-primary">Pending </span>');
                          
                      }
                      if($bid['bid_status'] == 2){
                          echo('<span class="label label-warning">Sold to Other</span>');
                          
                      }
                           if($bid['bid_status'] == 3){
                          echo('<span style="background-color:green" class="label label-sucsess">Bought</span>');
                          
                      }
                           if($bid['bid_status'] == 4){
                          echo('<span class="label label-danger">Canclled</span>');
                          
                      }
                        if($bid['bid_status'] == 5){
                          echo('<span class="label label-info">Unsold</span>');
                          
                      }
                      if($bid['bid_status'] == 6){
                          echo('<span class="label label-info">Bid Updated</span>');
                          
                      }
                      if($bid['bid_status'] == 7){
                          echo('<span class="label label-info">Auctioned High</span>');
                          
                      }
                      
                      
                 echo('
                     
                  </td>
                  
                 
                         
                    <td class="text-center">
                      <ul class="icons-list">
                      
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li> <a href="bid-view.php?bid='.$bid['bid_id'].'"><i class="fa fa-eye"></i>View</a></li>
                            
                            ');
                            date_default_timezone_set("Asia/Karachi");
                            $date = date('d');
                            $hour = date('h');
                            $year = date('Y');
                            $month = date('m');
                            $c =  date_create($bid['bid_date']);
                            $db_date = date_format($c,'d');
                            $db_hour = date_format($c,'h')+6;
                            $db_month = date_format($c,'m');
                            $db_year = date_format($c,'Y');
                            
                            /*if($bid['bid_status'] == 1 && $db_date == $date && $month==$db_month && $year == $db_year && $hour <= $db_hour)
                            {
                               echo('
                               <li> <a href="make-bid.php?bid_id='.$bid['bid_id'].'"><i class="fa fa-eye"></i>Edit</a></li>
                               <li> <a href="main.php?ab_id='.$bid['bid_id'].'"><i class="fa fa-eye"></i>Cancel</a></li>'); 
                            }*/
                            
                            if($bid['bid_status'] == 1 )
                            {
                               echo('
                               <li> <a href="make-bid.php?bid_id='.$bid['bid_id'].'"><i class="fa fa-edit"></i>Edit</a></li>
                               <li> <a href="main.php?ab_id='.$bid['bid_id'].'"><i class="fa fa-times "></i>Cancel</a></li>
                               <li> <a href="main.php?tdid='.$bid['bid_id'].'"><i class="fa fa-trash"></i>Delete</a></li>'); 
                               
                            }
                            echo('
                            
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                  </tr>');
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
