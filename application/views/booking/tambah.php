<?php 
// var_dump($booking)
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title><?php echo $judul_page ?></title>
    </head>
    <body>
        <div class="container" style="margin-top:10%">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        Booking
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis Lapangan</label>
                            <select class="custom-select" id="jenis" name="jenis" disabled>
                                <option value="Bulu Tangkis" selected >Bulu Tangkis</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Tenis">Tenis</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="lapangan">Lapangan</label>
                            <select class="custom-select" id="jenis" name="jenis">
                                <?php foreach($booking as $data_booking): ?>
                                    <option value="<?= $data_booking['nama']; ?>">
                                        <?= $data_booking["nama"]; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="countainer">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                                        <small class="form-text text-danger"><?= form_error('nama');?></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="jamMulai">Jam Mulai</label>
                                        <input type="time" class="form-control" name="jamMulai" id="jamMulai">
                                        <small class="form-text text-danger"><?= form_error('nama');?></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="jamAkhir">Jam Akhir</label>
                                        <input type="time" class="form-control" name="jamAkhir" id="jamAkhir">
                                        <small class="form-text text-danger"><?= form_error('nama');?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success float-right" type="submit" name="tambah">Tambah</button>
                    </div>
                </div>
            </form>