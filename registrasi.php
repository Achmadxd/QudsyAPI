<?php
include ('auth.php');

$noktp = $_POST['noktp'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
if ($noktp != "" && $email != "" && $password != "" && $nama != "" && $nohp != "" && $alamat != "") {
	$roleuser = 1;
	$sql = "insert into tbuser (noktp, email, password, nama, nohp, alamat, roleuser) values ('$noktp', '$email', '$password', '$nama', '$nohp', '$alamat', '$roleuser')";
	$json["STATUS"] = "FAILED";
	$json["MESSAGE"] = "FAILED";
	
	if ($con->query($sql) === TRUE) {
		$json["STATUS"] = "SUCCESS";
		$json["MESSAGE"] = "SUCCESS";
	}
}
echo json_encode($json);
	//echo $sql;
?>