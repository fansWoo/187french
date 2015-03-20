<?php
class Contact_model extends CI_Model {

    private $contactid = 0;
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
	
	public function construct($arg = array('contactid' => 0, 'uid' => 0, 'username' => '', 'title' => '', 'modelname' => '', 'pic' => '', 'content' => '', 'classid' => '', 'classid_array' => array(), 'viewnum' => 0, 'replynum' => 0, 'prioritynum' => 0, 'updatetime' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $contactid = isset($arg['contactid']) ? $arg['contactid'] : 0;
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
        $this->contactid = $contactid;
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
        $db_where['contact.contactid'] = $db_where2['contactid'];
        
		$this->db->from('contact');
		$this->db->join('contact_field', 'contact.contactid = contact_field.contactid', 'left');
		$this->db->where($db_where);
		$query = $this->db->get();
		$contact = $query->row_array();
        
        $this->construct(array(
            'contactid' => $contact['contactid'],
            'uid' => $contact['uid'],
            'username' => $contact['username'],
            'title' => $contact['title'],
            'modelname' => $contact['modelname'],
            'pic' => $contact['pic'],
            'content' => $contact['content'],
            'classid' => $contact['classid'],
            'viewnum' => $contact['viewnum'],
            'replynum' => $contact['replynum'],
            'prioritynum' => $contact['prioritynum'],
            'updatetime' => $contact['updatetime'],
            'status' => $contact['status']
        ));
    }
    
	public function get_array()
	{
        $contact['contactid'] = $this->contactid;
        $contact['username'] = $this->username;
        $contact['title'] = $this->title;
        $contact['modelname'] = $this->modelname;
        $contact['pic'] = $this->pic;
        $contact['uid'] = $this->uid;
        $contact['content'] = $this->content;
        $contact['content_html'] = $this->content_html;
        $contact['classid'] = $this->classid;
        $contact['classid_array'] = $this->classid_array;
        $contact['viewnum'] = $this->viewnum;
        $contact['replynum'] = $this->replynum;
        $contact['prioritynum'] = $this->prioritynum;
        $contact['updatetime'] = $this->updatetime;
        $contact['status'] = $this->status;
        
		return $contact;
	}
    
	public function update()
	{
        $contact2 = $this->get_array();
        
        if( isset($contact2['contactid']) && $contact2['contactid'] == 0 )
        {
            $contact2['contactid'] = $this->common_model->db_search_max( array('table_name' => 'contact', 'id_name' => 'contactid') ) + 1;
            $contact = array(
                'contactid' => $contact2['contactid'],
                'username' => $contact2['username'],
                'title' => $contact2['title'],
                'modelname' => $contact2['modelname'],
                'pic' => $contact2['pic'],
                'uid' => $contact2['uid'],
                'classid' => $contact2['classid'],
                'viewnum' => $contact2['viewnum'],
                'replynum' => $contact2['replynum'],
                'prioritynum' => $contact2['prioritynum'],
                'updatetime' => $contact2['updatetime'],
                'status' => $contact2['status']
            );
            
            $this->db->insert('contact', $contact); 
            
            $contact_field['contactid'] = $contact2['contactid'];
            $contact_field['content'] = $contact2['content'];
            
            
        }
        else
        {
            $contact = array(
                'contactid' => $contact2['contactid'],
                'username' => $contact2['username'],
                'title' => $contact2['title'],
                'modelname' => $contact2['modelname'],
                'pic' => $contact2['pic'],
                'uid' => $contact2['uid'],
                'classid' => $contact2['classid'],
                'viewnum' => $contact2['viewnum'],
                'replynum' => $contact2['replynum'],
                'prioritynum' => $contact2['prioritynum'],
                'updatetime' => $contact2['updatetime'],
                'status' => $contact2['status']
            );
            
            $this->db->where(array('contactid' => $contact['contactid']));
            $this->db->update('contact', $contact);
            
            $contact_field['contactid'] = $contact2['contactid'];
            $contact_field['content'] = $contact2['content'];
            
        }
    }
    
    public function hidden()
    {
        $contact_array = $this->get_array();

        $this->db->where( array('contactid' => $contact_array['contactid'] ) );
        $this->db->update('contact', array('status' => 0) ); 
    }
	
}