<?php
require_once('conn.php');
require_once('core.php');
$konfirmasi = input_get('konfirmasi');
$id = input_get('id');

$stmt = "";

if($konfirmasi == 'ya'){
    $stmt   = "UPDATE undangan SET status_kehadiran = 1 WHERE id = $id";
}
else{
    $stmt   = "UPDATE undangan SET status_kehadiran = 2 WHERE id = $id";
}
$query  = mysqli_query($conn, $stmt) or die(mysqli_error($conn));

echo $stmt;

redirect('./thank_you.php');
?>