<?php
header('Access-Control-Allow-Origin: *');
$arr = array("ਮੇਰਾ","ਘਰ","ਸਕੂਲ","ਵਿਦਿਆਰਥੀ","ਅਧਿਆਪਕ","ਕੌਣ","ਅਤੇ","ਇਸ","ਪ੍ਰੀਖਿਆ","ਮੇਰਾ","ਰੋਜ਼","ਪੰਜਾਬੀ","ਰਾਵੀ","ਯੂਨੀਵਰਸਿਟੀ","ਗੁਰੂ","ਜੀ","ਸਿੰਘ","ਭਾਰਤ","ਦੇਸ਼","ਅਮਰੀਕਾ","ਲੋਕ-ਧਾਰਾ","ਜਗਜੀਤ","ਪੜਨਾਵ","ਤ੍ਰਿੰਝਣ","ਮੁੰਡੇ","ਕੁੜੀਆਂ","ਪੜ੍ਹਨਾ-ਲਿਖਣਾ","ਮੋਬਾਈਲ-ਫ਼ੋਨ","ਜਨਮ-ਮੌਤ","ਪਰਿਵਾਰ");
$arr2 = array("ਦਰਿਆ","ਦਿਲ","ਕੌਣ","ਆਏਗਾ","ਦਰਵਾਜ਼ਾ","ਹਿਲਾਇਆ","ਹਮਸਫ਼ਰ","ਦਿੱਲੀ","ਸੰਗੀਤ","ਭਗਵਾਨ","ਵਿਗਿਆਨ","ਸੁਰ-ਤਾਲ","ਤਸਦੀਕ","ਅਰਜ਼ੀ","ਉੱਠ","ਇਸਤਰੀ","ਔਰਤ","ਬੱਚਾ","ਜਵਾਨ-ਕਿਸਾਨ","ਅੰਦੋਲਨ","ਸਰਕਾਰ","ਕੀਤਾ","ਜਾਂਦਾ","ਰਹਿੰਦਾ","ਮੈਂ","ਯਾਦ","ਸਾਥ","ਸਥਾਨ","ਤੀਰਥ","ਗੱਲ");
if(isset($_GET['no']) &&  $_GET['no'] == 1){
	header('content-type:text/plain; charset=utf-8');
	foreach ($arr as $key => $value) {
		echo $value." ";
	}
}
elseif (isset($_GET['no']) && $_GET['no'] == 2) {
	header('content-type:text/plain; charset=utf-8');
	foreach ($arr2 as $key => $value) {
		echo $value." ";
	}
}
else{
	header('content-type:text/html; charset=utf-8');
	echo "Nothing Here";
}
?>