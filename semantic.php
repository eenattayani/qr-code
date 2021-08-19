<?php
date_default_timezone_set('Asia/Jakarta');
$waktu = getdate(date("U"));
$namaHari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
$namaBulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
$hari = $namaHari[$waktu['wday']];
$tanggal = $waktu['mday'];
$bulan = $namaBulan[$waktu['mon']-1];
$tahun = $waktu['year'];

$tanggalnya = "$hari, $tanggal $bulan $tahun";
$jam = "$waktu[hours]:$waktu[minutes]:$waktu[seconds]";

// echo "$kodeQR<hr>";

$kodeQR = md5($tanggalnya);

// echo "$kodeQR";
// echo "<hr>";
// echo "$jam";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compitable" content="ie-edge" />
    <title>QR Code Generator</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" integrity="sha256-QVBN0oT74UhpCtEo4Ko+k3sNo+ykJFBBtGduw13V9vw=" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css" />

    <script src="qrcode.min.js"></script>
  </head>
  <body>
    <div class="ui container">
        <h1 class="ui small header">Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
  </body>
</html>
