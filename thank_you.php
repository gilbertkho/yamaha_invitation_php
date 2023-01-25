<?php
    require_once('conn.php');
    require_once('core.php');

    $get_id = input_get('id');
    
    $stmt   = "SELECT nama FROM undangan WHERE id = $get_id";
    $query  = mysqli_query($conn, $stmt) or die(mysqli_error($conn));
        
    $nama = mysqli_fetch_row($query);
    // dd($nama);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand&display=swap">
    <title>Yamaha Invitation</title>
    <style>
      .ttl {
        font-family: 'Roboto', sans-serif;    
      }
      .prg{
        font-family: 'Quicksand', serif;
      }
    </style>
</head>
<body>
    <div class="body-width mx-auto" style="background-color:#f6f6f6;">
        <div class="invitation-page" id="home-section">
            <header class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/Logo Yamaha stsj.png" width="180px">
                <img src="./assets/frame2.png" width="75px">
            </header>
            <div class="page-content d-flex flex-column justify-content-center align-items-center text-main">
                <?php
                    if(isset($_GET['konfirmasi']) && $_GET['konfirmasi'] == 'tidak'){
                ?>
                    <h5 class="ttl fw-bold text-center p-3">
                        Terima kasih Bapak / Ibu <strong class='text-capitalize'><?=$nama[0]?></strong> sudah melakukan konfirmasi kehadiran.
                    </h5>
                <?php
                } else{ ?>
                    <h5 class="ttl fw-bold text-center p-3">
                        Terima kasih Bapak / Ibu <strong class='text-capitalize'><?=$nama[0]?></strong> sudah melakukan konfirmasi
                        Berikut adalah Tiket Masuk Digital Anda: <br>
                    </h5>
                    <div class="w-100 my-3 text-center">
                        <img src="./assets/qr_dummy.jpeg" class='img-fluid rounded-5'>
                    </div>
                <?php 
                }
                ?>
                <p class="prg text-uppercase invitation-date" lang="en" data-aos ='fade-up'></p>
            </div>
            <footer class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/fazzio.png" width="160px" data-aos="fade-right">
                <img src="./assets/grand.png" width="160px" data-aos="fade-left">
            </footer>
        </div>
    </div>
</body>
</html>