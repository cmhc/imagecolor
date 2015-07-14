<?php
$i=imagecreatefromjpeg("2.jpg");//测试图片，自己定义一个，注意路径
$rTotal = 0;
$gTotal = 0;
$bTotal = 0;
$total = 0;

$xdot = imagesx($i);
$ydot = imagesy($i);

for ($x=0; $x<$xdot; $x+=100) {

  for ($y=0; $y<$ydot; $y+=100) {

    $rgb = imagecolorat($i,$x,$y);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8 ) & 0xFF;
    $b = $rgb & 0xFF;
    $rTotal += $r;
    $gTotal += $g;
    $bTotal += $b;
    $total++;

  }

}

$rAverage = round($rTotal/$total);
$gAverage = round($gTotal/$total);
$bAverage = round($bTotal/$total);
//示例：
echo $rAverage."\n";
echo $gAverage."\n";
echo $bAverage;
?>