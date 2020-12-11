<?php
    include ('auth.php');

    $ide = $_POST['id'];
    $code = $_POST['kode'];
    $brande = $_POST['merk'];
    $typee = $_POST['jenis'];
    $colore = $_POST['warna'];
    $rentPricee = $_POST['hargasewa'];

    if (isset($ide) && isset($code) && isset($brande) && isset($typee) && isset($colore) && isset($rentPricee) ){
        $query = "UPDATE tbsepeda SET kode='$code', merk='$brande', jenis='$typee', warna='$colore', hargasewa='$rentPricee' where id='$ide' ";

    if ($con->query($query) == TRUE) {
            $json["STATUS"] = "SUCCESS";
            $json["MESSAGE"] = "SUCCESS";
	    } else {
            $json["STATUS"] = "FAILED";
            $json["MESSAGE"] = "FAILED";
        }
    }
    echo json_encode($json);
?>