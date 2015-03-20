<?php
class Solution_model extends CI_Model {

    private $solutionid = 0;
    private $title = '';
    private $href = '';
    private $uid = 0;
    private $picid = '';
    private $piclist_array = array();
    private $toppicid = '';
    private $toppiclist_array = array();
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
	
	public function construct($arg = array('solutionid' => 0, 'uid' => 0, 'title' => '', 'href' => '', 'picid' => '', 'picid_array' => array(), 'toppicid' => '', 'toppicid_array' => array(), 'content' => '', 'classid' => '', 'classid_array' => array(), 'prioritynum' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $solutionid = !empty($arg['solutionid']) ? $arg['solutionid'] : 0;
        $uid = !empty($arg['uid']) ? $arg['uid'] : 0;
        $title = !empty($arg['title']) ? $arg['title'] : '';
        $href = !empty($arg['href']) ? $arg['href'] : '';
        $picid = !empty($arg['picid']) ? $arg['picid'] : '';
        $picid_array = !empty($arg['picid_array']) ? $arg['picid_array'] : array();
        $toppicid = !empty($arg['toppicid']) ? $arg['toppicid'] : '';
        $toppicid_array = !empty($arg['toppicid_array']) ? $arg['toppicid_array'] : array();
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
        $modelname = 'pic_list_model'.rand(0,32767);
        $this->load->model('pic_list_model', $modelname);
        $this->$modelname->db_construct( array('picid' => $picid ) );
        $piclist_array = $this->$modelname->get_array();
        
        //toppicid運算
        if(!empty($toppicid))
        {
            $toppicid_array = explode(',', $toppicid);
        }
        
        $toppicid_array2 = $toppicid_array;
        $toppicid_set_array = array();
        foreach($toppicid_array2 as $key => $value)//運算重複的ID
        {
            if($value == 0 || in_array($value, $toppicid_set_array) )
            {
                unset($toppicid_array[$key]);
            }
            $toppicid_set_array[] = $value;
        }
        if(is_array($toppicid_array))
        {
            $toppicid = implode(',', $toppicid_array);
        }
        
        //toppicid
        $modelname = 'pic_list_model'.rand(0,32767);
        $this->load->model('pic_list_model', $modelname);
        $this->$modelname->db_construct( array('picid' => $toppicid ) );
        $toppiclist_array = $this->$modelname->get_array();
        
        //content_html
        $content_html = html_code_replace(array('text' => $content, 'nl2br' => TRUE, 'meta_img' => TRUE));
        
        //set
        $this->solutionid = $solutionid;
        $this->title = $title;
        $this->href = $href;
        $this->picid = $picid;
        $this->piclist_array = $piclist_array;
        $this->toppicid = $toppicid;
        $this->toppiclist_array = $toppiclist_array;
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
        
		$this->db->from('solution');
		$this->db->where($db_where);
		$query = $this->db->get();
		$solution = $query->row_array();
        
        $this->construct(array(
            'solutionid' => $solution['solutionid'],
            'uid' => $solution['uid'],
            'title' => $solution['title'],
            'href' => $solution['href'],
            'picid' => $solution['picid'],
            'toppicid' => $solution['toppicid'],
            'content' => $solution['content'],
            'classid' => $solution['classid'],
            'prioritynum' => $solution['prioritynum'],
            'status' => $solution['status']
        ));
    }
    
	public function get_array()
	{
        $solution['solutionid'] = $this->solutionid;
        $solution['title'] = $this->title;
        $solution['href'] = $this->href;
        $solution['picid'] = $this->picid;
        $solution['toppicid'] = $this->toppicid;
        $solution['piclist_array'] = $this->piclist_array;
        $solution['toppiclist_array'] = $this->toppiclist_array;
        $solution['uid'] = $this->uid;
        $solution['content'] = $this->content;
        $solution['content_html'] = $this->content_html;
        $solution['classid'] = $this->classid;
        $solution['classid_array'] = $this->classid_array;
        $solution['prioritynum'] = $this->prioritynum;
        $solution['status'] = $this->status;
        
		return $solution;
	}
    
	public function update()
	{
        $solution2 = $this->get_array();
        
        if( empty($solution2['solutionid']) )
        {
            $solution2['solutionid'] = $this->common_model->db_search_max( array('table_name' => 'solution', 'id_name' => 'solutionid') ) + 1;
            $solution = array(
                'solutionid' => $solution2['solutionid'],
                'title' => $solution2['title'],
                'href' => $solution2['href'],
                'picid' => $solution2['picid'],
                'toppicid' => $solution2['toppicid'],
                'uid' => $solution2['uid'],
                'classid' => $solution2['classid'],
                'content' => $solution2['content'],
                'prioritynum' => $solution2['prioritynum'],
                'status' => $solution2['status']
            );
            
            $this->db->insert('solution', $solution);
        }
        else
        {
            $solution = array(
                'solutionid' => $solution2['solutionid'],
                'title' => $solution2['title'],
                'href' => $solution2['href'],
                'picid' => $solution2['picid'],
                'toppicid' => $solution2['toppicid'],
                'uid' => $solution2['uid'],
                'classid' => $solution2['classid'],
                'content' => $solution2['content'],
                'prioritynum' => $solution2['prioritynum'],
                'status' => $solution2['status']
            );
            
            $this->db->where(array('solutionid' => $solution['solutionid']));
            $this->db->update('solution', $solution);
        }
    }
    
    public function hidden()
    {
        $solution_array = $this->get_array();

        $this->db->where( array('solutionid' => $solution_array['solutionid'] ) );
        $this->db->update('solution', array('status' => 0) ); 
    }
	
}