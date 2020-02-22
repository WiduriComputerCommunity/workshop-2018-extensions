<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php
  if ( !isset($_GET['phone']) || !isset($_GET['email']) || ($_GET['phone'] == "" && $_GET['email'] == "") ){
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col-lg-12" style="text-align:center;">

      <h1>Check Invoice Anda</h1>
      <form action="" method="get" target="_blank">
        <input type="text" name="phone" placeholder="Phone" style="text-align:center;">
        <br>
        <b>atau</b>
        <br>
        <input type="email" name="email" placeholder="Email" style="text-align:center;">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br><br><br>
        <b>Jika invoice terjadi kendala atau kesalahan informasi, WhatsApp: 0857-1108-9317</b>
      </form>

    </div>
  </div>

</div>

<?php
  }
?>


<!-- ========================================================================= -->

<?php
  if ( isset($_GET['phone']) && $_GET['phone'] != "" && $_GET['email'] == "" ){
?>

<?php
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
$get_phone = $_GET['phone'];
$sql = "SELECT * FROM unf WHERE phone = '$get_phone' ";
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
    }
} else {
    // echo "0 results";
}
$conn->close();
?>

<div class="container" style="margin-top:50px;">
  <div class="row">

    <div class="col-lg-12">
      <img style="width:150px; float:left; margin-right:10px;" src="http://widuricomputercommunity.com/extensions/workshop-2018/invoice/logo.png" alt="">
      <div style="float:left;">
        <br>
        <h2>Widuri Computer Community</h2>
        <h4>widuricomputercommunity.com</h4>
      </div>
      <h1 style="width:200px; float:right;
        <?php if($status=='Lunas'){ ?>
        color:green;
        <?php }else{ ?>
        color:red;
        <?php } ?>
      font-size:60px; font-weight:bold;"><?= strtoupper($status); ?></h1>
      <div style="clear:both;"></div>
    </div>

    <div class="col-lg-12">
      <h3 style="margin-top:50px;">Invoice</h3>
      <b>NIM : <?= $nim; ?></b><br>
      <b>Nama Peserta : <?= $nama; ?></b><br>
      <b>Email : <?= $email; ?></b><br>
      <b>Phone : <?= $phone; ?></b><br>
      <b>Tanggal Pembayaran : <?= $tanggal; ?></b><br>
      <b>Metode Pembayaran : <?= $metode; ?></b><br>
    </div>

    <div class="col-lg-12">
      <table style="margin-top:50px;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Materi</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($laundry==1) {
          ?>
          <tr>
            <td>Laundry</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>
          <?php
            if ($pwa==1) {
          ?>
          <tr>
            <td>PWA</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>

          <tr>
            <th scope="col">Total</th>
            <?php
              if ($laundry==1 && $pwa==1) {
            ?>
              <th scope="col">Rp 60.000</th>
            <?php }else{ ?>
              <th scope="col">Rp 30.000</th>
            <?php } ?>
          </tr>

        </tbody>

      </table>
    </div>

  </div>

</div>

<script type="text/javascript">
window.print();
//window.close();
</script>

<?php
  }
?>

<!-- ========================================================================= -->

<?php
  if ( isset($_GET['email']) && $_GET['email'] != "" && $_GET['phone'] == "" ){
?>

<?php
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
$get_email = $_GET['email'];
$sql = "SELECT * FROM unf WHERE email = '$get_email' ";
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
    }
} else {
    // echo "0 results";
}
$conn->close();
?>

