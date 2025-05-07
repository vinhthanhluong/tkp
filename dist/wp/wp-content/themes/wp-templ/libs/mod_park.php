<div class="mod-park">
  <div class="mod-park__inner">
    <img src="<?php echo createSVG(1170, 668) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park.svg" rel="js-lazy" width="1170" height="668" alt="">
    <p class="mod-park__btn bnt01 js-btnpopup" data-popup="modal01">
      <span class="txt">レストラン</span>
    </p>
    <p class="mod-park__btn bnt02 js-btnpopup" data-popup="modal02">
      <span class="txt">砂湯・温泉</span>
    </p>
    <p class="mod-park__btn bnt03 js-btnpopup" data-popup="modal03">
      <span class="txt">ショップ</span>
    </p>
    <p class="mod-park__btn bnt04 js-btnpopup" data-popup="modal04">
      <span class="txt">宿泊コテージ</span>
    </p>
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
            <div class="popup-col01">
              <p class="popup-num">
                <span class="num">1</span>
              </p>
              <div class="popup-desc">
                <p class="txt">あえて最初は、壁を設置せず、将来仕切りをいれるという使い方もできます。</p>
              </div>
            </div>
            <div class="popup-col02">
              <div class="popup-thumb">
                <img src="<?php echo createSVG(316, 422) ?>" data-src="<?php echo APP_ASSETS ?>img/about/design/popup01.jpg" width="316" height="422" rel="js-lazy" alt="">
              </div>
            </div>
          </li>
        </ul>
        <p class="popup-close js-popupclose"><span class="btn"></span></p>
      </div>
    </div>
  </div>
</div>
<!-- Popup -->