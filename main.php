// <?php
// class abc{ 

// function vh($id){
   
//   $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http:// admin.nipponjidosha.co/main.php/?vehicle_detail='.$id.'',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_POSTFIELDS =>' ',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/json',
//     'Cookie: PHPSESSID=6fbaefcn0b95fo67oba1jem3gs'
//   ),
// ));

// $response = curl_exec($curl);
 
 
// curl_close($curl);
// $brands = json_decode($response, true);
// $brands = json_decode($response, true);
 

// // Check if JSON decoding was successful and the result is an array
// if ($brands === null || !is_array($brands)) {
//     // JSON decoding failed or result is not an array
//             die('Error decoding JSON response: ' . json_last_error_msg());
// }

// return $brands;
// }
// }



// $ob =  new abc();

// ?>



<?php

class abc {
    function vh($id){
        $curl = curl_init();

        // Encode the ID parameter for the URL
        $encoded_id = urlencode($id);

        // Set up the API endpoint URL with the encoded ID
        $url = 'http://admin.nipponjidosha.co/main.php/?vehicle_detail=' . $encoded_id;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: PHPSESSID=6fbaefcn0b95fo67oba1jem3gs'
            ),
        ));

        $response = curl_exec($curl);

        // Check for errors
        if ($response === false) {
            // Error occurred during the request
            $error_msg = curl_error($curl);
            curl_close($curl);
            die('Error: ' . $error_msg);
        }

        curl_close($curl);

        // Decode the JSON response
        $brands = json_decode($response, true);

        // Check if JSON decoding was successful
        if ($brands === null) {
            // JSON decoding failed
            die('Error decoding JSON response');
        }

        return $brands;
    }
}

// Example usage
$ob = new abc();
$id = $_GET['vehicle_detail']; // Assuming you get the ID from the URL parameter

// Call the function and handle the response
$response = $ob->vh($id);
echo json_encode($response); // Return the response as JSON
?>

