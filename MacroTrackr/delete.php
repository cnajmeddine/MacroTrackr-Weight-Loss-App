<?php

include 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM users where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Suppression avec succes!')</script>";
        header("location:admin-dashboard.php");
    }else {
        die(mysql_error($conn));
    }
}
?>