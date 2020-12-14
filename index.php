<?php
namespace App;
require 'vendor/autoload.php';
$T1 = new Point(2, 1);
$V1 = new Vector(1, 3);
$V2 = new Vector(0, 0);
echo $V2->IsZeroVector() . "<br />";
$V3 = new Vector(3, -1);
echo $V1->Length(). "<br />";
echo $V2->Length(). "<br />";
echo $V3->Length(). "<br />";
echo $V1->IsPerpendicularTo($V2) . "<br />";
$T1->TransferByX(-$V1->x);
$T1->TransferByY($V1->y - $T1->y);
var_dump($T1);