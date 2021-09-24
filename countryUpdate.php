<?php
//if(isset($_POST['type']) == "update"){

    $country_name=$_POST['country_name'];
    $mobile_country_code=$_POST['mobile_country_code'];
    $country_lat=$_POST['country_lat'];
    $country_long=$_POST['country_long'];
    $id=$_POST['id'];
  $country_data = array("co_id"=>$id,"co_name"=>$country_name,"co_code"=>$mobile_country_code,"co_lat"=>$country_Lat,"co_long"=>$country);
  $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/updateCountry';
  //$string = http_build_query($data);
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$country_data);
  $response=curl_exec($ch);
  print_r($response);
//}
  ?>