<!--slider -->
<style>
.img_button {cursor:pointer;}
</style>
<div class="game-sliderout">
<ul class="game-slider">
<li><a href="https://www.facebook.com/stmlongeplay" target="_blank"><img src="<?=$game_url?>p/image/primary/1001_1366x398_01.jpg" /></a></li>
<li><a href="https://www.facebook.com/stmlongeplay/photos/a.1703613513202938.1073741828.1676319125932377/1708251929405763/?type=3&theater" target="_blank"><img src="<?=$game_url?>p/image/primary/1001_1366x398_04.jpg" /></a></li>
<li><a href="https://www.facebook.com/stmlongeplay/photos/a.1703613513202938.1073741828.1676319125932377/1707046619526294/?type=3&theater" target="_blank"><img src="<?=$game_url?>p/image/primary/1001_1366x398_02.jpg" /></a></li>
<li><a href="https://www.facebook.com/stmlongeplay/photos/a.1703613513202938.1073741828.1676319125932377/1706426199588336/?type=3&theater" target="_blank"><img src="<?=$game_url?>p/image/primary/0924_1366x398.jpg" /></a></li>
<li><a href="https://www.facebook.com/stmlongeplay?fref=ts" target="_blank"><img src="<?=$game_url?>p/image/primary/0921_1366x398.jpg" /></a></li>
</ul>
</div>

<div id="content">
	<div class="contenter">
	<ul class="icon">
	    <li><a href="<?=$game_url?>" title="LOGO"><img src="<?=$game_url?>p/image/content-logo.png" /></a></li>
	    <ul>
	      <li><img class="img_button" src="<?=$game_url?>p/image/content/btn01.png" onclick="javascript:location.href='<?=$longe_url?>payment?site=<?=$site?>'" /></li>
	      <li><img class="img_button" src="<?=$game_url?>p/image/content/btn02.png" onclick="javascript:location.href='https://www.facebook.com/notes/%E6%99%82%E7%A9%BA%E5%89%8D%E7%B7%9A-%E5%90%8C%E8%90%8C%E5%A4%A7%E4%BA%82%E9%AC%A5/%E6%99%82%E7%A9%BA%E5%89%8D%E7%B7%9A%E5%90%8C%E8%90%8C%E5%A4%A7%E4%BA%82%E9%AC%A5-%E5%84%B2%E5%80%BC%E7%89%88apk%E4%B8%8B%E8%BC%89%E6%95%99%E5%AD%B8/1708293432734946'" /></li>
	      <li><a href="http://d3w0akihbk2umg.cloudfront.net/MobiarkHeroStm-20150930full.apk"><img class="img_button" src="<?=$game_url?>p/image/content/btn03.png" /></a></li>
	    </ul>
	    <ul>
	        <li><img class="img_button" src="<?=$game_url?>p/image/content/btn04.png" onclick="leOpenDialog('時空前線','敬請期待！',leDialogType.MESSAGE)" /></li>
	        <li><img class="img_button" src="<?=$game_url?>p/image/content/btn05.png" onclick="javascript:location.href='https://play.google.com/store/apps/details?id=com.longe.ark.stm'" /></li>
<?
// 判斷是否為行動裝置, 電腦版才要顯示 QR Code
$useragent=$_SERVER['HTTP_USER_AGENT'];
$is_tablet = false;
$is_mobile = false;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
{
    $is_tablet = true;
}
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	$is_mobile = true;
}
if($is_tablet == true || $is_mobile == true):
?>
	        <li><a href="<?=$game_url?>" title="時空前線"><img src="<?=$game_url?>p/image/content/btn06.png" /></a></li>
<?
else:
?>
	        <li><a href="http://hyperurl.co/fthfe8?IQid=qr" title="時空前線" target="_blank"><img src="<?=$game_url?>p/image/content/btn07.png" /></a></li>
<?endif;?>
	    </ul>
	</ul>
	</div>
</div>
