<?php
class Dynamic_model extends CI_Model {

    private $dynamicid = 0;
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
	
	public function construct($arg = array('dynamicid' => 0, 'uid' => 0, 'username' => '', 'title' => '', 'modelname' => '', 'pic' => '', 'content' => '', 'classid' => '', 'classid_array' => array(), 'viewnum' => 0, 'replynum' => 0, 'prioritynum' => 0, 'updatetime' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $dynamicid = isset($arg['dynamicid']) ? $arg['dynamicid'] : 0;
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
        $this->dynamicid = $dynamicid;
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
        $db_where['dynamic.dynamicid'] = $db_where2['dynamicid'];
        
		$this->db->from('dynamic');
		$this->db->join('dynamic_field', 'dynamic.dynamicid = dynamic_field.dynamicid', 'left');
		$this->db->where($db_where);
		$query = $this->db->get();
		$dynamic = $query->row_array();
        
        $this->construct(array(
            'dynamicid' => $dynamic['dynamicid'],
            'uid' => $dynamic['uid'],
            'username' => $dynamic['username'],
            'title' => $dynamic['title'],
            'modelname' => $dynamic['modelname'],
            'pic' => $dynamic['pic'],
            'content' => $dynamic['content'],
            'classid' => $dynamic['classid'],
            'viewnum' => $dynamic['viewnum'],
            'replynum' => $dynamic['replynum'],
            'prioritynum' => $dynamic['prioritynum'],
            'updatetime' => $dynamic['updatetime'],
            'status' => $dynamic['status']
        ));
    }
    
	public function get_array()
	{
        $dynamic['dynamicid'] = $this->dynamicid;
        $dynamic['username'] = $this->username;
        $dynamic['title'] = $this->title;
        $dynamic['modelname'] = $this->modelname;
        $dynamic['pic'] = $this->pic;
        $dynamic['uid'] = $this->uid;
        $dynamic['content'] = $this->content;
        $dynamic['content_html'] = $this->content_html;
        $dynamic['classid'] = $this->classid;
        $dynamic['classid_array'] = $this->classid_array;
        $dynamic['viewnum'] = $this->viewnum;
        $dynamic['replynum'] = $this->replynum;
        $dynamic['prioritynum'] = $this->prioritynum;
        $dynamic['updatetime'] = $this->updatetime;
        $dynamic['status'] = $this->status;
        
		return $dynamic;
	}
    
	public function update()
	{
        $dynamic2 = $this->get_array();
        
        if( isset($dynamic2['dynamicid']) && $dynamic2['dynamicid'] == 0 )
        {
            $dynamic2['dynamicid'] = $this->common_model->db_search_max( array('table_name' => 'dynamic', 'id_name' => 'dynamicid') ) + 1;
            $dynamic = array(
                'dynamicid' => $dynamic2['dynamicid'],
                'username' => $dynamic2['username'],
                'title' => $dynamic2['title'],
                'modelname' => $dynamic2['modelname'],
                'pic' => $dynamic2['pic'],
                'uid' => $dynamic2['uid'],
                'classid' => $dynamic2['classid'],
                'viewnum' => $dynamic2['viewnum'],
                'replynum' => $dynamic2['replynum'],
                'prioritynum' => $dynamic2['prioritynum'],
                'updatetime' => $dynamic2['updatetime'],
                'status' => $dynamic2['status']
            );
            
            $this->db->insert('dynamic', $dynamic); 
            
            $dynamic_field['dynamicid'] = $dynamic2['dynamicid'];
            $dynamic_field['content'] = $dynamic2['content'];
            
            $this->db->insert('dynamic_field', $dynamic_field);
        }
        else
        {
            $dynamic = array(
                'dynamicid' => $dynamic2['dynamicid'],
                'username' => $dynamic2['username'],
                'title' => $dynamic2['title'],
                'modelname' => $dynamic2['modelname'],
                'pic' => $dynamic2['pic'],
                'uid' => $dynamic2['uid'],
                'classid' => $dynamic2['classid'],
                'viewnum' => $dynamic2['viewnum'],
                'replynum' => $dynamic2['replynum'],
                'prioritynum' => $dynamic2['prioritynum'],
                'updatetime' => $dynamic2['updatetime'],
                'status' => $dynamic2['status']
            );
            
            $this->db->where(array('dynamicid' => $dynamic['dynamicid']));
            $this->db->update('dynamic', $dynamic);
            
            $dynamic_field['dynamicid'] = $dynamic2['dynamicid'];
            $dynamic_field['content'] = $dynamic2['content'];
            
            $this->db->where(array('dynamicid' => $dynamic_field['dynamicid']));
            $this->db->update('dynamic_field', $dynamic_field);
        }
    }
    
    public function hidden()
    {
        $dynamic_array = $this->get_array();

        $this->db->where( array('dynamicid' => $dynamic_array['dynamicid'] ) );
        $this->db->update('dynamic', array('status' => 0) ); 
    }
	
}