<?php  session_start(); require('phpmailer/class.phpmailer.php');


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Username = "info@auctionhouse.jp";
$mail->Password = "Summer92863*";
$mail->Host     = "auctionhouse.jp";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress($_POST['to']);	
$mail->Subject = $_POST["subject"];
$mail->WordWrap   = 80;
$con_img = json_encode($_FILES['image']['name']);


foreach($_FILES['image']['name'] as $key) {
  
   $body .= ('<img src="img/temp_images/'.$key.'" style="width:50%; height:auto;float: left; margin-left:5px;margin-top:5px;">');
   
   
}
$banner = '<img src="http://auctionhouse.jp/img/slider/slider03.jpeg" style="width:100%"> <br>';
$footer = '<br><img src="http://admin.auctionhouse.jp/img/emails/footer.jpeg" style="width:50%;margin: auto;display: table;"> <br>';

$mail->MsgHTML($banner.'<div style="width:100%;height:auto;display:inline-block;">'.$body.'</div>'.$_POST["content"].$footer);
$content = $_POST['content'];

foreach ($_FILES["attachment"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
   
}


$mail->IsHTML(true);
$send = $mail->Send();

if(!$send) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
    $att = json_encode($_FILES["attachment"]["name"]);
    $con = mysqli_connect('localhost','admin_auction','Summer92863*','admin_auction') or die ('error');
    $user_data = mysqli_query($con,"select * from tbl_user where user_name = '".$_SESSION['abc']."' ");
    foreach($user_data as $id){
        $ag = $id['id'];
    }

    $query = "INSERT into emails(`too`, `subject`, `content`, `att`, `form`,con_img) values('".$_POST['to']."','".$_POST['subject']."','$content','$att',$ag,'$con_img')";
    $result = mysqli_query($con,$query);
     
    $total = count($_FILES['attachment']['name']);

// Loop through each file

for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['attachment']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "img/emails/".$_FILES['attachment']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    
  }}}
  
    	echo "1";
}
?>

<!-- Page scripts -->
