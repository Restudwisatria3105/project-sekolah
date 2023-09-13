<?php
    include "../koneksi.php";

    $NIK = $_POST['nik'];
    $Nama = $_POST['nama_lengkap'];
    $Username = $_POST['username'];
    $Password = md5($_POST['password']);
    $Alamat = $_POST['alamat'];
    $Tempat_lahir = $_POST['tempat_lahir'];
    $Tgl_lahir = $_POST['tgl_lahir'];
    $JK = $_POST['jk'];

    //--- simpan ke tabel pengguna ---
    $sql = mysqli_query($koneksi, "INSERT INTO pengguna VALUES('".$NIK."','".$Nama."','".$Username."','".$Password."','".$Alamat."','".$Tempat_lahir."','".$Tgl_lahir."','".$JK."')");
    if($sql){  
        header("location:lokasi.php");
    }
    else{
        echo "gagal untuk registrasi";
    }
?>