<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }

    require 'function.php';
    if( isset($_POST["submit"]) ){
    if(isi($_POST) > 0){
        if(strlen($_POST["nik"]) != 16){
        echo 
        "<script>
        alert('data gagal ditambahkan. NIK harus 16 digit angka!')
        </script>";
    }else{
        echo 
        "<script>
        alert('data berhasil');
        document.location.href='dataktp.php';
        </script>"; 
    }
    }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran ktp</title>
        <style>
            body{
                background: #CCFFFF;
            }
            .container{
                background-color: white;
                width: 600px;
                height: 100%;
                margin: 50px auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

            }
            form{
                padding: 20px;
            }
            h1{
                text-align: center;
                font-family: Segoe UI;
                text-decoration: underline;
            }
            input[type=number], input[type=date], input[type=text], select {
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
            background-color: #888888  ;
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

        <h1>FORM PENDAFTARAN KTP</h1>
        <div class="container">
        
        
            <form action="" method="post">
                
                    <h3>Data Penduduk</h3>
                    <label for="nik">NIK:</label><br>
                    <input type="number" name="nik" id="nik" pattern="[0-9]{16}" required>
                    <br><br>
                    <label for="nama">Nama Lengkap: </label><br>
                    <input type="text" name="nama" id="nama" required>
                    <br><br>
                    <label for="tmp_lahir">Tempat Lahir: </label><br>
                    <input type="text" name="tmp_lahir" id="tmp_lahir" required>
                    <br><br>
                    <label for="tgl_lahir">Tanggal Lahir: </label><br>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" required>
                    <br><br>
                    <label for="gender">Jenis Kelamin:</label><br>
                    <input type="radio" name="gender" id="gender" value="L" required>Laki-Laki<br>
                    <input type="radio" name="gender" id="gender" value="P" required>Perempuan
                    <br><br>
                    <label for="gol_darah">Golongan Darah: </label><br>
                    <input type="text" name="gol_darah" id="gol_darah" >
                    <br><br>
                    <label for="alamat">Alamat:</label><br>
                    <input type="text" name="alamat" id="alamat" required>
                    <br><br>
                    <label for="rt">RT:</label><br>
                    <input type="text" name="rt" id="rt" required>
                    <br><br>
                    <label for="rw">RW:</label><br>
                    <input type="text" name="rw" id="rw" required>
                    <br><br>
                    <label for="kelurahan">Kelurahan:</label><br>
                    <input type="text" name="kelurahan" id="kelurahan" required>
                    <br><br>
                    <label for="kecamatan">Kecamatan:</label><br>
                    <input type="text" name="kecamatan" id="kecamatan" required>
                    <br><br>
                    <label for="agama">Agama:</label><br>
                    <input type="text" name="agama" id="agama" required>
                    <br><br>
                    <label for="pekerjaan">Pekerjaan:</label><br>
                    <input type="text" name="pekerjaan" id="pekerjaan" required>
                    <br><br>
                    <label for="status">Status:</label><br>
                    <input type="radio" name="status" id="status" value="K" required>Kawin<br>
                    <input type="radio" name="status" id="status" value="BK" required>Belum Kawin<br>
                    <br>
                    <button type="submit" name="submit">submit</button> 

            </form>
        </div>
    </body>
</html>