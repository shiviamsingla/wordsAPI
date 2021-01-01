<?php
header('Access-Control-Allow-Origin: *');
header('content-type:application/json; charset=utf-8');
if(isset($_GET['no']) &&  $_GET['no'] == 1){
	$words_file = fopen("paragraphs.txt", "r") or die("Some Error to open file");
	$arr = explode("\r\n",fread($words_file, filesize("paragraphs.txt")));
	fclose($words_file);
	echo json_encode($arr);
}
elseif (isset($_GET['no']) && $_GET['no'] == 2) {
	$words_file = fopen("eng_words2.txt", "r") or die("Some Error to open file");
	$arr = explode("\r\n",fread($words_file, filesize("eng_words2.txt")));
	fclose($words_file);
	echo json_encode($arr);
}
else{
	header('content-type:text/html; charset=utf-8');
	echo "Nothing Here";
}
?>