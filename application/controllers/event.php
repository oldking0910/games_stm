<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//
// 活動用頁面
//
class Event extends MY_Controller
{
	// 共用功能
	// 檢查電話號碼
	function _check_mobile_region($mobile)
	{
		// 886 台
		if(preg_match("/^8869\d{8}$/", $mobile) || preg_match("/^09\d{8}$/", $mobile))
			return 'tw';

		// 852 港
		if(preg_match("/^852[5-9]\d{7}$/", $mobile))
			return 'hk';

		// 853 澳
		if(preg_match("/^8536\d{7}$/", $mobile))
			return 'mo';

		return 'undefined';
	}

	// 粉絲按讚獎勵活動
	// 1.活動時間 2015/9/21 起
	function e01_fan_like()
	{
		$this->_init_layout()
				->view();
	}

	function e01_get_reward()
	{
		$this->_init_layout()
				->view();
	}

	function e01_success()
	{
		$this->_init_layout()
				->view();
	}

	// 取得序號
	function _e01_new_sn($uid)
	{
        $now = new DateTime();
        $ts = $now->format('Y-m-d H:i:s');
		$sqlstr = "UPDATE event_serial SET status=1,personal_id='{$uid}',create_time='{$ts}' WHERE id = (SELECT id from (SELECT id FROM event_serial WHERE event_id=2 and status=0 ORDER BY id LIMIT 1) as eid)";

		$res = $this->db->query($sqlstr);

		if($res != FALSE && $this->db->affected_rows() > 0)
		{
			return $this->_e01_get_sn($uid);
		}

		return false;
	}

	function _e01_get_sn($uid)
	{
		$query = $this->db->where("event_id", 2)->where("personal_id", $uid)->get("event_serial");
		if($query->num_rows() > 0)
		{
			return $query->row()->serial;
		}

		return false;
	}

	function e01_get_sn()
	{
		header('content-type:text/html; charset=utf-8');

		$uid = $this->input->post('uid');
		$sn = $this->_e01_get_sn($uid);
		if($sn == false)
		{
			$sn = $this->_e01_new_sn($uid);
		}

		if($sn != false)
		{
			die(json_message(array("message"=>"成功", "sn"=>$sn), true));
		}
		else
		{
			die(json_failure("因活動反應熱烈，活動序號暫時領取完畢，<br />補充完畢後會立即於粉絲團公布，請鎖定粉絲團的最新消息，再來領取貂蟬！"));
		}
	}

	// 預註冊活動
    // 1.事前登錄活動時間為2015/9/14(一) 0:00~ 2015/9/27(一)23:59。
	// 2. 序號保留至2015/12/31 23:59。
	// 3. 本活動需輸入正確之手機號碼，若為空號或無法使用將喪失獲獎資格。
	// 4. 一組E-MAIL/手機號碼僅可參加活動一次。
	// 5. 每個遊戲帳號僅能兌換一次事前登錄獎勵。
	function e02_register()
	{
		// 讀取活動資料
		//$event = $this->db->from("events")->where("id", 1)->where("game_id", "stm")->get();

		$this->_init_layout()
				//->set("event", $event)
				->view();
	}

	// 取得序號
	function _e02_new_sn($uid)
	{
        $now = new DateTime();
        $ts = $now->format('Y-m-d H:i:s');
		$sqlstr = "UPDATE event_serial SET status=1,uid={$uid},create_time='{$ts}' WHERE id = (SELECT id from (SELECT id FROM event_serial WHERE event_id=1 and status=0 ORDER BY id LIMIT 1) as eid)";

		$res = $this->db->query($sqlstr);

		if($res != FALSE && $this->db->affected_rows() > 0)
		{
			return $this->_e02_get_sn($uid);
		}

		return false;
	}

	function _e02_get_sn($uid)
	{
		$query = $this->db->where("event_id", 1)->where("uid", $uid)->get("event_serial");
		if($query->num_rows() > 0)
		{
			return $query->row()->serial;
		}

		return false;
	}

	function e02_result()
	{
		/*
		header('content-type:text/html; charset=utf-8');

		$account = $this->input->post('account');
		$pwd = $this->input->post("pwd");

		if(empty($account))
		{
			die(json_failure('E-Mail或行動電話未填寫'));
		}
		else if (empty($pwd) )
		{
			die(json_failure("請輸入密碼"));
		}

		$email = '';
		$mobile = '';
		if(filter_var($account, FILTER_VALIDATE_EMAIL))
		{
			$email = $account;
		}
		else if($this->_check_mobile_region($account) != 'undefined')
		{
			$mobile = $account;
		}
		else
		{
			die(json_failure('E-Mail或行動電話格式錯誤'));
		}
        
		$boolResult = $this->g_user->create_account($email, $mobile, $pwd);
		if ($boolResult==true)
		{
			$this->g_user->verify_account($email, $mobile, $pwd);
			$sn = $this->_e02_new_sn($this->g_user->uid);
			if($sn != false)
			{
				die(json_message(array("message"=>"成功", "action"=>"register", "sn"=>$sn), true));
			}
			else
			{
				die(json_message(array("message"=>"因活動反應熱烈，所有序號已發放完畢！<br/>您的預註冊活動序號，將於 CB 封閉測試當天，發送至您註冊會員時的 EMAIL 或手機簡訊。<br/>CB 封閉測試時間近期將會在官方粉絲團公佈，期待與您在《時空前線》同萌大亂鬥見面！")));
			}
		}
		else
		{
			die(json_failure($this->g_user->error_message));
		}
		*/
	}

	function e02_check_reward()
	{
		header('content-type:text/html; charset=utf-8');

		$account = $this->input->post('account');
		$pwd = $this->input->post("pwd");

		if(empty($account))
		{
			die(json_failure('電子郵件或行動電話未填寫'));
		}
		else if (empty($pwd) )
		{
			die(json_failure("請輸入密碼"));
		}

		$email = '';
		$mobile = '';
		if(filter_var($account, FILTER_VALIDATE_EMAIL))
		{
			$email = $account;
		}
		else
		{
			$mobile = $account;
		}

		$boolResult = $this->g_user->verify_account($email, $mobile, $pwd);
		if ($boolResult==true)
		{
			$sn = $this->_e02_get_sn($this->g_user->uid);
			if($sn != false)
			{
				die(json_message(array("message"=>"成功", "action"=>"check_reward", "sn"=>$sn), true));
			}
			else
			{
                // 若已建立帳號但尚未領取序號, 可直接獲得
				/*
                $sn = $this->_e02_new_sn($this->g_user->uid);
                if($sn != false)
                {
                    die(json_message(array("message"=>"成功", "action"=>"check_reward", "sn"=>$sn), true));
                }
                else
                {
                    die(json_message(array("message"=>"因活動反應熱烈，所有序號已發放完畢！<br/>您的預註冊活動序號，將另行發送至您註冊會員時的 EMAIL 或手機簡訊。<br/>期待與您在《時空前線》同萌大亂鬥見面！")));
                }
				*/
				die(json_failure("您的帳號未獲得獎勵序號！"));
			}
		}
		else
		{
			die(json_failure($this->g_user->error_message));
		}
	}
}
