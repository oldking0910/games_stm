<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platform extends MY_Controller
{
	function index()
	{		
		$this->_init_layout()->standard_view("index");
	}

	// 粉絲團轉址用 Page Tab
	function facebook_page($tab)
	{
		header('content-type:text/html; charset=utf-8');
		
		if($tab == "tab1")
		{
			// APK 下載
			echo "<script>window.top.location.href='http://d3w0akihbk2umg.cloudfront.net/MobiarkHeroStm-20150930full.apk'</script>";
		}
		else if($tab == "tab2")
		{
			// 下載教學
			echo "<script>window.top.location.href='https://www.facebook.com/notes/%E6%99%82%E7%A9%BA%E5%89%8D%E7%B7%9A-%E5%90%8C%E8%90%8C%E5%A4%A7%E4%BA%82%E9%AC%A5/%E6%99%82%E7%A9%BA%E5%89%8D%E7%B7%9A%E5%90%8C%E8%90%8C%E5%A4%A7%E4%BA%82%E9%AC%A5-%E5%84%B2%E5%80%BC%E7%89%88apk%E4%B8%8B%E8%BC%89%E6%95%99%E5%AD%B8/1708293432734946'</script>";
		}
	}
	
	function send_ob_mail()
	{
		$target_count = $this->input->post('target_count');
		if(empty($target_count))
			die();
		
		$this->load->library("g_send_mail");

		for($cnt1 = 0; $cnt1 < $target_count; $cnt1++)
		{
			$this->g_send_mail->send_view($this->input->post('target'.$cnt1),
											"《時空前線》Android上市！立即下載領取四星夏迎春！",
											"mail/e02_register",
											array(),
											array("headerimg" => FCPATH."/p/image/mail/header.jpg"));
		}
	}
}
