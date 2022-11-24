<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Default Table</h5>
          <a href="<?= base_url('index.php/administrator/mahasiswa/add') ?>" type="button" class="btn btn-outline-primary">Tambah Data</a>
          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              ?>
              <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $row->nama_mahasiswa ?></td>
                  <td><?= $row->kota_asal ?></td>
                  <td><?= tanggal_indo($row->tanggal_lahir) ?></td>
                  <td>
                    <a href="<?= base_url() ?>index.php/administrator/mahasiswa/edit/<?= $row->id ?>" type="button" class="btn btn-outline-warning">Edit</a>
                    <a href="<?= base_url() ?>index.php/administrator/mahasiswa/hapus/<?= $row->id ?>" type="button" class="btn btn-outline-danger">Hapus</a>

                  </td>

                </tr>
                <?php $no++; ?>
              <?php endforeach; ?>

            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>


    </div>


  </div>
</section>