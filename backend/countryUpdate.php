<?php
//if(isset($_POST['type']) == "update"){

    $country=$_POST['country'];
    $mobile_code=$_POST['mobile_code'];
    $country_lat=$_POST['country_lat'];
    $country_long=$_POST['country_long'];
    $id=$_POST['id'];
  $country_data = array("co_id"=>$id,"co_name"=>$country,"co_code"=>$mobile_code,"co_lat"=>$country_lat,"co_long"=>$country_long);
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