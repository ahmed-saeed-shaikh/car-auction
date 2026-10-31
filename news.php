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
        <li class="active">Brand</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADD NEWS</div>
          </div>
                <form action="" method="get"  enctype="multipart/form-data" >
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-lg-12">Add News</label>
              <div class="col-lg-12">
                <textarea type="text" class="form-control" name="news" rows="5" placeholder="Enter News"></textarea>
              </div>
            </div>
               <br><br>
            <div class="form-group">
          
              <div class="col-lg-12">
                <input type="submit" value="Add News"  class="btn btn-danger" name="sub"></textarea>
              </div>
            </div>
           
            <br>
            
          </form>
          </div>
        </div>
      </div>
      </div>
      


    

      <br>
 <div class="row">
     
     <div class="col-md-6">
         <table class="table bordered stripped">
             <thead>
                 <td >News</td>
                 
                 <td colspan=5 data-colspan=5>Action</td>
             </thead>
             <tbody>
                 <?php
                 foreach($ob->show_news() as $news)
                 {
                     echo('<tr>
                     
                     <td colspan=1 data-colspan=1>'.$news['news'].'</td>
                     <td colspan=5 data-colspan=5><a href="main.php?del_news='.$news['id'].'"><i style="color:red" class="fa fa-trash"></i>Delete</a></td>
                     </tr>');
                 }
                 
                 ?>
             </tbody>
         </table>
     </div>
     
 </div>
    </div>
>


<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/pages/forms/form_inputs_basic.js"></script>