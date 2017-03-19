<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://ibacor.com/api/pray-times?address=bandung&timezone=7&method=0&year=2016&month=2&day=6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>


