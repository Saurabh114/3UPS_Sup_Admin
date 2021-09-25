<?php


    $country_id=$_POST['country_id'];
    $stateup=$_POST['stateup'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $id=$_POST['id'];
  $state_data = array("s_id"=>$id,"co_id"=>$country_id,"s_name"=>$stateup,"s_lat"=>$latitude,"s_long"=>$longitude);
  $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/updateState';
  //$string = http_build_query($data);
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$state_data);
  $response=curl_exec($ch);
  print_r($response);

  ?>