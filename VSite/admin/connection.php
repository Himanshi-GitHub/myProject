<?php 

    session_start();


    
    
    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration');

    $user = $_POST['admin_id'];

    $pass = $_POST['password'];

    $s = " select * from admintable where admin_id = '$user' && password = '$pass' ";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['logged_in'] = 1;
        header('location:admin_portal.php');

     }

    else{
        $_SESSION['message'] = "Incorrect Email or Password.";
        header('location:admin_login.php');

    }

    //CREATE TABLE `userregistration`.`admintable` ( `admin_id` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`admin_id`)) ENGINE = InnoDB;


    
?>
