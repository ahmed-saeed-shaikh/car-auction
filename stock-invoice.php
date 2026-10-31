<?php include('header.php');?>

<section class="main-container">
<h1 style="display:none">Empty Heading</h1>

<!--Page Header-->
<div class="header">
  <div class="header-content">
    <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
    <ul class="breadcrumb">
      <li><a href="index.html"></a></li>
      <li class="active">Query</li>
    </ul>
  </div>
</div>
<div class="container-fluid page-content">
<div class="row">
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading panel-theme">

      <div class="panel-title">STOCK INVOICE</div>
    </div>
    <div id="print-area-3" class="print-area">
      <div style="text-align:right;"></div>

      <br>
      <div class="main-box">
      <img class="top-bar" src="img/invoice/top-border.jpg">
      <br>	
       <img class="watermark" src="img/invoice/logo.png">

     
        <img class="aa-logo" src="img/invoice/AA Japan Logo.png">
        <h3 class="h3">INVOICE   #<?php echo  $_GET['no'] ?><br>
          Date :
          <?php foreach($ob->invoice_d() as $d){
echo($d['da']);

    }  ?>
        </h3>
        <table class="print-table">
          <tr class="tr">
            <th>Customer   Details</th>
            <th>Consignee Details </th>
          </tr>
         <?php
                foreach($ob->invoice_d() as $g){
                echo('
                <tr class="">
                  <td style="border:1px solid #000"> Name: <span> '.$g['cname'].'</span><br>
                    Address: <span>'.$g['cadd'].'</span><br></td>
                  <td style="border:1px solid #000"> Name: <span> '.$g['coname'].'</span><br>
                    Address: <span>'.$g['coadd'].'.</span><br></td>
                </tr>');
              }
                ?>
        </table>
        <table class="table-print-data">
          <thead>
            <tr>
              <th  style="border:1px solid #000 !important;"class="text-center">S/N</th>
              <th style="border:1px solid #000 !important;">Description</th>
              <th style="border:1px solid #000 !important;" class="text-center">Amount</th>
            </tr>
          </thead>
          <tbody>
           <?php    $d= 1;
                              $total = 0;
                                                  
                                                   
                            foreach($ob->invoice_data() as $data){
       
                   $item_price = $data['v_price'] ;
                   $total += $item_price;
   echo('
                    <tr>
                      <td style="border:1px solid #000 !important;" class="text-center">'.$d.'</td>
                      <td style="border:1px solid #000 !important;">'.$data['b_name']." ".$data['v_model']." Color " .$data['v_color'].'</td>
                      <td style="border:1px solid #000 !important;" class="text-center">$ '. number_format($data['v_price'], !($data['v_price'] == (int)$data['v_price']) * 2).' C&F </td>
                     
                    </tr>
');
   $d++;
  
}
  
                    ?>
          </tbody>
        </table>
        <h5 class="sign">Signature</h5>
        <img class="sign-img" src="img/invoice/sign.png">
        <table class="total-table">
          <tr style="border-top: 2px solid #000;">
            <td>Total Amount:</td>
            <td class="total-amount">$ USD<?php  echo   number_format($total, !($total == (int)$total) * 2); ?> C&F </td>
          </tr>
        </table>
        <div class="bank">
          <h3>Beneficiary Banking Details </h3>
          <h1 class="text-center">MUFG Bank, LTD </h1>
          <div class="test" style="margin:auto;display: table">
            <div class="bank-detailsd"            <h5 class="text-center">Account Name</h5>
              <h1> AA Japan (Pvt) Ltd</h1>
            </div>
            <div class="bank-details">
              <h5 class="text-center">Account Number</h5>
              <h1>0022565</h1>
            </div>
            <div class="bank-details">
              <h5 class="text-center">Swift Code</h5>
              <h1>BOTKJPJT</h1>
            </div>
            <div class="bank-details" >
              <h5 class="text-center">Branch Code</h5>
              <h1>215</h1>
            </div>
            <div class="bank-details">
              <h5 class="text-center">Currency</h5>
              <h1>$USD</h1>
            </div>
          </div>
          <div class="bank-info">
               <h5> Bank Name: <b>MITSUBISHI TOKYO UFJ BANK</b></h5>
            <h5> Branch Name: <b>Shin-Yokohama</b></h5>
            <h5> Branch Address:<b> 222-0033, KOUHOKU-KU,SHIN-YOKOHAMA </b> </h5>
            <h5> City-State:<b> KANAGAWA-KEN, YOKOHAMA-SHI,JAPAN </b> </h5><br>
            <h5>Beneficiary Details:  <b><br>AA JAPAN (PVT) LTD
<br>DARUS SALAM BLDG 2ns.FL 1-28-21 Hayabuchi  Tsuzuki-Ku,Yokohama-Shi Kanagawa-Ken 224-0025,JAPAN</b> </h5>
<h5><b> Fax:  +(81) 45-594-0507</b></h5>
          </div>
        </div>
        <div class="note">
          <h5> NOTE:<br>
            <ul>
              <li style=" list-style-type: disc;">Transaction  Fee Must Be Paid by the Buyer / Importer.</li>
              <li style=" list-style-type: disc;">Auction House is responsible for only the above mentioned account.</li>
              <li style=" list-style-type: disc;">In case of any phishing emails please contact Auction house</li>
            </ul>
          </h5>
        </div>
        <div class="data">
          <p> Auction house<br>
            www.auctionhouse.jp<br>
            <a href="mailto:info@auctionhouse.jp">info@auctionhouse.jp</a><br>
            Telephone +81 80 7655 5912<br>
          </p>
        </div>
     
      </div>
      <div class="row">
        <div class="col-md-12 mt-20"> <a style="    position: relative;
    float: right;
    right: 53px;" class="no-print btn   theme-btn btn-primary" href="javascript:printDiv('print-area-3');"> <i class="icon-print position-left"></i> Print</a> </div>
      </div>
    </div>
  </div>
  <br>
</div>
</section>
<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}
  
  .main-box
  {height:1139px ;
    width:90%;
    border: 3px solid #CF2127;
    border-radius: 20px;
    margin:top:20px;
    display:table;
    margin:auto;
    overflow:hidden;
  }

.top-bar{

  width: 100%;
  margin-bottom: 30px;
}
.aa-logo {
  position: relative;
  left: 30px;
  top:23px;
}
.h3 {
  position: relative;
  float: right;
  top: 20px;
  right: 15px;
}
.print-table {
  width: 90%;
  border: 1px solid;
  margin: auto;
  position: relative;
  top:70px;
}
.print-table tr {
  border: 1px solid #dee2e6;
}
.print-table td  ,th{
padding: 8px;
    border: 1px solid;
}
.tr th{
  text-align:left !important;

}
.table-print-data {
    position: relative;
    top: 110px;
    width: 90%;
    text-align: center;
    margin: auto;}
    .table-print-data td, th {
  padding: 8px;
}
.sign-img{
    height: 90px;
    width: 130px;
    position: relative;
    top: 90px;
    left: 45px;
  }
.sign{
      font-size: 24px;
    position: relative;
    left: 47px;
    top: 120px;
  } 

.total-table{
  position: relative;
    float: right;
    top: 50px;
    left: -46px;
  } 
  .total-table td{
    font-size:15px;
    padding-top:5px;
    }
   .total-amount {
width:62%;
text-align:center;

 }

.bank-details{
   height: 75px;
    width: auto;
    padding: 10px;
    border-right:2px solid red;
    float: left;
     margin: auto;
    display: table;
  padding: 0px 14px 0px 12px;
  }
.bank{
  height: auto;
border: 3px solid #CF2127;
border-radius: 20px;
    margin: 0px 50px 0px 50px;
      position: relative;
    top: 120px;
  padding-bottom: 13px;
  }
.bank h3{
  border-bottom: 2px solid #CF2127;
  
    margin: 10px 110px 20px;
    line-height: 34px;
    font-weight: 700;
  text-align:center;
  } 
.bank h1{
  font-size: 18px !important;
text-align: center;
font-weight: 700
  } 
  .bank-details h1{
  font-size:15px !important;
  
  }

.bank-details h5{
  text-align:center !important;
  
  }
  .bank-info{
      position: relative;
    left: 32px;
  }
   .bank-info h5{
      margin:0px !important;
      font-size:9px !important;
  }
  .note{
    position: relative;
    top: 125px;
  } 
.note h5{
  width:75%;   padding: 18px 103px 9px 57px;font-weight: 400;
    color: #000;
  } 
  .data p{
  position: relative;
    float: right;
    width: 35%;
   
    font-weight: 400;
    color: #000;
  } 
  .watermark{
   width: 750px;
    position: absolute;
    margin: auto;
    display: table;
    opacity: 0.1;
    transform: rotate(-45deg);
    z-index: 100;
    top: 20%;
  } 
  .bd{
position: relative;
    top: 31px;
    width: 100%;
}


</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
  function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    
    var message = confirm("Press a button!");
    if(message)
    {
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
    //window.location.href="Update_invoice.php";
    }
  
}

</script>
<?php include('footer.php');?>
