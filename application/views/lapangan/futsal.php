<?php 
//var_dump($bulutangkis)
?>
<div id="page-content-wrapper" style="width:100%">
  <nav class="navbar navbar-light bg-light">
    <div style="margin-left: 3%;" class="btn-group" role="group">
        <a href="<?= base_url(); ?>lapangan/bulutangkis" style="width: 15rem; margin-right:1%" class="btn btn-primary">
            Bulu Tangkis
        </a>
        <a href="<?= base_url(); ?>lapangan/futsal" style="width: 15rem; margin-right:1%" class="btn btn-primary">
            Futsal
        </a>
        <a href="<?= base_url(); ?>lapangan/tenis" style="width: 15rem; margin-right:1%" class="btn btn-primary">
            Tenis
        </a>
    </div>
  </nav>
  <div style="margin-left: 4%; margin-right: 4%; margin-top: 2%;">
    <a href="<?= base_url(); ?>lapangan/tambah">
        <button type="button" class="btn btn-primary">Tambah Lapangan</button>
    </a>
    <h2 style="margin-top: 2%;">Daftar Lapangan</h2>
    <table style="margin-top: 1%; width: 70%;" class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nama Lapangan</th>
          <th scope="col">Jenis Lapangan</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($futsal as $data_lapangan): ?>
            <tr>
                <td><?= $data_lapangan["nama"]; ?></td>
                <td><?= $data_lapangan["jenis"]; ?></td>
                <td>
                    <a style="margin-left:1%" href="<?= base_url(); ?>lapangan/hapus/<?= $data_lapangan["id"];?>" class="btn btn-danger float-right" onclick="return confirm('Anda ingin menghapus lapangan <?= $data_lapangan['nama'];?> ?');">
                        Hapus
                    </a>
                    <a href="<?= base_url(); ?>lapangan/ubah/<?= $data_lapangan["id"];?>" class="btn btn-warning float-right">
                        Ubah
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Ubah Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Nama Lapangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" placeholder="Nama lapangan" aria-label="Nama lapangan" aria-describedby="button-addon2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- End -->
<!-- Hapus Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PERINGATAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Anda yakin menghapus lapangan?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- End -->