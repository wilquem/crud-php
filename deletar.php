<?php
    include 'config.php';
    if(isset($_GET['deletarid'])){
        $id=$_GET['deletarid'];

        $sql="delete from `infousuarios` where id=$id";
        $result=mysqli_query($conexao,$sql);
        if($result){
            header('location:dashboard.php');
        }else{
            die(mysqli_error($conexao));
        }
    }
?>