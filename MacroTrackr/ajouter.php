<?php
    @include 'config.php';
    session_start();
    
    if(isset($_GET['addid'])){
        $id=$_GET['addid'];
        $sql="SELECT * from cata WHERE  id_cata='$id' ";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);

        $date_repas = date('Y-m-d');
        $id =  mysqli_real_escape_string($conn,$row['id_cata']);
        $aliment =  mysqli_real_escape_string($conn,$row['aliment']);
        $type_alim =  mysqli_real_escape_string($conn,$row['categorie']);
        $calories =  mysqli_real_escape_string($conn,$row['calories']);
        $glucide =  mysqli_real_escape_string($conn,$row['carbs']);
        $proteine =  mysqli_real_escape_string($conn,$row['protein']);
        $lipides =  mysqli_real_escape_string($conn,$row['fats']); 
        $email = $_SESSION['email'];

        $query = "INSERT INTO add_meal(date_repas,aliment,type_alim,calories,glucide,proteine,lipides,email) VALUES ('$date_repas','$aliment','$type_alim','$calories','$glucide','$proteine','$lipides','$email')";
        $query_run = mysqli_query($conn, $query); 
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>
