<div class="mod-park">
  <div class="mod-park__inner">
    <div class="park-bg aos-init" data-aos="fade-up" data-aos-delay="0">
      <img class="pc" src="<?php echo createSVG(1170, 668) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park.svg" rel="js-lazy" width="1170" height="668" alt="">
      <img class="sp" src="<?php echo createSVG(361, 206) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park_sp.png" rel="js-lazy" width="361" height="206" alt="">
    </div>
    <div class="mod-park__btn bnt01 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <p class="btn-link js-btnpopup" data-popup="modal01">
        <span class="txt">レストラン</span>
      </p>
    </div>
    <div class="mod-park__btn bnt02 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <p class="btn-link js-btnpopup" data-popup="modal02">
        <span class="txt">砂湯・温泉</span>
      </p>
    </div>
    <div class="mod-park__btn bnt03 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <p class="btn-link js-btnpopup" data-popup="modal03">
        <span class="txt">ショップ</span>
      </p>
    </div>
    <div class="mod-park__btn bnt04 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <p class="btn-link js-btnpopup" data-popup="modal04">
        <span class="txt">宿泊コテージ</span>
      </p>
    </div>
  </div>
</div>

<!-- Popup -->
<div class="modal-overlay js-modaloverlay"></div>
<div class="modal-popup js-modalpopup" id="modal01">
  <div class="modal-inner">
    <div class="modal-window">
      <div class="modal-popup__inner">
        <ul class="popup-lst">
          <li class="popup-lst__item">
            <div class="popup-ctn01">
              <div class="popup-thumb">
                <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup01.jpg" width="280" height="190" rel="js-lazy" alt="">
              </div>
            </div>
            <div class="popup-ctn02">
              <p class="popup-ttl">レストラン</p>
              <div class="popup-desc">
                <p class="txt">別府湾を眺めながら、別府の恵みを味わえるハワイアンレストラン。開放感あふれる空間で朝食のビュッフェやグリル料理を堪能できます。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="popup-btn">
    <a href="<?php echo APP_URL ?>restaurants/" class="c-btn02 is-center">
      <i class="arr01"></i>
      <span>もっと見る</span>
      <i class="arr02"></i>
    </a>
  </div>
  <p class="popup-close js-popupclose"><span class="btn"></span></p>
</div>
<div class="modal-popup js-modalpopup" id="modal02">
  <div class="modal-inner">
    <div class="modal-window">
      <div class="modal-popup__inner">
        <ul class="popup-lst">
          <li class="popup-lst__item">
            <div class="popup-ctn01">
              <div class="popup-thumb">
                <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup02.jpg" width="280" height="190" rel="js-lazy" alt="">
              </div>
            </div>
            <div class="popup-ctn02">
              <p class="popup-ttl">砂湯・温泉</p>
              <div class="popup-desc">
                <p class="txt">別府の海浜砂湯の歴史と文化を継承しつつ、新たな温泉体験を提供する「Spa Sand」。広大な施設の中には砂湯温泉だけでなく、Barや無料で利用できる足湯もお楽しみいただけます。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="popup-btn">
    <a href="<?php echo APP_URL ?>" class="c-btn02 is-center">
      <i class="arr01"></i>
      <span>もっと見る</span>
      <i class="arr02"></i>
    </a>
  </div>
  <p class="popup-close js-popupclose"><span class="btn"></span></p>
</div>
<div class="modal-popup js-modalpopup" id="modal03">
  <div class="modal-inner">
    <div class="modal-window">
      <div class="modal-popup__inner">
        <ul class="popup-lst">
          <li class="popup-lst__item">
            <div class="popup-ctn01">
              <div class="popup-thumb">
                <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup03.jpg" width="280" height="190" rel="js-lazy" alt="">
              </div>
            </div>
            <div class="popup-ctn02">
              <p class="popup-ttl">ショップ</p>
              <div class="popup-desc">
                <p class="txt">別府・大分の特産品やグルメを一堂に楽しめるショッピングエリア。ライフスタイルショップも楽しめる賑やかなエリアです。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="popup-btn">
    <a href="<?php echo APP_URL ?>shops/" class="c-btn02 is-center">
      <i class="arr01"></i>
      <span>もっと見る</span>
      <i class="arr02"></i>
    </a>
  </div>
  <p class="popup-close js-popupclose"><span class="btn"></span></p>
</div>
<div class="modal-popup js-modalpopup" id="modal04">
  <div class="modal-inner">
    <div class="modal-window">
      <div class="modal-popup__inner">
        <ul class="popup-lst">
          <li class="popup-lst__item">
            <div class="popup-ctn01">
              <div class="popup-thumb">
                <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup04.jpg" width="280" height="190" rel="js-lazy" alt="">
              </div>
            </div>
            <div class="popup-ctn02">
              <p class="popup-ttl">宿泊コテージ</p>
              <div class="popup-desc">
                <p class="txt">別府湾のオーシャンビューや公園の森林を満喫できる全7種、23室の宿泊コテージ。大自然の中で温泉やBBQ、ヨガなどのアクティビティも楽しめます。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="popup-btn">
    <a href="<?php echo APP_URL ?>" class="c-btn02 is-center">
      <i class="arr01"></i>
      <span>もっと見る</span>
      <i class="arr02"></i>
    </a>
  </div>
  <p class="popup-close js-popupclose"><span class="btn"></span></p>
</div>
<!-- Popup -->