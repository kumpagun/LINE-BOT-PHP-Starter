<?php
$access_token = 'Yd/+tjtmQH9Cy9WZPAZ5gBYDg7sUEMtD0dAvi7vMPCuE70tvFTji2LjeLdoSOnee4SH64hPY32bMNR6NzBaUWtCMm43Ag8niplm/dg8cxkP/A7mBtkJYPP4RMimV/rq5YjHgPS9iz68VR2HkzM/qmgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
