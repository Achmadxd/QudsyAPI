<?php
    include ('auth.php');

    $id = $_POST['id'];

    $query = "DELETE FROM tbsepeda WHERE id='$id'";
    mysqli_query($con, $query);
?>