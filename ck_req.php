<?php
$img = $_FILES['image'];

    
    $count = count($img['name']);
    echo($count);
    
    for($i= 0; $i<$count; $i++)
    {
  move_uploaded_file($img['tmp_name'][$i],'img/temp_images/'.$img['name'][$i]);  
    }
   
     
    
    


?>