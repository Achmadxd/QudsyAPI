<?php
include ('auth.php');

$code = $_POST['kode'];
$brand = $_POST['merk'];
$type = $_POST['jenis'];
$color = $_POST['warna'];
$rentPrice = $_POST['hargasewa'];

if($code != "" && $brand != "" && $type != "" && $color != "" && $rentPrice != ""){
    $sql = "INSERT into tbsepeda (kode, merk, jenis, warna, hargasewa) values ('$code', '$brand', '$type', '$color', '$rentPrice')";
    $json["STATUS"] = "FAILED";
    $json["MESSAGE"] = "FAILED";

    if ($con->query($sql) === TRUE) {
		$json["STATUS"] = "SUCCESS";
		$json["MESSAGE"] = "SUCCESS";
	}
}
echo json_encode($json);
?>