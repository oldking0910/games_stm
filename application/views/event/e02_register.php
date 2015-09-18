<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>【時空前線】 同萌大亂鬥 - 神話‧歷史‧童話 時空奇姬all in one</title>
<link rel="shortcut icon" href="<?=$game_url?>p/img/favicon.png"/>
<!-- Open Graph -->          
<meta property="og:title" content="【時空前線】 同萌大亂鬥 - 神話‧歷史‧童話 時空奇姬all in one" />
<meta property="og:type" content="website" >
<meta property="og:description" content="事前登錄活動實施中！限量四星夏迎春立即拿！" />
<meta property="og:image" content="<?=$game_url?>p/evt/02/images/thumb_01.jpg" />
<meta property="og:image" content="<?=$game_url?>p/evt/02/images/thumb_02.jpg" />
<meta property="og:url" content="<?=$game_url?>event/e02_register" />
<!-- CSS --> 
<link href="<?=$game_url?>p/evt/02/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=$longe_url?>p/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?=$game_url?>p/evt/02/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=$game_url?>p/evt/02/css/mobile.css" media="screen and (max-width: 768px)">
<link href="<?=$game_url?>p/evt/02/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=$game_url?>p/evt/02/css/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=$game_url?>p/evt/02/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?=$game_url?>p/evt/02/css/slick-theme.css"/>
<!-- Scripts -->
<script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?=$longe_url?>p/js/jquery.form.js"></script>
<script type="text/javascript" src="<?=$longe_url?>p/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=$longe_url?>p/js/default.js"></script>
<script type="text/javascript" src="<?=$game_url?>p/evt/02/Scripts/scripts.ac.js"></script>
<script src="<?=$game_url?>p/evt/02/Scripts/jquery.lazyload.js"></script>
<!-- Colorbox -->
<script src="<?=$game_url?>p/evt/02/Scripts/jquery.colorbox.js"></script>
<!-- Slick -->
<script type="text/javascript" src="<?=$game_url?>p/evt/02/Scripts/slick.min.js"></script>
</head>
<body>

<div id="wrap">
<!-- Header -->
<div id="header">
<div id="logo">
<a href="https://177770.measurementapi.com/serve?action=click&publisher_id=177770&site_id=107644&destination_id=284284&my_campaign=gamewebsite0914_01" target="_blank"></a></div>
<div id="store">
<a href="https://177770.measurementapi.com/serve?action=click&publisher_id=177770&site_id=107644&destination_id=284284&my_campaign=gamewebsite0914_01" target="_blank"><img src="<?=$game_url?>p/evt/02/images/appicon.png" alt="App Icon"/></a>
<span><a class="inline" href="#inline_content"><img src="<?=$game_url?>p/evt/02/images/android.png" alt=""/></a>
<a class="inline" href="#inline_content"><img src="<?=$game_url?>p/evt/02/images/apk.png" alt="APK下載"/></a></span></div>
</div>
<!-- Header End -->

<div id="container" class="clearfix">
<!-- Content -->
<form id="register_form" method="post" action="/event/e02_result">
<ul id="form">
<li><img src="<?=$game_url?>p/evt/02/images/title-01.png" alt="01"/>按讚加入 <a href="https://177770.measurementapi.com/serve?action=click&publisher_id=177770&site_id=107644&destination_id=284282&my_campaign=reservation_0914_01" target="_blank"><span class="important">時空前線</span></a> 粉絲團
<!-- FB Like -->
<iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/stmlongeplay&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
</li>
<li><img src="<?=$game_url?>p/evt/02/images/title-02.png" alt="02"/>輸入E-MAIL或手機號碼成為會員
<input type="text" name="account" class="required" placeholder="輸入E-MAIL或手機號碼" /></li>
<li><img src="<?=$game_url?>p/evt/02/images/title-03.png" alt="03"/>輸入 / 設定會員密碼
<input type="password" name="pwd" class="required" placeholder="會員密碼" /></li>
<li class="btn form_steps">
<input name="doSubmit" type="submit" id="doSubmit" value="" style="display:none;" />
<img style="cursor:pointer;" src="<?=$game_url?>p/evt/02/images/pre-btn.png" onclick="OnClickRegister();" alt="立即預約" /><img style="cursor:pointer;" src="<?=$game_url?>p/evt/02/images/query-btn.png" onclick="OnClickCheckReward();" alt="獎勵查詢"/>
</li>
<li class="register_reward" style="display:none;font-size:2em;text-align:center;">獎勵序號: <span id="reward_sn" class="important"></span></li>
</ul>
</form>

