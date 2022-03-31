<html>
    <body>
        <a href="http://localhost/saw/beranda.php">beranda</a>
        <h3>Tambah Data</h3>
        <form action="http://localhost/saw/proses/input_nilai.php" method="post">
            <!-- siswa -->
            <label for="siswa">Siswa : </label>
            <select class="form-custom" required name="siswa" id="siswa">
                <option selected disabled>--Pilih Siswa--</option>
                <?php
                include 'koneksi.php';
                $query="SELECT * FROM tb_siswa";
                $execute=$koneksi->query($query);
                if ($execute->num_rows > 0){
                    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=\"$data[id_siswa]\">$data[nama_siswa]</option>";
                    }
                }else {
                    echo "<option disabled value=\"\">Belum ada Siswa</option>";
                }
                ?>
            </select><br>

            <!-- kriteria1 -->
            <label for="kriteria1">Kriteria1: </label>
            <input type="text" name="kriteria1"><br>

            <!-- kriteria2 -->
            <label for="kriteria1">Kriteria2: </label>
            <input type="text" name="kriteria2"><br>

            <!-- kriteria3 -->
            <label for="kriteria1">Kriteria3: </label>
            <input type="text" name="kriteria3"><br>

            <!-- kriteria4 -->
            <label for="kriteria4">Kriteria4: </label>
            <input type="text" name="kriteria4"><br>

            <!-- submit -->
            <input type="submit" value="simpan">
        </form>
        <!-- tabel siswa -->
        <h3>Daftar Siswa</h3>
        <table border=1>
            <tr>
                <th>no. </th>
                <th>nama siswa</th>
                <th>kriteria1</th>
                <th>kriteria2</th>
                <th>kriteria3</th>
                <th>kriteria4</th>
                <th>aksi</th>
            </tr>
        
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from tb_matrik join tb_siswa on tb_siswa.id_siswa = tb_matrik.siswa");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
				    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['kriteria1']; ?></td>
                    <td><?php echo $d['kriteria2']; ?></td>
                    <td><?php echo $d['kriteria3']; ?></td>
                    <td><?php echo $d['kriteria4']; ?></td>
                    <td><a href="http://localhost/saw/proses/hapus_siswa.php?id_siswa=<?= $d['id_siswa']?>">hapus</a></td>
                </tr>
            <?php } ?>
        </table>
        
    </body>
    
</html>
