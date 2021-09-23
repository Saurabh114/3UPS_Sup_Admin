<?php
if(isset($_POST['type']) == "update"){

  $state=$_POST['state'];
  $city=$_POST['city'];
  $id=$_POST['id'];
  $city_data = array("ci_id"=>$id,"ci_state"=>$state,"ci_name"=>$city);
  $url='http://localhost/3-ups_api/index.php/web/Admin_web/Locations/updateCity';
  //$string = http_build_query($data);
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$city_data);
  $response=curl_exec($ch);
  print_r($response);
}

else if(isset($_POST['type']) == "status"){

}
  
  ?>