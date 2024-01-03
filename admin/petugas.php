<h5>Halaman data Petugas.</h5>
<a href="?url=tambah-petugas" class="btn btn-primary">Tambah</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama Petugas</td>
        <td>Level</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
        include '../koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM petugas ORDER BY id_petugas DESC";
        $query = mysqli_query($koneksi,$sql);
        foreach($query as $data) { ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['username']?></td>
                <td><?= $data['pass']?></td>
                <td><?= $data['nama_petugas']?></td>
                <td><?= $data['level']?></td>
                <td>
                    <a 
                        href="?url=edit-petugas&id_petugas=<?= $data['id_petugas']?>" 
                        class="btn btn-warning">Edit
                    </a>
                </td>
                <td>
                    <a 
                        href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas']?>" 
                        class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus
                    </a>
                </td>
            </tr>

    <?php }; ?>
</table>
