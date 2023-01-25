<?php
    require_once('conn.php');
    require_once('core.php');

    $get_id = input_get('id');
    
    $stmt   = "SELECT nama,nohp FROM undangan WHERE id = $get_id";
    $query  = mysqli_query($conn, $stmt) or die(mysqli_error($conn));
        
    $data = mysqli_fetch_assoc($query);
    // dd($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/favicon-yamaha.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <!-- <div class="row bg-light position-fixed m-0 footer-nav shadow py-3">            
            <div class="col-4 text-center">
                <a href="#home-section" class="text-decoration-none text-main">                   
                    <i class="fas fa-home fa-2x"></i>
                    <p class="m-0 prg">Home</p>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="#event-section" class="text-decoration-none text-main">
                    <i class="far fa-calendar fa-2x"></i>
                    <p class="m-0 prg">Event</p>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="#registration-section" class="text-decoration-none text-main">
                    <i class="fas fa-check fa-2x"></i>
                    <p class="m-0 prg">Registration Form</p>
                </a>
            </div>            
        </div> -->
        <div class="invitation-page" id="home-section">
            <header class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/Logo Yamaha stsj.png" width="180px">
                <img src="./assets/frame2.png" width="75px">
            </header>
            <div class="page-content d-flex flex-column justify-content-center align-items-center text-main">
                <h2 class="ttl text-uppercase fw-bold text-center">
                    Yamaha Block<br>
                    Meeting 2023
                </h2>
                <p class="prg text-uppercase invitation-date" lang="id" data-aos ='fade-up'></p>
                <h4 class="ttl fw-bold text-capitalize mt-5 text-center">
                    Kepada Yth. <br>
                    Bpk/Ibu <?= $data['nama']?>
                </h4>
            </div>
            <footer class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/motor-baru1.png" width="160px" data-aos="fade-right">
                <img src="./assets/motor-baru2.png" width="160px" data-aos="fade-left">
            </footer>
        </div>
        <div class="invitation-page" id="event-section">
            <div class="invitation-page text-center">
                <header class="d-flex justify-content-between align-items-center p-2">
                    <img src="./assets/Logo Yamaha stsj.png" width="180px">
                    <img src="./assets/frame2.png" width="75px">
                </header>
                <div class="page-content d-flex flex-column align-items-center justify-content-center text-main">
                    <h5 class="text-uppercase ttl text-main fw-bold mb-3" data-aos="fade-down" data-aos-duration="500">Series of Event</h5>
                    <div class="prg col-9 mb-5" data-aos="fade-right" data-aos-duration="500">
                        <div class="row">
                            <div class="col-1">
                                <i class="far fa-calendar"></i>
                            </div>
                            <div class="col-11 text-start">
                                <p class="invitation-date" lang="id"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="col-11 text-start">
                                <p>08:30 - 13:00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-11 text-start">
                                <p class="m-0">The Westin Surabaya, <br>
                                Pakuwon Mall Jalan, Jl. Raya Lontar No.2, Puncak Indah, Surabaya City, East Java 60216</p>
                                <a target='_blank' href="https://www.google.com/maps/place/The+Westin+Surabaya/@-7.2892488,112.6737477,17z/data=!3m1!4b1!4m8!3m7!1s0x2dd7fc498f1cffc5:0xc0718e958df80ba0!5m2!4m1!1i2!8m2!3d-7.2892488!4d112.6759364">
                                    Open Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="ttl fw-bold mb-1">Countdown</p>                    
                    <div class="bg-main text-white d-flex p-2 col-10 col-sm-9 col-md-8 justify-content-around row rounded-3" data-aos="fade-up" data-aos-duration="500">                    
                        <div class="text-center col-2 p-0">
                            <h3 class='m-0 prg' id="days">00</h3>
                            <p class='m-0 ttl'>Days</p>
                        </div>
                        <div class='col-1'>
                            :
                        </div>
                        <div class='text-center col-2 p-0'>
                            <h3 class='m-0 prg' id="hours">00</h3>
                            <p class='m-0 ttl'>Hours</p>
                        </div>
                        <div class='col-1'>
                            :
                        </div>
                        <div class="text-center col-2 p-0">
                            <h3 class='m-0 prg' id="minutes">00</h3>
                            <p class='m-0 ttl'>Minutes</p>
                        </div>
                        <div class='col-1'>
                            :
                        </div>
                        <div class='text-center col-3 p-0'>
                            <h3 class='m-0 prg' id="seconds">00</h3>
                            <p class='m-0 ttl'>Seconds</p>
                        </div>
                    </div>
                </div>
                <footer class="d-flex justify-content-between align-items-center p-2">
                    <img src="./assets/fazzio.png" width="160px" data-aos="fade-right">
                    <img src="./assets/grand.png" width="160px" data-aos="fade-left">
                </footer>
            </div>
        </div>
        <div class="invitation-page" id="registration-section">
            <header class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/Logo Yamaha stsj.png" width="180px">
                <img src="./assets/frame2.png" width="75px">
            </header>
            <form method="POST" action = <?='?'?>>
                <div class="page-content d-flex flex-column align-items-center justify-content-center text-main col-9 mx-auto">
                    <div class="p-3 rounded-3 border-main" data-aos="fade-down">
                        <h5 class="text-main ttl fw-bold text-center mb-3">Apakah anda bersedia untuk menghadiri acara Yamaha Block Meeting 2023?</h5>
                        <div class="d-flex justify-content-around">
                            <!-- <input type="hidden" value="yes" name="confirm"> -->
                            <a href="konfirmasi.php?id=<?= $_GET['id'] ?>&konfirmasi=tidak&nama=<?= $data['nama']?>&no_telp=<?=$data['nohp']?>" class="btn bg-secondary text-white"> Tidak</a>
                            <!-- <input type='submit' value="Tidak" name="confirm" > -->
                            <!-- <input type="hidden" value="no" name="confirm"> -->
                            <a href="konfirmasi.php?id=<?= $_GET['id'] ?>&konfirmasi=ya&nama=<?= $data['nama']?>&no_telp=<?=$data['nohp']?>" class="btn bg-main text-white">Ya</a>
                            <!-- <input type='submit' value="Ya" name="confirm" > -->                            
                        </div>
                    </div>
                </div>
            </form>
            <footer class="d-flex justify-content-between align-items-center p-2">
                <img src="./assets/freego-11.png" width="160px" data-aos="fade-right">
                <img src="./assets/freego-12.png" width="160px" data-aos="fade-left">
            </footer>
        </div>
    </div>
</body>
</html>
<script>
    AOS.init();
</script>
<script src="./index.js"></script>