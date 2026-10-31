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
            <div class="panel-title">ADD USER</div>
          </div>
          <div class="panel-body">
        
     <form action="" method="post"  enctype="multipart/form-data">
            <div class="row p-t-20">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Full Name</label>
                    <input type="text" id="firstName" class="form-control" placeholder="Enter Full Name" name="name" required>
                  </div>
                </div>
                <!--/span-->
           <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Father Name</label>
                    <input type="text" id="lastName" class="form-control" placeholder="Enter Father Name" name="fname" required>
                  </div>
                </div>
                <!--/span--> 
              </div>


               <div class="row">
               <div class="col-md-12 mt-20">
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" style="border:1px solid #ced4da;" class="form-control" placeholder="Enter Your Email" name="email" required>
                  </div>
                </div>
                <!--/span-->
                
                <!--/span--> 
              </div>



        <div class="row"> 
                
                <!--/span-->
                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">User Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your User Name" name="uname" required >
                      
                  </div>
                </div>
                <!--/span--> 
                
                <!--/row-->
                
              <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" placeholder="Enter Your Password" class="form-control" name="pass" required>
                  </div>
                </div>
                <!--/span--> 
                
                <!--/span--> 
              </div>



 <div class="row"> 
                
                <!--/span-->
                <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Role</label>
                      <select class="form-control" name="role">
                          <option selected disabled>Select Rule</option>
                            <option value="3">Editor</option>
                            <option value="2">Admin</option>
                               <option value="1">Agent</option>
                     
                        
                         
                            
                        </select>
                  </div>
                </div>
         <div class="col-md-6 mt-20">
                  <div class="form-group">
                    <label class="control-label">Image</label>
               <input name="img" type="file" class="file-styled-primary-icon ">
                  </div>
                  
                </div>
                <!--/span--> 
                
                <!--/row-->
                
                               <!--/span--> 
                
                <!--/span--> 
              </div>
              <!--/row-->

            <div class="row">
            <div class="form-group">
              <div class="col-md-12 mt-20">
                <button type="submit" name="user" class="btn theme-btn btn-primary"><i class="icon-cogs position-left"></i> Add User</button>
              </div>
            </div>
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
<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>