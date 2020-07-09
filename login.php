<?php
    session_start();
    if( isset($_SESSION["login"]) ){
        header("Location: index.php");
        exit;
    }

    require 'function.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username= '$username'");

    //cek uname
    if(mysqli_num_rows($result) === 1){
        
        //cek pwd
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            
            //set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit; 
        }
    }
    $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
       
        }
        .container{
                background-color: white;
                width: 600px;
                height: 100%;
                margin: 100px auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            form{
                padding: 20px;
            }
            input[type=text], input[type=password], select {
            width: 100%;
            padding: 8px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            button[type=submit] {
            width: 100%;
            background-color: #0066CC  ;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
            h1{
                margin-top: 30px;
                text-align: center;
                font-family: Segoe UI;
            }
    </style>
</head>
<body>
    <h1>Log In Untuk Masuk ke Pendaftaran KTP</h1>

    <div class="container">
        <form action="" method="post">
            <label for="username">Username: </label><br>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password: </label><br>
            <input type="password" name="password" id="password">
            <br><br>
            <button type="submit" name="login">Log In</button>
            <p style="text-align: center;">belum punya akun? <a href="registrasi.php">buat akun</a> </p>
            
        </form>
    </div>

    <?php if(isset($error)) :?>
    <p style="color: red; font-style: italic;">username atau password salah</p>
    <?php endif; ?>
</body>
</html>