<?php

header ("Content-type: image/png");
$z = random_int(1,20);
$im = imagecreatetruecolor(1920, 1080);

for($i=0;$i<$z;$i++){
imagefilledrectangle($im, random_int(0,1000), random_int(0,800),random_int(300,400), random_int(1,600),imagecolorallocate($im, 255, 0, 0));
}

imagepng($im);

?>