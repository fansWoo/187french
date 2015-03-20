<?php

load_class('ObjDbBase', 'models', '');//引入父類物件

class User extends ObjDbBase {

    public $uid_Num = 0;
    public $username_Str = '';
    public $email_Str = '';
    public $pic_PicObjList;//照片類別列表
    public $group_UserGroupList;//分類標籤類別列表
    public $updatetime_DateTime;
    public $status_Num = 1;
    public $db_name_Str = 'user';//填寫物件聯繫資料庫之名稱
    public $db_uniqueid_Str = 'uid';//填寫物件聯繫資料庫之唯一ID
    public $db_field_Arr = array(//填寫資料庫欄位與本物件屬性之關係，前者為資料庫欄位，後者為屬性
        'uid' => 'uid_Num',
        'username' => 'username_Str',
        'email' => 'email_Str',
        'picids' => array('pic_PicObjList', 'uniqueids_Str'),
        'groupids' => array('group_UserGroupList', 'uniqueids_Str'),
        'updatetime' => array('updatetime_DateTime', 'datetime_Str'),
        'status' => 'status_Num'
    );
	
	public function construct($arg)
	{
        
        //取得引數
        $uid_Num = !empty($arg['uid_Num']) ? $arg['uid_Num'] : 0;
        $uid_Num = !empty($arg['uid_Num']) ? $arg['uid_Num'] : 0;
        $username_Str = !empty($arg['username_Str']) ? $arg['username_Str'] : '';
        $email_Str = !empty($arg['email_Str']) ? $arg['email_Str'] : '';
        $picids_Str = !empty($arg['picids_Str']) ? $arg['picids_Str'] : '';
        $picids_Arr = !empty($arg['picids_Arr']) ? $arg['picids_Arr'] : array();
        $groupids_Str = !empty($arg['groupids_Str']) ? $arg['groupids_Str'] : '';
        $groupids_Arr = !empty($arg['groupids_Arr']) ? $arg['groupids_Arr'] : array();
        $updatetime_Str = !empty($arg['updatetime_Str']) ? $arg['updatetime_Str'] : '';
        $updatetime_inputtime_date_Str = !empty($arg['updatetime_inputtime_date_Str']) ? $arg['updatetime_inputtime_date_Str'] : '';
        $updatetime_inputtime_time_Str = !empty($arg['updatetime_inputtime_time_Str']) ? $arg['updatetime_inputtime_time_Str'] : '';
        $status_Num = !empty($arg['status_Num']) ? $arg['status_Num'] : 1;
        
        //建立PicObjList物件
        check_comma_array($picids_Str, $picids_Arr);
        $pic_PicObjList = $this->load->model('ObjList', nrnum());
        $pic_PicObjList->construct_db(array(
            'db_where_or_Arr' => array(
                'picid_Num' => $picids_Arr
            ),
            'db_from_Str' => 'pic',
            'model_name_Str' => 'PicObj',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));
        
        //建立UserGroupList物件
        check_comma_array($groupids_Str, $groupids_Arr);
        $group_UserGroupList = new ObjList();
        $group_UserGroupList->construct_db(array(
            'db_where_or_Arr' => array(
                'groupid_Num' => $groupids_Arr
            ),
            'model_name_Str' => 'UserGroup',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));

        //建立DateTime物件
        $updatetime_DateTime = new DateTimeObj();
        $updatetime_DateTime->construct(array(
            'datetime_Str' => $updatetime_Str,
            'inputtime_date_Str' => $updatetime_inputtime_date_Str,
            'inputtime_time_Str' => $updatetime_inputtime_time_Str
        ));
        
        //將建構方法所計算出的值存入此類別之屬性
        $this->uid_Num = $uid_Num;
        $this->username_Str = $username_Str;
        $this->email_Str = $email_Str;
        $this->pic_PicObjList = $pic_PicObjList;
        $this->group_UserGroupList = $group_UserGroupList;
        $this->updatetime_DateTime = $updatetime_DateTime;
        $this->status_Num = $status_Num;
        
        return TRUE;
    }
	
	public function login()
    {
	
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		
		$this->db->from('user');
		$this->db->where(array('email' => $email, 'password' => $password));
		$query = $this->db->get();
			
		if($query->num_rows() > 0)
		{
			$user = $query->result_array();
			$newdata = array(
				'uid'  => $user[0]['uid']
			);
			$this->session->set_userdata($newdata);
			return 'ok';
		}
		
		$query = $this->db->get_where('user', array('email' => $email));
		if($query->num_rows() > 0)
		{
			return '密碼輸入錯誤';
		}
		else
		{
			return '您輸入的電子郵件不存在';
		}
		
	}

    public function change_password($arg)
    {
        $password_Str = !empty($arg['password_Str']) ? $arg['password_Str'] : '';
        $password2_Str = !empty($arg['password2_Str']) ? $arg['password2_Str'] : '';

        if($password_Str !== $password2_Str)
        {
            return 'Please enter the password twice to confirm agreement';
        }

        if(!preg_match("/^([0-9A-Za-z]+)$/", $password_Str))
        {
            return 'Please enter a password consisting of letters and numbers';
        }

        if(strlen($password_Str) < 8 || strlen($password_Str) > 16)
        {
            return 'Please enter a password of 8-16 characters';
        }

        $password_md5_Str = md5($password_Str);

        $this->db->where('uid', $this->uid_Num);
        $this->db->update('user', array('password' => $password_md5_Str));

        $this->db->where('uid', $this->uid_Num);
        $this->db->update('user', array('password_key' => $password_Str));

        return TRUE;
    }
	
}