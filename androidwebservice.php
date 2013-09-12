<?php
include_once "admin/lib/sm-constant.php";
include_once "admin/lib/sm-connection.php";
include_once "admin/lib/pf.php";
$uu = aGetAllProductsByCat('Poncho');
echo json_encode($uu);
?>