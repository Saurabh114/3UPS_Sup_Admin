<?php
   $city_id=$_POST['city_id'];
    $aname=$_POST['aname'];
    $aaddress=$_POST['aaddress'];
    $alatitude=$_POST['alatitude'];
    $alongitude=$_POST['alongitude'];
    $aakm=$_POST['aakm'];
    $id=$_POST['id'];
  $airport_data = array("ai_id"=>$id,"ci_id"=>$city_id,"ai_name"=>$aname,"ai_address"=>$aaddress,"ai_lat"=>$alatitude,"ai_long"=>$alongitude,"ai_area"=>$aakm);
  $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/updateAirport';
  //$string = http_build_query($data);
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$airport_data);
  $response=curl_exec($ch);
  print_r($response);

  ?>
   