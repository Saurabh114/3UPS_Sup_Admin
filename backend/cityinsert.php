<?php
$state=$_POST['state'];
$city=$_POST['city'];
   $city_data = array("ci_state"=>$state,"ci_name"=>$city);
   $url='http://localhost/3-ups_api/index.php/web/Insert_details/Insert_info/insertCity';
   //$string = http_build_query($data);
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POST,true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$city_data);
  $response=curl_exec($ch);
  print_r($response);


  
?>