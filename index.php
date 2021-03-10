<?php
function ulke($ip) {
$ulke = file_get_contents("http://ipinfo.io/".$ip."/country");
return $ulke;
}
$ip = $_SERVER['REMOTE_ADDR'];
$ulke = ulke($ip);
if(eregi ("TR", $ulke)){
echo 'Türksün hoşgeldin.';
} else {
echo 'Biz yabancıları sevmeyiz.';
}
?>
