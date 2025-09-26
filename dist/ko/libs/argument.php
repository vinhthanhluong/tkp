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
    if (empty($desPage)) $desPage = '日帰りでも楽しめるおしゃれな別府海浜砂湯・温泉やレストラン、ショップ、宿泊コテージなど多彩な体験ができる大分・別府観光の新名所「SHONIN PARK」。家族や友人、カップルで訪れ、朝昼夜で異なる楽しみ方ができるパーク＆リゾートです。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide':
    if (empty($titlepage)) $titlepage = '施設案内｜SHONIN PARK';
    if (empty($desPage)) $desPage = '日帰りでも楽しめる別府海浜砂湯・温泉、おしゃれなレストランやショップ、宿泊コテージなど、大分・別府の魅力を詰め込んだ「SHONIN PARK」の施設をご紹介します。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'restaurant':
    if (empty($titlepage)) $titlepage = 'レストラン（Grill Takka）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '別府湾を一望する絶好のロケーションで、本格ハワイアングリルを大分風にアレンジしたお料理を楽しめるレストラン「Grill Takka」。海風と陽気なハワイの雰囲気に包まれながら、特別なひとときをお過ごしください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide-spa':
    if (empty($titlepage)) $titlepage = '別府海浜砂湯（Sand SPA）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '別府唯一の海浜砂湯・温泉「Sand SPA」日帰りでも楽しめる癒しの空間は、夜のライトアップで幻想的な雰囲気に包まれます。海風を感じながら、ここでしか味わえない贅沢なリラクゼーションを。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya':
    if (empty($titlepage)) $titlepage = 'ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '緑豊かな森林と別府湾の美しい景色に囲まれた宿泊コテージ「ISHINOYA 別府 / 石のや 別府」。地元食材にこだわったお料理や砂湯・温泉、快眠を追求したベッドで、寛ぎのひとときを提供いたします。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rooms':
    if (empty($titlepage)) $titlepage = 'お部屋｜ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '全7種・23室のお部屋タイプをご用意。露天風呂付客室では、プライベートな時間と別府温泉の源泉をひとり占め。家族や友人、カップルで贅沢なひとときをお過ごしください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-cuisine':
    if (empty($titlepage)) $titlepage = 'お食事｜ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '宿泊者限定の朝食・夕食をご用意。地元の新鮮な食材を使ったお料理で、別府旅行の思い出に彩りを添えます。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-spa':
    if (empty($titlepage)) $titlepage = '温泉・砂湯｜ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '別府ならではの伝統的な砂湯と天然温泉で、心も体も癒される贅沢なひとときを。「ISHINOYA 別府 / 石のや 別府」でしか味わえない、上質な湯浴体験をお楽しみください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-contact':
    if (empty($titlepage)) $titlepage = 'お問い合わせ｜ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '「ISHINOYA 別府 / 石のや 別府」へのご宿泊に関するご質問・ご相談はこちら。個人・法人問わず、お気軽にお問い合わせください。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-form':
    if (empty($titlepage)) $titlepage = '個人のお客様のお問い合わせ｜ISHINOYA 別府 / 石のや 別府';
    if (empty($desPage)) $desPage = '個人のお客様の「ISHINOYA 別府 / 石のや 別府」へのご宿泊に関するお問い合わせはこちら。ご予約前のご相談やご不明点もお気軽にご連絡ください。';
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
