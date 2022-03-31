<html>
    <body>
        <a href="http://localhost/saw/beranda.php">beranda</a>
        <h3>Input Siswa</h3>
        <form action="http://localhost/saw/proses/input_siswa.php" method="post">
            <!-- nama siswa -->
            <label for="nama">Nama Siswa: </label>
            <input type="text" name="nama"><br>

            <!-- kelas -->
            <label for="kelas">Kelas: </label>
            <input type="text" name="kelas"><br>

            <input type="submit" value="simpan">
        </form>

        <!-- tabel siswa -->
        <h3>Daftar Siswa</h3>
        <table border=1>
            <tr>
                <th>no. </th>
                <th>nama siswa</th>
                <th>kelas</th>
                <th>aksi</th>
            </tr>
        
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from tb_siswa");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
				    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['kelas']; ?></td>
                    <td><a href="http://localhost/saw/proses/hapus_siswa.php?id_siswa=<?= $d['id_siswa']?>">hapus</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
    
</html>

