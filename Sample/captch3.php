<?php
$img=imagecreate(200,100);
imagecolorallocate($img, 225, 0,0);
$col=imagecolorallocate($img, 225, 225,225);
imagestring($img, 5, 50, 50, "HELLO", $col);
header("content-type:image/jpeg");
imagejpeg($img);
?>