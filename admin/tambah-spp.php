<h5>Halaman tambah data SPP.</h5>
<a href="?url=spp" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-spp" method="post">
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Tahun</label>
        <input type="number" name="tahun" maxlength="4" class="form-control mb-3" required="required" placeholder="Masukkan tahun ajaran">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2"><span class="text-danger">*</span> Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control mb-4" required="required" placeholder="Masukkan besar nominal">
    </div>
    <div class="form-group mb-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-success me-2">Simpan</button>
        <button type="reset" class="btn btn-secondary pe-4 ps-4"> Reset </button>
    </div>
</form>