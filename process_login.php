<?php
    session_start();
    require_once "db_config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
            
        $query = "select * from users where (username = '$username' or email = '$username') and password = '$password'";

        $res = mysqli_query($conn,$query);


        $row = mysqli_fetch_array($res);
        if($row["usertype"] == "user")
            {
                $_SESSION["username"] = $username;
                header("location:complaint.php");
            }
            elseif($row["usertype"]=="admin")
            {
                $_SESSION["admin"] = $username;
                header("location:admin/dashboard.php");
            }
            else
            {
                header("location:login.php?Error=invalid username or password");
            }


}