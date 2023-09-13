    Pendaftaran Akun
    <form action="aksi.php" method="POST">
        NIK <input type="number" name="nik"><br>
        Nama <input type="text" name="nama_lengkap"><br>
        Username <input type="text" name="username"><br>
        Password <input type="password" name="password"><br>
        Alamat <textarea name="alamat"></textarea><br>
        Tempat_lahir <input type="text" name="tempat_lahir"><br>
        Tgl_lahir <input type="date" name="tgl_lahir"><br>
        JK
        <select name="jk" id=""> 
            <option value="laki">Laki Laki</option>
            <option value="perempuan">perempuan</option>
        </select><br>
        <input type="submit" value="Registrasi">
    </form>