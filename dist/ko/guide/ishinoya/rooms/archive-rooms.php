<?php
session_start();
$thisPageName = 'rooms';
include(APP_PATH_KO . 'libs/head02.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_rooms.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-rooms" class="ishinoya-rooms ko">
  <?php include(APP_PATH_KO . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/rooms/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/rooms/mv_sp.jpg">
      <div class="inner1170">
        <div class="keyvisual-ttl">
          <span class="ttl-en">Rooms</span>
          <h1 class="ttl-jp">객실</h1>
        </div>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL_KO; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL_KO; ?>guide/">시설안내</a></li>
            <li><a href="<?php echo APP_URL_KO; ?>guide/ishinoya/">ISHINOYA벳푸</a></li>
            <li>객실</li>
          </ul>
        </div>
      </div>
    </section>
    <?php
    $rooms_param_all = array(
      'post_type'      => 'rooms',
      'order'          => 'ASC',
      'orderby'        => 'menu_order',
      'post_status'    => 'publish',
      'posts_per_page' =>  -1,
    );
    $rooms_post_all = new WP_Query($rooms_param_all);
    if ($rooms_post_all->have_posts()) {
    ?>
      <section class="sec-rooms">
        <div class="inner">
          <ul class="anchor-list aos-init" data-aos="fade-up">
            <?php
            while ($rooms_post_all->have_posts()) {
              $rooms_post_all->the_post();
              $rooms_id = get_the_ID();
              $rooms_ttl = get_field('title_ko', $rooms_id) ?: get_the_title($rooms_id);
              $room_info = get_field('room_info_ko', $rooms_id);
              $room_info_num = $room_info[0];
              $room_info_num = !empty($room_info_num['detail']) ? $room_info_num['detail'] : "";
              $room_info_num = !empty($room_info_num) ? explode("\n", $room_info_num) : [];
              $room_info_num = implode('</br>', $room_info_num);

              $room_info_area = $room_info[1];
              $room_info_area = !empty($room_info_area['detail']) ? $room_info_area['detail'] : "";
              $room_info_area = !empty($room_info_area) ? explode("\n", $room_info_area) : [];
              $room_info_area = implode('</br>', $room_info_area);

              $room_bath = get_field('room_bath', $rooms_id);
            ?>
              <li>
                <a class="anchor-item" href="#anchor<?php echo $rooms_id; ?>">
                  <div class="anchor-inner">
                    <span class="anchor-txt"><?php echo $rooms_ttl; ?></span>
                    <ul class="c-txt-list">
                      <?php if (!empty($room_info_num)) { ?>
                        <li class="icn icn01"><?php echo $room_info_num; ?></li>
                      <?php } ?>
                      <?php if (!empty($room_info_num)) { ?>
                        <li class="icn icn02"><?php echo $room_info_area; ?></li>
                      <?php } ?>
                      <?php if ($room_bath == 'inside') { ?>
                        <li class="icn icn03">객실 내 온천</li>
                      <?php } else if ($room_bath == 'outside') { ?>
                        <li class="icn icn04">노천탕 포함</li>
                      <?php } ?>
                    </ul>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
          <ul class="rooms-list">
            <?php
            while ($rooms_post_all->have_posts()) {
              $rooms_post_all->the_post();
              $rooms_id = get_the_ID();
              $rooms_ttl = get_field('title_ko', $rooms_id) ?: get_the_title($rooms_id);
              $rooms_link = insertLangInUrl(get_the_permalink($rooms_id), 'guide', 'ko');
              $room_slide = get_field('room_slide', $rooms_id);
              $room_slide = !empty($room_slide) ? $room_slide[0] : "";
              $room_slide = !empty($room_slide) ? $room_slide['url'] : APP_NOIMG;
              $room_desc = get_field('room_desc_ko', $rooms_id);
              $room_desc = !empty($room_desc) ? explode("\n", $room_desc) : [];
              $room_desc = implode('</br>', $room_desc);
              $room_info = get_field('room_info_ko', $rooms_id);
              $room_info_num = $room_info[0];
              $room_info_num = !empty($room_info_num['detail']) ? $room_info_num['detail'] : "";
              $room_info_area = $room_info[1];
              $room_info_area = !empty($room_info_area['detail']) ? $room_info_area['detail'] : "";
              $room_bath = get_field('room_bath', $rooms_id);
            ?>
              <li class="rooms-item aos-init" data-aos="fade-up" id="anchor<?php echo $rooms_id; ?>">
                <figure class="rooms-img c-img <?php echo $room_slide == APP_NOIMG ? "c-nophoto" : ""; ?>">
                  <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo $room_slide; ?>" rel="js-lazy" width="590" height="350" alt="<?php echo $rooms_ttl; ?>">
                </figure>
                <div class="rooms-info">
                  <h2 class="rooms-ttl"><?php echo $rooms_ttl; ?></h2>
                  <?php if (!empty($room_desc)) { ?>
                    <p class="rooms-desc"><?php echo $room_desc; ?></p>
                  <?php } ?>
                  <ul class="c-txt-list">
                    <?php if (!empty($room_info_num)) { ?>
                      <li class="icn icn01"><?php echo $room_info_num; ?></li>
                    <?php } ?>
                    <?php if (!empty($room_info_area)) { ?>
                      <li class="icn icn02"><?php echo $room_info_area; ?></li>
                    <?php } ?>
                    <?php if ($room_bath == 'inside') { ?>
                      <li class="icn icn03">객실 내 온천</li>
                    <?php } else if ($room_bath == 'outside') { ?>
                      <li class="icn icn04">노천탕 포함</li>
                    <?php } ?>
                  </ul>
                  <a class="c-btn04" href="<?php echo $rooms_link; ?>"><span>자세히 보기</span></a>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </section>
    <?php } else { ?>
      <p class="c-text-nonpost">표시할 기사가 없습니다.</p>
    <?php } ?>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer02.php'); ?>
</body>

</html>