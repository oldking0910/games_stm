<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>《時空前線》 同萌大亂鬥</title>
<link href="/p/evt/01/css/reset.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/style.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/animate.css" rel="stylesheet" type="text/css">
<script>
function fbLogin()
{
	FB.getLoginStatus(function(response)
	{
        if(response.status === 'connected')
		{
			location.href = '<?=$game_url?>event/e01_get_reward?token=' + response.authResponse.accessToken;
		}
		else
		{
            document.getElementById("content").style.display = 'block';

			document.getElementById("btnContinue").addEventListener("click", function()
			{
				FB.login(function(response)
				{
			        if(response.status === 'connected')
					{
						location.href = '<?=$game_url?>event/e01_get_reward?token=' + response.authResponse.accessToken;
					}
				}, {scope: 'public_profile,email'});
			});

			document.getElementById("btnSkip").addEventListener("click", function()
			{
				FB.login(function(response)
				{
			        if(response.status === 'connected')
					{
						location.href = '<?=$game_url?>event/e01_get_reward';
					}
				}, {scope: 'public_profile,email'});
			});
		}
	});
}
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
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '468528283307804',
      xfbml      : true,
      version    : 'v2.4'
    });

    fbLogin();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/zh_TW/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="content" style="display:none;">
<div id="wrap">
<div id="optionallike">
<div class="skip">Skip</div> <span class="divide">or</span> Click Like above then <div id="btnContinue" target="_self" class="btn continue"><i></i> Continue</div>
</div>
<div class="step01">
<div class="box01 animated swing"></div>
</div>
</div>
</div>
</body>
</html>
