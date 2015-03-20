<?php
class Pic_list_model extends CI_Model {

    private $pic_list_model = array();//子物件名稱
    private $pic_list_array = array();
    private $db_where = array();
    private $limitstart = 0;
    private $limitcount = 1;
    private $data = array();
    
	public function __construct()
	{
        $this->data = $this->common_model->common();
	}
	
	public function construct($arg = array('pic_array' => array(), 'file_array' => array(), 'thumb' => '' ) )
	{
        $pic_array = !empty($arg['pic_array']) ? $arg['pic_array'] : array();
        $file_array = !empty($arg['file_array']) ? $arg['file_array'] : array();
        $thumb = !empty($arg['thumb']) ? $arg['thumb'] : '';
        
        if(!empty($pic_array))
        {
            foreach($pic_array as $key => $value)
            {
                $Pic = new CI_Model();
                $Pic->load->model('pic_model');
                $Pic->pic_model->construct(array(
                    'picid' => $value['picid'],
                    'uid' => $value['uid'],
                    'title' => $value['title'],
                    'thumb' => $value['thumb'],
                    'filename' => $value['filename'],
                    'classid' => $value['classid'],
                    'size' => $value['size'],
                    'type' => $value['type'],
                    'md5' => $value['md5'],
                    'status' => $value['status']
                ));
                $pic_array = $Pic->pic_model->get_array();
                $this->pic_list_array[] = $pic_array;
            }
            return TRUE;
        }
        else if(!empty($file_array))
        {
            $file_array2 = $file_array;
            $file_array = array();
            foreach($file_array2['name'] as $key => $value)
            {
                if( !empty($file_array2['name'][$key]) )
                {
                    $file['file']['name'] = $file_array2['name'][$key];
                    $file['file']['type'] = $file_array2['type'][$key];
                    $file['file']['tmp_name'] = $file_array2['tmp_name'][$key];
                    $file['file']['error'] = $file_array2['error'][$key];
                    $file['file']['size'] = $file_array2['size'][$key];
                    $file_array[] = $file;
                }
            }
            foreach($file_array as $key => $value)
            {
                $Pic = new CI_Model();
                $model_name = 'pic_model'.rand(0,32767);
                $Pic->load->model('pic_model', $model_name);
                $this->pic_list_model[] = $Pic->$model_name;
                $this->pic_list_model[$key]->construct(array(
                    'file' => $file_array[$key]['file'],
                    'thumb' => $thumb
                ));
                $pic_array = $this->pic_list_model[$key]->get_array();
                $this->pic_list_array[] = $pic_array;
            }
            
            return TRUE;
        }
        else
        {
            return FALSE;
        }
        
    }
    
	public function db_construct($arg = array('db_where' => array(), 'picid' => '', 'status' => 1, 'limitstart' => 0, 'limitcount' => 0 ) )
    {
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        $limitstart = !empty($arg['limitstart']) ? $arg['limitstart'] : 0;
        $limitcount = !empty($arg['limitcount']) ? $arg['limitcount'] : 0;
        $picid = !empty($arg['picid']) ? $arg['picid'] : '';
        $status = !empty($arg['status']) ? $arg['status'] : 1;
        
        $limitstart = !empty($limitstart) ? $limitstart : $this->limitstart;
        $limitstart = !empty($limitstart) ? $limitstart : 0 ;
        $limitcount = !empty($limitcount) ? $limitcount : $this->limitcount;
        $limitcount = !empty($limitcount) ? $limitcount : 0 ;

        if($limitstart < 1)
        {
            $limitstart = 0;
        }
        if(empty($db_where['status']) == TRUE)
        {
            $db_where['status'] = 1;
        }

        if( !empty($picid) )
        {
            $picid_array = explode(',', $picid);
            
            $this->db->from('pic');
            foreach($picid_array as $key => $value)
            {
                $this->db->or_where( array('picid' => $value) );
                $this->db->where( array('status' => $status) );
            }
            $query = $this->db->get();
            $pic_list_array = $query->result_array();
        }
        else if ( !empty($db_where) )
        {
            if( empty($db_where['status']) )
            {
                $db_where['status'] = 1;
            }
            $this->db->from('pic');
            $this->db->where($db_where);
            
            $this->db->limit($limitcount, $limitstart);
            $query = $this->db->get();
            $pic_list_array = $query->result_array();
        }
        
        if( !empty($pic_list_array) )
        {
            $this->construct(array(
                'pic_array' => $pic_list_array
            ));
        }
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
        
        $this->db->from('pic');
        $this->db->where($db_where);

        return $this->db->get()->num_rows();

    }

    
	public function get_array()
	{
        $pic_list_array = $this->pic_list_array;
		return $pic_list_array;
	}
    
	public function get_picid_array()
	{
        $pic_list_array = $this->get_array();
        $picid_array = array();
        foreach($pic_list_array as $key => $value)
        {
            $picid_array[] = $value['picid'];
        }
		return $picid_array;
	}
    
	public function upload()
	{
        $pic_list_model = $this->pic_list_model;
        foreach($pic_list_model as $key => $value)
        {
            $this->pic_list_model[$key]->upload();
            $pic_list_array[] = $this->pic_list_model[$key]->get_array();
        }
        $this->pic_list_array = $pic_list_array;
	}
	
}