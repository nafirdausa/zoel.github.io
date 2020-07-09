<?php
$conn = mysqli_connect("localhost", "root", "", "db_ktp");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Insert
function isi(){
    global $conn;
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tmp_lahir = $_POST["tmp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $gol_darah = $_POST["gol_darah"];
    $alamat = $_POST["alamat"];
    $rt = $_POST["rt"];
    $rw = $_POST["rw"];
    $kelurahan = $_POST["kelurahan"];
    $kecamatan = $_POST["kecamatan"];
    $agama = $_POST["agama"];
    $pekerjaan = $_POST["pekerjaan"];
    $status = $_POST["status"];

    $query = "INSERT INTO tb_data_ktp VALUES('$nik', '$nama', '$tmp_lahir', '$tgl_lahir', '$gender', '$gol_darah', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$agama', '$pekerjaan', '$status')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// hapus
function hapus($nik){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_data_ktp WHERE nik = $nik");
    return mysqli_affected_rows($conn);
}

//update
function update($data){
    global $conn;
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tmp_lahir = $_POST["tmp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $gol_darah = $_POST["gol_darah"];
    $alamat = $_POST["alamat"];
    $rt = $_POST["rt"];
    $rw = $_POST["rw"];
    $kelurahan = $_POST["kelurahan"];
    $kecamatan = $_POST["kecamatan"];
    $agama = $_POST["agama"];
    $pekerjaan = $_POST["pekerjaan"];
    $status = $_POST["status"];

    $query = "UPDATE tb_data_ktp SET
                nik = '$nik',
                nama = '$nama',
                tmp_lahir = '$tmp_lahir',
                tgl_lahir = '$tgl_lahir',
                gender = '$gender',
                gol_darah = '$gol_darah',
                alamat = '$alamat',
                rt = '$rt',
                rw = '$rw',
                kelurahan = '$kelurahan',
                kecamatan = '$kecamatan',
                agama = '$agama',
                pekerjaan = '$pekerjaan',
                status = '$status'
                WHERE nik = $nik
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//registrasi
function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek uname sudah ada/belum
    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah ada!');
                </script>";
        return false;
    }

    //cek konfirmasi pwd
    if($password != $password2){
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi pwd
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambah user baru ke database
    mysqli_query($conn, "INSERT INTO tb_user VALUES(0, '$username', '$password')");
    mysqli_affected_rows($conn);
    
}

?>