<div class="container" style="margin-top:50px;">
  <div class="row">

    <div class="col-lg-12">
      <img style="width:150px; float:left; margin-right:10px;" src="http://widuricomputercommunity.com/extensions/workshop-2018/invoice/logo.png" alt="">
      <div style="float:left;">
        <br>
        <h2>Widuri Computer Community</h2>
        <h4>widuricomputercommunity.com</h4>
      </div>
      <h1 style="width:200px; float:right;
        <?php if($status=='Lunas'){ ?>
        color:green;
        <?php }else{ ?>
        color:red;
        <?php } ?>
      font-size:60px; font-weight:bold;"><?= strtoupper($status); ?></h1>
      <div style="clear:both;"></div>
    </div>

    <div class="col-lg-12">
      <h3 style="margin-top:50px;">Invoice</h3>
      <b>NIM : <?= $nim; ?></b><br>
      <b>Nama Peserta : <?= $nama; ?></b><br>
      <b>Email : <?= $email; ?></b><br>
      <b>Phone : <?= $phone; ?></b><br>
      <b>Tanggal Pembayaran : <?= $tanggal; ?></b><br>
      <b>Metode Pembayaran : <?= $metode; ?></b><br>
    </div>

    <div class="col-lg-12">
      <table style="margin-top:50px;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Materi</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($laundry==1) {
          ?>
          <tr>
            <td>Laundry</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>
          <?php
            if ($pwa==1) {
          ?>
          <tr>
            <td>PWA</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>

          <tr>
            <th scope="col">Total</th>
            <?php
              if ($laundry==1 && $pwa==1) {
            ?>
              <th scope="col">Rp 60.000</th>
            <?php }else{ ?>
              <th scope="col">Rp 30.000</th>
            <?php } ?>
          </tr>

        </tbody>

      </table>
    </div>

  </div>

</div>

<script type="text/javascript">
window.print();
//window.close();
</script>

<?php
  }
?>

<!-- ========================================================================= -->

<?php
  if ( isset($_GET['phone']) && isset($_GET['email']) && $_GET['phone'] != "" && $_GET['email'] != "" ){
?>

<?php
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
$get_email = $_GET['email'];
$get_phone = $_GET['phone'];
$sql = "SELECT * FROM unf WHERE phone = '$get_phone' AND email = '$get_email' ";
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
    }
} else {
    // echo "0 results";
}
$conn->close();
?>

<div class="container" style="margin-top:50px;">
  <div class="row">

    <div class="col-lg-12">
      <img style="width:150px; float:left; margin-right:10px;" src="http://widuricomputercommunity.com/extensions/workshop-2018/invoice/logo.png" alt="">
      <div style="float:left;">
        <br>
        <h2>Widuri Computer Community</h2>
        <h4>widuricomputercommunity.com</h4>
      </div>
      <h1 style="width:200px; float:right;
        <?php if($status=='Lunas'){ ?>
        color:green;
        <?php }else{ ?>
        color:red;
        <?php } ?>
      font-size:60px; font-weight:bold;"><?= strtoupper($status); ?></h1>
      <div style="clear:both;"></div>
    </div>

    <div class="col-lg-12">
      <h3 style="margin-top:50px;">Invoice</h3>
      <b>NIM : <?= $nim; ?></b><br>
      <b>Nama Peserta : <?= $nama; ?></b><br>
      <b>Email : <?= $email; ?></b><br>
      <b>Phone : <?= $phone; ?></b><br>
      <b>Tanggal Pembayaran : <?= $tanggal; ?></b><br>
      <b>Metode Pembayaran : <?= $metode; ?></b><br>
    </div>

    <div class="col-lg-12">
      <table style="margin-top:50px;" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Materi</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($laundry==1) {
          ?>
          <tr>
            <td>Laundry</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>
          <?php
            if ($pwa==1) {
          ?>
          <tr>
            <td>PWA</td>
            <td>Rp 30.000</td>
          </tr>
          <?php
            }
          ?>

          <tr>
            <th scope="col">Total</th>
            <?php
              if ($laundry==1 && $pwa==1) {
            ?>
              <th scope="col">Rp 60.000</th>
            <?php }else{ ?>
              <th scope="col">Rp 30.000</th>
            <?php } ?>
          </tr>

        </tbody>

      </table>
    </div>

  </div>

</div>

<script type="text/javascript">
window.print();
//window.close();
</script>

<?php
  }
?>
