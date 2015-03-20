<?php
class Page_list_model extends CI_Model {

    private $page_list_model = array();
    private $page_list_array = array();
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('page_array' => array() ) )
	{
        $page_list_model = array();
        $page_list_array = array();
        
        $page_array = $arg['page_array'];
        foreach($page_array as $key => $value)
        {
            $page = new CI_Model();
            $model_name = 'page_model'.$key;
            $page->load->model('page_model', $model_name);
            $page->$model_name->construct(array(
                'pageid' => $value['pageid'],
                'uid' => $value['uid'],
                'title' => $value['title'],
                'href' => $value['href'],
                'picid' => $value['picid'],
                'content' => $value['content'],
                'classid' => $value['classid'],
                'prioritynum' => $value['prioritynum'],
                'status' => $value['status']
            ));
            $page_array = $page->$model_name->get_array();
            $this->page_list_model[] = $page->$model_name;
            $this->page_list_array[] = $page_array;
        }
        
        return TRUE;
    }
    
	public function db_construct($arg = array('db_where' => array() ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        if(empty($db_where['status']) == TRUE)
        {
            $db_where['status'] = 1;
        }
        
		$this->db->from('page');
		$this->db->where($db_where);
		$query = $this->db->get();
		$page_list_model = $query->result_array();
        
        $this->construct(array(
            'page_array' => $page_list_model
        ));
    }
    
	public function get_array()
	{
        $page_list_array = $this->page_list_array;
		return $page_list_array;
	}
	
}