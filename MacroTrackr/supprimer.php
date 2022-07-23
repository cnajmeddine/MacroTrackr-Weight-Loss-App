<?php
@include 'config.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="DELETE FROM cata where id_cata=$id";
        $result = mysqli_query($conn,$sql);   
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
    }

?>