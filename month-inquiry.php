<?php include('header.php');



foreach($ob->session() as $role ){
    if($role['role'] == 2 || $role['role'] == 3 ){
    ?>
    <section class="main-container">
  
    
    
    <div class="container-fluid page-content">
    <div class="row">
        <?php 
        if(isset($_GET['tok']) && $_GET['tok']  == 'dep'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL DEPOSITE (Agents )</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                   <th>Stock ID</th>
                    <th>Person Name</th>
                    <th>Agent</th>
                    <th>Agent Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->dep_allfunds_only_agent() as $daat){
                   
                 }
                  echo('  </tbody>
            </table>
            </div>
        </div>
        
    </div>
              </div>
              </div>
              </div>
              

    
        ');
        }
        
        
          if(isset($_GET['tok']) && $_GET['tok']  == 'dep'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL DEPOSITE (Web User)</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                   <th>Stock ID</th>
                    <th>Person Name</th>
                    <th>Agent</th>
                    <th>Agent Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->dep_allfunds_only_agent_webuser() as $daat){
                   
                 }
        }
      
    if(isset($_GET['tok']) && $_GET['tok']  == 'alloc'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL Alocation</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                   <th>Stock ID</th>
                    <th>Person Name</th>
                    <th>Agent</th>
                    <th>Agent Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->alloc_allfunds_only_agent() as $daat){
                   
                 }
        }
        
               
            echo('   </tbody>
            </table>
            </div>
        </div>
        
    </div>
              </div>
              </div>
              </div>
              
     
        ');
        
         if(isset($_GET['tok']) && $_GET['tok']  == 'alloc'){
               include('show_message.php');
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL Alocation (Web User)</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                   <th>Stock ID</th>
                    <th>Person Name</th>
                    <th>Agent</th>
                    <th>Agent Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->alloc_allfunds_only_agent_webuser() as $daat){
                   
                 }
                    echo('   </tbody>
            </table>
            </div>
        </div>
        
    </div>
              </div>
              </div>
              </div>
                 </div>
                 </section>
     
        ');
        }
        
               
         
        
        
        
          
           if(isset($_GET['tok']) && $_GET['tok']  == 'exp'){
            echo('
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL Expense ( Agents )</div>
          </div>
          <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
             <table class="table datatable-reorder-realtime">
              <thead class="borders">
                <tr>
                   <th>Stock ID</th>
                 
                    <th>Agent</th>
                    <th>Agent Email</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
              ');
              include('show_message.php');
                foreach($ob->exp_allfunds_only_agent() as $daat){
                   
                 }
                   echo('   </tbody>
            </table>
            </div>
        </div>
        
    </div>
              </div>
              </div>
              </div>
              </div>
              </section>
                 
     
        ');
        }
        
              ?>
                  
            
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




