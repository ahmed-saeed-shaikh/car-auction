<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Inquiries</li>
      </ul>
    </div>
  </div>
  <div class="container page-content">
      <?php 
      foreach($ob->session() as $us){
      if($us['role'] ==2){
          echo('
      }
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">UNASSIGN  INQUIRIES</div>
          </div>
          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                  <th>Email</th>
                  <th>Contact</th>
                           <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                ');
                foreach($ob->inqu() as $daat){
                  $a = substr($daat['date_time'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$daat['inq_id'].'</td>
                  <td>'.$daat['inq_fn'].'</td>
                   <td>'.$daat['inq_country'].'</td>
                  <td>'.$final_date.'</td>
                  <td><a>'.$daat['inq_email'].'</a></td>
                  <td>'.$daat['inq_pno'].'</td>
               
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                      <ul class="dropdown-menu dropdown-menu-right"> 
  <li><a href="#">Assign To</a></li>
                       ');

                        
                  foreach($ob->user_view() as $user){
                  echo('
                      
                        <li><a href="query-string.php?inq_id='.$daat['inq_id'].'&agent='.$user['id'].'">'.$user['full_name'].'</a></li>
                       
                        ');}
                  echo('
                     </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                
              ');}
              echo('
              
                  
              </tbody>
            </table>
          </div>
        </div>
          
        </div>





      </div>
  ');
  echo('
 <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ASSIGN  INQUIRIES</div>
          </div>
          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                <th>Assign to</th>    
                     <th>Status</th>    
                     
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
             ');
                foreach($ob->assign_inq_agent() as $duat){
                  $a = substr($duat['inq_date_time'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$duat['inq_id'].'</td>
                  <td>'.$duat['inq_fn'].'</td>
                   <td>'.$duat['inq_country'].'</td>
                  <td>'.$final_date.'</td>
                  <td><a>'.$duat['full_name'].'</a></td>
                 
                  ');
                  
                    if($duat['inq_status'] == 1){
        echo('<td><span class="label label-danger">Unread</span></td>');
      }
      
     else if($duat['inq_status'] == 2){
        echo('<td><span class="label label-warning">In Process</span></td>');
      }

     else if($duat['inq_status'] == 3){
                  echo('<td><a href="javascript:void(0)" class="label label-primary">Abort</a></td>');

              }
             else if($duat['inq_status'] == 4){
                  echo('<td><a href="javascript:void(0)" class="label label-success">Deliverd</a></td>');

              }
      
               echo('
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                      <ul class="dropdown-menu dropdown-menu-right"> 
  <li><a href="#">Assign To</a></li>
                       ');

                        
                  foreach($ob->user_view() as $user){
                  echo('
                      
                        <li><a href="query-string.php?inq_id='.$duat['inq_id'].'&agent='.$user['id'].'">'.$user['full_name'].'</a></li>
                       
                        ');}
                  echo('
                     </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
                
                ');}
                echo('
                  
              </tbody>
            </table>
          </div>
        </div>
          
        </div>

        </div>



      ');
      }


else{
     echo(' 
       <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ASSIGN  INQUIRIES</div>
          </div>
          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                ');
                foreach($ob->assign_inq_agent_wise($us['id']) as $vic){
                  $a = substr($vic['inq_date_time'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$vic['inq_id'].'</td>
                  <td>'.$vic['inq_fn'].'</td>
                   <td>'.$vic['inq_country'].'</td>
                  <td>'.$final_date.'</td>
                  <td><a>'.$vic['inq_email'].'</a></td>
                  <td>'.$vic['inq_pno'].'</td>
               
               ');
                  if($vic['inq_status'] == 1){
        echo('<td><span class="label label-danger">Unread</span></td>');
      }
      
     else if($vic['inq_status'] == 2){
        echo('<td><span class="label label-warning">In Process</span></td>');
      }

     else if($vic['inq_status'] == 3){
                  echo('<td><a href="javascript:void(0)" class="label label-primary">Abort</a></td>');

              }
             else if($vic['inq_status'] == 4){
                  echo('<td><a href="javascript:void(0)" class="label label-success">Deliverd</a></td>');

              }
               echo('
                  <td class="text-center">
                  <a href="inquires-view.php?inq-id='.$vic['inq_id'].'"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                
              
              
                  
           
      


 

');}
    
}
   echo('   </tbody>
            </table>
          </div>
        </div>
          
        </div>
      
        </div>')       ;
      }
?><br>
 </div> 


 

<?php include('footer.php');?>
<script src="lib/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="lib/js/plugins/tables/datatables/extensions/col_reorder.min.js"></script>
<script src="lib/js/pages/tables/datatable_extension_column_reorder.js"></script>
