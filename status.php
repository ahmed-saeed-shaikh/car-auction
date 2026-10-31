<?php include('header.php');
 
echo('    <h1 style="display:none">Empty Heading</h1><div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Bid</li>
      </ul>
    </div>
  </div>');

foreach($ob->session() as $role ){
    if($role['role'] == 2){
    ?>

<section class="main-container">
  <div class="container-fluid page-content">
    <div class="row">
      <?php 
        if(isset($_GET['bids']) && $_GET['bids']  == 'true'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">PENDING BIDS</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
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
                                    
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->sel_p_bids() as $bid){
                    
                  
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
                    <td><a href="bid-view.php?bid='.$bid['bid_id'].'"><i class="fa fa-eye"></i></a> </td>
                </tr>');
                   
                 }
        }
        
    if(isset($_GET['consignne']) && $_GET['consignne']  == 'true'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">PENDING CONSIGNEE</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
               <tr>
								        <th>Stock Id</th>  
								        <th> Name</th>
								        <th> Number</th>
								        <th> Address</th>
								       
								        <th>Agent</th>
								       
								        <th> Date</th>
								        <th>Action</th>
								    </tr>
              </thead>

              <tbody>
              ');
                foreach($ob->sel_consignDetails_pending() as $cons){
            $date =date_create($cons['con_date']);
                $da =  date_format($date,"Y-M-d");
        
            echo("<tr>
                <td>".$cons['v_id']."</td>
                
                <td>".$cons['cust_name']."</td>
                <td>".$cons['cust_no']."</td>
                <td>".$cons['cust_addr']."</td>
              
                
                <td>".$cons['full_name']."</td>
                 
                
                <td>".$da."</td>
                
                  <td class='text-center'>
                  <a  href='consign-details.php?stock_id=".$cons['v_id']."'><i class='fa fa-eye'></i></a>
                    </td>
                
            </tr>");
        }
               
               
               
        }
        
          
          
          
           if(isset($_GET['dhl']) && $_GET['dhl']  == 'true'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">PENDING DHL</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                   <tr>
								        <th>Stock Id</th>  
								        <th> Name</th>
								   
								    <th>Number</th>
								    <th>Agent</th>
								        <th>DHL Date</th>
								     
								        
								        
								        
								        
								        <th>Action</th>
								    </tr>
              </thead>

              <tbody>
              ');
           
                foreach($ob->dhl_all_details_pending()as $cons){
					         $date =date_create($cons['dhl_date']);
                $da =  date_format($date,"Y-M-d");
        
            echo("<tr>
                <td>".$cons['v_id']."</td>
                
                <td>".$cons['c_name']."</td>
              
               <td>".$cons['c_no']."</td>
                <td>".$cons['full_name']."</td>
                
                
                <td>".$da."</td>
               
                
                  <td class='text-center'>
                    <a href='all-dhl.php?up=".$cons['dhl_id']."'><i class='fa fa-eye'></i> </a>
                    </td>
                
            </tr>");}
        }
        
        
         if(isset($_GET['inq']) && $_GET['inq']  == 'true'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">PENDING INQUIRES</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                   <tr>
                  <th>No</th>
                  <th>Client  Name</th>
                  <th>Location</th>
                  <th>Date of Query</th>
                  <th>Email</th>
                  <th>Contact</th>
                         
                </tr>
              </thead>

              <tbody>
              ');
           
                 foreach($ob->p_inqu()as $daat){
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
               
                    ');
                     
                 }
        }
        
              ?>
      </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
<script>
        
        function get_records()
        {
            var st_date = document.getElementById('st_date')
            var end_date = document.getElementById('end_date');
            var agent = document.getElementById('agent');
            
            var tok = document.getElementById('rec').value;
            
            if(st_date.value !="" && end_date.value !="" && agent.value > 0 )
            {
                
           
            
            $.ajax({
                type : "get",
                url  : "main.php",
                data : {get_rec : tok, st_date : st_date.value, end_date : st_date.value,agent : agent.value},
                success : function(response)
                {
                    document.getElementById('records').innerHTML = response;
                }
            });
        }
        }
        
        document.getElementById('gt_record').addEventListener('click',function()
        {
            get_records();
        });
        
    </script>
<?php
    }
    else{
   #     include('index_agent.php');
    }
}

			?>
<?php include('footer.php');		?>
<script src="lib/js/plugins/tables/datatables/datatables.min.js"></script> 
<script src="lib/js/plugins/tables/datatables/extensions/col_reorder.min.js"></script> 
<script src="lib/js/pages/tables/datatable_extension_column_reorder.js"></script> 
