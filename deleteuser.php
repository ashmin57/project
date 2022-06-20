<?php

    if(!isset($_SESSION["admin"])){
        header("location:login.php");
    }
    include'db_config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
    }
        $sql="delete from`users` where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            // echo"Deleted successfull";
            header("location:userdetails.php");
        }else{
            die(mysqli_error($conn));
    }

?>