<?php include('header.php');
  $countries =
 
array(
"AF" => "Afghanistan",
"AL" => "Albania",
"DZ" => "Algeria",
"AS" => "American Samoa",
"AD" => "Andorra",
"AO" => "Angola",
"AI" => "Anguilla",
"AQ" => "Antarctica",
"AG" => "Antigua and Barbuda",
"AR" => "Argentina",
"AM" => "Armenia",
"AW" => "Aruba",
"AU" => "Australia",
"AT" => "Austria",
"AZ" => "Azerbaijan",
"BS" => "Bahamas",
"BH" => "Bahrain",
"BD" => "Bangladesh",
"BB" => "Barbados",
"BY" => "Belarus",
"BE" => "Belgium",
"BZ" => "Belize",
"BJ" => "Benin",
"BM" => "Bermuda",
"BT" => "Bhutan",
"BO" => "Bolivia",
"BA" => "Bosnia and Herzegovina",
"BW" => "Botswana",
"BV" => "Bouvet Island",
"BR" => "Brazil",
"IO" => "British Indian Ocean Territory",
"BN" => "Brunei Darussalam",
"BG" => "Bulgaria",
"BF" => "Burkina Faso",
"BI" => "Burundi",
"KH" => "Cambodia",
"CM" => "Cameroon",
"CA" => "Canada",
"CV" => "Cape Verde",
"KY" => "Cayman Islands",
"CF" => "Central African Republic",
"TD" => "Chad",
"CL" => "Chile",
"CN" => "China",
"CX" => "Christmas Island",
"CC" => "Cocos (Keeling) Islands",
"CO" => "Colombia",
"KM" => "Comoros",
"CG" => "Congo",
"CD" => "Congo, the Democratic Republic of the",
"CK" => "Cook Islands",
"CR" => "Costa Rica",
"CI" => "Cote D'Ivoire",
"HR" => "Croatia",
"CU" => "Cuba",
"CY" => "Cyprus",
"CZ" => "Czech Republic",
"DK" => "Denmark",
"DJ" => "Djibouti",
"DM" => "Dominica",
"DO" => "Dominican Republic",
"EC" => "Ecuador",
"EG" => "Egypt",
"SV" => "El Salvador",
"GQ" => "Equatorial Guinea",
"ER" => "Eritrea",
"EE" => "Estonia",
"ET" => "Ethiopia",
"FK" => "Falkland Islands (Malvinas)",
"FO" => "Faroe Islands",
"FJ" => "Fiji",
"FI" => "Finland",
"FR" => "France",
"GF" => "French Guiana",
"PF" => "French Polynesia",
"TF" => "French Southern Territories",
"GA" => "Gabon",
"GM" => "Gambia",
"GE" => "Georgia",
"DE" => "Germany",
"GH" => "Ghana",
"GI" => "Gibraltar",
"GR" => "Greece",
"GL" => "Greenland",
"GD" => "Grenada",
"GP" => "Guadeloupe",
"GU" => "Guam",
"GT" => "Guatemala",
"GN" => "Guinea",
"GW" => "Guinea-Bissau",
"GY" => "Guyana",
"HT" => "Haiti",
"HM" => "Heard Island and Mcdonald Islands",
"VA" => "Holy See (Vatican City State)",
"HN" => "Honduras",
"HK" => "Hong Kong",
"HU" => "Hungary",
"IS" => "Iceland",
"IN" => "India",
"ID" => "Indonesia",
"IR" => "Iran, Islamic Republic of",
"IQ" => "Iraq",
"IE" => "Ireland",
"IL" => "Israel",
"IT" => "Italy",
"JM" => "Jamaica",
"JP" => "Japan",
"JO" => "Jordan",
"KZ" => "Kazakhstan",
"KE" => "Kenya",
"KI" => "Kiribati",
"KP" => "Korea, Democratic People's Republic of",
"KR" => "Korea, Republic of",
"KW" => "Kuwait",
"KG" => "Kyrgyzstan",
"LA" => "Lao People's Democratic Republic",
"LV" => "Latvia",
"LB" => "Lebanon",
"LS" => "Lesotho",
"LR" => "Liberia",
"LY" => "Libyan Arab Jamahiriya",
"LI" => "Liechtenstein",
"LT" => "Lithuania",
"LU" => "Luxembourg",
"MO" => "Macao",
"MK" => "Macedonia, the Former Yugoslav Republic of",
"MG" => "Madagascar",
"MW" => "Malawi",
"MY" => "Malaysia",
"MV" => "Maldives",
"ML" => "Mali",
"MT" => "Malta",
"MH" => "Marshall Islands",
"MQ" => "Martinique",
"MR" => "Mauritania",
"MU" => "Mauritius",
"YT" => "Mayotte",
"MX" => "Mexico",
"FM" => "Micronesia, Federated States of",
"MD" => "Moldova, Republic of",
"MC" => "Monaco",
"MN" => "Mongolia",
"MS" => "Montserrat",
"MA" => "Morocco",
"MZ" => "Mozambique",
"MM" => "Myanmar",
"NA" => "Namibia",
"NR" => "Nauru",
"NP" => "Nepal",
"NL" => "Netherlands",
"AN" => "Netherlands Antilles",
"NC" => "New Caledonia",
"NZ" => "New Zealand",
"NI" => "Nicaragua",
"NE" => "Niger",
"NG" => "Nigeria",
"NU" => "Niue",
"NF" => "Norfolk Island",
"MP" => "Northern Mariana Islands",
"NO" => "Norway",
"OM" => "Oman",
"PK" => "Pakistan",
"PW" => "Palau",
"PS" => "Palestinian Territory, Occupied",
"PA" => "Panama",
"PG" => "Papua New Guinea",
"PY" => "Paraguay",
"PE" => "Peru",
"PH" => "Philippines",
"PN" => "Pitcairn",
"PL" => "Poland",
"PT" => "Portugal",
"PR" => "Puerto Rico",
"QA" => "Qatar",
"RE" => "Reunion",
"RO" => "Romania",
"RU" => "Russian Federation",
"RW" => "Rwanda",
"SH" => "Saint Helena",
"KN" => "Saint Kitts and Nevis",
"LC" => "Saint Lucia",
"PM" => "Saint Pierre and Miquelon",
"VC" => "Saint Vincent and the Grenadines",
"WS" => "Samoa",
"SM" => "San Marino",
"ST" => "Sao Tome and Principe",
"SA" => "Saudi Arabia",
"SN" => "Senegal",
"CS" => "Serbia and Montenegro",
"SC" => "Seychelles",
"SL" => "Sierra Leone",
"SG" => "Singapore",
"SK" => "Slovakia",
"SI" => "Slovenia",
"SB" => "Solomon Islands",
"SO" => "Somalia",
"ZA" => "South Africa",
"GS" => "South Georgia and the South Sandwich Islands",
"ES" => "Spain",
"LK" => "Sri Lanka",
"SD" => "Sudan",
"SR" => "Suriname",
"SJ" => "Svalbard and Jan Mayen",
"SZ" => "Swaziland",
"SE" => "Sweden",
"CH" => "Switzerland",
"SY" => "Syrian Arab Republic",
"TW" => "Taiwan, Province of China",
"TJ" => "Tajikistan",
"TZ" => "Tanzania, United Republic of",
"TH" => "Thailand",
"TL" => "Timor-Leste",
"TG" => "Togo",
"TK" => "Tokelau",
"TO" => "Tonga",
"TT" => "Trinidad and Tobago",
"TN" => "Tunisia",
"TR" => "Turkey",
"TM" => "Turkmenistan",
"TC" => "Turks and Caicos Islands",
"TV" => "Tuvalu",
"UG" => "Uganda",
"UA" => "Ukraine",
"AE" => "United Arab Emirates",
"GB" => "United Kingdom",
"US" => "United States",
"UM" => "United States Minor Outlying Islands",
"UY" => "Uruguay",
"UZ" => "Uzbekistan",
"VU" => "Vanuatu",
"VE" => "Venezuela",
"VN" => "Viet Nam",
"VG" => "Virgin Islands, British",
"VI" => "Virgin Islands, U.s.",
"WF" => "Wallis and Futuna",
"EH" => "Western Sahara",
"YE" => "Yemen",
"ZM" => "Zambia",
"ZW" => "Zimbabwe"
);
?>

