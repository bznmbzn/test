<?php 
header("Content-type:image/png");
$resim=imagecreatetruecolor(500,500);
$beyaz=imagecolorallocate($resim,200,255,170);
$mavi=imagecolorallocate($resim,0,0,255);
for($i=1;$i<=50;$i++)
{
imagestring($resim,rand(1,5),rand(0,425),rand(0,425),"Mehmet      BOZAN ",
imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255)));
}
imagefill($resim,0,0,$beyaz);
imagepng($resim);
imagedestroy($resim);


?>
