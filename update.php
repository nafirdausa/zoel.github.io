<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }

    require 'function.php';

    //ambil data di url
    $nik = $_GET["nik"];

    //query data ktp
    $dt_ktp = query("SELECT * FROM tb_data_ktp WHERE nik=$nik")[0];

    if( isset($_POST["submit"]) ){
    if(update($_POST) > 0){
        if(strlen($_POST["nik"]) != 16){
        echo 
        "<script>
        alert('data gagal diupdate. NIK harus 16 digit angka!')
        </script>";
    }else{
        echo 
        "<script>
        alert('data berhasil diupdate');
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
        <title>Ubah data ktp</title>
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

        <h1>UPDATE DATA KTP</h1>
        <div class="container">
        
        
            <form action="" method="post">
                
                    <h3>Data Penduduk</h3>
                    <label for="nik">NIK:</label><br>
                    <input type="number" name="nik" id="nik" pattern="[0-9]{16}" value="<?= $dt_ktp["nik"]; ?>" required>
                    <br><br>
                    <label for="nama">Nama Lengkap: </label><br>
                    <input type="text" name="nama" id="nama" value="<?= $dt_ktp["nama"]; ?>" required>
                    <br><br>
                    <label for="tmp_lahir">Tempat Lahir: </label><br>
                    <input type="text" name="tmp_lahir" id="tmp_lahir" value="<?= $dt_ktp["tmp_lahir"]; ?>" required>
                    <br><br>
                    <label for="tgl_lahir">Tanggal Lahir: </label><br>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $dt_ktp["tgl_lahir"]; ?>" required>
                    <br><br>
                    <label for="gender">Jenis Kelamin:</label><br>
                    <input type="radio" name="gender" id="gender" value="L"<?php if ($dt_ktp["gender"]=="L"){echo 'checked';} ?> required>Laki-Laki<br>
                    <input type="radio" name="gender" id="gender" value="P"<?php if($dt_ktp["gender"]=="P"){echo 'checked';} ?> required>Perempuan
                    <br><br>
                    <label for="gol_darah">Golongan Darah: </label><br>
                    <input type="text" name="gol_darah" id="gol_darah" value="<?= $dt_ktp["gol_darah"]; ?>" >
                    <br><br>
                    <label for="alamat">Alamat:</label><br>
                    <input type="text" name="alamat" id="alamat" value="<?= $dt_ktp["alamat"]; ?>" required>
                    <br><br>
                    <label for="rt">RT:</label><br>
                    <input type="text" name="rt" id="rt" value="<?= $dt_ktp["rt"]; ?>" required>
                    <br><br>
                    <label for="rw">RW:</label><br>
                    <input type="text" name="rw" id="rw" value="<?= $dt_ktp["rw"]; ?>" required>
                    <br><br>
                    <label for="kelurahan">Kelurahan:</label><br>
                    <input type="text" name="kelurahan" id="kelurahan" value="<?= $dt_ktp["kelurahan"]; ?>" required>
                    <br><br>
                    <label for="kecamatan">Kecamatan:</label><br>
                    <input type="text" name="kecamatan" id="kecamatan" value="<?= $dt_ktp["kecamatan"]; ?>" required>
                    <br><br>
                    <label for="agama">Agama:</label><br>
                    <input type="text" name="agama" id="agama" value="<?= $dt_ktp["agama"]; ?>" required>
                    <br><br>
                    <label for="pekerjaan">Pekerjaan:</label><br>
                    <input type="text" name="pekerjaan" id="pekerjaan" value="<?= $dt_ktp["pekerjaan"]; ?>" required>
                    <br><br>
                    <label for="status">Status:</label><br>
                    <input type="radio" name="status" id="status" value="K"<?php if($dt_ktp["status"]=="K"){echo 'checked';} ?> required>Kawin<br>
                    <input type="radio" name="status" id="status" value="BK"<?php if($dt_ktp["status"]=="BK"){echo 'checked';} ?> required>Belum Kawin<br>
                    <br><br>
                    <button type="submit" name="submit">update</button> 

            </form>
        </div>
    </body>
</html>