<?php
    include "../koneksi.php" ;


    if(!empty($_POST['act'])){
        $act = $_POST['act'];
    }
    else if (!empty($_GET['act'])){
        $act = $_GET['act'];
    }

    if($act == "simpan"){
        $nama_lokasi = $_POST['nama_lokasi'];
        $alamat = $_POST['alamat'];

        $sql = mysqli_query($koneksi, "INSERT INTO lokasi VALUES(NULL,'".$nama_lokasi."','".$alamat."')");
        if($sql){
            header('location:lokasi.php');
            echo "berhasil input ke tabel lokasi" ;
        }else {
            echo "gagal cok";
        }
    }else if ($act == "update"){
            echo "untuk update";
        }
        else if ($act == "delete"){
            $id_lokasi = $_GET['id_lokasi'];
            $sql = mysqli_query($koneksi, "DELETE FROM lokasi WHERE id_lokasi = '".$id_lokasi."'");
            if($sql){
                header('location:lokasi.php');
            }
        }else{
            echo"gagal hapus data";
        }
?>