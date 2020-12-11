<?php
    include ('auth.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from tbuser where email = '$username' and password = '$password' ";

    $json["hasil"]=array();
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count > 0) {
        $json["hasil"]["respon"]=true;
        if($row["roleuser"] == 1) {
            $json["hasil"]["roleuser"]="customer";
        }else{
            $json["hasil"]["roleuser"]="admin";
        }
    }else{
        $json["hasil"]["respon"]=false;
        $json["hasil"]["roleuser"]="";
    }
    echo json_encode($json);
?>