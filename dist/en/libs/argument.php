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
    if (empty($titlepage)) $titlepage = 'Ways to Enjoy｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Enjoy SHONIN PARK for a day or overnight stay. From morning to night, discover unique charms and the perfect way to spend your time.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'news':
    if (empty($titlepage)) $titlepage = 'News & Events｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'Stay up to date with the latest news and event information from SHONIN PARK.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'info':
    if (empty($titlepage)) $titlepage = 'Facility Info｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'All you need to know before visiting SHONIN PARK—including opening hours, access, nearby attractions, and FAQs.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'contact':
    if (empty($titlepage)) $titlepage = 'Contact｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'For any questions about visiting or staying at SHONIN PARK, feel free to contact us.';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rule':
    if (empty($titlepage)) $titlepage = 'Terms of Use｜SHONIN PARK';
    if (empty($desPage)) $desPage = 'To ensure a safe and pleasant experience at SHONIN PARK, please review our Terms of Use before your visit.';
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
