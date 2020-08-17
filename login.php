<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://members.iracing.com/membersite/Login");
//curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POST, true);
//Take this out: curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=lukcasiracing@gmail.com&password=P61e789a");
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);CURLOPT_RETURNTRANSFER
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/xml", "Authorization: removed_dev_key:removed_api_key"));
$result = curl_exec($ch);
curl_close($ch);
print $result;
?>