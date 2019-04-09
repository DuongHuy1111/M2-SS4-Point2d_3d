<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include('Point2D.php');
include('Point3D.php');

$point2d = new Point2D(5, 6);
$point2d->setXY(9, 8);
$point2d->toString();
echo "<br>";



$point3d = new Point3D(2, 10, 11);
$point3d->setXYZ(10, 01, 15);
$point3d->toString();
?>
</body>
</html>