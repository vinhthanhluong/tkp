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
    if (empty($titlepage)) $titlepage = 'SHONIN PARK｜別府上人ヶ浜公園';
    if (empty($desPage)) $desPage = '日帰りでも楽しめるおしゃれな海浜砂湯・温泉やレストラン、ショップ、宿泊コテージなど多彩な体験ができる大分・別府観光の新名所「SHONIN PARK」。家族や友人、カップルで訪れ、朝昼夜で異なる楽しみ方ができるパーク＆リゾートです。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide':
    if (empty($titlepage)) $titlepage = '施設案内｜SHONIN PARK';
    if (empty($desPage)) $desPage = '日帰りでも楽しめる砂湯・温泉、おしゃれなレストランやショップ、宿泊コテージなど、大分・別府の魅力を詰め込んだ「SHONIN PARK」の施設をご紹介します。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'restaurant':
    if (empty($titlepage)) $titlepage = 'レストラン｜SHONIN PARK';
    if (empty($desPage)) $desPage = '別府湾を一望する絶好のロケーションで、本格ハワイアングリルを大分風にアレンジしたお料理を楽しめるレストラン。海風と陽気なハワイの雰囲気に包まれながら、特別なひとときをお過ごしください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'shop':
    if (empty($titlepage)) $titlepage = 'ショップ｜SHONIN PARK';
    if (empty($desPage)) $desPage = '別府・大分の特産品やグルメを楽しめるショップエリア。お土産にぴったりのアイテムも取り揃えています。';
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
