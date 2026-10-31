<?php include('header.php');
foreach($ob->session() as $check){ 
    if($check['role'] == 1){
      echo('
<section class="main-container">
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL DEPOSITE</div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-9">
                <input class="form-control" id="stock" placeholder="Enter Stock Id" >
              </div>
              <div class="col-md-3">
                <input class="btn btn-danger btn-block" type="button" id="btn-amount-agent" style="color:#FFF; border-radius: 20px;"   value="Search"  >
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h2>  Deposite</h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                        <th>Date</th>
                        <th>Amount</th>
                      </tr>
                      
                    </thead>
                    <tbody id="dep">
                 
                    </tbody>
                    
                
                   
                  </table>
                  <br><br>
                  <table class="table">
                   <tbody>
                     <tr id="total_dep_ro"></tr>
                     </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <h2> Allocation </h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                         <th>Date</th>
                        <th>Amount</th>
                       
                        
                        
                      </tr>
                    </thead>
                    <tbody id="alo">
                    
                     
                    </tbody>
                    
                  </table>
                  <table class="table" style="position: relative;top:86px;">
                   <tr id="total_allo_ro"></tr>
                  </table>
                </div>
                <div class="col-md-4">
                  <h2>  Expense</h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                     
                        <th>Date</th>
                           <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody id="exp">
                    </tbody>
                  </table>
                  <table class="table" style="position: absolute;top: 201px;">
                   <tr id="total_cost"></tr>
                   <tr id="total_dep"></tr>
                    <tr id="balance"></tr>
                  </table>
                </div>
              </div>
             <br>
             <br>
             <br>
             <br>
             <br><br>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>');
    }
    else{
       echo('
<section class="main-container">
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">TOTAL DEPOSITE</div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-9">
                <input class="form-control" id="stock" placeholder="Enter Stock Id" >
              </div>
              <div class="col-md-3">
                <input class="btn btn-danger btn-block" type="button" id="btn-amount" style="color:#FFF; border-radius: 20px;"   value="Search"  >
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                <div style="height:300px">
                  <h2>  Deposite</h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                        <th>Date</th>
                        <th>Amount</th>
                      </tr>
                      
                    </thead>
                    <tbody id="dep">
                 
                    </tbody>
                    
                
                   
                  </table>
                  
                  </div>
                  <table class="table">
                   <tbody>
                     <tr id="total_dep_ro"></tr>
                     </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                <div style="height:300px">
                  <h2> Allocation </h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                         <th>Date</th>
                        <th>Amount</th>
                       
                        
                        
                      </tr>
                    </thead>
                    <tbody id="alo">
                    
                     
                    </tbody>
                    
                  </table>
                  </div>
                  <table class="table">
                   <tr id="total_allo_ro"></tr>
                  </table>
                </div>
                <div class="col-md-4">
                <div style="height:300px">
                  <h2>  Expense</h2>
                  <table class="table">
                    <thead class="borders">
                      <tr>
                        <th>Agent</th>
                     
                        <th>Date</th>
                           <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody id="exp">
                    </tbody>
                  </table>
                  </div>
                  
                  <table class="table">
                   <tr id="total_cost"></tr>
                   <tr id="total_dep"></tr>
                    <tr id="balance"></tr>
                  </table>
                </div>
              </div>
             <br>
             <br>
             <br>
             <br>
             <br><br>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>');
    }
}

 ?>

<script>
        document.getElementById('btn-amount').addEventListener("click",function(){
        var stock = document.getElementById('stock');    
        document.getElementById('btn-amount').innerHTML = "<img src='https://www.auctionhouse.jp/img/loading.gif' class='load_image'/>"
           $.ajax({
               type:"get",
               url:"main.php",
               data:{stock_id_for_v:stock.value},
               success: function(response){
                  
                  var d = JSON.parse(response);
                  
                  var th = (parseInt(d['total_allo']) + parseInt(d['total_exp']) - parseInt(d['total_dep']))
                  var costt = parseInt(d['total_allo']) + parseInt(d['total_exp']);
                 
                 
                   document.getElementById('exp').innerHTML = d['exp'];
                   document.getElementById('alo').innerHTML = d['allo'];
                   document.getElementById('dep').innerHTML = d['depo'];
                  
                
                  document.getElementById('total_dep_ro').innerHTML = "<th>Total Deposite</th><th>"+ Intl.NumberFormat('en-IN').format(d['total_dep'])+"</th>"
                   document.getElementById('total_allo_ro').innerHTML = "<th>Total Allocation</th><th>"+Intl.NumberFormat('en-IN').format(d['total_allo']) +"</th>"
         document.getElementById('total_cost').innerHTML = "<th>Vehicle Cost</th><th>"+Intl.NumberFormat('en-IN').format(costt) +"</th>"
         document.getElementById('total_dep').innerHTML = "<th>Total Deposite</th><th>"+Intl.NumberFormat('en-IN').format(d['total_dep']) +"</th>"
         document.getElementById('balance').innerHTML = "<th>Balance</th><th>"+Intl.NumberFormat('en-IN').format(th)+"</th>"
                  
                   
               
                   
             
             if(d['exp'] == '' && d['allo'] == '' && d['depo'] == ''){
                 alert("There is No Data In your Parameters");
             }
                       
                
                  
               }
               
               
           })
            
        });
            
            
        
        
    </script>
    
    
    
    
    
    
    <script>
    document.getElementById('btn-amount-agent').addEventListener("click",function(){
        var stock = document.getElementById('stock');    
           $.ajax({
               type:"get",
               url:"main.php",
               data:{stock_id_for_v_agent:stock.value},
               success: function(response){
                  var d = JSON.parse(response);
                  
                  var th = (parseInt(d['total_allo']) + parseInt(d['total_exp']) - parseInt(d['total_dep']))
                  var costt = parseInt(d['total_allo']) + parseInt(d['total_exp']);
                 
                 
                   document.getElementById('exp').innerHTML = d['exp'];
                   document.getElementById('alo').innerHTML = d['allo'];
                   document.getElementById('dep').innerHTML = d['depo'];
                  
                
                  document.getElementById('total_dep_ro').innerHTML = "<th>Total Deposite</th><th>"+ Intl.NumberFormat('en-IN').format(d['total_dep'])+"</th>"
                   document.getElementById('total_allo_ro').innerHTML = "<th>Total Allocation</th><th>"+Intl.NumberFormat('en-IN').format(d['total_allo']) +"</th>"
         document.getElementById('total_cost').innerHTML = "<th>Vehicle Cost</th><th>"+Intl.NumberFormat('en-IN').format(costt) +"</th>"
         document.getElementById('total_dep').innerHTML = "<th>Total Deposite</th><th>"+Intl.NumberFormat('en-IN').format(d['total_dep']) +"</th>"
         document.getElementById('balance').innerHTML = "<th>Balance</th><th>"+Intl.NumberFormat('en-IN').format(th)+"</th>"
                  
                   
               
                   
             
             if(d['exp'] == '' && d['allo'] == '' && d['depo'] == ''){
                 alert("There is No Data In your Parameters");
             }
                       
                
                  
               }
               
               
           })
            
        });
            
            
        
        
    </script>
<?php include('footer.php');		?>
<script src="lib/js/plugins/tables/datatables/datatables.min.js"></script> 
<script src="lib/js/plugins/tables/datatables/extensions/col_reorder.min.js"></script> 
<script src="lib/js/pages/tables/datatable_extension_column_reorder.js"></script>