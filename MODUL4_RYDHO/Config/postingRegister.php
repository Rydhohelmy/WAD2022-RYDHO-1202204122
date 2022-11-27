<?php
 
    include('connectorregiss.php');
    if(isset($_POST['submit'])) {
        $idUser = rand(100000,200000);
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $noHp = $_POST['no_hp'];
        $sandi = $_POST['katasandi'];
        $confirm = $_POST['konfirmasi_katasandi'];

        if($sandi == $confirm) {
        
        $sql = "INSERT INTO user_rydho(id, email, nama, no_hp, password) 
        VALUES('$idUser', '$email', '$nama', '$noHp', '$sandi')";
        $sql_check = "SELECT email FROM user_rydho where email= '$email'";
        $cek = $connect->query($sql_check);

        if (mysqli_query($connect, $sql)) {
            session_start();
            $_SESSION['register'] = 'Berhasil';
            header("location:../Login_RYDHO.php");
        }

        else {
            header("location:../Login_RYDHO.php");
        }

        if ($cek -> num_rows > 0) {
            session_start();

            while ($row = $cek -> fetch_assoc()) {
                $email = $_POST['email'];
                $email_cek = $_POST['email'];
                $nama = $row['nama'];
                $uid = $row['id'];
            }

            if ($email == $email_cek) {
                $_SESSION['register'] = 'gagal';
                header("location:../Register_RYDHO.php");
            }
        }
        }
    }
?>