<p id="reward" class="revealOnScroll image" data-animation="tada"><img src="<?=$game_url?>p/evt/02/images/reward.png" alt="事前登錄活動限定‧夏迎春，還不快入手喵～"/></p>

<div class="slider center">
<a class="group1" href="<?=$game_url?>p/evt/02/images/screen-02.jpg" title="遊戲特色"><img src="<?=$game_url?>p/evt/02/images/screen-02.jpg" alt=""/></a>
<a class="group1" href="<?=$game_url?>p/evt/02/images/screen-03.jpg" title="遊戲特色"><img src="<?=$game_url?>p/evt/02/images/screen-03.jpg" alt=""/></a>
<a class="group1" href="<?=$game_url?>p/evt/02/images/screen-05.jpg" title="遊戲特色"><img src="<?=$game_url?>p/evt/02/images/screen-05.jpg" alt=""/></a>
</div>

<div id="store">
<a href="https://177770.measurementapi.com/serve?action=click&publisher_id=177770&site_id=107644&destination_id=284284&my_campaign=gamewebsite0914_01" target="_blank"><img src="<?=$game_url?>p/evt/02/images/appicon.png" alt="App Icon"/></a>
<span><a class="inline" href="#inline_content"><img src="<?=$game_url?>p/evt/02/images/android.png" alt=""/></a>
<a class="inline" href="#inline_content"><img src="<?=$game_url?>p/evt/02/images/apk.png" alt="APK下載"/></a></span></div>

<ul id="notice">
<img src="<?=$game_url?>p/evt/02/images/title-04.png" alt="注意事項"/>
<li>事前登錄活動時間為 2015/9/15(二) 12:00~ 2015/9/27(日)23:59。</li>
<li>序號保留至 2015/12/31 23:59。</li>
<li>本活動需輸入正確之E-MAIL或手機號碼，若為無法使用或空號將喪失獲獎資格。</li>
<li>一組E-MAIL/手機號碼僅可參加活動一次。</li>
<li>每個遊戲帳號僅能兌換一次事前登錄獎勵。</li>
<li>活動序號不得轉換、轉讓及折換現金。</li>
<li>預註冊活動序號，可於 CB 封閉測試起至遊戲內兌換，詳細 CB 封閉測試時間，近期將會在官方粉絲團公佈，期待與您在《時空前線》同萌大亂鬥見面！</li>
<li>官方保留活動隨時修改條款的權利，如有任何爭議，皆以主辦單位之解釋及本活動的最終決策權為準。</li>
<li>如本活動因不可抗力之特殊原因無法執行時，主辦單位有權決定取消、終止、修改或暫停本活動。</li>
<li>本活動之所有物品均不得要求官方轉換、轉讓、折換現金或遊戲道具、貨幣。</li>
<li>若有活動相關問題，<a href="<?=$longe_url?>service?site=stm" target="_blank">請至《官網》客服中心回報</a>。</li>
</ul>

<!-- Content End-->
<div id="back"><a href="#" onclick="backTop(); return false"></a></div>
</div>
</div>

<div id="footer"></div>

<!-- This contains the hidden content for inline calls -->
<div style="display:none">
<div id="inline_content">
<p><strong>敬請期待。</strong></p>
</div>
</div>

</body>
</html>