<?php include('header.php');
$ob->user();
?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.php"></a></li>
        <li class="active">User</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default ">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Sale Car</div>
          </div>
          <div class="panel-body">
        
        <form action="main.php" method="post">
            
            <div class="row">
                <div class="col-md-6">
                    <label>Stock</label>
                    <input type="number" placeholder="Stock Id" name="car_id" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label>
                        Select an email
                    </label>
                    <select id="bv-email" class="form-control" name="bv-email">
                        <option>
                            !----Select An Email----!
                        </option>
                        <?php 
                        $ob->users_emails();
                        ?>
                    </select>
                </div>
                
                <div class="col-md-6">
                    <label>Client Name</label>
                    <input disabled value="Select An Email" class="form-control" id="bv-name"/>
                </div>
                
                
           
            
          
                <div class="col-md-6">
                    <label>Vehicle Price</label>
                    <input type="number" class="form-control" name="bv-price"/>
                </div>
                
                <div class="col-md-12">
                    <label></label>
                    <input type="submit" value="Buy Vehicle" class="btn btn-danger form-control" name="bv-sale"/>
                </div>
            </div>
            
        </form>

</div>

      </div>


     

        
      </div>
      <br>

     

      </div>
    </div>
  </div>
</section>
<script>
    var bv_email = document.getElementById('bv-email');
    bv_email.addEventListener('change',function()
    {
        $.ajax({
            type : "post",
            url  : "main.php",
            data : {bv_email : this.value},
            success : function(response)
            {
                document.getElementById('bv-name').value=response;
            }
            
        });
    })
</script>
<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>