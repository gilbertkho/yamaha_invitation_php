<?php
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);
$no_telp = "085258585196";

if(substr($nohp, 0, 1) == "8"){
    $no_telp = "0".$nohp;
}
else if(substr($nohp, 0, 2) == "62"){
    $no_telp = "0".substr($nohp, 2);
}
else{
    $no_telp = $nohp;
}

$message    = "Terima kasih Bapak / Ibu " . ucwords($nama) . ", sudah melakukan konfirmasi kehadiran. %20%20 Berikut adalah tiket masuk digital anda,
Silahkan Scan Tiket ini di Pintu Masuk untuk mendapatkan tempat duduk yg telah disediakan %20%20
Mohon membawa Hasil tes Antigen Maksimal H-2";

dd($message);
$result     = file_get_contents("https://app.whacenter.com/api/send?device_id=d87b9555bf617cb337731e5d50665193&number=".$no_telp."&message=".$message."&file=http://103.245.19.108/Scan_Kehadiran/assets/qr_dummy.jpeg", false, stream_context_create($arrContextOptions));

?>