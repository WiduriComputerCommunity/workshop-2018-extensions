<script type="text/javascript">
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
    return false;window.close();
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
    return false;window.close();
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
    return false;window.close();
  }
}
</script>

<?php
  if ( !isset($_GET['nim'])){
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col-lg-12" style="text-align:center;">

      <h1>Check Sertifikat Anda</h1>
      <form action="" method="get" target="_blank">
        <input type="text" name="nim" placeholder="NIM" style="text-align:center;">
        <br><br>
        <select name="kelas">
          <option disabled selected>Pilih Workshop</option>
          <option value="laundry">Aplikasi Laundry Berbasis Web</option>
          <option value="pwa">Aplikasi Portal Berita menggunakan Progressive Web Apps</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        <br><br><br><br>
        E-Sertifikat dapat dibuka bagi peserta yang mengikuti dan menghadiri acara.
        <br><br><br>
        <b>Jika Sertifikat terjadi kendala atau kesalahan informasi, Hubungi: 0857-1108-9317</b>
      </form>

    </div>
  </div>

</div>

<?php
  }
?>

<?php
  if ( isset($_GET['nim']) && $_GET['nim'] != "" ){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wcc_workshop_2018";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $get_nim = $_GET['nim'];
    $sql = "SELECT * FROM unf WHERE nim = '$get_nim' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $nim = $row["nim"];
        $nama = $row["nama"];
        $email = $row["email"];
        $phone = $row["phone"];
        $tanggal = $row["tanggal"];
        $metode = $row["metode"];
        $status = $row["status"];
        $laundry = $row["laundry"];
        $pwa = $row["pwa"];
        $kehadiran_laundry = $row["kehadiran_laundry"];
        $kehadiran_pwa = $row["kehadiran_pwa"];
      }
    } else {
      // echo "0 results";
    }
    $conn->close();
?>

<style>

  body {
    font-family: "ROBOTO";
  }

  @media print {
    @page { margin: 0; }

    .no-print {
      display :  none;
    }

    body {
      margin: 0;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .border-out {
      width:100%;
      height:100%;
      position: absolute;
      overflow: auto;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      padding:20px;
      text-align:center;
      border: 5px solid #6699FF;
      background: #FFFFFF;
    }

    .border-in {
      width:100%;
      height:100%;
      position: absolute;
      overflow: auto;
      bottom: 20px;
      top: 20px;
      left: 20px;
      right: 20px;
      padding:20px;
      text-align:center;
      border: 5px solid #6699FF;
    }

  }
  /* end @media print */

  .border-out {
    width:auto;
    height:auto;
    padding:20px;
    text-align:center;
    border: 5px solid #6699FF;
  }

  .border-in {
    width:auto;
    height:auto;
    padding:20px;
    text-align:center;
    border: 15px solid #6699FF;
  }

</style>

<body oncontextmenu="return false;">
  <div class="border-out">
    <div class="border-in">

      <br>

      <img style="margin-top:10px; width:250px;" src="logo-300x300.png">

      <div style="margin-top:30px; font-size:50px; font-weight:bold">Certificate of Completion</div>

      <div style="margin-top:55px; font-size:20px"><i>This is to certify that</i></div>

      <div style="margin-top:10px; font-size:35px"><b><?= $nama; ?></b></div>

      <div style="margin-top:25px; font-size:20px"><i>has completed the course</i></div>

      <div style="font-size:40px">

        <?php
          if ($_GET['kelas']=="laundry" && $kehadiran_laundry==1) {
            echo "Penerapan Aplikasi Laundry Berbasis Web";
            echo '<div style="margin-top:20px; font-size:30px;">22 September 2018</div>';
          }
          if ($_GET['kelas']=="pwa" && $kehadiran_pwa==1) {
            echo "<b>Aplikasi Portal Berita menggunakan Progressive Web Apps</b>";
            echo '<div style="margin-top:20px; font-size:30px;">29 September 2018</div>';
          }
          if ($_GET['kelas']=="laundry" && $kehadiran_laundry==0) {
            echo "<script>window.close();</script>";
          }
          if ($_GET['kelas']=="pwa" && $kehadiran_pwa==0){
            echo "<script>window.close();</script>";
          }
        ?>

      </div>

      <?php $qrcode = rawurlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>

      <img style="margin-top:30px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $qrcode; ?>">

      <div class="no-print">
        <button style="margin:40px; padding:0 40px 0 40px; font-size:24px;" onclick="window.print()"><b>Print your Certificate</b></button>
      </div>

      <div style="margin-top:10px; text-align:left;">
        <b>Organized by</b>
      </div>

      <div style="margin-top:10px;">
        <img style="float:left; width:70px; margin-right:15px;" src="logo.png">
        <img style="float:left; width:70px; margin-right:15px;" src="logo-300x300.png">
        <div style="clear:both;"></div>
      </div>

    </div>
  </div>
</body>

<?php
  }
?>
