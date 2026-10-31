<?php include('header.php');
$ob->brand();
 $ob->model_add();
 $ob->features();
?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">Images </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">IMAGES</div>
            
        
          </div>
          <div class="row">
        <?php
        
        foreach($ob->all_images($_GET['id']) as $ab){
           
            foreach(json_decode($ab['img'],true) as $images)
            {
                if($images != null || $images !="")
                {
                    
                
                
                echo("<div class='col-md-3'>
                <img src='img/vehicle/$images' style='width:100%'/>
                </div>");
                }
            }
               
            
        }
        ?>
          </div></div></div></div></div> 
          
          <?php
          include('footer.php');
          ?>