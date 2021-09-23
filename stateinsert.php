<?php
$country=$_POST['country'];
$state=$_POST['state'];
$state_lat=$_POST['state_lat'];
$state_long=$_POST['state_long'];
   $state_data = array("c_id"=>$country,"s_name"=>$state,"s_lat"=>$state_lat,"s_long"=>$state_long);
   $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/insertState';
   //$string = http_build_query($data);
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$state_data);
  $response=curl_exec($ch);
  // $res =  json_decode($response);
  print_r($response);
   curl_close($ch);
?>