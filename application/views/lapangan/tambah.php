<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Halaman utama</title>
    </head>
    <body>
        <div class="container" style="margin-top:10%">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        Tambah Lapangan
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nama">Nama Lapangan</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis Lapangan</label>
                            <select class="custom-select" id="jenis" name="jenis">
                                <option value="Bulu Tangkis" selected>Bulu Tangkis</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Tenis">Tenis</option>
                            </select>
                        </div>
                        <input type="hidden" id="status" name="status" value="1">
                        <button class="btn btn-outline-success float-right" type="submit" name="tambah">Tambah</button>
                    </div>
                </div>
            </form>