<?php
class Class_list_model extends CI_Model {

    private $class_list = array();
    private $class_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('class_array' => array() ) )
	{
        $this->class_list = array();
        $this->class_list_array = array();
        $class_list = array();
        $class_list_array = array();
        
        $class_array = $arg['class_array'];
        foreach($class_array as $key => $value)
        {
            $Class = new CI_Model();
            $Class->load->model('class_model');
            $Class->class_model->construct(array(
                'classid' => $value['classid'],
                'uid' => $value['uid'],
                'classname' => $value['classname'],
                'slug' => $value['slug'],
                'modelname' => $value['modelname'],
                'amountnum' => $value['amountnum'],
                'updatetime' => $value['updatetime'],
                'status' => $value['status']
            ));
            $class_array = $Class->class_model->get_array();
            $this->class_list[] = $Class;
            $this->class_list_array[] = $class_array;
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
        if(!empty($db_where['status']) == FALSE )
        {
            $db_where['status'] = 1;
        }
        
		$this->db->from('class');
		$this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$class_list = $query->result_array();
        
        $this->construct(array(
            'class_array' => $class_list
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
        
        $this->db->from('class');
        $this->db->where($db_where);

        return $this->db->get()->num_rows();
    }
    
	public function get_array()
	{
        $class_list_array = $this->class_list_array;
		return $class_list_array;
	}
	
}