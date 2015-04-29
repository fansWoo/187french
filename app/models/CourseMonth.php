<?php

class CourseMonth extends ObjDbBase
{

    public $month_courseid_Num = 0;
    public $uid_Num = 0;
    public $name_Str = '';
    public $pic_PicObjList;//照片類別列表
    public $content_Html = '';//網頁語言類別
    public $precautions_Str = '';//網頁語言類別
    public $price_Num = 0;
    public $class_ClassMetaList;//分類標籤類別列表
    public $prioritynum_Num = 0;
    public $coursetime1_Str = '';
    public $coursetime2_Str = '';
    public $updatetime_DateTime;
    public $status_Num = 1;
    public $db_name_Str = 'course_month';//填寫物件聯繫資料庫之名稱
    public $db_uniqueid_Str = 'month_courseid';//填寫物件聯繫資料庫之唯一ID
    public $db_field_Arr = array(//填寫資料庫欄位與本物件屬性之關係，前者為資料庫欄位，後者為屬性
        'month_courseid' => 'month_courseid_Num',
        'uid' => 'uid_Num',
        'name' => 'name_Str',
        'price' => 'price_Num',
        'coursetime1' => 'coursetime1_Str',
        'coursetime2' => 'coursetime2_Str',
        'picids' => array('pic_PicObjList', 'uniqueids_Str'),
        'classids' => array('class_ClassMetaList', 'uniqueids_Str'),
        'content' => 'content_Html',
        'precautions' => 'precautions_Str',
        'prioritynum' => 'prioritynum_Num',
        'updatetime' => array('updatetime_DateTime', 'datetime_Str'),
        'status' => 'status_Num'
    );
	
	public function construct($arg)
	{
        //引入引數並將空值的變數給予空值
        reset_null_arr($arg, ['month_courseid_Num', 'uid_Num', 'name_Str', 'picids_Str', 'picids_Arr', 'content_Str', 'price_Num', 'coursetime1_Str', 'coursetime2_Str', 'classids_Str', 'classids_Arr', 'prioritynum_Num', 'updatetime_Str', 'updatetime_inputtime_date_Str', 'updatetime_inputtime_time_Str', 'status_Num']);
        foreach($arg as $key => $value) ${$key} = $arg[$key];
        
        //將引數設為物件屬性，或將引數作為物件型屬性的建構值
        $this->set('month_courseid_Num', $month_courseid_Num);
        $this->set('uid_Num', $uid_Num);
        $this->set('name_Str', $name_Str);
        $this->set('content_Html', $content_Str);
        $this->set('coursetime1_Str', $coursetime1_Str);
        $this->set('coursetime2_Str', $coursetime2_Str);
        $this->set('price_Num', $price_Num);
        $this->set('prioritynum_Num', $prioritynum_Num);
        $this->set('status_Num', $status_Num);
        $this->set('class_ClassMetaList', [
            'classids_Str' => $classids_Str,
            'classids_Arr' => $classids_Arr
        ], 'ClassMetaList');
        $this->set('updatetime_DateTime', [
            'datetime_Str' => $updatetime_Str,
            'inputtime_date_Str' => $updatetime_inputtime_date_Str,
            'inputtime_time_Str' => $updatetime_inputtime_time_Str
        ], 'DateTimeObj');
        $this->set('pic_PicObjList', [
            'picids_Str' => $picids_Str,
            'picids_Arr' => $picids_Arr
        ], 'PicObjList');
        $this->set__uid_Num(['uid_Num' => $uid_Num]);
        
        return TRUE;
    }

    public function set__uid_Num($arg)
    {
        //引入引數並將空值的變數給予空值
        reset_null_arr($arg, ['uid_Num']);
        foreach($arg as $key => $value) ${$key} = $arg[$key];

        //若uid為空則以登入者uid作為本物件之預設uid
        if(empty($uid_Num) || empty($uid_Num))
        {
            $data['user'] = get_user();
            $uid_Num = $data['user']['uid'];
        }

        $this->uid_Num = $uid_Num;
    }
    
}