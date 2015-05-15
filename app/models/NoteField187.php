<?php

class NoteField187 extends NoteField
{

    public $signup_Num = 0;
    public $db_name_Arr = array('note', 'note_field');//填寫物件聯繫資料庫之名稱
    public $db_uniqueid_Str = 'noteid';//填寫物件聯繫資料庫之唯一ID
    public $db_field_Arr = array(//填寫資料庫欄位與本物件屬性之關係，前者為資料庫欄位，後者為屬性
        'noteid' => 'noteid_Num',
        'note.uid' => 'uid_Num',
        'note.username' => 'username_Str',
        'note.title' => 'title_Str',
        'note.picids' => array('pic_PicObjList', 'uniqueids_Str'),
        'note.classids' => array('class_ClassMetaList', 'uniqueids_Str'),
        'note.modelname' => 'modelname_Str',
        'note.viewnum' => 'viewnum_Num',
        'note.signup' => 'signup_Num',
        'note.replynum' => 'replynum_Num',
        'note.prioritynum' => 'prioritynum_Num',
        'note.updatetime' => array('updatetime_DateTime', 'datetime_Str'),
        'note.status' => 'status_Num',
        'note_field.content' => 'content_Html'
    );
    
    public function construct($arg)
    {
        parent::construct($arg);

        //引入引數並將空值的變數給予空值
        reset_null_arr($arg, ['signup_Num']);
        foreach($arg as $key => $value) ${$key} = $arg[$key];

        $this->set('signup_Num', $signup_Num);

        return TRUE;
    }
    
}