<?php

function token($key, $data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://securetoken.googleapis.com/v1/token?key='.$key);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $headers = array();
  $headers[] = 'Content-Type: application/x-www-form-urlencoded';
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=refresh_token&refresh_token='.$data);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  curl_close ($ch);
  return $result;
}

function get_data($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
  $result = curl_exec($ch);
  curl_close($ch);
  $ch = curl_init();
  return $result;
}

function unix($data){$result = base64_decode(str_replace(['FV8','JCX','NGT','-@','+%','Z&'],['=','e','0','y','l','n'], $data));return $result;}
function ix($data){$result = str_replace(['=','e','0','y','l','n'],['FV8','JCX','NGT','-@','+%','Z&'], base64_encode($data));return $result;}

?>