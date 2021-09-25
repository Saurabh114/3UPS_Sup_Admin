<?php


  $state_update=$_POST['state_update'];
  $cityadd=$_POST['cityadd'];
  $id=$_POST['id'];
  $city_data = array("ci_id"=>$id,"ci_state"=>$state_update,"ci_name"=>$cityadd);
  $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/updateCity';
  //$string = http_build_query($data);
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$city_data);
  $response=curl_exec($ch);
  print_r($response);

  ?>