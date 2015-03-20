<?php
class Solution_list_model extends CI_Model {

    private $solution_list = array();
    private $solution_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('solution_array' => array() ) )
	{
        $solution_list = array();
        $solution_list_array = array();
        
        $solution_array = $arg['solution_array'];
        foreach($solution_array as $key => $value)
        {
            $solution = new CI_Model();
            $model_name = 'solution_model'.rand(0,32767);
            $solution->load->model('solution_model', $model_name);
            $this->solution_list[] = $solution->$model_name;
            $this->solution_list[$key]->construct(array(
                'solutionid' => $value['solutionid'],
                'uid' => $value['uid'],
                'title' => $value['title'],
                'href' => $value['href'],
                'picid' => $value['picid'],
                'toppicid' => $value['toppicid'],
                'content' => $value['content'],
                'classid' => $value['classid'],
                'prioritynum' => $value['prioritynum'],
                'status' => $value['status']
            ));
            $solution_array = $this->solution_list[$key]->get_array();
            $this->solution_list_array[] = $solution_array;
        }
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array(), 'limitstart' => 0, 'limitcount' => 0 ) )
    {
        $db_where = isset($arg['db_where']) ? $arg['db_where'] : array();
        $limitstart = !empty($arg['limitstart']) ? $arg['limitstart'] : 0;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 0;
        
        $limitstart = !empty($limitstart) ? $limitstart : $this->limitstart;
        $limitstart = !empty($limitstart) ? $limitstart : 0 ;
        $limitcount = !empty($limitcount) ? $limitcount : $this->limitcount;
        $limitcount = !empty($limitcount) ? $limitcount : 0 ;

        
        if($limitstart < 1)
        {
            $limitstart = 0;
        }
        
		$this->db->from('solution');
        $this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$solution_list = $query->result_array();
        
        $this->construct(array(
            'solution_array' => $solution_list
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
        
        $this->db->from('solution');
        $this->db->where($db_where);
        return $this->db->get()->num_rows();
    }
	public function get_array()
	{
        $solution_list_array = $this->solution_list_array;
        return $solution_list_array;

	}

}