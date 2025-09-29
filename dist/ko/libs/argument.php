<?php
$pagename = str_replace(array('/', '.php'), '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$pagename = $pagename ? $pagename : 'default';
$pagename = (isset($thisPageName)) ? $thisPageName : $pagename;

switch ($pagename) {
  case '':
    if (empty($titlepage)) $titlepage = 'About us title';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'top':
    if (empty($titlepage)) $titlepage = 'SHONIN PARK｜벳푸 쇼닌가하마공원';
    if (empty($desPage)) $desPage = '당일치기로도 즐길 수 있는 세련된 벳푸 해변 모래찜질・온천과 레스토랑, 숍,숙박 코티지 등 다양한 체험이 가능한 오이타・벳푸 관광의 새로운 명소 "SHONIN PARK". 가족, 친구, 연인과 함께 방문하여 아침,점심,저녁마다 매번 다양한 즐거움을 경험할 수 있는 파크＆리조트입니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide':
    if (empty($titlepage)) $titlepage = '시설안내｜SHONIN PARK';
    if (empty($desPage)) $desPage = '당일치기로도 즐길 수 있는 세련된 벳푸 해변 모래찜질과 온천, 레스토랑, 숍,숙박 코티지 등 오이타・벳푸의 매력을 가득 담은 "SHONIN PARK"의 다양한 시설을 소개합니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'restaurant':
    if (empty($titlepage)) $titlepage = '레스토랑（Grill Takka）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '벳푸만을 한눈에 바라볼 수 있는 로케이션에서 본격적인 하와이안 그릴을  오이타식으로 재해석한 요리를 즐길 수 있는  레스토랑 "Grill Takka". 바닷바람과 경쾌한 하와이의 분위기를 느끼시면서 특별한 시간을 보내 보세요.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide-spa':
    if (empty($titlepage)) $titlepage = '벳푸 해변모래찜질（Sand SPA）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '벳푸 유일한 해변 모래찜질・온천시설  "Sand SPA".당일치기로도 즐길 수 있는 힐링공간은 밤에는 라이트업으로 환상적인 분위기를 느낄 수있습니다. 바닷바람을 느끼며  이곳에서만 누릴 수 있는 최고의 릴렉제이션을 경험해 보세요.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya':
    if (empty($titlepage)) $titlepage = 'ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '녹음이 우거진 숲과 벳푸만의 아름다운 경치에 둘러싸인 숙박 코티지 "ISHINOYA 벳푸/이시노야 벳푸". 지역특산 식재료에 정성을 담은 요리와 모래찜질・온천, 쾌적한 수면을 추구한 침대에서 편안한 휴식의 시간을 제공합니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rooms':
    if (empty($titlepage)) $titlepage = '방 ｜ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '총 7종류, 23객실의 객실 타입을 준비하였습니다.노천탕 포함 객실에서는 자유시간과 벳푸온천의 원천을 마음껏 즐기세요. 가족,친구,커플로 럭셔리한 시간을 보내시기 바랍니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-cuisine':
    if (empty($titlepage)) $titlepage = '식사 ｜ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '숙박객 한정으로 아침식사와 저녁식사를 제공합니다.지역의 신선한 식재료를 사용한 요리로 벳푸여행의 추억을 더욱 빛내줄 것입니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-spa':
    if (empty($titlepage)) $titlepage = '온천・모래찜질｜ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '벳푸의 전통적인 모래찜질과 천연온천으로 몸과 마음을 치유하는 럭셔리한 시간을 보내세요. "ISHINOYA 벳푸 / 이시노야 벳푸"에서만 체험이 가능한 고품격 온천욕을 즐기시기 바랍니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-contact':
    if (empty($titlepage)) $titlepage = '문의하기｜ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '"이시노야 벳푸 / 이시노야 벳푸" 숙박에 관한 문의사항이나 상담은 이쪽으로 연락해 주세요. 개인고객, 법인 고객 모두 부담 없이 문의해 주시기 바랍니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-form':
    if (empty($titlepage)) $titlepage = '개인 고객 문의 ｜ISHINOYA 벳푸 / 이시노야 벳푸';
    if (empty($desPage)) $desPage = '개인 고객님의 "ISHINOYA벳푸 / 이시노야 벳푸" 숙박에 관한 문의는 이쪽으로 부탁드립니다. 예약 전에 궁금하신 점이나 상담이 필요하신 경우에도 언제든지 편하게 연락 주세요.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'shop':
    if (empty($titlepage)) $titlepage = '숍 ｜SHONIN PARK';
    if (empty($desPage)) $desPage = '벳푸, 오이타의 특산품과 음식을 즐기실 수 있는 숍 에어리어. 기념품으로도 딱 맞는 다양한 상품이 준비되어 있습니다.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ways':
    if (empty($titlepage)) $titlepage = '楽しみ方｜SHONIN PARK';
    if (empty($desPage)) $desPage = '日帰りでも宿泊でも楽しめる「SHONIN PARK」の過ごし方をご提案。朝昼夜で異なる魅力を持つ公園で、あなたにぴったりの楽しみ方を見つけてください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'news':
    if (empty($titlepage)) $titlepage = 'ニュース・イベント｜SHONIN PARK';
    if (empty($desPage)) $desPage = '「SHONIN PARK」に関する最新ニュース・イベント情報をお届けします。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'info':
    if (empty($titlepage)) $titlepage = '施設情報｜SHONIN PARK';
    if (empty($desPage)) $desPage = '営業時間やアクセス、周辺観光やよくあるご質問まで、「SHONIN PARK」を訪れる前に知っておきたい情報をまとめました。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'contact':
    if (empty($titlepage)) $titlepage = 'お問い合わせ｜SHONIN PARK';
    if (empty($desPage)) $desPage = '「SHONIN PARK」の日帰り利用からご宿泊まで、ご不明点やご質問がございましたら、お気軽にお問い合わせください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'contact':
    if (empty($titlepage)) $titlepage = 'お問い合わせ｜SHONIN PARK';
    if (empty($desPage)) $desPage = '「SHONIN PARK」の日帰り利用からご宿泊まで、ご不明点やご質問がございましたら、お気軽にお問い合わせください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rule':
    if (empty($titlepage)) $titlepage = '利用規約｜SHONIN PARK';
    if (empty($desPage)) $desPage = '「SHONIN PARK」を安全に楽しんでいただくための利用規約をご案内。ご来園前にご確認をお願いいたします。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case '404':
    if (empty($titlepage)) $titlepage = '404エラー（Not Found）';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  default:
    if (empty($titlepage)) $titlepage = 'Default';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
}
