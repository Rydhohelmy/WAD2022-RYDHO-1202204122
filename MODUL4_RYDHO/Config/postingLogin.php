<?php

    require 'connectorregiss.php' ; 
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(isset($_POST['check'])) {
            $check = TRUE;
        } else {
            $check = FALSE;
        }
        
        $dt_email = "SELECT * FROM user_rydho WHERE email = '$email' && password='$password'";

        $exeQuery = mysqli_query($connect, $dt_email);
        $count = mysqli_num_rows($exeQuery);
        echo $count;

        if ($count > 0 ) {
            $result = mysqli_fetch_assoc($exeQuery);


                $_SESSION['email'] = $result['email'];
                $_SESSION['message'] = 'Anda berhasil login';
                header('Location:../Home_RYDHO.php');
                exit();
            } else {
                $_SESSION['message error'] = 'Password anda salah';
                header('location:../Login_RYDHO.php');
                exit();
            }
        }
        
        $_SESSION['message error'] = 'Gagal login';
        header('location:../Login_RYDHO.php');
?>