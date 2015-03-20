<?php
class Product_model extends CI_Model {

    private $productid = 0;
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
	
	public function construct($arg = array('productid' => 0, 'uid' => 0, 'title' => '', 'href' => '', 'picid' => '', 'picid_array' => array(), 'toppicid' => '', 'toppicid_array' => array(), 'content' => '', 'classid' => '', 'classid_array' => array(), 'prioritynum' => 0, 'status' => 0))
	{
        $data = $this->data;
        
        $productid = !empty($arg['productid']) ? $arg['productid'] : 0;
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
        $this->productid = $productid;
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
        
		$this->db->from('product');
		$this->db->where($db_where);
		$query = $this->db->get();
		$product = $query->row_array();
        
        $this->construct(array(
            'productid' => $product['productid'],
            'uid' => $product['uid'],
            'title' => $product['title'],
            'href' => $product['href'],
            'picid' => $product['picid'],
            'toppicid' => $product['toppicid'],
            'content' => $product['content'],
            'classid' => $product['classid'],
            'prioritynum' => $product['prioritynum'],
            'status' => $product['status']
        ));
    }
    
	public function get_array()
	{
        $product['productid'] = $this->productid;
        $product['title'] = $this->title;
        $product['href'] = $this->href;
        $product['picid'] = $this->picid;
        $product['toppicid'] = $this->toppicid;
        $product['piclist_array'] = $this->piclist_array;
        $product['toppiclist_array'] = $this->toppiclist_array;
        $product['uid'] = $this->uid;
        $product['content'] = $this->content;
        $product['content_html'] = $this->content_html;
        $product['classid'] = $this->classid;
        $product['classid_array'] = $this->classid_array;
        $product['prioritynum'] = $this->prioritynum;
        $product['status'] = $this->status;
        
		return $product;
	}
    
	public function update()
	{
        $product2 = $this->get_array();
        
        if( empty($product2['productid']) )
        {
            $product2['productid'] = $this->common_model->db_search_max( array('table_name' => 'product', 'id_name' => 'productid') ) + 1;
            $product = array(
                'productid' => $product2['productid'],
                'title' => $product2['title'],
                'href' => $product2['href'],
                'picid' => $product2['picid'],
                'toppicid' => $product2['toppicid'],
                'uid' => $product2['uid'],
                'classid' => $product2['classid'],
                'content' => $product2['content'],
                'prioritynum' => $product2['prioritynum'],
                'status' => $product2['status']
            );
            
            $this->db->insert('product', $product);
        }
        else
        {
            $product = array(
                'productid' => $product2['productid'],
                'title' => $product2['title'],
                'href' => $product2['href'],
                'picid' => $product2['picid'],
                'toppicid' => $product2['toppicid'],
                'uid' => $product2['uid'],
                'classid' => $product2['classid'],
                'content' => $product2['content'],
                'prioritynum' => $product2['prioritynum'],
                'status' => $product2['status']
            );
            
            $this->db->where(array('productid' => $product['productid']));
            $this->db->update('product', $product);
        }
    }
    
    public function hidden()
    {
        $product_array = $this->get_array();

        $this->db->where( array('productid' => $product_array['productid'] ) );
        $this->db->update('product', array('status' => 0) ); 
    }
	
}