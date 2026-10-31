<?php include('header.php');

?>

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
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">View Query</div>
          </div>
                <div class="table-responsive">
                  <?php
                  foreach($ob->assign_inq_agent_wise_id() as $wise){
                    $date=date_create($wise['inq_date_time']);
echo('
                <table class="table">
                  <thead class="borders">
                    <tr>
                      <th>Title </th>
                      <th>Data</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Client Name</td>
                      <td>'.$wise['inq_fn'].'</td>
                      
                    </tr>
                    <tr>
                      <td>Location</td>
                      <td>'.$wise['inq_country'].'</td>
                   
                    </tr>
                    
                      <tr>
                      <td>Email</td>
                      <td>'.$wise['inq_email'].'</td>
                   
                    </tr>
                     <tr>
                      <td>Phone</td>
                      <td>'.$wise['inq_pno'].'</td>
                   
                    </tr>
                     <tr>
                      <td>Maker</td>
                      <td>'.$wise['b_name'].'</td>
                   
                    </tr>
                       <tr>
                      <td>Model</td>
                      <td>'.$wise['inq_v_model'].'</td>
                   
                    </tr>
                     <tr>
                      <td>Year</td>
                      <td>'.$wise['inq_v_yf'].'</td>
                   
                    </tr>
                    <tr>
                      <td>Transmission</td>
                      <td>'.$wise['inq_v_trans'].'</td>
                   
                    </tr>
                    
                    <tr>
                      <td>Date Of Query</td>
                       <td>'.
                       date_format($date,"d-F-Y")
                       

                       .'</td>
                     
                    </tr>
               

                   

                    <tr>
                      <td>message</td>
                          <td>'.$wise['inq_message'].'</td>
                     
                    </tr>
                      <tr>
                      <td>Status</td>
                          ');
              if($wise['inq_status'] == 1){
                  echo('<td><a href="javascript:void(0)" class="label label-danger">Unread</a></td>');

              }
             else if($wise['inq_status'] == 2){
                  echo('<td><a href="javascript:void(0)" class="label label-warning">In process</a></td>');

              }
             else if($wise['inq_status'] == 3){
                  echo('<td><a href="javascript:void(0)" class="label label-primary">Abort</a></td>');

              }
             else if($wise['inq_status'] == 4){
                  echo('<td><a href="javascript:void(0)" class="label label-success">Deliverd</a></td>');

              }

              
echo('
                     
                    </tr>

                  </tbody>
                </table>
                ');}?>
              </div>
          </div>
        </div>




    <?php 
    $ob->inqu_status_change();
    $da = mysqli_fetch_array($ob->session(),MYSQLI_ASSOC)['role'];
    if($da == 1)
    {
        
    
    ?>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Status</div>
          </div>
              
              <div class="panel-body">
            
               <form method="post">
                <div class="form-group">
           <form method="post">
              <label class="control-label col-lg-12">Status</label>
              <div class="col-lg-12">
                <select type="text" class="form-control"  name="name">
                  <option>Select One</option>
                  <option value="1">Unread</option>
                  <option value="2">In Process</option>
                   <option value="3">Abort</option>
                   <option value="4">Deliverd</option>



                </select>
              </div>
            </div>
<div class="form-group">
           
              
              <div class="col-lg-12 mt-20">
                <input type="submit" name="status_chaange" class="btn btn-primary theme-btn btn-block">
              </div>
               </div>

            </div>

          </form>
          </div>
        

        </div>
        <?php
        }
        ?>




      </div>


     
      </div>

      <br>


<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/pages/forms/form_inputs_basic.js"></script>