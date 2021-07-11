<?php 

    session_start();


    
    
    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration');

    $user = $_POST['user_id'];

    $pass = $_POST['password'];

    $s = " select * from usertable where user_id = '$user' && password = '$pass' ";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        
        header('location:welcome.php');

     $fetchName = mysqli_query($con, "SELECT * FROM usertable where user_id = '$user' && password = '$pass'");
     while($row = mysqli_fetch_assoc($fetchName)){
        $_SESSION['user_name'] = $row['user_name'];
       // echo $_SESSION['user_name'];
       
     }

    }else{
        
        header('login:login.php#login');

    }

    //CREATE TABLE `userregistration`.`usertable` ( `user_id` VARCHAR(255) NOT NULL , `user_name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;


    
?>
