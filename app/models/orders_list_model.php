<?php
class Orders_list_model extends FS_Model {

    private $orders_list_model = array();
    private $orders_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
	
	public function construct($arg = array('orders_array' => array() ) )
	{
        $orders_list_model = array();
        $orders_list_array = array();
        
        $orders_array = $arg['orders_array'];
        foreach($orders_array as $key => $value)
        {
            $orders_Orders = new CI_Model();
            $orders_Orders->load->model('orders_model');
            $orders_Orders->orders_model->construct($value);
            $orders_array = $orders_Orders->orders_model->get_array();
            $this->orders_list_model[] = $orders->orders_model;
            $this->orders_list_array[] = $orders_array;
        }
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array(), 'limitstart' => 0, 'limitcount' => 0 ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        $limitstart = !empty($arg['limitstart']) ? $arg['limitstart'] : 0;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 0;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 1 ;
        $status = !empty($arg['status']) ? $arg['status'] : 1;

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

        if(empty($db_where['status']) == TRUE)
        {
            $db_where['status'] = 1;
        }
        if(empty($db_where2['uid']) == FALSE)
        {
            $db_where['orders.uid'] = $db_where2['uid'];
        }
        
        $this->db_where = $db_where;
        $this->limitstart = $limitstart;
        $this->limitcount = $limitcount;
        
		$this->db->from('orders');
		$this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$orders_list_model = $query->result_array();
        
        $this->construct(array(
            'orders_array' => $orders_list_model
        ));
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
        
        $this->db->from('orders');
        $this->db->where($db_where);
        return $this->db->get()->num_rows();
    }
    
	public function get_array()
	{
        $orders_list_array = $this->orders_list_array;
		return $orders_list_array;
	}
	
}