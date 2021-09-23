<?php
$country_name=$_POST['country_name'];
$mobile_country_code=$_POST['mobile_country_code'];
$Latitude=$_POST['Latitude'];
$longitude=$_POST['longitude'];
   $country_data = array("c_name"=>$country_name,"c_code"=>$mobile_country_code,"c_lat"=>$Latitude,"c_long"=>$longitude);
   $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/insertCountry';
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$country_data);
  $response=curl_exec($ch);
  print_r($response);
   curl_close($ch);
?>