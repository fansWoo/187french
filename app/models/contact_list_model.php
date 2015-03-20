<?php
class Contact_list_model extends CI_Model {

    private $contact_list_model = array();
    private $contact_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('contact_array' => array() ) )
	{
        $contact_list_model = array();
        $contact_list_array = array();
        
        $contact_array = $arg['contact_array'];
        foreach($contact_array as $key => $value)
        {
            $contact = new CI_Model();
            $modelname = 'contact_model'.rand(0,32767);
            $contact->load->model('contact_model', $modelname);
            $contact->$modelname->construct(array(
                'contactid' => $value['contactid'],
                'uid' => $value['uid'],
                'username' => $value['username'],
                'title' => $value['title'],
                'pic' => $value['pic'],
                
                'classid' => $value['classid'],
                'modelname' => $value['modelname'],
                'viewnum' => $value['viewnum'],
                'replynum' => $value['replynum'],
                'prioritynum' => $value['prioritynum'],
                'updatetime' => $value['updatetime'],
                'status' => $value['status']
            ));
            $contact_array = $contact->$modelname->get_array();
            $this->contact_list_model[] = $contact;
            $this->contact_list_array[] = $contact_array;
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
            $db_where['contact.uid'] = $db_where2['uid'];
        }
        
		$this->db->from('contact');
		$this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$contact_list = $query->result_array();
        
        $this->construct(array(
            'contact_array' => $contact_list
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
        
        $this->db->from('contact');
        $this->db->where($db_where);
        return $this->db->get()->num_rows();
    }
    
	public function get_array()
	{
        $contact_list_array = $this->contact_list_array;
		return $contact_list_array;
	}
	
}