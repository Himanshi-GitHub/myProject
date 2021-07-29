<?php 

    session_start();
    header('location:index.php');
    
    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'userregistration');

    $user = $_POST['user_id'];
    $name = $_POST['user_name'];
    $pass = $_POST['password'];

    $s = " select * from usertable where user_id = '$user'";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "User ID Already Taken";
    }else{
        $reg = "insert into usertable(user_id ,user_name, password) values ('$user' , '$name' , '$pass')";
        mysqli_query($con, $reg);
        //echo "Registration succesful!";
        $_SESSION['user_name'] = $name;
        echo $_SESSION['user_name'] ;

    }

    //CREATE TABLE `userregistration`.`usertable` ( `user_id` VARCHAR(255) NOT NULL , `user_name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;


    
?>
