<?php
ini_set('memory_limit', '-1');
require_once 'signature-to-image.php';

$json 			= $_POST['signOutput'];
$currentSign 	= $_POST['currentSign'];
$width 			= $_POST['width'];
$height		 	= $_POST['height'];

$fileName = "";
if($currentSign == "1"){
	$fileName = "signature1.png";
}else if($currentSign == "2"){
	$fileName = "signature2.png";
}

$img = sigJsonToImage($json, array('imageSize'=>array($width, $height)));
imagepng($img, $fileName);
if(is_file($fileName)){
	echo "success";
}else{
	echo "fail";
}

imagedestroy($img);
?>