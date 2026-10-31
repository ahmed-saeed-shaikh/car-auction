<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">DHL </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title"> DHL DETAILS</div>
          </div>
          <div class="panel-body">
            <table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
              <thead class="borders">
                  <?php
           
               foreach($ob->session() as $ch){
                   
                  $ag = $ch['role'];
               }
					if($ag == 2 || $ag ==3){
					    
					     echo('
               <tr>
								        <th>Stock Id</th>  
								        <th> Name</th>
								   
								    <th>Number</th>
								    <th>Agent</th>
								        <th>DHL Date</th>
								        <th>Status</th>
								        
								        
								        
								        
								        <th>Action</th>
								    </tr>
              </thead>
              <tbody> 
              ');
                foreach($ob->dhl_all_details()as $cons){
					         $date =date_create($cons['dhl_date']);
                $da =  date_format($date,"Y-M-d");
        
            echo("<tr>
                <td>".$cons['v_id']."</td>
                
                <td>".$cons['c_name']."</td>
              
               <td>".$cons['c_no']."</td>
                <td>".$cons['full_name']."</td>
                
                
                <td>".$da."</td>
                ");
                if($cons['dhl_status'] ==  1){
                    echo('<td><span class="label label-primary"> Pending </span></td>');
                    
                }
                else if($cons['dhl_status'] ==  2){
                    echo('<td><span class="label label-success"> Approved </span></td>');
                    
                }
                    else if($cons['dhl_status'] ==  3){
                    echo('<td><span class="label label-danger"> Declined </span></td>');
                    
                }
                
                echo("
                
                  <td class='text-center'>
                      <ul class='icons-list'>
                        <li><a href='invoice_template.html' target='_blank'><i class=''></i></a></li>
                        <li class='dropdown'>
                          <a href='#' class='dropdown-toggle' data-toggle='dropdown'></a>
                          <ul class='dropdown-menu dropdown-menu-right'>
                            
                            <li><a href='all-dhl.php?up=".$cons['dhl_id']."'><i class='fa fa-eye'></i> View</a></li>
                                 
                               ");
                               if($ag == 2 || $ag ==3 )
                               {
                                   echo("<li><a href='main.php?del_dhl=".$cons['dhl_id']."'><i class='fa fa-trash'></i> Delete</a></li>");
                               }
                               echo("
                                  </li>
                                  
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                
            </tr>");}
					    
					}
					else{
				        echo('
               <tr>
								        <th>Stock Id</th>  
								        <th>Name</th>
								    <th> Address</th>
								    <th>Number</th>
								    <th>Tracking Number</th>
								        <th>DHL Date</th>
								        <th>Status</th>
								        
								        
								        
								        
								        <th>Action</th>
								    </tr>
              </thead>
              <tbody> 
              ');
					       foreach($ob->dhl_details_user()as $cons){
					         $date =date_create($cons['dhl_date']);
                $da =  date_format($date,"Y-M-d");
        
            echo("<tr>
                <td>".$cons['v_id']."</td>
                
                <td>".$cons['c_name']."</td>
                <td>".$cons['c_add']."</td>
               <td>".$cons['c_no']."</td>
                <td>".$cons['tracking_no']."</td>
                
                
                <td>".$da."</td>
                ");
                if($cons['dhl_status'] ==  1){
                    echo('<td><span class="label label-primary"> Pending </span></td>');
                    
                }
                else if($cons['dhl_status'] ==  2){
                    echo('<td><span class="label label-success"> Approved </span></td>');
                    
                }
                    else if($cons['dhl_status'] ==  3){
                    echo('<td><span class="label label-danger"> Declined </span></td>');
                    
                }
                
                echo("
                
                  <td class='text-center'>
                      <ul class='icons-list'>
                        <li><a href='invoice_template.html' target='_blank'><i class=''></i></a></li>
                        <li class='dropdown'>
                          <a href='#' class='dropdown-toggle' data-toggle='dropdown'></a>
                          <ul class='dropdown-menu dropdown-menu-right'>
                            
                            <li><a href='all-dhl.php?up=".$cons['dhl_id']."'><i class='fa fa-eye'></i> View</a></li>
                                 
                                 ");
                                 if($cons['dhl_status'] == 1 || $cons['dhl_status'] == 3){
                                     echo(" <li><a href='dhl.php?dhl_id=".$cons['dhl_id']."'><i class='fa fa-edit'></i> Edit</a></li>
                                     <li><a href='main.php?del_dhl=".$cons['dhl_id']."'><i class='fa fa-trash'></i> Delete</a></li>
                                     
                                     ");
                                 }
                                 echo("
                                 
                                  </li>
                                  
                            
                          </ul>
                        </li>
                      </ul>
                    </td>
                
            </tr>");
					  
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
