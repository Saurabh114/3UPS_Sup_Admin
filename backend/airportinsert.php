<?php
$city=$_POST['city'];
$airport_name=$_POST['airport_name'];    
$airport_address=$_POST['airport_address'];
$latitude=$_POST['latitude'];
$Longitude=$_POST['Longitude'];
$airportkm=$_POST['airportkm'];                               
                                    
   $airport_data = array("ci_id"=>$city,"ai_name"=>$airport_name,"ai_address"=>$airport_address,"ai_lat"=>$latitude,"ai_long"=>$Longitude,"ai_area"=>$airportkm);
   $url='https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Insert_info_admin/insertAirport';
   //$string = http_build_query($data);
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$airport_data);
  $response=curl_exec($ch);
  // $res =  json_decode($response);
  print_r($response);
   curl_close($ch);
?>