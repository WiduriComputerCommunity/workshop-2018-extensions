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
      border: 5px solid #2561a8;
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
    border: 15px solid #2561a8;
  }

</style>

<body oncontextmenu="return false;">
  <div class="border-out">
    <div class="border-in">

      <br>

      <img style="margin-top:10px; width:250px;" src="logo-2019.png">

      <div style="margin-top:30px; font-size:50px; font-weight:bold">Certificate of Appreciation</div>

      <div style="margin-top:55px; font-size:20px"><i>We would like to thank</i></div>

      <div style="margin-top:10px; font-size:35px"><b>Asrul Sani, ST., M.Kom., M.T.</b></div>

      <div style="margin-top:25px; font-size:20px"><i>for giving full support as Instructor to</i></div>

      <div style="font-size:40px">
        WCC BELAJAR BERSAMA <br>
        Pengenalan Penulisan Karya Ilmiah
        <div style="margin-top:20px; font-size:30px;">14 Maret 2020</div>

      </div>

      <?php $qrcode = rawurlencode("https://certificate.widuricomputercommunity.com/workshop-2020/instructor?id=1"); ?>

      <img style="margin-top:30px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $qrcode; ?>">

      <div class="no-print">
        <button style="margin:40px; padding:0 40px 0 40px; font-size:24px;" onclick="window.print()"><b>Print your Certificate</b></button>
      </div>

      <div style="margin-top:10px; text-align:left;">
        <b>Organized by</b>
      </div>

      <div style="margin-top:10px;">
        <img style="float:left; width:70px; margin-right:15px;" src="logo.png">
        <img style="float:left; width:70px; margin-right:15px;" src="logo-2019.png">
        <div style="clear:both;"></div>
      </div>

    </div>
  </div>
</body>
