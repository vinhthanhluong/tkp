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
    if (empty($titlepage)) $titlepage = 'SHONIN PARK｜Beppu Shoningahama Park';
    if (empty($desPage)) $desPage = 'A stylish new destination in Beppu, Oita — SHONIN PARK offers beachside sand baths, hot springs, dining, shopping, and forest cottages. Enjoy a full day of fun with family, friends, or your partner in this seaside park and resort.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide':
    if (empty($titlepage)) $titlepage = 'Facilities｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Discover SHONIN PARK — a seaside destination in Beppu, Oita, offering beach sand baths, hot springs, stylish restaurants, shops, and forest cottages. A place to enjoy the best of Beppu, even on a day trip.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'restaurant':
    if (empty($titlepage)) $titlepage = 'Restaurant (Grill Takka)｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Grill Takka offers Hawaiian-inspired cuisine with a Oita twist, served in a cheerful setting overlooking Beppu Bay. Enjoy a relaxing moment with ocean breeze and cheerful island vibes.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide-spa':
    if (empty($titlepage)) $titlepage = 'Beppu Beach Sand Bath (Sand SPA)｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Relax at Beppu’s only beach sand bath & onsen, “Sand SPA.” Also open to day visitors, it offers a one-of-a-kind experience. Enjoy the soothing warmth of sand and hot springs as the area glows under evening lights.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya':
    if (empty($titlepage)) $titlepage = 'ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = 'ISHINOYA Beppu offers a tranquil forest cottage with views of Beppu Bay. Savor local cuisine, soak in sand baths and hot springs, and sleep soundly on premium bedding.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rooms':
    if (empty($titlepage)) $titlepage = 'Rooms｜ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = 'Choose from 23 rooms in 7 unique styles. Some rooms feature open-air baths with natural Beppu hot springs, offering a private and luxurious stay for families, couples, or groups.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-cuisine':
    if (empty($titlepage)) $titlepage = 'Dining｜ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = 'Enjoy exclusive breakfast and dinner with fresh, locally sourced ingredients. Let our seasonal flavors add richness to your Beppu experience.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-spa':
    if (empty($titlepage)) $titlepage = 'Sand Bath & Hot Spring｜ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = 'Relax your mind and body with traditional sand bathing and natural hot springs—an exceptional bath  experience only available at ISHINOYA Beppu.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-contact':
    if (empty($titlepage)) $titlepage = 'Contact｜ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = "For inquiries regarding your stay at ISHINOYA Beppu, please feel free to contact us—whether you're an individual guest or a corporate client.";
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-form':
    if (empty($titlepage)) $titlepage = 'Individual Inquiries｜ISHINOYA Beppu / Ishinoya Beppu';
    if (empty($desPage)) $desPage = "For individual guests with questions or concerns before booking, please don't hesitate to reach out. We’re happy to assist.";
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'shop':
    if (empty($titlepage)) $titlepage = 'Shops｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Discover local treats and gourmet gifts at our shop area. Find the perfect souvenirs from Beppu and Oita.';
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
