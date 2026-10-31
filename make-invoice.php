<?php include('header.php');
/*$ob->save_invoice();
$ob->save_auction_invoice();
$ob->tmp_invoice();*/
?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Invoice</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading  panel-theme">
            <div class="panel-title">STOCK INVOICE

            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <form method="get" action="query-string.php">
              <div class="col-md-9 col-sm-9 col-xs-6">
            <div class="form-group">
              <label class="control-label col-lg-12">Stock ID</label>
              <div class="col-lg-12">
                
                    <input type="text" id="firstName" class="form-control" placeholder="Stock ID" name="pid" required >
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="form-group">
         <label class="control-label col-lg-12"><span style="color: #fff">...</span></label>
              <div class="col-lg-12">
                <button type="submit" class="btn btn-block theme-btn btn-primary">Get vehicle</button>
              </div>
            </div>
          </div>
        </form>

        </div>
        <div class="row">
<div class="col-md-12 mt-20">
<div class="panel panel-flat">
                            <div class="table-responsive">
                <table class="table table-columned">
                  <thead class="borders">
                    <tr>
                      <th>Stock ID</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                     if(isset($_SESSION['cart'])){
                                                    foreach($_SESSION['cart'] as $b){
                            foreach($ob->invoice_session($b) as $data){
                          echo('<tr>
                          
                             <td>'.$b.'</td>
                                                        <td>'.$data['b_name']." ".$data['v_model']." Color " .$data['v_color'].'</td>
                                                        <td>$ '.$data['price'].'</td>                                                 
                                                   
                                                        <td> <a href="query-string.php?un='.$b.'" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
                                                    </tr>');}}}
                          ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
</div>
<div class="row">

  <form method="post" action="main.php">
  <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer Name</label>
              <div class="col-lg-12">
 <input type="text" id="firstName" class="form-control" placeholder="Customer  Name" name="a" required >

     </div>
            </div>
         
  </div>
 <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer  Address</label>
              <div class="col-lg-12">
   <input type="text" id="lastName" class="form-control" placeholder="Customer  Address" name="b" required >

     </div>
            </div>
  </div>
        </div>
        <div class="row">
  <div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Name</label>
              <div class="col-lg-12">
   <input type="text" class="form-control" placeholder="Consignee Name" name="c" required >

     </div>
            </div>
         
  </div>
<div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Address</label>
              <div class="col-lg-12">
       <input type="text" placeholder="Consignee Address" class="form-control" name="d" required>

     </div>
            </div>
  </div>
        </div>
            <br>
            <div class="form-group mt-20">
              <div class="col-lg-12">
                <button type="submit"  name="save" class="btn btn-block theme-btn btn-primary"><i class="icon-print position-left"></i>Generate Stock Invoice </button>
              </div>
            </div>
          </div>
        </div>

</form>


      </div>
</div>
<?php
 /*if(isset($_GET['aucInv_id']))
 {
     foreach($ob->select_only_aucInv() as $inv)
     {
         echo('<div class="col-md-6">
   <div class="panel panel-default">
          <div class="panel-heading  panel-theme">
            <div class="panel-title">AUCTION INVOICE</div>
          </div>
          <div class="panel-body">
              
  <form method="post" action="main.php">
             <div class="form-group">
                <label class="control-label col-lg-12">Description</label>
                       <div class="col-lg-12">
                 <textarea rows="2" class="form-control" name="dess" value="">
                  '.$inv['dess'].'
                 </textarea>
                </div>
              </div>

<div class="row">

  <div class="col-md-5">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12">Price</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" name="price" placeholder="Enter Price" value="'.$inv['price'].'">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12">Price Type</label>
              <div class="col-lg-12" >
                <select  class="form-control" name="type">
                     ');
                     if($inv['price_type'] == "FOB")
                     {
                    echo("<option selected>FOB</option>
                    <option>C&F</option>");       
                     }
                     else
                     {
                         echo("<option>FOB</option>
                    <option selected >C&F</option>");       
                     }
                  echo('
                  
                  </select>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12"><span style="color:#fff">....</span></label>
              <div class="col-lg-12" >
     
              </div>
            </div>
          </div>

        </div>

        <div class="row">
<div class="col-md-12 mt-20">
<div class="panel panel-flat">
                            <div class="table-responsive">
                <table class="table table-columned">
                  <thead class="borders">
                    <tr>
                     
                      <th>Description</th>
                      <th>Amount</th>
                       <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                          
                             <td>'.$inv['dess'].'</td>
                              <td>'.number_format($inv['price'],0).'</td>
                             <td>'.$inv['price_type'].'</td>                                         
                                                   
                                <td> <a href="query-string.php?del='.$inv['id'].'" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
                             </tr>
                      
                    
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
</div>
          <div class="row">
            
  <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer Name</label>
              <div class="col-lg-12">
 <input type="text" id="firstName" class="form-control" placeholder="Customer  Name" name="e" required value="'.$inv['name'].'" >

     </div>
            </div>
         
  </div>
 <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer  Address</label>
              <div class="col-lg-12">
   <input type="text" id="lastName" class="form-control" placeholder="Customer  Address" name="f" required value="'.$inv['address'].'">
 <input type="hidden" value="'.$_GET['aucInv_id'].'" name="auc_id"/>
     </div>
            </div>
  </div>
        </div>
        <div class="row">
  <div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Name</label>
              <div class="col-lg-12">
   <input type="text" class="form-control" placeholder="Consignee Name" name="g" required value="'.$inv['namee'].'" >

     </div>
            </div>
         
  </div>
<div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Address</label>
              <div class="col-lg-12">
       <input type="text" placeholder="Consignee Address" class="form-control" name="h" required value="'.$inv['addd'].'">

     </div>
            </div>
  </div>
        </div>
            <br>
            <div class="form-group mt-20">
              <div class="col-lg-12">
                <button type="submit" name="update_auc_by_admin" class="btn btn-block theme-btn btn-primary"><i class="icon-print position-left"></i> Generate Auction Invoice</button>
              </div>
            </div>
          </div>
        </div>
       
</form>
        
      </div>
      </div>

      <br>

    </div>');
     }
 }
else
{*/
?>


      <div class="col-md-6">
   <div class="panel panel-default">
          <div class="panel-heading  panel-theme">
            <div class="panel-title">AUCTION INVOICE</div>
          </div>
          <div class="panel-body">
              
  <form method="post" action="main.php">
             <div class="form-group">
                <label class="control-label col-lg-12">Description</label>
                       <div class="col-lg-12">
                 <textarea rows="2" class="form-control" name="dess"></textarea>
                </div>
              </div>

<div class="row">

  <div class="col-md-5">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12">Price</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" name="price" placeholder="Enter Price">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12">Price Type</label>
              <div class="col-lg-12" >
                <select  class="form-control" name="type">
                     <option>Select One</option>
                  <option>FOB</option>
                  <option>C&F</option>
                  </select>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group mt-20">
              <label class="control-label col-lg-12"><span style="color:#fff">....</span></label>
              <div class="col-lg-12" >
     <button type="submit" name="in" class="btn btn-block theme-btn btn-primary">Get vehicle</button>
              </div>
            </div>
          </div>

        </div>

      </form>
        <div class="row">
<div class="col-md-12 mt-20">
<div class="panel panel-flat">
                            <div class="table-responsive">
                <table class="table table-columned">
                  <thead class="borders">
                    <tr>
                     
                      <th>Description</th>
                      <th>Amount</th>
                       <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                          foreach($ob->sel_inv_desc() as $b){
                                                   
                            
                          echo('<tr>
                          
                             <td>'.$b['dess'].'</td>
                              <td>'.number_format($b['price'],0).'</td>
                             <td>'.$b['price_type'].'</td>                                         
                                                   
                                                        <td> <a href="query-string.php?del='.$b['id'].'" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
                                                    </tr>');}
                          ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
</div>
          <div class="row">
            <form method="post" action="main.php">
  <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer Name</label>
              <div class="col-lg-12">
 <input type="text" id="firstName" class="form-control" placeholder="Customer  Name" name="e" required >

     </div>
            </div>
         
  </div>
 <div class="col-md-6">
     <div class="form-group">
         <label class="control-label col-lg-12">Customer  Address</label>
              <div class="col-lg-12">
   <input type="text" id="lastName" class="form-control" placeholder="Customer  Address" name="f" required >

     </div>
            </div>
  </div>
        </div>
        <div class="row">
  <div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Name</label>
              <div class="col-lg-12">
   <input type="text" class="form-control" placeholder="Consignee Name" name="g" required >

     </div>
            </div>
         
  </div>
<div class="col-md-6 mt-20">
     <div class="form-group">
         <label class="control-label col-lg-12">Consignee Address</label>
              <div class="col-lg-12">
       <input type="text" placeholder="Consignee Address" class="form-control" name="h" required>

     </div>
            </div>
  </div>
        </div>
            <br>
            <div class="form-group mt-20">
              <div class="col-lg-12">
                <button type="submit" name="save_auction" class="btn btn-block theme-btn btn-primary"><i class="icon-print position-left"></i> Generate Auction Invoice</button>
              </div>
            </div>
          </div>
        </div>
</form>
        
      </div>
      </div>

      <br>

    </div>
    <?php
#}
    ?>

<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>