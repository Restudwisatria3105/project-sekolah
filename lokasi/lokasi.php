DATA LOKASI
<?php
    include "../koneksi.php";
    include "form_lokasi.php";
?> 
<table border='1'>
    <tr>
        <th>No</th>
        <th>ID lokasi</th>
        <th>Nama Lokasi</th>
        <th>Alamat Lokasi</th>
    </tr>
    <?php
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * FROM lokasi");
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['id_lokasi']."</td>";
        echo "<td>".$data['nama_lokasi']."</td>";
        echo "<td>".$data['alamat_lokasi']."</td>";
        echo  "<td><a href='aksi_lokasi.php?act=delete&id_lokasi=".$data['id_lokasi']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>

</table>