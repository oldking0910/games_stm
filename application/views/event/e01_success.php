<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>《時空前線》 同萌大亂鬥</title>
<link href="/p/evt/01/css/reset.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/style.css" rel="stylesheet" type="text/css">
<link href="/p/evt/01/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=$longe_url?>p/css/default.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=$longe_url?>p/js/default.js"></script>
<script type="text/javascript">
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(document).ready(function()
{
	$.post("<?=$game_url?>event/e01_get_sn",
		{
			uid: getParameterByName('uid')
		},
		function(json)
		{
			if(json.status == 'success')
			{
				$('.important').html(json.sn);
			}
			else
			{
				leOpenDialog('注意', json.message, leDialogType.MESSAGE);
				$('.important').html('領取完啦！近期請鎖定粉絲團貂蟬回歸消息');
			}
		},
		'json'
	);
});
</script>
</head>

<body>
<div id="wrap">
<div class="step03">
<div class="box03 animated bounce">
<p>序號: <span class="important">讀取中...</span></p>
</div>
</div>
</div>
</body>
</html>
