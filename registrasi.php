<?php
require 'function.php';

if(isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "<script>
                alert('user berhasil dibuat');
                document.location.href='login.php';
                </script>";
    }else{
        echo mysqli_error($conn);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <style>
            .container{
            background-color: white;
            width: 600px;
            height: 100%;
            margin: 150px auto;
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
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="username">Username: </label><br>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password: </label><br>
            <input type="password" name="password" id="password">
            <br><br>
            <label for="password2">Konfirmasi Password: </label><br>
            <input type="password" name="password2" id="password2">
            <br><br>
            <button type="submit" name="register">register</button>
            <br><br>
            <p style="text-align: center;">kembali ke halaman <a href="login.php">login</a> untuk masuk</p>
        </form>
    </div>
    
</body>
</html>