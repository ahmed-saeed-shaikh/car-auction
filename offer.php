<?php include('header.php');?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">NEW ARRIVAL</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading  panel-theme">
            <div class="panel-title">NEW ARRIVAL</div>

                </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
<table class="table table-hover table-striped invoice-list datatable table-responsive" id="datatable">
                <thead class="borders">
                 
<th>Stock Id</th>
<th>Maker</th>
<th>Model</th>
<th>Chassis Code</th>
<th>Color</th>
<th>Year </th>
<th>Price (FOB) </th>
<th>Image</th>
<th>Action</th>
</tr>

                </thead>
                <tbody>
              
            <?php

                   foreach($ob->offer_view() as  $inn){
        echo('<tr><td class="text-capitalize">'.$inn['v_id'].'</td>
      <td class="text-capitalize">'.$inn['b_name'].'</td>
      <td class="text-capitalize">'.$inn['v_model'].'</td>
            <td class="text-capitalize">'.$inn['v_chassis_code'].'</td>
            <td class="text-capitalize">'.$inn['v_color'].'</td>
        
        <td class="text-capitalize text-center">'.$inn['v_manufacture'].'</td>');
      
            
      if($inn['price'] ==  0){
        echo ('<td class="text-capitalize"> <span style="color:#CD1D1F"> Get A Quote</span>
        </td>');
      }
      else {
    echo ('<td class="text-capitalize"><h4 class="no-margin text-semibold text-danger-light">$ '.$inn['price']  
        .'</h4></td>');
        }
        echo('
      
<td class="text-capitalize"><img class="img-rep" src="img/vehicle/'.json_decode($inn['img'],true)[0].'"/></td>  


<td class="text-center">
                      <ul class="icons-list">
                        <li><a href="invoice_template.html" target="_blank"><i class=""></i></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a target="_blank" href="vehicle-one.php?stock_id='.$inn['v_id'].'"><i class="icon-eye2"></i> View</a></li>
                            <li><a href="vehicle-edit.php?q='.$inn['v_id'].'"><i class="fa fa-edit"></i> Edit</a></li>
                                 <li>
                                  <a  data-item-id="'.$inn['v_id'].'" onclick="open_pop('.$inn['v_id'].',this)"><i class="fa fa-trash"></i>Delete</a>
                                  </li>
                            
                          </ul>
                        </li>
                      </ul>
                    </td>


 </tr>');
                      }
                    
                    
                    
                    ?>

                
               
                
                </tbody>
              </table>
          </div>
         
        </div>




      </div>


        
      </div>
      </div>

 <script>
  
function confirm_pop(a,b)
{
  var tr = b.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
$.ajax({
  type : "get",
  url  : "main.php",
  data : {del_item : "", item_id:a},
  success : function(response)
  {
    if(response)
    {
      console.log(tr.parentNode.removeChild(tr));
    }

  }

});
}
function open_pop(a,b)
{
swal_cancel();
document.getElementsByClassName('confirm ')[0].addEventListener('click',function()
  {
    confirm_pop(a,b);
  });
}

</script>



<?php include('footer.php');?>
<script src="lib/js/plugins/notifications/sweetalert.js"></script>
<script src="lib/js/pages/extensions/extension_sweet_alert.js"></script>