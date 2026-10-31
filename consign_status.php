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
        <li class="active">Consignee</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
      
    <?php
    include('show_message.php');
       $da = mysqli_fetch_array($ob->session(),MYSQLI_ASSOC)['role'];
           if($da == 2 || $da == 3){
     foreach($ob->sel_consignById() as $query){
         
    
    
    echo('
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">'.$query['full_name'].' (Agent) </div>
          </div>
                <div class="table-responsive">
                    <table class="table">
                 
                  <tbody>
                                         <tr>
                      <td>Stock Id</td>
                      <td>'.$query['v_id'].'</td></tr>
                       <tr>
            <tr>
                      <td>Customer Name </td>
                      <td>'.$query['cust_name'].'</td></tr>
                      
                      <tr>
                      <td>Customer Address</td>
                      <td>'.$query['cust_addr'].'</td></tr>
                      
                      <tr>
                      <td>Country</td>
                      <td>'.$query['country'].'</td>
                      </tr>
                      
                      <tr>
                      <td>Notify Person Details</td>
                      <td>'.$query['person_name'].'</td></tr>

                      
                      
                      
                      <tr>
                      
                      <td>Status</td>     <td>');
                  if($query['con_status'] == 1){
                          echo('<span class="label label-primary">Pending </span>');
                          
                      }
                      if($query['con_status'] == 2){
                          echo('<span class="label label-success">Approved </span>');
                          
                      }
                      if($query['con_status'] == 3){
                          echo('<span class="label label-danger">Declined </span>');
                          
                      }
                      
                      echo('
                      </td>
                      </tr>
                      <td>Date</td>
                      <td>'.$query['con_date'].'</td></tr>
                      ');
               
                echo('
                
                
                </tbody>
                </table>
              </div>
          </div>
        </div>




    
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Status</div>
          </div>
              
              <div class="panel-body">
            
               
                <div class="form-group">
           <form method="get" action="main.php">
              <label class="control-label col-lg-12">Status</label>
              <div class="col-lg-12">
                <select type="text" class="form-control"  name="status" id="bid_status">
                  <option>Select One</option>
                  <option value="2">Approved</option>
                  <option value="3">Declined</option>
                   
                </select>
                
                <input type="hidden" name="con_id" value="'.$_GET['up'].'"/>
              </div>
              </div>
              
           
<div class="form-group">
           
              
              <div class="col-lg-12 mt-20">
                <input type="submit" name="updt_consignstatus" class="btn btn-primary theme-btn btn-block">
              </div>
               </div>
 </div>
            </div>

          </form>
          </div>
          ');
$ob->query_status_change();
}
 echo('
        




      </div>
      
      <div class="row">
          <div class="col-md-8">
          <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Shipment Details</div>
          </div>
                <div class="table-responsive">
                <form action="main.php" method="get">
              <table class="table">
                  <tr>
                      <td>
                      <label>Departure Port</label>
                  </td>
                  <td><input type="text" value="'.$query['departure_port'].'" class="form-control" name="dp"/></td>
                  </tr>
                  <tr>
                      <td>
                      <label>Arrival  Port</label>
                  </td>
                  <td><input type="text" value="'.$query['discharging_port'].'" class="form-control" name="ds"/></td>
                  </tr>
                  
                  <tr>
                      <td>
                      <label>Shipment Type</label>
                  </td>
                  <td><input type="text" value="'.$query['shipment_type'].'" class="form-control" name="st"/></td>
                  </tr>
                  <tr>
                      <td>
                      <label>Vessel Name</label>
                  </td>
                  <td><input type="text" value="'.$query['v_name'].'" class="form-control" name="v"/></td>
                  </tr>
                  
                  <tr>
                      <td>
                      <label>ETD</label>
                  </td>
                  <td><input type="text" value="'.$query['ETD'].'" class="form-control" name="etd"/></td>
                  </tr>
                  <tr>
                      <td>
                      <label>ETA</label>
                  </td>
                  <td><input type="text" value="'.$query['ETA'].'" class="form-control" name="eta"/></td>
                  </tr>
              </table>
        
          <input type="hidden" name="con_id" value="'.$_GET['up'].'"/>
          <input type="submit" class="btn btn-danger" name="updt_dhl"/>
          </form>
      </div>
       </div>
      </div>

       </div>
      </div>');
           }
?>


      <br>
<script>
    
    document.getElementById('bid_status').addEventListener('change',function()
    {
        if(this.value == "6" || this.value=="7")
        {
            document.getElementById('bid_price').removeAttribute('disabled');
        }
        else
        {
            document.getElementById('bid_price').setAttribute('disabled','true');
        }
    });
    
</script>

<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/pages/forms/form_inputs_basic.js"></script>