<?php
$thisPageName = 'groups';

$post_id = '1417';
$editor = get_field('editor', $post_id);

include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/groups.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="groups" class="groups">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>団体利用</li>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner">
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
        </div>
        <div class="img-wave-yellow">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
        </div>
        <div class="mv-ttl">
          <h1 class="mv-ttl-jp">団体利用</h1>
          <span class="mv-ttl-en">GROUPS</span>
          <p class="short-desc">
            研修・社員旅行・学校行事など、<br class="sp">団体でのご利用も大歓迎！<br>大型バスでのご来園も可能で、目的やご予算に合わせた最適なプランをご提案します。
          </p>
        </div>
      </div>
    </div>

    <div class="sec-anchor">
      <div class="inner1170">
        <ul class="lst-anchor">
          <li class="lanchor1">
            <a class="c-btn01 btn-anchor" href="#info01">
              <i class="arr01"></i>
              <span class="txt-anchor">
                <em class="icon icon__off">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor01_icn.svg" src="<?php echo createSVG(37, 15); ?>" width="37" height="15" rel="js-lazy" alt="">
                </em>
                <em class="icon icon__on">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor01_icn_hv.svg" src="<?php echo createSVG(37, 15); ?>" width="37" height="15" rel="js-lazy" alt="">
                </em>
                別府海浜砂湯
              </span>
              <i class="arr02"></i>
            </a>
          </li>
          <li>
            <a class="c-btn01 btn-anchor" href="#info02">
              <i class="arr01"></i>
              <span class="txt-anchor">
                <em class="icon icon__off">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor02_icn.svg" src="<?php echo createSVG(27, 28); ?>" width="27" height="28" rel="js-lazy" alt="">
                </em>
                <em class="icon icon__on">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor02_icn_hv.svg" src="<?php echo createSVG(27, 28); ?>" width="27" height="28" rel="js-lazy" alt="">
                </em>
                お食事
              </span>
              <i class="arr02"></i>
            </a>
          </li>
          <li>
            <a class="c-btn01 btn-anchor" href="#info03">
              <i class="arr01"></i>
              <span class="txt-anchor">
                <em class="icon icon__off">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor03_icn.svg" src="<?php echo createSVG(29, 27); ?>" width="29" height="27" rel="js-lazy" alt="">
                </em>
                <em class="icon icon__on">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor03_icn_hv.svg" src="<?php echo createSVG(29, 27); ?>" width="29" height="27" rel="js-lazy" alt="">
                </em>
                宿泊
              </span>
              <i class="arr02"></i>
            </a>
          </li>
          <li>
            <a class="c-btn01 btn-anchor" href="#info04">
              <i class="arr01"></i>
              <span class="txt-anchor">
                <em class="icon icon__off">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor04_icn.svg" src="<?php echo createSVG(27, 25); ?>" width="27" height="25" rel="js-lazy" alt="">
                </em>
                <em class="icon icon__on">
                  <img data-src="<?php echo APP_ASSETS; ?>img/groups/anchor04_icn_hv.svg" src="<?php echo createSVG(27, 25); ?>" width="27" height="25" rel="js-lazy" alt="">
                </em>
                会議室
              </span>
              <i class="arr02"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sec-spa" id="groups01">
      <div class="inner1170" data-aos="fade-up">
        <div class="c-wcm01">
          <h2 class="c-ttl02 sp">
            <span class="c-ttl02__jp">別府海浜砂湯</span>
            <span class="c-ttl02__en">Sand SPA</span>
          </h2>
          <section class="c-secwrap wrap-left">
            <div class="c-secwrap__colslide">
              <div class="c-gallery__main">
                <div class="gallery-wrapper js-slider-gallery05">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_spa01.jpg" width="715" height="513" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_spa02.jpg" width="715" height="513" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_spa03.jpg" width="715" height="513" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="gr-prev swiper05-prev">
                  </div>
                  <div class="gr-next swiper05-next">
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="gallerySwiper-pagination swiper05-pagination"></div>
                  <div class="gallerySwiper-progress-bar swiper05-progress-bar">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
              <div class="c-gallery__thumb">
                <div class="slider-thumb-gallery js-slider-thumb05">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_spa01.jpg" width="176" height="120" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_spa02.jpg" width="176" height="120" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_spa03.jpg" width="176" height="120" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-secwrap__colctn">
              <div class="colctn-inner">
                <h2 class="c-ttl02 pc">
                  <span class="c-ttl02__jp">別府海浜砂湯</span>
                  <span class="c-ttl02__en">Sand SPA</span>
                </h2>
                <div class="colctn-logo">
                  <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo01.png" width="232" height="34" alt="">
                </div>
                <div class="colctn-desc">
                  <p class="txt">目の前に広がる別府湾を眺めながら、心と体を癒す別府海浜砂湯「Sand SPA」。最大24名様まで同時に体験可能で、研修旅行や学校行事など、思い出に残る特別な時間をお楽しみいただけます。</p>
                </div>
                <dl class="colctn-dl">
                  <dt>料金</dt>
                  <dd>大人：2,500円　<br class="sp">小人（6歳～12歳）：1,800円</dd>
                </dl>
                <p class="colctn-note">※砂湯体験時間は約15分です。<br>※貸切をご希望の際はお問い合わせください。</p>

                <a class="c-btn03" href="#">
                  <i class="arr01"></i>
                  <span>団体利用のお問い合わせ</span>
                  <i class="arr02"></i>
                </a>
                <a href="#" class="colctn-link">別府海浜砂湯の詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="sec-dining c-bg-wave02 wave-yellow" id="groups02">
      <div class="inner1170" data-aos="fade-up">
        <div class="c-wcm01">
          <h2 class="c-ttl02 sp">
            <span class="c-ttl02__jp">お食事</span>
            <span class="c-ttl02__en">Dining</span>
          </h2>
          <section class="c-secwrap wrap-right">
            <div class="c-secwrap__colslide">
              <div class="c-gallery__main">
                <div class="gallery-wrapper js-slider-gallery06">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_dining01.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_dining02.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_dining03.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="gr-prev swiper06-prev">
                  </div>
                  <div class="gr-next swiper06-next">
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="gallerySwiper-pagination swiper06-pagination"></div>
                  <div class="gallerySwiper-progress-bar swiper06-progress-bar">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
              <div class="c-gallery__thumb">
                <div class="slider-thumb-gallery js-slider-thumb06">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_dining01.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_dining02.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_dining03.jpg" width="140" height="100" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-secwrap__colctn">
              <div class="colctn-inner">
                <h2 class="c-ttl02 pc">
                  <span class="c-ttl02__jp">お食事</span>
                  <span class="c-ttl02__en">Dining</span>
                </h2>
                <div class="colctn-logo">
                  <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo02.png" width="127" height="52" alt="">
                </div>
                <div class="colctn-desc">
                  <p class="txt">別府湾を一望できるハワイアングリルレストラン｢Grill Takka｣では、10名様以上の団体でのご利用も承っております｡人数やご予算に応じたメニュー内容のご相談も可能です｡</p>
                </div>
                <dl class="colctn-dl">
                  <dt>座席数</dt>
                  <dd>店内：40　テラス：46</dd>
                </dl>
                <p class="colctn-note">※貸切をご希望の際はお問い合わせください。</p>

                <a class="c-btn03" href="#">
                  <i class="arr01"></i>
                  <span>団体利用のお問い合わせ</span>
                  <i class="arr02"></i>
                </a>
                <a href="#" class="colctn-link">レストラン「Grill Takka」の詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="sec-accom" id="groups03">
      <div class="inner1170" data-aos="fade-up">
        <div class="c-wcm01">
          <h2 class="c-ttl02 sp">
            <span class="c-ttl02__jp">宿泊</span>
            <span class="c-ttl02__en">Accommodation</span>
          </h2>
          <section class="c-secwrap wrap-left">
            <div class="c-secwrap__colslide">
              <div class="c-gallery__main">
                <div class="gallery-wrapper js-slider-gallery07">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_accom01.jpg" width="625" height="440" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_accom02.jpg" width="625" height="440" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_accom03.jpg" width="625" height="440" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="gr-prev swiper07-prev">
                  </div>
                  <div class="gr-next swiper07-next">
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="gallerySwiper-pagination swiper07-pagination"></div>
                  <div class="gallerySwiper-progress-bar swiper07-progress-bar">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
              <div class="c-gallery__thumb">
                <div class="slider-thumb-gallery js-slider-thumb07">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_accom01.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_accom02.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_accom03.jpg" width="140" height="100" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-secwrap__colctn">
              <div class="colctn-inner">
                <h2 class="c-ttl02 pc">
                  <span class="c-ttl02__jp">宿泊</span>
                  <span class="c-ttl02__en">Accommodation</span>
                </h2>
                <div class="colctn-logo">
                  <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo03.png" width="186" height="40" alt="">
                </div>
                <div class="colctn-desc">
                  <p class="txt">10名様以上の団体様向け宿泊プランをご用意しております。<br>全23室のコテージ・客室を備えており、研修・合宿・社員旅行など幅広い用途にご利用いただけます。</p>
                </div>
                <a class="c-btn03" href="#">
                  <i class="arr01"></i>
                  <span>パンフレットをダウンロード</span>
                  <i class="arr02"></i>
                </a>
                <a class="c-btn03" href="#">
                  <i class="arr01"></i>
                  <span>団体利用のお問い合わせ</span>
                  <i class="arr02"></i>
                </a>
                <a href="#" class="colctn-link">ISHINOYA別府の詳細はこちら</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div class="sec-group">
      <div class="inner1170">
        <div class="c-ttl03" data-aos="fade-up">
          <h3 class="c-ttl03__ttl">料金プラン</h3>
        </div>
        <div class="desc" data-aos="fade-up">
          <p><a href="#" class="ulink">「宿泊料金カレンダー」</a>で候補日のA/B/Cをご確認の上、各プランの該当料金をご確認ください。</p>
        </div>
        <div class="sc4" data-aos="fade-up">
          <h4 class="c-ttl05">団体プラン <span class="c-ttl05__sm">1泊2食付き(全23室)　※会議室料金別途</span></h4>
          <div class="sc5" data-aos="fade-up">
            <h5 class="c-ttl06">プレミアム(露天風呂付客室)</h5>
            <p class="c-ttl06-desc">対象客室：プレミアムツイン（クイーンベッド2台）／プレミアムトリプル（セミダブルベッド3台）／プレミアムバンクフォース（クイーンベッド2台＋シングルベッド2台）</p>
            <div class="utbl-scroll">
              <table class="utbl-gr">
                <thead>
                  <tr>
                    <th>料金<br class="sp">ランク</th>
                    <th>1名利用</th>
                    <th>2名利用</th>
                    <th>3名利用</th>
                    <th>4名利用</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>A</th>
                    <td>税込\45,100</td>
                    <td>税込\31,900</td>
                    <td>税込\30,800</td>
                    <td>税込\29,700</td>
                  </tr>
                  <tr>
                    <th>B</th>
                    <td>税込\47,300</td>
                    <td>税込\34,100</td>
                    <td>税込\33,000</td>
                    <td>税込\31,900</td>
                  </tr>
                  <tr>
                    <th>C</th>
                    <td>税込\51,700</td>
                    <td>税込\38,500</td>
                    <td>税込\37,400</td>
                    <td>税込\36,300</td>
                  </tr>
                  <tr class="utbl-laster">
                    <th><img src="<?php echo APP_ASSETS ?>img/groups/ico_phone.svg" width="23" height="23" alt=""></th>
                    <td class="grid-4"><a href="#" class="utbl-link">お問い合わせ下さい</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="sc5" data-aos="fade-up">
            <h5 class="c-ttl06">スーペリア</h5>
            <p class="c-ttl06-desc">対象客室：スーペリアツイン（クイーンベッド2台）／スーペリアトリプル（セミダブルベッド3台）／スーペリアバンクフォース（クイーンベッド2台＋シングルベッド2台）</p>
            <div class="utbl-scroll">
              <table class="utbl-gr">
                <thead>
                  <tr>
                    <th>料金<br class="sp">ランク</th>
                    <th>1名利用</th>
                    <th>2名利用</th>
                    <th>3名利用</th>
                    <th>4名利用</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>A</th>
                    <td>税込\38,500</td>
                    <td>税込\27,500</td>
                    <td>税込\26,400</td>
                    <td>税込\25,300</td>
                  </tr>
                  <tr>
                    <th>B</th>
                    <td>税込\40,700</td>
                    <td>税込\29,700</td>
                    <td>税込\28,600</td>
                    <td>税込\27,500</td>
                  </tr>
                  <tr>
                    <th>C</th>
                    <td>税込\45,100</td>
                    <td>税込\34,100</td>
                    <td>税込\33,000</td>
                    <td>税込\31,900</td>
                  </tr>
                  <tr class="utbl-laster">
                    <th><img src="<?php echo APP_ASSETS ?>img/groups/ico_phone.svg" width="23" height="23" alt=""></th>
                    <td class="grid-4"><a href="#" class="utbl-link">お問い合わせ下さい</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="sc5" data-aos="fade-up">
            <h5 class="c-ttl06">スタンダード</h5>
            <p class="c-ttl06-desc">対象客室：スタンダードキング（キングベッド1台）</p>
            <table class="utbl-gr col3">
              <thead>
                <tr>
                  <th>料金<br class="sp">ランク</th>
                  <th>1名利用</th>
                  <th>2名利用</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>A</th>
                  <td>税込\30,800</td>
                  <td>税込\22,000</td>
                </tr>
                <tr>
                  <th>B</th>
                  <td>税込\33,000</td>
                  <td>税込\24,200</td>
                </tr>
                <tr>
                  <th>C</th>
                  <td>税込\37,400</td>
                  <td>税込\28,600</td>
                </tr>
                <tr class="utbl-laster">
                  <th><img src="<?php echo APP_ASSETS ?>img/groups/ico_phone.svg" width="23" height="23" alt=""></th>
                  <td class="grid-4"><a href="#" class="utbl-link">お問い合わせ下さい</a></td>
                </tr>
              </tbody>
            </table>
            <ul class="utbl-note">
              <li>サービス料金・消費税込み。入湯税（お1人様1泊あたり250円）は別途。</li>
              <li>お一人様あたりのご料金が税別50,001円以上の場合は一泊につき入湯税500円となります。</li>
              <li>Sand SPA の砂湯体験は含まれません。大浴場はご利用いただけます。</li>
            </ul>
          </div>
        </div>
        <div class="sc4" data-aos="fade-up">
          <h4 class="c-ttl05 mb02">貸切プラン<span class="c-ttl05__sm">1泊2食（宿泊コテージエリア全23室貸切）15:00～翌10:00</span></h4>
          <table class="utbl-gr col2" data-aos="fade-up">
            <thead>
              <tr>
                <th>料金<br class="sp">ランク</th>
                <th>基本料金（23名まで）</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>A</th>
                <td>税込\858,000</td>
              </tr>
              <tr>
                <th>B</th>
                <td>税込\935,000</td>
              </tr>
              <tr>
                <th>C</th>
                <td>税込\1,100,000</td>
              </tr>
              <tr class="utbl-laster">
                <th><img src="<?php echo APP_ASSETS ?>img/groups/ico_phone.svg" width="23" height="23" alt=""></th>
                <td class="grid-4"><a href="#" class="utbl-link">お問い合わせ下さい</a></td>
              </tr>
            </tbody>
          </table>
          <ul class="utbl-note" data-aos="fade-up">
            <li>24名様以上のご利用の際は1名様追加につき+14,300円/名を頂戴いたします。</li>
            <li>宿泊コテージエリアのみを貸切でご利用頂けます。</li>
            <li>貸切プランは特別料金のため31名以上の違約金が適用されます。</li>
            <li>サービス料金・消費税込み。入湯税（お1人様1泊あたり250円）は別途。</li>
            <li>お一人様あたりのご料金が税別50,001円以上の場合は一泊につき入湯税500円となります。</li>
            <li>Sand SPA の砂湯体験は含まれません。大浴場はご利用いただけます。</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="sec-meeting c-bg-wave02 wave-gray" id="groups04">
      <div class="inner1170">
        <div class="c-wcm01" data-aos="fade-up">
          <h2 class="c-ttl02 sp">
            <span class="c-ttl02__jp">会議室</span>
            <span class="c-ttl02__en">Meeting Room</span>
          </h2>
          <div class="c-secwrap wrap-right">
            <div class="c-secwrap__colslide">
              <div class="c-gallery__main">
                <div class="gallery-wrapper js-slider-gallery04">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_meet01.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_meet02.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="gallery-pic c-img">
                        <img src="<?php echo APP_ASSETS ?>img/groups/slide_meet03.jpg" width="751" height="478" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="gr-prev swiper04-prev">
                  </div>
                  <div class="gr-next swiper04-next">
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="gallerySwiper-pagination swiper04-pagination"></div>
                  <div class="gallerySwiper-progress-bar swiper04-progress-bar">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
              <div class="c-gallery__thumb">
                <div class="slider-thumb-gallery js-slider-thumb04">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_meet01.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_meet02.jpg" width="140" height="100" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/groups/slide_meet03.jpg" width="140" height="100" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-secwrap__colctn">
              <div class="colctn-inner">
                <h2 class="c-ttl02 pc">
                  <span class="c-ttl02__jp">会議室</span>
                  <span class="c-ttl02__en">Meeting Room</span>
                </h2>
                <div class="colctn-desc">
                  <p class="txt">研修やミーティングに最適な近隣の会議室を手配いたします｡<br>人数や用途に応じて、SHONIN PARK周辺の会議室や多目的スペースをご案内可能です｡</p>
                </div>
                <div class="sp">
                  <dl class="colctn-dl">
                    <dt>座席数</dt>
                    <dd>店内：40　テラス：46</dd>
                  </dl>
                  <p class="colctn-note">※貸切をご希望の際はお問い合わせください。</p>
                </div>
                <a class="c-btn03" href="#">
                  <i class="arr01"></i>
                  <span>団体利用のお問い合わせ</span>
                  <i class="arr02"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="room-cnt">
          <div class="r-item r-item1" data-aos="fade-up">
            <div class="r-logo">
              <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo02.png" width="124" height="50" alt="">
            </div>
            <div class="r-cnt">
              <div class="r-head">
                <p class="r-name">Grill Takka グリルタッカ</p>
                <p class="r-adr">〒874-0023　大分県別府市上人ケ浜町795-1　SHONIN PARK施設内</p>
                <a href="#" class="r-map">Google map</a>
              </div>
              <div class="r-post">
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img01.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">個室</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>12㎡</p>
                        <p>8名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="r-item r-item2" data-aos="fade-up">
            <div class="r-logo">
              <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo05.png" width="125" height="56" alt="">
            </div>
            <div class="r-cnt">
              <div class="r-head">
                <p class="r-name">TKP大分駅前カンファレンスセンター</p>
                <p class="r-adr">〒870-0026　大分県大分市金池町1丁目1-17 TKP大分ビル2階</p>
                <a href="#" class="r-map">Google map</a>
              </div>
              <div class="r-post">
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img02.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">カンファレンスルーム2A</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>88.97㎡</p>
                        <p>72名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img03.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">カンファレンスルーム2B</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>59.96㎡</p>
                        <p>48名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img04.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">カンファレンスルーム2C</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>66.94㎡</p>
                        <p>57名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img05.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">カンファレンスルーム2D</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>76.71㎡</p>
                        <p>54名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img06.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">ミーティングルーム2E</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>13.32㎡</p>
                        <p>6名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="r-btn"></div>
            </div>
          </div>

          <div class="r-item r-item3" data-aos="fade-up">
            <div class="r-logo">
              <img src="<?php echo APP_ASSETS ?>/img/groups/groups_logo06.png" width="160" height="71" alt="">
            </div>
            <div class="r-cnt">
              <div class="r-head">
                <p class="r-name">ホテル サンバリー アネックス</p>
                <p class="r-adr">〒874-0919　大分県別府市石垣東<br class="sp">10-1-20</p>
                <a href="#" class="r-map">Google map</a>
              </div>
              <div class="r-post">
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img07.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">ホール｜エメラルド(サファイア･ルビー)</p>
                    <dl class="r-tbl cst3">
                      <dt>
                        <p></p>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>エメラルド<br><span>(サファイア＋ルビー)</span></p>
                        <p>480㎡</p>
                        <p>〜220名様</p>
                      </dd>
                      <dd>
                        <p>サファイア</p>
                        <p>290㎡</p>
                        <p>〜100名様</p>
                      </dd>
                      <dd>
                        <p>ルビー</p>
                        <p>190㎡</p>
                        <p>〜60名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img08.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">ホール｜ルナ</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>100㎡</p>
                        <p>～50名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img09.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">和室｜桜の間</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>48帖</p>
                        <p>～50名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img10.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">和室｜りんどう・ききょう</p>
                    <dl class="r-tbl cst3">
                      <dt>
                        <p></p>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>りんどう+ききょう</p>
                        <p>60㎡</p>
                        <p>～25名様</p>
                      </dd>
                      <dd>
                        <p>りんどう</p>
                        <p>30㎡</p>
                        <p>～8名様</p>
                      </dd>
                      <dd>
                        <p>ききょう</p>
                        <p>30㎡</p>
                        <p>～8名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img11.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">洋室｜若潮の間</p>
                    <dl class="r-tbl">
                      <dt>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>65㎡</p>
                        <p>～30名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
                <div class="r-info">
                  <p class="r-img img_c">
                    <img src="<?php echo APP_ASSETS ?>/img/groups/groups_img12.jpg" width="328" height="222" alt="">
                  </p>
                  <div class="r-txt">
                    <p class="c-ttl05">控室｜リリー・カトレア</p>
                    <dl class="r-tbl cst3">
                      <dt>
                        <p></p>
                        <p>広さ</p>
                        <p>収容人数</p>
                      </dt>
                      <dd>
                        <p>リリー+カトレア</p>
                        <p>30㎡</p>
                        <p>～10名様</p>
                      </dd>
                      <dd>
                        <p>リリー</p>
                        <p>14㎡</p>
                        <p>～4名様</p>
                      </dd>
                      <dd>
                        <p>カトレア</p>
                        <p>16㎡</p>
                        <p>～6名様</p>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="r-btn"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $(function() {
      $('.r-btn').on('click', function() {
        $(this).toggleClass('active');
        $(this).closest('.r-cnt').find('.r-post').toggleClass('show');
      });
    });
  </script>
</body>

</html>