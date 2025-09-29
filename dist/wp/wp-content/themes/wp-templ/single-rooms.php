<?php
$thisPageName = 'roomsSingle';

$post_id = get_the_ID();
$ttlpost = get_the_title();

$room_slide = get_field('room_slide', $post_id);

if (!empty($room_slide)) {
  foreach ($room_slide as $slide) {
    $slide_gallery =  $slide['url'];
    $slide_thumb =  $slide['sizes'];
    $slide_thumb =  $slide_thumb ? $slide_thumb['medium'] : '';
  }
}
$room_desc = get_field('room_desc', $post_id);
$room_info = get_field('room_info', $post_id);
$room_japan_link = get_field('room_japan_link', $post_id);

$titlepage = strip_tags($ttlpost) . '｜お部屋｜ISHINOYA 別府 / 石のや 別府';
$desCnt = mb_substr(preg_replace('/\r\n|\n|\r?\[.*\]/', '', strip_tags($room_desc)), 0, 120);
$desPage = get_field('tp_meta_desc') ? get_field('tp_meta_desc') : $desCnt;

include(APP_PATH . 'libs/head02.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_rooms.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-rooms" class="rooms-single">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="sec-rooms-archive">
      <div class="inner1170">
        <div class="c-breadcrumb is-breadcrumb-dis aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/rooms/">お部屋</a></li>
            <li><?php echo $ttlpost; ?></li>
          </ul>
        </div>
        <div class="archive-row">
          <h2 class="archive-ttl sp"><?php echo $ttlpost; ?></h2>
          <div class="archive-left">
            <?php if (!empty($room_slide) && count($room_slide) > 1) { ?>
              <div class="c-gallery__main">
                <div class="gallery-wrapper js-slider-gallerysingle">
                  <div class="swiper-wrapper">
                    <?php
                    foreach ($room_slide as $slide) {
                      $slide_gallery =  $slide['url'];
                    ?>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo $slide_gallery; ?>" width="625" height="440" alt="<?php echo $ttlpost; ?>">
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                  <p class="c-cursor__slide js-cursor__slide">
                    <span class="txt">Prev</span>
                  </p>
                  <div class="gallerySwiper-prev swipersingle-prev">
                  </div>
                  <div class="gallerySwiper-next swipersingle-next">
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="gallerySwiper-pagination swipersingle-pagination"></div>
                  <div class="gallerySwiper-progress-bar swipersingle-progress-bar pc">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
              <div class="c-gallery__thumb">
                <div class="slider-thumb-gallery js-slider-thumbsingle">
                  <div class="swiper-wrapper">
                    <?php
                    foreach ($room_slide as $slide) {
                      $slide_thumb =  $slide['sizes'];
                      $slide_thumb =  $slide_thumb ? $slide_thumb['thumbnail'] : '';
                    ?>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo $slide_thumb; ?>" width="140" height="100" alt="<?php echo $ttlpost; ?>"></div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <?php
              foreach ($room_slide as $slide) {
                $slide_gallery =  $slide['url'];
              ?>
                <div class="swiper-slide">
                  <div class="gallery-pic c-img">
                    <img src="<?php echo $slide_gallery; ?>" width="625" height="440" alt="<?php echo $ttlpost; ?>">
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
          <div class="archive-right">
            <div class="archive-content">
              <h1 class="archive-ttl pc"><?php echo $ttlpost; ?></h1>
              <?php if (!empty($room_desc)) { ?>
                <p class="archive-desc"><?php echo $room_desc; ?></p>
              <?php } ?>
              <?php if (!empty($room_info)) { ?>
                <div class="archive-data">
                  <?php
                  foreach ($room_info as $info) {
                    $info_head = $info['head'];
                    $info_detail = $info['detail'];
                    $info_detail = !empty($info_detail) ? explode("\n", $info_detail) : [];
                    $info_detail = implode('<br>', $info_detail);
                    if (!empty($info_head) && !empty($info_detail)) {
                  ?>
                      <div class="date-dt">
                        <h2><?php echo $info_head; ?></h2>
                      </div>
                      <div class="data-dd"><?php echo $info_detail; ?></div>
                  <?php }
                  } ?>
                </div>
              <?php } ?>
              <?php if (!empty($room_japan_link)) { ?>
                <a class="c-btn04 is-btn-reverse" href="<?php echo $room_japan_link; ?>" target="_blank" rel="noopener"><span>ご予約はこちら</span></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>