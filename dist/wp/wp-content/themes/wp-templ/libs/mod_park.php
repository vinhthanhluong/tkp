<div class="mod-park">
  <div class="mod-park__inner">
    <div class="park-bg aos-init" data-aos="fade-up" data-aos-delay="0">
      <img class="pc" src="<?php echo createSVG(1170, 668) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park.svg" rel="js-lazy" width="1170" height="668" alt="SHONIN PARK マップ">
      <img class="sp" src="<?php echo createSVG(1170, 668) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park_sp.png" rel="js-lazy" width="360" height="206" alt="SHONIN PARK マップ">
    </div>
    <div class="mod-park__btn bnt01 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <h3 class="btn-link js-btnpopup" data-popup="modal01">
        <span class="txt"><span class="is-lineheight">レストラン<br>Grill Takka</span></span>
      </h3>
    </div>
    <div class="mod-park__btn bnt02 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <h3 class="btn-link js-btnpopup" data-popup="modal02">
        <span class="txt"><span class="is-lineheight">別府海浜砂湯<br>Sand SPA</span></span>
      </h3>
    </div>
    <div class="mod-park__btn bnt03 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <h3 class="btn-link js-btnpopup" data-popup="modal03">
        <span class="txt">ショップ</span>
      </h3>
    </div>
    <div class="mod-park__btn bnt04 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <h3 class="btn-link js-btnpopup" data-popup="modal04">
        <span class="txt"><span class="is-lineheight">宿泊コテージ<br>ISHINOYA 別府</span></span>
      </h3>
    </div>
    <div class="mod-park__btn bnt05 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
      <h3 class="btn-link js-btnpopup" data-popup="modal05">
        <span class="txt">足湯</span>
      </h3>
    </div>
  </div>
</div>

<!-- Popup -->
<div class="modal-overlay js-modaloverlay"></div>
<div class="modal-popup js-modalpopup" id="modal01">
  <div class="modal-ctn">
    <div class="modal-inner">
      <div class="modal-window">
        <div class="modal-popup__inner">
          <ul class="popup-lst">
            <li class="popup-lst__item">
              <div class="popup-ctn01">
                <div class="popup-thumb">
                  <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup01.jpg" width="280" height="190" rel="js-lazy" alt="レストラン">
                </div>
              </div>
              <div class="popup-ctn02">
                <h3 class="popup-ttl">Grill Takka</h3>
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
      <a href="<?php echo APP_URL ?>guide/restaurant/" class="c-btn02 is-center">
        <i class="arr01"></i>
        <span>もっと見る</span>
        <i class="arr02"></i>
      </a>
    </div>
    <p class="popup-close js-popupclose"><span class="btn"> </span></p>
  </div>
</div>
<div class="modal-popup js-modalpopup" id="modal02">
  <div class="modal-ctn">
    <div class="modal-inner">
      <div class="modal-window">
        <div class="modal-popup__inner">
          <ul class="popup-lst">
            <li class="popup-lst__item">
              <div class="popup-ctn01">
                <div class="popup-thumb">
                  <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup02.jpg" width="280" height="190" rel="js-lazy" alt="砂湯・温泉">
                </div>
              </div>
              <div class="popup-ctn02">
                <h3 class="popup-ttl">Sand SPA<br>（別府海浜砂湯）</h3>
                <div class="popup-desc">
                  <p class="txt">別府の海浜砂湯の歴史と文化を継承しつつ、新たな温泉体験を提供する「Sand SPA」。広大な施設の中には砂湯温泉だけでなく、Barや無料で利用できる足湯もお楽しみいただけます。</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="popup-btn">
      <a href="<?php echo APP_URL ?>guide/spa/" class="c-btn02 is-center">
        <i class="arr01"></i>
        <span>もっと見る</span>
        <i class="arr02"></i>
      </a>
    </div>
    <p class="popup-close js-popupclose"><span class="btn"> </span></p>
  </div>
</div>
<div class="modal-popup js-modalpopup" id="modal03">
  <div class="modal-ctn">
    <div class="modal-inner">
      <div class="modal-window">
        <div class="modal-popup__inner">
          <ul class="popup-lst">
            <li class="popup-lst__item">
              <div class="popup-ctn01">
                <div class="popup-thumb">
                  <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup03.jpg" width="280" height="190" rel="js-lazy" alt="ショップ">
                </div>
              </div>
              <div class="popup-ctn02">
                <h3 class="popup-ttl">ショップ</h3>
                <div class="popup-desc">
                  <p class="txt">別府・大分の特産品やグルメを気軽に楽しめるエリアです。</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="popup-btn">
      <a href="<?php echo APP_URL ?>guide/shop/" class="c-btn02 is-center">
        <i class="arr01"></i>
        <span>もっと見る</span>
        <i class="arr02"></i>
      </a>
    </div>
    <p class="popup-close js-popupclose"><span class="btn"> </span></p>
  </div>
</div>
<div class="modal-popup js-modalpopup" id="modal04">
  <div class="modal-ctn">
    <div class="modal-inner">
      <div class="modal-window">
        <div class="modal-popup__inner">
          <ul class="popup-lst">
            <li class="popup-lst__item">
              <div class="popup-ctn01">
                <div class="popup-thumb">
                  <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup04.jpg" width="280" height="190" rel="js-lazy" alt="宿泊コテージ">
                </div>
              </div>
              <div class="popup-ctn02">
                <h3 class="popup-ttl">ISHINOYA 別府</h3>
                <div class="popup-desc">
                  <p class="txt">緑豊かな森林と別府湾の美しい景色に囲まれた全7種、23室の宿泊コテージ。地元食材にこだわったお料理や砂湯、快眠を追求したベッドで、寛ぎのひとときを提供いたします。</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="popup-btn">
      <a href="<?php echo APP_URL ?>guide/ishinoya/" class="c-btn02 is-center">
        <i class="arr01"></i>
        <span>もっと見る</span>
        <i class="arr02"></i>
      </a>
    </div>
    <p class="popup-close js-popupclose"><span class="btn"> </span></p>
  </div>
</div>
<div class="modal-popup js-modalpopup" id="modal05">
  <div class="modal-ctn">
    <div class="modal-inner">
      <div class="modal-window">
        <div class="modal-popup__inner">
          <ul class="popup-lst">
            <li class="popup-lst__item">
              <div class="popup-ctn01">
                <div class="popup-thumb">
                  <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup05.jpg" width="280" height="190" rel="js-lazy" alt="宿泊コテージ">
                </div>
              </div>
              <div class="popup-ctn02">
                <h3 class="popup-ttl">足湯</h3>
                <div class="popup-desc">
                  <p class="txt">無料で利用できる集いの場としての足湯を設けています。温泉街別府を気軽に体現できるリラックス空間となっています。</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- <div class="popup-btn">
      <a href="<?php echo APP_URL ?>guide/ishinoya/" class="c-btn02 is-center">
        <i class="arr01"></i>
        <span>もっと見る</span>
        <i class="arr02"></i>
      </a>
    </div> -->
    <p class="popup-close js-popupclose"><span class="btn"> </span></p>
  </div>
</div>
<!-- Popup -->