<section class="main-container">
  <h1 style="display:none">Empty Heading</h1>
  
  <!--Page Header-->
  <div class="header">
    <div class="header-content">
      <div class="page-title"><i class="icon-display4"></i> Dashboard</div>
      <ul class="breadcrumb">
        <li><a href="index.html"></a></li>
        <li class="active">BID</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid page-content">
    <?php
       $da = mysqli_fetch_array($ob->session(),MYSQLI_ASSOC)['role'];
           if($da == 2 || $da == 3){
     foreach($ob->sel_bid_id() as $query){
         
    
    
    echo('
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">'.$query['full_name'].' (Agent) BID</div>
          </div>
                <div class="table-responsive">
                    <table class="table">
                 
                  <tbody>
            <tr>
                      <td>lot Number </td>
                      <td>'.$query['bit_alotNumb'].'</td></tr>
                      
                      <tr>
                      <td>Maker</td>
                      <td>'.$query['b_name'].'</td></tr>
                      
                      <tr>
                      <td>Model</td>
                      <td>'.$query['bid_vModel'].'</td>
                      </tr>
                      
                      <tr>
                      <td>Transmission</td>
                      <td>'.$query['bid_vTrans'].'</td></tr>
                      
                      <tr>
                      <td>Year</td>
                      <td>'.$query['bid_vYear'].'</td></tr>
                      
                      <tr>
                        <td>Shipment Type</td>
                        <td class="text-capitalize">'.$query['bid_shipType'].'</td>
                        </tr>
                        
                      <tr>
                      <td>Amount</td>
                      <td>'.number_format($query['bid_amount']).'</td>
                      </tr>
                      <tr>
                      <td>Auction Price</td>
                      <td>'.number_format($query['final_bid_price']).'</td>
                      </tr>
                      <tr>
                      <td>Amount Type</td>
                      <td>'.$query['price_type'].'</td>
                      </tr>
                      
                      <tr>
                     </tr>
                      <tr><td>Agent</td>
                      <td>'.$query['full_name'].'</td>
                      </tr>
                      <tr><td>Group</td>
                      <td>'.$query['bid_group'].'</td>
                      </tr>
                      <tr><td>Units</td>
                      <td>'.$query['bid_unit'].'</td>
                      </tr>
                      <tr>
                      <td>Date</td>
                      <td>'.$query['bid_date'].'</td>
                      </tr>
                      <tr>
                      
                      <td>Auction Result</td>     <td>');
                 
                      if($query['bid_status'] == 1){
                          echo('<span class="label label-primary">Pending </span>');
                          
                      }
                      if($query['bid_status'] == 2){
                          echo('<span class="label label-warning">Sold to Other</span>');
                          
                      }
                           if($query['bid_status'] == 3){
                          echo('<span class="label label-success">Bought</span>');
                          
                      }
                           if($query['bid_status'] == 4){
                          echo('<span class="label label-danger">Canclled</span>');
                          
                      }
                        if($query['bid_status'] == 5){
                          echo('<span class="label label-info">Unsold</span>');
                          
                      }
                      if($query['bid_status'] == 6){
                          echo('<span class="label label-success">Bid Updated</span>');
                          
                      }
                      if($query['bid_status'] == 7){
                          echo('<span class="label label-danger">Auctioned High</span>');
                          
                      }
                      echo('
                      </td>
                      </tr>
                      ');
               
                echo('
                
               
                
                <tr>
                <td>Country:</td>
                <td>'.$query['country'].'</td>
                </tr>
                
                <tr>
                <td>Memo:</td>
                <td>'.$query['memo'].'</td>
                </tr>
                
                </tbody>
                </table>
              </div>
          </div>
        </div>




    
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Status</div>
          </div>
              
              <div class="panel-body">
            
               
                <div class="form-group">
           <form method="get" action="main.php">
              <label class="control-label col-lg-12">Status</label>
              <div class="col-lg-12">
                <select type="text" class="form-control"  name="status" id="bid_status">
                  <option>Select One</option>
                  <option value="1">No Result Yet</option>
                  <option value="2">Sold to Other</option>
                   <option value="3">Bought</option>
                   <option value="4">Canclled</option>
                  <option value="5">Unsold</option> 
                  <option value="6">Bid Updated</option> 
                  <option value="7">Auctioned High</option> 
                </select>
                
                <input type="hidden" name="bid_id" value="'.$_GET['bid'].'"/>
              </div>
              </div>
              <div class="row">
              <div class="col-lg-12" style="padding-top:10px;">
              <label>Auctioned Price</label>
              <input type="number" id="bid_price" name="bid_price" class="form-control" value="0" disabled/>
              </div>
            </div>
<div class="form-group">
           
              
              <div class="col-lg-12 mt-20">
                <input type="submit" name="updt_status" class="btn btn-primary theme-btn btn-block">
              </div>
               </div>

            </div>

          </form>
          </div>
          ');
$ob->query_status_change();
}
 }
 else{
      foreach($ob->sel_bid_id() as $query){
              $date=date_create($query['bid_date']);
               $tdate =  date_format($date,"d-M-Y");
     echo('<div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading panel-theme">
            <div class="panel-title">Your BID</div>
          </div>
                <div class="table-responsive">
                    <table class="table">
                 
                  <tbody>
            <tr>
                      <td>Lot Number </td>
                      <td>'.$query['bit_alotNumb'].'</td></tr>
                      
                      <tr>
                      <td>Maker</td>
                      <td>'.$query['b_name'].'</td></tr>
                      
                      <tr>
                      <td>Model</td>
                      <td>'.$query['bid_vModel'].'</td>
                      </tr>
                      
                      <tr>
                      <td>Transmission</td>
                      <td>'.$query['bid_vTrans'].'</td></tr>
                      
                      <tr>
                      <td>Year</td>
                      <td>'.$query['bid_vYear'].'</td></tr>
                      
                      <tr>
                        <td>Shipment Type</td>
                        <td class="text-capitalize">'.$query['bid_shipType'].'</td>
                        </tr>
                        
                      <tr>
                      <td>Amount</td>
                      <td>'.$query['bid_amount'].'</td>
                      </tr>
                      <tr>
                      <td>Price</td>
                      <td>'.money_format("%i",$query['final_bid_price']).'</td>
                      </tr>
                      <tr>
                      <td>Amount Type</td>
                      <td>'.$query['price_type'].'</td>
                      </tr>
                      <tr>
                     </tr>
                      <tr><td>Agent</td>
                      <td>'.$query['full_name'].'</td>
                      </tr>
                       <tr><td>Group</td>
                      <td>'.$query['bid_group'].'</td>
                      </tr>
                      <tr><td>Units</td>
                      <td>'.$query['bid_unit'].'</td>
                      </tr>
                      <tr>
                      <td>Date</td>
                      <td>'.$tdate.'</td>
                      </tr>
                      <tr>
                      
                      <td>Auction Result</td>     <td>');
                 
                      if($query['bid_status'] == 1){
                          echo('<span class="label label-primary">No Result Yet </span>');
                          
                      }
                      if($query['bid_status'] == 2){
                          echo('<span class="label label-warning">Sold to Other</span>');
                          
                      }
                           if($query['bid_status'] == 3){
                          echo('<span class="label label-sucsess">Bought</span>');
                          
                      }
                           if($query['bid_status'] == 4){
                          echo('<span class="label label-danger">Canclled</span>');
                          
                      }
                        if($query['bid_status'] == 5){
                          echo('<span class="label label-info">Unsold</span>');
                          
                      }
                      
                      if($query['bid_status'] == 6){
                          echo('<span class="label label-info">Bid Updated</span>');
                          
                      }
                      
                      if($query['bid_status'] == 7){
                          echo('<span class="label label-danger">Auction Price</span>');
                          
                      }
                      echo('
                      </td>
                      </tr>
                      ');
               
                echo('
                </tbody>
                </table>
              </div>
          </div>
        </div>




    
      ');
     
 }}
?>
        </div>




      </div>


     
      </div>

      <br>
<script>
    
    document.getElementById('bid_status').addEventListener('change',function()
    {
        if(this.value == "3" || this.value=="7")
        {
            document.getElementById('bid_price').removeAttribute('disabled');
        }
        else
        {
            document.getElementById('bid_price').setAttribute('disabled','true');
        }
    });
    
</script>

<?php include('footer.php');?>
<script src="lib/js/pages/forms/form_select2.js"></script>
<script src="lib/js/pages/forms/form_inputs_basic.js"></script>