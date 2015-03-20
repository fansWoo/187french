<?php
class Product_list_model extends CI_Model {

    private $product_list = array();
    private $product_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('product_array' => array() ) )
	{
        $product_list = array();
        $product_list_array = array();
        
        $product_array = $arg['product_array'];
        foreach($product_array as $key => $value)
        {
            $product = new CI_Model();
            $model_name = 'product_model'.rand(0,32767);
            $product->load->model('product_model', $model_name);
            $this->product_list[] = $product->$model_name;
            $this->product_list[$key]->construct(array(
                'productid' => $value['productid'],
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
            $product_array = $this->product_list[$key]->get_array();
            $this->product_list_array[] = $product_array;
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
        
		$this->db->from('product');
        $this->db->where($db_where);
        $this->db->limit($limitcount, $limitstart);
		$query = $this->db->get();
		$product_list = $query->result_array();
        
        $this->construct(array(
            'product_array' => $product_list
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
        
        $this->db->from('product');
        $this->db->where($db_where);
        return $this->db->get()->num_rows();
    }
	public function get_array()
	{
        $product_list_array = $this->product_list_array;
        return $product_list_array;

	}

}