<?php
class Mailbase_list_model extends CI_Model {

    private $mailbase_list_model = array();
    private $mailbase_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('mailbase_array' => array() ) )
	{
        $mailbase_list_model = array();
        $mailbase_list_array = array();
        
        $mailbase_array = $arg['mailbase_array'];
        foreach($mailbase_array as $key => $value)
        {
            $Mailbase = new CI_Model();
            $modelname = 'mailbase_model'.rand(0,32767);
            $Mailbase->load->model('mailbase_model', $modelname);
            $Mailbase->$modelname->construct(array(
                'mailbaseid' => $value['mailbaseid'],
                'uid' => $value['uid'],
                'username' => $value['username'],
                'title' => $value['title'],
                'pic' => $value['pic'],
                'content' => $value['content'],
                'classid' => $value['classid'],
                'modelname' => $value['modelname'],
                'viewnum' => $value['viewnum'],
                'replynum' => $value['replynum'],
                'prioritynum' => $value['prioritynum'],
                'updatetime' => $value['updatetime'],
                'status' => $value['status']
            ));
            $mailbase_array = $Mailbase->$modelname->get_array();
            $this->mailbase_list_model[] = $Mailbase;
            $this->mailbase_list_array[] = $mailbase_array;
        }
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array(), 'limitstart' => 0, 'limitcount' => 0 ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        $limitstart = !empty($arg['limitstart']) ? $arg['limitstart'] : 0;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 0;
        
        $limitstart = !empty($limitstart) ? $limitstart : $this->limitstart;
        $limitstart = !empty($limitstart) ? $limitstart : 0 ;
        $limitcount = !empty($limitcount) ? $limitcount : $this->limitcount;
        $limitcount = !empty($limitcount) ? $limitcount : 0 ;
        
        if(empty($db_where))
        {
            $db_where = $this->db_where;
        }
        
        if($limitstart < 1)
        {
            $limitstart = 0;
        }
        
        $db_where2 = $db_where;
        if(empty($db_where2['status']) == TRUE)
        {
            $db_where['status'] = 1;
        }
        
        if(empty($db_where2['uid']) == FALSE)
        {
            $db_where['mailbase.uid'] = $db_where2['uid'];
        }
        
		$this->db->from('mailbase');
		$this->db->join('mailbase_field', 'mailbase.mailbaseid = mailbase_field.mailbaseid', 'left');
		$this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$mailbase_list = $query->result_array();
        
        $this->construct(array(
            'mailbase_array' => $mailbase_list
        ));
    }
    
    public function set_db($arg = array('db_where' => array(), 'limitstart' => 0, 'limitcount' => 0, 'status' => 1 ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array() ;
        $limitstart = !empty($arg['limitstart']) ? $arg['limitstart'] : 0 ;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 1 ;
        $status = !empty($arg['status']) ? $arg['status'] : 1;
        
        $db_where['status'] = $status;
        
        $this->db_where = $db_where;
        $this->limitstart = $limitstart;
        $this->limitcount = $limitcount;
    }
    
    public function create_links($arg = array('base_url' => ''))
    {
        $base_url = !empty($arg['base_url']) ? $arg['base_url'] : '';
        
        $db_where = $this->db_where;
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array() ;
        $limitstart = $this->limitstart;
        $limitstart = !empty($limitstart) ? $limitstart : 0 ;
        $limitcount = $this->limitcount;
        $limitcount = !empty($limitcount) ? $limitcount : 1 ;
        
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = $base_url.'/?limitcount='.$limitcount;
        $config['per_page'] = $limitcount;
        $config['total_rows'] = $this->get_maxcount( array('db_where' => array() ) );
        $this->pagination->initialize($config); 
        $links = $this->pagination->create_links();
        
        return $links;
    }
    
    public function get_maxcount()
    {
        $db_where = $this->db_where;
        $db_where = !empty($db_where) ? $db_where : array() ;
        
        $this->db->from('mailbase');
        $this->db->where($db_where);
        return $this->db->get()->num_rows();
    }
    
	public function get_array()
	{
        $mailbase_list_array = $this->mailbase_list_array;
		return $mailbase_list_array;
	}
	
}