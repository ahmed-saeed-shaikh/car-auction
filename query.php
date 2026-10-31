<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Query</li>
      </ul>
    </div>
  </div>
  
  <?php 
  foreach($ob->session() as $rights){

    if($rights['role'] == 2){

      echo('<div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">UNASSIGN QUERIES</div>
          </div>
          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Query Date</th>
                  <th>Email</th>
                  <th>Contact</th>
                  
                                    <th>View</th>   <th>Assign</th>
                </tr>
              </thead>

              <tbody>
             ');
                foreach($ob->querys() as $daat){
                  $a = substr($daat['date'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$daat['id'].'</td>
                  <td>'.$daat['name'].'</td>
                   <td>'.$daat['country'].'</td>
                  <td>'.$final_date.'</td>
                  <td><a>'.$daat['email'].'</a></td>
                  <td>'.$daat['num'].'</td>
                                    <td><a href="query-view.php?query='.$daat['id'].'"><i class="fa fa-eye"></i></a></td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                      <ul class="dropdown-menu dropdown-menu-right"> 
  <li><a href="#">Assign To</a></li>
                       ');

                        
                  foreach($ob->user_view() as $user){
                  echo('
                      
                        <li><a href="query-string.php?query_id='.$daat['id'].'&agent='.$user['id'].'">'.$user['full_name'].'</a></li>
                       
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
          
      



 <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ASSIGN QUERIES</div>
          </div>
          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                  <th>Assign To</th>
                  
                  <th>Status</th>

                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
           ');
                foreach($ob->querys_assign() as $daa){
                  $a = substr($daa['date'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$daa['idd'].'</td>
                  <td>'.$daa['name'].'</td>
                   <td>'.$daa['country'].'</td>
                  <td>'.$final_date.'</td>
                  <td><a>'.$daa['full_name'].'</a></td>
              
                  <td>
                   '); 

      if($daa['st'] == 1){
        echo('<span class="label label-danger">Unread</span>');
      }
      
     else if($daa['st'] == 2){
        echo('<span class="label label-warning">In Process</span>');
      }

     else if($daa['st'] == 3){
                  echo('<a href="javascript:void(0)" class="label label-primary">Abort</a>');

              }
             else if($daa['st'] == 4){
                  echo('<a href="javascript:void(0)" class="label label-success">Deliverd</a>');

              }
      


echo('

                  </td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                      <ul class="dropdown-menu dropdown-menu-right"> 
  <li><a href="#">Assign To</a></li>
                       ');

                        
                  foreach($ob->user_view() as $user){
                  echo('
                      
                        <li><a href="query-string.php?query_id='.$daa['idd'].'&agent='.$user['id'].'">'.$user['full_name'].'</a></li>
                       
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
 </div>
 </div>
 </div>');
    }
    else{
      echo('<div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">MY QUERIES</div>
          </div>
          
         
          
      




          
          <div class="table-responsive">
            <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Email</th>
                  <th>Query Date</th>
                  
                  <th>Status</th>

                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
              ');
                foreach($ob->querys_assign_agent($rights['id']) as $daa){
                  $a = substr($daa['date'], 0,10);
                $date= date_create($a);
              $final_date=  date_format($date,"d-M-Y");

                  echo('
                <tr>
                  <td>'.$daa['idd'].'</td>
                  <td>'.$daa['name'].'</td>
                   <td>'.$daa['country'].'</td>
                       <td>'.$daa['email'].'</td>
                  <td>'.$final_date.'</td>
                
              
                
                   '); 

     if($daa['st'] == 1){
                  echo('<td><a href="javascript:void(0)" class="label label-danger">Unread</a></td>');

              }
             else if($daa['st'] == 2){
                  echo('<td><a href="javascript:void(0)" class="label label-warning">In process</a></td>');

              }
             else if($daa['st'] == 3){
                  echo('<td><a href="javascript:void(0)" class="label label-primary">Abort</a></td>');

              }
             else if($daa['st'] == 4){
                  echo('<td><a href="javascript:void(0)" class="label label-success">Deliverd</a></td>');

              }


echo('

                
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                      <ul class="dropdown-menu dropdown-menu-right"> 

                      <li><a  href="query-view.php?query='.$daa['idd'].'"><i class="icon-eye2"></i> View</a></li>
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
  }


   ?>
 

<?php include('footer.php');?>
<script src="lib/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="lib/js/plugins/tables/datatables/extensions/col_reorder.min.js"></script>
<script src="lib/js/pages/tables/datatable_extension_column_reorder.js"></script>




