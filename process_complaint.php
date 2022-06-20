<?php
    require_once "db_config.php";

    // if(isset($_POST["Submit"])){
        $fname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        // $cit_id = $_POST['cit_id'];
        $email = $_POST['email'];
        $complaint = $_POST['complaint'];
        $file = $_POST['file'];
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        // $upload_dir = 'images/';
        move_uploaded_file($tname,'images/'.$pname);

        $description = $_POST['description'];


        $query = "insert into complaints(fullName,address,phone,email,complaint,file,description) values('$fname','$address','$phone','$email','$complaint','$pname','$description')";

        mysqli_query($conn, $query);

        header("location:detail.php");
    