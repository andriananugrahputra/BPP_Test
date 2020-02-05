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
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div href="<?= base_url(); ?>" 
                style="padding: 0.875rem 1.25rem;
                font-size: 1.2rem;">
                Sport Station
                
            </div>
            <div style="width: 15rem;" class="list-group-flush">
                <a href="<?= base_url(); ?>lapangan/bulutangkis" class="list-group-item list-group-item-action bg-light">Lapangan</a>
                <a href="<?= base_url(); ?>booking/bulutangkis" class="list-group-item list-group-item-action bg-light">Booking</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Data Peminjaman</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->