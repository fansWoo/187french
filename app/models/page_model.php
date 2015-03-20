<?php
class Page_model extends CI_Model {

    private $pageid = 0;
    private $uid = 0;
    private $title = '';
    private $href = '';
    private $picid = '';
    private $piclist_array = array();
    private $content = '';
    private $content_html = '';
    private $classid = '';
    private $classid_array = array();
    private $prioritynum = 0;
    private $status = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('pageid' => 0, 'uid' => 0, 'title' => '', 'href' => '', 'picid' => '', 'picid_array' => array(), 'content' => '', 'classid' => '', 'classid_array' => array(), 'prioritynum' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $pageid = !empty($arg['pageid']) ? $arg['pageid'] : 0;
        $uid = !empty($arg['uid']) ? $arg['uid'] : 0;
        $title = !empty($arg['title']) ? $arg['title'] : '';
        $href = !empty($arg['href']) ? $arg['href'] : '';
        $picid = !empty($arg['picid']) ? $arg['picid'] : '';
        $picid_array = !empty($arg['picid_array']) ? $arg['picid_array'] : array();
        $content = empty($arg['content']) ? '' : $arg['content'];
        $classid = !empty($arg['classid']) ? $arg['classid'] : '';
        $classid_array = !empty($arg['classid_array']) ? $arg['classid_array'] : array();
        $prioritynum = !empty($arg['prioritynum']) && $arg['prioritynum'] != 0 ? $arg['prioritynum'] : 0;
        $status = !empty($arg['status']) ? $arg['status'] : 1;
        
        //uid
        if(!empty($uid) == FALSE || $uid == 0)
        {
            $uid = $data['user']['uid'];
        }
        
        //classid運算
        if( !empty($classid) && count($classid_array) == 0)
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
        
        //picid運算
        if(!empty($picid))
        {
            $picid_array = explode(',', $picid);
        }
        
        $picid_array2 = $picid_array;
        $picid_set_array = array();
        foreach($picid_array2 as $key => $value)//運算重複的ID
        {
            if($value == 0 || in_array($value, $picid_set_array) )
            {
                unset($picid_array[$key]);
            }
            $picid_set_array[] = $value;
        }
        if(is_array($picid_array))
        {
            $picid = implode(',', $picid_array);
        }
        
        //picid
        $model_name = 'pic_list_model'.rand(0, 32767);
        $this->load->model('pic_list_model', $model_name);
        $this->$model_name->db_construct( array('picid' => $picid ) );
        $piclist_array = $this->$model_name->get_array();
        
        //content_html
        $content_html = html_code_replace(array('text' => $content, 'nl2br' => TRUE, 'meta_img' => TRUE));
        
        //set
        $this->pageid = $pageid;
        $this->title = $title;
        $this->href = $href;
        $this->picid = $picid;
        $this->piclist_array = $piclist_array;
        $this->uid = $uid;
        $this->content = $content;
        $this->content_html = $content_html;
        $this->classid = $classid;
        $this->classid_array = $classid_array;
        $this->prioritynum = $prioritynum;
        $this->status = $status;
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array() ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        
		$this->db->from('page');
		$this->db->where($db_where);
		$query = $this->db->get();
		$page = $query->row_array();
        
        $this->construct(array(
            'pageid' => $page['pageid'],
            'uid' => $page['uid'],
            'title' => $page['title'],
            'href' => $page['href'],
            'picid' => $page['picid'],
            'content' => $page['content'],
            'classid' => $page['classid'],
            'prioritynum' => $page['prioritynum'],
            'status' => $page['status']
        ));
    }
    
	public function get_array()
	{
        $page['pageid'] = $this->pageid;
        $page['title'] = $this->title;
        $page['href'] = $this->href;
        $page['picid'] = $this->picid;
        $page['piclist_array'] = $this->piclist_array;
        $page['uid'] = $this->uid;
        $page['content'] = $this->content;
        $page['content_html'] = $this->content_html;
        $page['classid'] = $this->classid;
        $page['classid_array'] = $this->classid_array;
        $page['prioritynum'] = $this->prioritynum;
        $page['status'] = $this->status;
        
		return $page;
	}
    
	public function update()
	{
        $page2 = $this->get_array();
        
        if( empty($page2['pageid']) )
        {
            $page2['pageid'] = $this->common_model->db_search_max( array('table_name' => 'page', 'id_name' => 'pageid') ) + 1;
            $page = array(
                'pageid' => $page2['pageid'],
                'title' => $page2['title'],
                'href' => $page2['href'],
                'picid' => $page2['picid'],
                'uid' => $page2['uid'],
                'classid' => $page2['classid'],
                'content' => $page2['content'],
                'prioritynum' => $page2['prioritynum'],
                'status' => $page2['status']
            );
            
            $this->db->insert('page', $page);
        }
        else
        {
            $page = array(
                'pageid' => $page2['pageid'],
                'title' => $page2['title'],
                'href' => $page2['href'],
                'picid' => $page2['picid'],
                'uid' => $page2['uid'],
                'classid' => $page2['classid'],
                'content' => $page2['content'],
                'prioritynum' => $page2['prioritynum'],
                'status' => $page2['status']
            );
            
            $this->db->where(array('pageid' => $page['pageid']));
            $this->db->update('page', $page);
        }
    }
    
    public function hidden()
    {
        $page_array = $this->get_array();

        $this->db->where( array('pageid' => $page_array['pageid'] ) );
        $this->db->update('page', array('status' => 0) ); 
    }
	
}