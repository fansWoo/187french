<?php
class Mailbase_model extends CI_Model {

    private $mailbaseid = 0;
    private $username = '';
    private $title = '';
    private $uid = 0;
    private $pic = '';
    private $content = '';
    private $content_html = '';
    private $classid = '';
    private $classid_array = array();
    private $modelname = '';
    private $viewnum = 0;
    private $replynum = 0;
    private $prioritynum = 0;
    private $updatetime = 0;
    private $status = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('mailbaseid' => 0, 'uid' => 0, 'username' => '', 'title' => '', 'modelname' => '', 'pic' => '', 'content' => '', 'classid' => '', 'classid_array' => array(), 'viewnum' => 0, 'replynum' => 0, 'prioritynum' => 0, 'updatetime' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $mailbaseid = isset($arg['mailbaseid']) ? $arg['mailbaseid'] : 0;
        $uid = isset($arg['uid']) ? $arg['uid'] : 0;
        $username = isset($arg['username']) ? $arg['username'] : '';
        $title = isset($arg['title']) ? $arg['title'] : '';
        $modelname = isset($arg['modelname']) ? $arg['modelname'] : '';
        $pic = isset($arg['pic']) ? $arg['pic'] : '';
        $content = empty($arg['content']) ? '' : $arg['content'];
        $classid = isset($arg['classid']) ? $arg['classid'] : '';
        $classid_array = isset($arg['classid_array']) ? $arg['classid_array'] : array();
        $viewnum = isset($arg['viewnum']) && $arg['viewnum'] != 0 ? $arg['viewnum'] : 0;
        $replynum = isset($arg['replynum']) && $arg['replynum'] != 0 ? $arg['replynum'] : 0;
        $prioritynum = isset($arg['prioritynum']) && $arg['prioritynum'] != 0 ? $arg['prioritynum'] : 0;
        $updatetime = isset($arg['updatetime']) ? $arg['updatetime'] : 0;
        $status = isset($arg['status']) ? $arg['status'] : 1;
        
        //uid
        if(isset($uid) == FALSE || $uid == 0)
        {
            $uid = $data['user']['uid'];
        }
        
        //classid運算
        if(isset($classid) == TRUE && $classid != '' && count($classid_array) == 0)
        {
            $classid_array = explode(',', $classid);
        }
        
        $classid_array2 = $classid_array;
        $classid_set_array = array();
        foreach($classid_array2 as $key => $value)
        {
            if($value == 0 || in_array($value, $classid_set_array))
            {
                unset($classid_array[$key]);
            }
            $classid_set_array[] = $value;
        }
        $classid = implode(',', $classid_array);
        $classid_array = explode(',', $classid);
        
        //content_html
        $content_html = html_code_replace(array('text' => $content, 'nl2br' => TRUE, 'meta_img' => TRUE));
        
        //set
        $this->mailbaseid = $mailbaseid;
        $this->username = $username;
        $this->title = $title;
        $this->modelname = $modelname;
        $this->pic = $pic;
        $this->uid = $uid;
        $this->content = $content;
        $this->content_html = $content_html;
        $this->classid = $classid;
        $this->classid_array = $classid_array;
        $this->viewnum = $viewnum;
        $this->replynum = $replynum;
        $this->prioritynum = $prioritynum;
        $this->updatetime = $updatetime;
        $this->status = $status;
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array() ) )
    {
        $db_where2 = isset($arg['db_where']) ? $arg['db_where'] : array();
        $db_where['mailbase.mailbaseid'] = $db_where2['mailbaseid'];
        
		$this->db->from('mailbase');
		$this->db->join('mailbase_field', 'mailbase.mailbaseid = mailbase_field.mailbaseid', 'left');
		$this->db->where($db_where);
		$query = $this->db->get();
		$mailbase = $query->row_array();
        
        $this->construct(array(
            'mailbaseid' => $mailbase['mailbaseid'],
            'uid' => $mailbase['uid'],
            'username' => $mailbase['username'],
            'title' => $mailbase['title'],
            'modelname' => $mailbase['modelname'],
            'pic' => $mailbase['pic'],
            'content' => $mailbase['content'],
            'classid' => $mailbase['classid'],
            'viewnum' => $mailbase['viewnum'],
            'replynum' => $mailbase['replynum'],
            'prioritynum' => $mailbase['prioritynum'],
            'updatetime' => $mailbase['updatetime'],
            'status' => $mailbase['status']
        ));
    }
    
	public function get_array()
	{
        $mailbase['mailbaseid'] = $this->mailbaseid;
        $mailbase['username'] = $this->username;
        $mailbase['title'] = $this->title;
        $mailbase['modelname'] = $this->modelname;
        $mailbase['pic'] = $this->pic;
        $mailbase['uid'] = $this->uid;
        $mailbase['content'] = $this->content;
        $mailbase['content_html'] = $this->content_html;
        $mailbase['classid'] = $this->classid;
        $mailbase['classid_array'] = $this->classid_array;
        $mailbase['viewnum'] = $this->viewnum;
        $mailbase['replynum'] = $this->replynum;
        $mailbase['prioritynum'] = $this->prioritynum;
        $mailbase['updatetime'] = $this->updatetime;
        $mailbase['status'] = $this->status;
        
		return $mailbase;
	}
    
	public function update()
	{
        $mailbase2 = $this->get_array();
        
        if( isset($mailbase2['mailbaseid']) && $mailbase2['mailbaseid'] == 0 )
        {
            $mailbase2['mailbaseid'] = $this->common_model->db_search_max( array('table_name' => 'mailbase', 'id_name' => 'mailbaseid') ) + 1;
            $mailbase = array(
                'mailbaseid' => $mailbase2['mailbaseid'],
                'username' => $mailbase2['username'],
                'title' => $mailbase2['title'],
                'modelname' => $mailbase2['modelname'],
                'pic' => $mailbase2['pic'],
                'uid' => $mailbase2['uid'],
                'classid' => $mailbase2['classid'],
                'viewnum' => $mailbase2['viewnum'],
                'replynum' => $mailbase2['replynum'],
                'prioritynum' => $mailbase2['prioritynum'],
                'updatetime' => $mailbase2['updatetime'],
                'status' => $mailbase2['status']
            );
            
            $this->db->insert('mailbase', $mailbase); 
            
            $mailbase_field['mailbaseid'] = $mailbase2['mailbaseid'];
            $mailbase_field['content'] = $mailbase2['content'];
            
            $this->db->insert('mailbase_field', $mailbase_field);
        }
        else
        {
            $mailbase = array(
                'mailbaseid' => $mailbase2['mailbaseid'],
                'username' => $mailbase2['username'],
                'title' => $mailbase2['title'],
                'modelname' => $mailbase2['modelname'],
                'pic' => $mailbase2['pic'],
                'uid' => $mailbase2['uid'],
                'classid' => $mailbase2['classid'],
                'viewnum' => $mailbase2['viewnum'],
                'replynum' => $mailbase2['replynum'],
                'prioritynum' => $mailbase2['prioritynum'],
                'updatetime' => $mailbase2['updatetime'],
                'status' => $mailbase2['status']
            );
            
            $this->db->where(array('mailbaseid' => $mailbase['mailbaseid']));
            $this->db->update('mailbase', $mailbase);
            
            $mailbase_field['mailbaseid'] = $mailbase2['mailbaseid'];
            $mailbase_field['content'] = $mailbase2['content'];
            
            $this->db->where(array('mailbaseid' => $mailbase_field['mailbaseid']));
            $this->db->update('mailbase_field', $mailbase_field);
        }
    }
    
    public function hidden()
    {
        $mailbase_array = $this->get_array();

        $this->db->where( array('mailbaseid' => $mailbase_array['mailbaseid'] ) );
        $this->db->update('mailbase', array('status' => 0) ); 
    }
	
}