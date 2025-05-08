<?php
$thisPageName = 'info';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
</head>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">

<body id="info">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>施設情報</li>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner">
        <h1 class="mv-ttl aos-init" data-aos="fade-up">
          <span class="mv-ttl-jp">施設情報</span>
          <span class="mv-ttl-en">Information</span>
        </h1>
      </div>
    </div>
    <div class="sec-anchor c-bgwave01">
      <div class="inner1170">
        <ul>
          <li><a href="#info01" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>営業時間</span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info02" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>アクセス</span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info03" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>周辺観光</span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info04" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>よくあるご質問</span>
            <i class="arr02"></i>
          </a></li> 
        </ul>
      </div>
    </div>
    <div class="sec-info01 c-bgwave01" id="info01">
      <div class="inner1170">
        
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>
</html>