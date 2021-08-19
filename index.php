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

// $servername = "localhost";
// $username = "u420165457_sat";
// $password = "Pa4sOGJkw|";
// $database = "u420165457_sat_puskesmas";

$servername = "localhost";
$username = "root";
$password = "";
$database = "pus_absensi";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

// echo "Connected succesfully<hr>";

$sql = "SELECT * FROM log_absensi";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="refresh" content="10" >
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compitable" content="ie-edge" />
    <title>QR Code Generator</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css" />

    <script src="qrcode.min.js"></script>
  </head>
  <body>
    <!-- Page Contents -->
    <div class="ui container">   
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui horizontal list">
            <a class="active item">Home</a>
            <a class="item"><?=$tanggalnya;?></a>
            <a class="item"><?=$jam;?></a>          
            <div class="item">
              <a class="ui primary tiny button">Log in</a>        
              <a class="ui primary tiny button">Log Out</a>        
            </div>
          </div>
        </div>
        
        <div class="ui placeholder segment">
          <div class="ui icon header">
            <div class="ui input">
              <input type="hidden" placeholder="Search..." value="<?=$kodeQR;?>" />
            </div>         
            <div class="qrcode">
              <canvas id="canvas">canvas</canvas>
            </div> 
          </div>
        </div>
       
        <div class="ui segment">      
          <table class="ui celled table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>kodeQR</th>
                <th>Puskesmas</th>
                <th>Waktu Absen</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $key => $value) { ?>
              <tr>
                <td data-label="No">
                  <div class="ui ribbon label"><?=$key + 1;?></div>
                </td>
                <td data-label="Nama Pegawai"><?=$value['nama_pegawai'];?></td>
                <td data-label="NIP"><?=$value['nip'];?></td>
                <td data-label="kodeQR"><?=$value['kodeqr'];?></td>
                <td data-label="kodeQR"><?=$value['nama_puskesmas'];?></td>
                <td data-label="kodeQR"><?=$value['waktu'];?></td>
              </tr>  
              <?php } ?>      
            </tbody>
            <tfoot>
              <tr>
                <th colspan="6">
                  <div class="ui right floated pagination menu">
                    <a class="icon item">
                      <i class="left chevron icon"></i>
                    </a>
                    <a class="item">1</a>
                    <a class="item">2</a>
                    <a class="item">3</a>
                    <a class="item">4</a>
                    <div class="icon item">
                      <i class="right chevron icon"></i>
                    </div>
                  </div>
                </th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      <div class="ui vertical footer segment">
        <div class="ui container">
          <div class="ui stackable divided equal height stackable grid">
            <div class="three wide column">
              <h4 class="ui header">About</h4>
              <div class="ui link list">
                <a href="#" class="item">Sitemap</a>
                <a href="#" class="item">Contact Us</a>
                <a href="#" class="item">SAT</a>                
              </div>
            </div>
            <div class="three wide column">
              <h4 class="ui header">Services</h4>
              <div class="ui link list">
                <a href="#" class="item">Order SAT</a>
                <a href="#" class="item">Konsultasi</a>
                <a href="#" class="item">How To Access</a>                
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui header">Footer Header</h4>
              <p>Sistem Absen Terpadu untuk Puskesmas di Sambas terintegrasi dengan Dinas Kesehatan Kabupaten Sambas Provinsi Kalimantan Barat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
  </body>
</html>
