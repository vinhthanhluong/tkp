<?php
$thisPageName = 'page';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
</head>

<body id="page" class="page">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="inner1170">
      <div class="section-demo">
        <div class="demo-text">
          <p><strong>@include ffYG </strong> font-family: "Yu Gothic", sans-serif;</p>
          <p class="ffGT"><strong>@include ffGT </strong> font-family: "Gantari", sans-serif;</p>
        </div>
        <ul class="simple-color">
          <li style="background: #000000; color: #fff;">$color_body: #000000;</li>
          <li style="background: #000000; color: #fff;">$color_link: #000000;</li>
          <li style="background: #000000; color: #fff;">$black01: #000000;</li>
          <li style="background: #65b0d4; color: #fff;">$blue01: #65b0d4;</li>
          <li style="background: #2e8ab7; color: #fff;">$blue02: #2e8ab7;</li>
          <li style="background: #1b3da3; color: #fff;">$blue03: #1b3da3;</li>
          <li style="background: #f5bb1e; color: #fff;">$yellow01: #f5bb1e;</li>
        </ul>

        <div class="section-demo">
          <p class="demo-ttl">.c-btn01</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <br>
        </div>

      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>
<style>
  #wrap {
    overflow: hidden;
  }

  .section-demo {
    margin: 20px auto 40px;
  }

  .section-demo .demo-ttl {
    margin: 20px auto 10px;
    color: red;
    font-size: 18px;
    font-weight: bold;
  }

  .section-demo .demo-ttl em {
    font-style: normal;
    font-size: 15px;
    color: #1489c3;
  }

  .section-demo .demo-ttl span {
    color: blue;
  }

  .section-demo .simple-color {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
  }

  .section-demo .simple-color li {
    width: calc(33.333% - 20px);
    margin: 10px;
    padding: 20px;
    text-align: center;
  }

  .section-demo .demo-text {
    background-color: #CAEEF8;
    padding: 20px;
  }

  @media (min-width: 768px) {
    .sec-relate {
      padding: 73px 0 76px;
    }

    .sec-relate .relate-lst {
      margin-top: 40px;
    }
  }

  @media (max-width: 767px) {
    .sec-relate {
      padding: 49px 0 48px;
    }

    .sec-relate .relate-lst {
      margin-top: 29px;
    }
  }
</style>

</html>