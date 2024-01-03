<h5>Halaman tambah data Kelas.</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-kelas" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control mb-3" required="required" placeholder="Masukkan Kelas...">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" class="form-control mb-4" required="required" placeholder="Ketikkan kompetensi keahlian...">
    </div>
    <div class="form-group mb-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button> 
    </div>
</form>