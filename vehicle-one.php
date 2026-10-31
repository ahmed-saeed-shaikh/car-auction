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
        <li class="active">Vehicle </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
        <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mt-02">
      <div class="tab-content">
        <div class="tab-pane active" id="images">
          <div id="carousel-car" class="carousel slide"> <a class="carousel-control" href="#carousel-car" data-slide="prev"> <i class="icon-left-open"></i> </a> <a class="carousel-control next" href="#carousel-car" data-slide="next"> <i class="icon-right-open"></i> </a>
            <div class="carousel-inner">
              <?php
			
			foreach($ob->cars_once() as $inn){
			    echo('<div class="item active">
									<a class="fancybox" data-rel="gallery1" href="http://admin.auctionhouse.jp/img/vehicle/'.(json_decode($inn['img'],true)[0]).'"" title="Car 001">
										<img style="width: -webkit-fill-available;    height: 380px !important;
    object-fit: fill;" src="http://admin.auctionhouse.jp/img/vehicle/'.(json_decode($inn['img'],true)[0]).'"" alt="Photo 01" class="img">
									</a>
								</div>');}
            
							
								
								
								?>
            </div>
          </div>
        </div>
      </div>
      <div id="carousel-car-model" class="carousel slide"> 
        <!-- Controls --> 
        <a class="carousel-control" href="#carousel-car-model" data-slide="prev"> <span class="icon-left-open-mini"></span> </a> <a class="carousel-control next" href="#carousel-car-model" data-slide="next"> <span class="icon-right-open-mini"></span> </a> 
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="margin: auto;width: 100% !important;">
          <?php
        $s = 4;
				  foreach($ob->cars_once() as $innn){
				      $imgs = json_decode($innn['img']);
				     
			
				    
				    

								echo('
							
							<div class="item active">
								
								');
				   
				   
									for($i=0;$i< 6; $i++)
				{
								
								echo('
								<a href="http://admin.auctionhouse.jp/img/vehicle/'.$imgs[$i].'"" class="fancybox model" data-rel="gallery1">
									<img height="50px" src="http://admin.auctionhouse.jp/img/vehicle/'.$imgs[$i].'"" alt="Photo 01">
								
								</a>');
								}
								echo('
							</div>
							');
				
				for($j=6; $j<sizeof($imgs);$j=$j+6)
				{
				
echo('
							<div class="item">
							');
							$sd = $j+6;
							for($i=$j; $i<$sd;$i++)
				    
				{
				    if($imgs[$i] !=null)
				    {
				        
				    
				echo('
								<a href="http://admin.auctionhouse.jp/img/vehicle/'.$imgs[$i].'"" class="fancybox model" data-rel="gallery1">
									<img height="50px" src="http://admin.auctionhouse.jp/img/vehicle/'.$imgs[$i].'"" alt="Photo 01">
								
								</a>
								');}
				}
						echo('		
						
							</div>

						
								
								
								
								' );
				}
				      
				  }
				  
							
				  ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
     <?php
          foreach($ob->vehicle_select_one() as $vid) {
           
          echo('<table class="table tbl-img table-bordered">
                  <thead class="borders">
                    <tr>
                      <th style="border:1px solid #000">Title </th>
                      <th>Data</th>
                        <th>Title </th>
                      <th>Data</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="https://cdn4.iconfinder.com/data/icons/add-1/60/barcode-512.png"> Stock ID</td>
                      <td>'.$vid['v_id'].'</td>
                    <td><img src="https://cdn3.iconfinder.com/data/icons/transportation-vehicles-2/128/car-front-simple-512.png"> Maker</td>
                       <td>'.$vid['b_name'].'
                       
                       </td>
                      
                  
                     
                   
                   
                    </tr>
                    <tr>
                      <td><img src="https://cdn3.iconfinder.com/data/icons/transportation-vehicles-2/128/car-hatchback-side-512.png">  Model</td>
                       <td>'.$vid['v_model'].'</td>
                        <td> <img src="https://static.thenounproject.com/png/736397-200.png"> Grade</td>                   
                      <td>'.$vid['v_grade'].'</td>
                     
                    </tr>
                  

                    <tr>
                      <td> <img src="https://image.freepik.com/free-icon/info-logo-circle_318-947.jpg"> Type</td>
                    <td>'.$vid['v_type'].'</td>
                     
                        <td> <img src="data:image/jpeg;base64,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"> Chassis Code</td>
                    <td>'.$vid['v_chassis_code'].'</td>
                    </tr>

                  
                      <tr>
                      <td><img src="https://cdn1.iconfinder.com/data/icons/car-engine-dashboard-lights-solid-style-set-2/91/Car_Engine_-_Dashboard_Lights_68-512.png"> CC</td>
                      <td>'.$vid['v_cc'].'</td>
 <td><img src="https://cdn.iconscout.com/icon/free/png-256/color-palette-1405260-1187249.png"> Color</td>
                       <td>'.$vid['v_color'].'</td>

                        <tr>
                     
                    
                      <td> <img src="https://cdn.onlinewebfonts.com/svg/img_292168.png"> Mileage</td>
                       <td>'.$vid['v_mileage'].'</td>
                       <td><img src="https://cdn.onlinewebfonts.com/svg/img_536742.png"> Fuel</td>
                       <td>'.$vid['v_fuel'].'</td>
                      </tr>
 

                       <tr>
                      <td><img src="https://static.thenounproject.com/png/1265247-200.png"> Transmission</td>
                       <td>'.$vid['v_transmission'].'</td>
                             <td><img src="https://cdn0.iconfinder.com/data/icons/vehicle-1/48/9-512.png"> Driving Hand</td>
                       <td>'.$vid['v_dh'].'</td>
                      </tr>
 

                        <tr>
                      <td><img src="https://www.kindpng.com/picc/m/107-1079118_calendar-png-icon-calendar-icon-png-transparent-png.png"> Manufacture Year</td>
                       <td>'.$vid['v_manufacture'].'</td>
                        <td><img src="https://cdn1.iconfinder.com/data/icons/car-parts-and-accessories-volume-01/32/dimension-car-height-width-length-measurement-512.png"> Dimension</td>
                       <td>'.$vid['v_dimension'].'</td> 
                      </tr>

                          <tr>
                      <td><img src="https://cdn.onlinewebfonts.com/svg/img_353628.png"> Price</td>

                      ');
       if($vid['price'] == 0){
echo('               <td class="text-danger">Get a Quote</td>');

       }
       else{
echo('<td>'.$vid['price'].'</td>');

       }
          echo('
                     <td><img src="data:image/png;base64,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"> Location</td>
                       <td>'.$vid['location'].'</td>  
                      </tr>

                          

                          <tr>
                      <td><img src="https://cdn.onlinewebfonts.com/svg/img_75720.png"> Status</td>
                      ');
       
      


switch ($vid['status']) {
  case 1:
    echo " <td>In Stock</td>";
    break;
  case 2:
      echo " <td>Out Stock</td>";
    break;
  case 3:
      echo " <td>NEW  Arrival</td>";
    break;
    case 4:
      echo " <td>Reserved</td>";
    break;
  default:
    echo "????";
}
 
                       echo ('
                        <td><img src="https://cdn.onlinewebfonts.com/svg/img_149740.png"> Remark</td>
                       <td>'.$vid['remarks'].'</td>
                      </tr>

                        
                      


                      </table>');
                      }
                      ?>
   
    <div class="panel panel-default" style="    height: 156px;">
          <div class="panel-heading panel-theme">
            <div class="panel-title">ADDITIONAL FEATURES</div>
          </div>
<p style="padding:20px">
   
           <?php 
                 foreach(json_decode($vid['things'],true) as $thing){
                        echo('
                           <a href="#" style="font-size:14px" > <img src="https://www.auctionhouse.jp/img/icons/right.png" style="width:25px">'.$thing.'</a>
              ');
                      }
             ?>
          </p>
        </div>
  </div>  </div>
</div>
<br><br>
    <div class="row">
      <div class="col-md-8">
        
       
           
                
         
         
                       
            
    
    <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">CONSIGNEE & SHIPMENT DETAILS</div>
          </div>
          <table class="table tbl-img">
      <?php
              if(mysqli_num_rows($ob->only_v_consignee()) > 0)
              {
                  
              
               foreach($ob->only_v_consignee() as $cons)
               {
                   echo(' <tr>
                  <td><img src="https://www.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png"> Customer Name:</td>
                  <td>'.$cons['cust_name'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://i.pinimg.com/originals/b3/39/22/b339227a8486cba4dede6dc7a5f96580.png"> Customer Contact Number:</td>
                  <td>'.$cons['cust_no'].'</td>
                  
              </tr>
              
                <tr>
                  <td><img src="https://www.iconfinder.com/data/icons/map-3/1024/pin9-512.png"> Customer Address:</td>
                  <td>'.$cons['cust_addr'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/flag.png"> Country:</td>
                  <td>'.$cons['country'].'</td>
                  
              </tr>
              
            
              
              <tr>
                  <td><img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/user-512.png">  Notify Person Name:</td>
                  <td>'.$cons['person_name'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://image.flaticon.com/icons/png/512/62/62950.png"> Vessel Name:</td>
                  <td>'.$cons['v_name'].'</td>
                  
              </tr>
              
               
              
              
              <tr>
                  <td><img src="https://library.kissclipart.com/20180927/ilw/kissclipart-port-icon-clipart-computer-icons-port-b79838124c9211b0.png"> Departure  Port:</td>
                  <td>'.$cons['discharging_port'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://library.kissclipart.com/20180927/ilw/kissclipart-port-icon-clipart-computer-icons-port-b79838124c9211b0.png"> Arrival  Port:</td>
                  <td>'.$cons['departure_port'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://image.flaticon.com/icons/png/512/66/66167.png"> ETD:</td>
                  <td>'.$cons['ETD'].'</td>
                  
              </tr>
              
              <tr>
                  <td><img src="https://image.flaticon.com/icons/png/512/66/66167.png"> ETA:</td>
                  <td>'.$cons['ETA'].'</td>
                  
              </tr>
              
              ');
               }
              }
              else
              {
                   echo(' <tr>
                  <td>Customer Name:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Customer Contact Number:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Country:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Customer Address:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Notify Person Name:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Vessel Name:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Discharging Port:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>Notify Departure Port:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>ETD:</td>
                  <td>Pending</td>
                  
              </tr>
              
              <tr>
                  <td>ETA:</td>
                  <td>Pending</td>
                  
              </tr>
              
              ');
              }
              
             
              
        

       echo('
         </table>
      
      </div>
        </div>
        <div class="col-md-4">
          
          

    
'); 
          ?>

  <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">DHL DETAILS</div>
          </div>
          
          <table class="table tbl-img">
              <?php
              if(mysqli_num_rows($ob->only_v_dhl()) > 0)
                  {
                      
                  
              foreach($ob->only_v_dhl() as $dhl)
              {
                  
                echo("
                
              <tr>
                  <td style='width: 50%;'> <img src='https://www.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png'> Customer Name:</td>
                  <td>".$dhl['c_name']."</td>
              </tr>
              
             
              
              <tr>
                  <td><img src='https://www.iconfinder.com/data/icons/map-3/1024/pin9-512.png'> Customer Address:</td>
                  <td>".$dhl['c_add']."</td>
              </tr>
               <tr>
                  <td><img src='https://i.pinimg.com/originals/b3/39/22/b339227a8486cba4dede6dc7a5f96580.png'> Customer Number:</td>
                  <td>".$dhl['c_no']."</td>
              </tr>
              
                <tr> 
                  <td><img src='https://uxwing.com/wp-content/themes/uxwing/download/01-user_interface/flag.png'> Country:</td>
                  <td>".$dhl['country']."</td>
              </tr>
              <tr>
                  <td><img src='https://static.thenounproject.com/png/2856497-200.png'> Person Name:</td>
                  <td>".$dhl['person']."</td>
              </tr>
              
            
              
              <tr>
                  <td><img src='https://cdn.onlinewebfonts.com/svg/img_353628.png'> Price:</td>
                  <td>".$dhl['price']."</td>
              </tr>
              
              <tr>
                  <td><img src='https://w7.pngwing.com/pngs/238/638/png-transparent-computer-icons-credit-card-payment-card-card-credit-payment-icon-miscellaneous-rectangle-logo.png'> Payment Type:</td>
                  <td>".$dhl['p_type']."</td>
              </tr>
              
              <tr>
                  <td><img src='https://cdn.onlinewebfonts.com/svg/img_509228.png'> Tracking Number:</td>
                  <td>".$dhl['tracking_no']."</td>
              </tr>
              
              ");
              }
                  }
                  else
                  {
                      echo("
                
              <tr>
                  <td>Customer Name:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Customer Number:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Customer Address:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Person Name:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Country:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Price:</td>
                  <td>Pending</td>
              </tr>
              
              <tr>
                  <td>Payment Type:</td>
                  <td>Pending</td>
              </tr>
              <tr>
                  <td>Tracking Number:</td>
                  <td>Pending</td>
              </tr>
              ");
                  }
              ?>
          </table>
          </div>

        
      </div>
 
      
      </div>

      <br>     

      
     <div class="row">
          <div class="col-md-8">
                   
     
          </div>
          <div class="col-md-4">
             
          
          
          </div>
      </div>
  </div>

<?php include('footer.php');?>
<!-- Page scripts -->
<script src="lib/js/plugins/owl.carousel.js"></script>
<script src="lib/js/pages/extensions/extension_owl_carousel.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="https://www.auctionhouse.jp/js/bootstrap.min.js" ></script> 
<script src="https://www.auctionhouse.jp/js/placeholder.js" ></script> 
<script src="https://www.auctionhouse.jp/js/jquery.fancybox.js"></script> 
<script src="https://www.auctionhouse.jp/js/script.js"  ></script> 