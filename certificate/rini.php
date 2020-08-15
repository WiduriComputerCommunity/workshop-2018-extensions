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

      <div style="margin-top:55px; font-size:25px"><i>This is to certify that</i></div>

      <div style="margin-top:10px; font-size:35px"><b>Rini Rawati Situmorang</b></div>

      <div style="margin-top:25px; font-size:25px"><i>has completed the course</i></div>

      <div style="font-size:40px">
        Penerapan Aplikasi Laundry Berbasis Web
        <div style="margin-top:20px; font-size:30px;">22 September 2018</div>

      </div>

      <?php $qrcode = rawurlencode("https://certificate.widuricomputercommunity.com/workshop-2018-laundry/participant?id=18411026"); ?>

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
