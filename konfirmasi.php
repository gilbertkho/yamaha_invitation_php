<?php
require_once('conn.php');
require_once('core.php');

$konfirmasi = input_get('konfirmasi');
$id = input_get('id');
$nama = input_get('nama');
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$stmt = "";

if($konfirmasi == 'ya'){
    $stmt   = "UPDATE undangan SET status_kehadiran = 1 WHERE id = $id";    
    $no_telp = "085258585196";

    if(substr($no_telp, 0, 1) == "8"){
        $no_telp = "0".$no_telp;
    }
    else if(substr($no_telp, 0, 2) == "62"){
        $no_telp = "0".substr($no_telp, 2);
    }
    else{
        $no_telp = $no_telp;
    }

    $message = "Terima kasih Bapak / Ibu %20" . ucwords($nama) . ", sudah melakukan konfirmasi kehadiran. %0A%0ABerikut adalah tiket masuk digital anda, Silahkan Scan Tiket ini di Pintu Masuk untuk mendapatkan tempat duduk yg telah disediakan Mohon membawa %20Hasil tes Antigen Maksimal %20H-2.";

    $result  = file_get_contents("https://app.whacenter.com/api/send?device_id=d87b9555bf617cb337731e5d50665193&number=".$no_telp."&message=".$message."&file=http://103.245.19.108/Scan_Kehadiran/assets/qr_dummy.jpeg", false, stream_context_create($arrContextOptions));
    $query   = mysqli_query($conn, $stmt) or die(mysqli_error($conn));
    redirect("./thank_you.php?id=$id");
}
else{
    $stmt    = "UPDATE undangan SET status_kehadiran = 2 WHERE id = $id";
    $query   = mysqli_query($conn, $stmt) or die(mysqli_error($conn));
    redirect("./thank_you.php?id=$id&konfirmasi=tidak");
}
?>