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
    if (empty($titlepage)) $titlepage = 'SHONIN PARK｜別府上人之浜公園';
    if (empty($desPage)) $desPage = '大分·别府观光的新名胜“SHONIN PARK”，在这里有一日游也可享受的时尚别府海滨沙浴和温泉，还有餐厅、商店、住宿度假屋等丰富多彩的体验。这里是可以和家人、朋友、情侣一起到访，早中晚享受不同乐趣的公园和度假村。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide':
    if (empty($titlepage)) $titlepage = '设施指南｜SHONIN PARK';
    if (empty($desPage)) $desPage = '向您介绍一日游也可享受的别府海滨沙浴和温泉、时尚的餐厅和商店、住宿度假屋等，充满大分·别府魅力的“SHONIN PARK”各设施。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'restaurant':
    if (empty($titlepage)) $titlepage = '餐厅 （Grill Takka）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '餐厅“Grill Takka”，位于可眺望别府湾的绝好位置。设有可以品尝到融入大分风格的正宗夏威夷烧烤。在海风和欢快的夏威夷氛围中度过特别的时光。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'guide-spa':
    if (empty($titlepage)) $titlepage = '別府海滨沙浴（Sand SPA）｜SHONIN PARK';
    if (empty($desPage)) $desPage = '别府唯一的海滨沙浴和温泉“Sand SPA”，一日游也可享受的治愈的空间，置身于被夜晚的灯光所包围的幻想气氛中。一边感受着海风，一边享受着唯有在此才能体验到的奢侈放松时光。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya':
    if (empty($titlepage)) $titlepage = 'ISHINOYA 別府 / 石屋 別府';
    if (empty($desPage)) $desPage = '被绿意盎然的森林和别府湾美丽景色所包围的住宿度假屋“ISHINOYA别府/石屋 别府”。为您提供讲究当地食材的料理、沙浴、温泉，在易于睡眠的床铺，尽享放松时光。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rooms':
    if (empty($titlepage)) $titlepage = '客房｜ISHINOYA 別府 / 石屋 別府';
    if (empty($desPage)) $desPage = '设有7种各式房型，共23间客房，在配有露天浴池的客房中，独享别府温泉的源泉，尽享私密时光。请在被非日常包围的空间里度过奢侈的时光。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-cuisine':
    if (empty($titlepage)) $titlepage = '餐饮｜ISHINOYA 別府 / 石屋  別府';
    if (empty($desPage)) $desPage = '为住宿者专门准备的早餐和晚餐。使用当地新鲜食材制作的料理，为别府旅行的回忆增添色彩。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-spa':
    if (empty($titlepage)) $titlepage = '温泉和沙浴｜ISHINOYA 別府 / 石屋 別府';
    if (empty($desPage)) $desPage = '在别府特有的传统沙浴和天然温泉，度过身心都被治愈的奢侈时光。唯有在“ISHINOYA  別府 / 石屋 別府”才能享受到的优质温泉浴体验。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-contact':
    if (empty($titlepage)) $titlepage = '咨询｜ISHINOYA 別府 / 石屋  別府';
    if (empty($desPage)) $desPage = '与“ISHINOYA  别府/石屋 别府“住宿的相关的提问和咨询请点击这里。无论个人还是公司，敬请随时咨询。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ishinoya-form':
    if (empty($titlepage)) $titlepage = '个人咨询｜ISHINOYA 別府 / 石屋  別府';
    if (empty($desPage)) $desPage = '个人对”ISHINOYA 別府 / 石屋  別府“有关住宿的咨询，请点击这里。预约前的咨询或有不明事宜，敬请随时联系我们。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'shop':
    if (empty($titlepage)) $titlepage = '商饮区｜SHONIN PARK';
    if (empty($desPage)) $desPage = '可以享受别府·大分特产和美食的区域。也准备了适合作为特产的商品。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'ways':
    if (empty($titlepage)) $titlepage = '游玩指南｜SHONIN PARK';
    if (empty($desPage)) $desPage = '向您推荐无论一日游还是住宿，都可以尽享「SHONIN PARK」的游玩指南。请探寻在拥有早中晚不同魅力的公园，最适合自己的尽情游乐的方法吧。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'news':
    if (empty($titlepage)) $titlepage = '最新动态与活动｜SHONIN PARK';
    if (empty($desPage)) $desPage = '为您介绍「SHONIN PARK」相关的最新动态和活动信息。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'info':
    if (empty($titlepage)) $titlepage = '设施信息｜SHONIN PARK';
    if (empty($desPage)) $desPage = '为您整理了到访“SHONIN PARK”前需了解的营业时间、交通指南、周边观光和常见问题等信息。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'contact':
    if (empty($titlepage)) $titlepage = '咨询｜SHONIN PARK';
    if (empty($desPage)) $desPage = '关于“SHONIN PARK”一日游和住宿的不明之处，敬请随时咨询。';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case 'rule':
    if (empty($titlepage)) $titlepage = '使用条款｜SHONIN PARK';
    if (empty($desPage)) $desPage = '为了您能够安全地在SHONIN PARK游玩，向您介绍使用条款。烦请您在来园前确认。';
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
