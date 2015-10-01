<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>《時空前線》 同萌大亂鬥</title>
<link href="/p/evt/01/css/reset.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/style.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/animate.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- Swap img -->
<script type="text/javascript">
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

OnGetReward = function () {}

$(document).ready(function()
{
	$("img.rollover").hover(
	function() { this.src = this.src.replace("_off", "_on");
	},
	function() { this.src = this.src.replace("_on", "_off");
	});

	$.getScript('//connect.facebook.net/zh_TW/sdk.js', function()
	{
		FB.init({
			appId: '468528283307804',
			version: 'v2.4'
		});

		FB.api('/me', { 'access_token': getParameterByName('token') }, function(response)
		{
        	document.getElementById("wrap").style.display = 'block';

			OnGetReward = function()
			{
				location.href = '<?=$game_url?>event/e01_success?uid=' + response.id;
			}
		});
	});
});
</script>
</head>

<body>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-65559425-2', 'auto');
ga('send', 'pageview');
	
ga('create', 'UA-65559425-1', 'auto', {'name': 'stmTracker'});
ga('stmTracker.send', 'pageview');
</script>
<div id="wrap" style="display:none">
<div class="step02">
<div class="box02 animated bounce">
<a href="javascript:OnGetReward()"><img class="rollover" src="/p/evt/01/img/box_02_btn_on.png"/></a></div>
</div>
</div>
</body>
</html>
