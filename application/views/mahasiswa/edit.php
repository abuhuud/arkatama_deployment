<section class="section">
  <div class="row">
  <div class="row lg-12"> 
    <div class="card">
    <?= form_open('administrator/mahasiswa/edit_save') ?> 
        <div class="card-body">
        <div class="row mb-12">
        <input type="hidden" id="id" name="id" value="<?= $mahasiswa->id ?>">
        <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label><div class="col-sm-10"> 
    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" value="<?= $mahasiswa->nama_mahasiswa ?>"></div>
</div>

<div class="row mb-12">
        <label for="inputText" class="col-sm-2 col-form-label">Kota Asal</label><div class="col-sm-10"> 
    <input type="text" id="kota_asal" name="kota_asal" class="form-control" value="<?= $mahasiswa->kota_asal ?>"></div>
</div>

<div class="row mb-12">
        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label><div class="col-sm-10"> 
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?= $mahasiswa->tanggal_lahir ?>"></div>
</div>
<button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>

        </div>
<?= form_close() ?>


    </div>
    
  </div>
</section>