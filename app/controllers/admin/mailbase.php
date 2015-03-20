<?php
		
class Mailbase extends CI_Controller {

    private $data = array();
	private $father_name = 'mailbase';//管理分類名稱
    
	public function __construct()
	{
		parent::__construct();
        $this->data = $this->common_model->common();
        $data = $this->data;
        
		if($data['user']['uid'] == '')
		{
			$url = base_url('user/login');
			header('Location: '.$url);
		}
		
		$this->load->model('admin_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function postmailbase($do = '', $mailbaseid = 0)
	{
		global $admin;
        $data = $this->data;
        $child_name = 'postmailbase';//管理分類類別名稱
		
		if($do == 'post')
        {
            $mailbaseid = $this->input->post('mailbaseid', TRUE);
            $this->form_validation->set_rules('title', '文章標題', 'required');
            $this->form_validation->set_rules('content', '文章內容', 'required');
				
            if ($this->form_validation->run() !== FALSE)
            {
                $title = $this->input->post('title', TRUE);
                $classid_array = $this->input->post('classid_array', TRUE);
                $content = $this->input->post('content', TRUE);
                $prioritynum = $this->input->post('prioritynum', TRUE);
                    
                $this->load->model('mailbase_model');
                $this->mailbase_model->construct( array('mailbaseid' => $mailbaseid, 'title' => $title, 'classid_array' => $classid_array, 'content' => $content, 'prioritynum' => $prioritynum, 'modelname' => 'mailbase') );
                
                $this->mailbase_model->update();

                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定成功',
                     'url' => 'admin/mailbase/mailbaselist'
                ));
            }
            else
            {
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定失敗',
                    'url' => 'admin/mailbase/mailbaselist'
                ));
            }
		}
		else
		{
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'_'.$child_name.'.php'))
			{
				show_404();
			}
            
            if(isset($mailbaseid) === FALSE || $mailbaseid !== 0)
            {
                $this->load->model('mailbase_model');
                $this->mailbase_model->db_construct( array('db_where' => array('mailbaseid' => $mailbaseid) ) );
                $data['mailbase'] = $this->mailbase_model->get_array();
            }

            $this->load->model('class_list_model');
            $this->class_list_model->db_construct( array('db_where' => array('uid' => $data['user']['uid'], 'modelname' => 'mailbase') ) );
            $data['class_list_array'] = $this->class_list_model->get_array();
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/admin_footer', $data, TRUE);
				
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'_'.$child_name, $data);
		}
	}
	
	public function mailbaselist($input = '')
	{
		global $admin;
        $data = $this->data;
        $child_name = 'mailbaselist';//管理分類類別名稱
		
		if($input == 'post')
        {
			$this->form_validation->set_rules('classid', 'classid', 'required');
			$this->form_validation->set_rules('classname', 'classname', 'required');
			$this->form_validation->set_rules('slug', '標籤代號', 'required');
				
			if ($this->form_validation->run() !== FALSE)
			{
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定成功',
                     'url' => 'admin/mailbase/mailbaselist'
                ));
			}
			else
			{
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定失敗',
                     'url' => 'admin/mailbase/mailbaselist'
                ));
			}
		}
		else
		{
			
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'_'.$child_name.'.php'))
			{
				show_404();
			}
            
            $limitstart = $this->input->get('limitstart');
            $limitcount = $this->input->get('limitcount');
            $limitcount = empty($limitcount) ? 20 : $limitcount;
            $limitcount = $limitcount > 100 ? 100 : $limitcount;
            
            $this->load->model('mailbase_list_model');
            $this->mailbase_list_model->set_db(array(
                'db_where' => array(
                    'modelname' => 'mailbase'
                ),
                'limitstart' => $limitstart,
                'limitcount' => $limitcount
            ));
            $this->mailbase_list_model->db_construct();
            $data['mailbase_list'] = $this->mailbase_list_model->get_array();
            $data['mailbase_links'] = $this->mailbase_list_model->create_links( array('base_url' => 'admin/mailbase/mailbaselist') );
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/admin_footer', $data, TRUE);
			
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'_'.$child_name, $data);
		}
	}
    
	public function postclass($do = '', $classid = 0)
	{
		global $admin;
        $data = $this->data;
        $child_name = 'postclass';//管理分類類別名稱
        
		if($do == 'post')
        {
            $this->form_validation->set_rules('classname', 'classname', 'required');

            if ($this->form_validation->run() !== FALSE)
            {
                $classid = $this->input->post('classid', TRUE);
                $classname = $this->input->post('classname', TRUE);
                $slug = $this->input->post('slug', TRUE);
                
                $this->load->model('class_model');
                $this->class_model->construct( array('classid' => $classid, 'classname' => $classname, 'slug' => $slug, 'modelname' => 'mailbase') );
                $this->class_model->update();

                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定成功',
                    'url' => 'admin/mailbase/classlist'
                ));
            }
            else
            {
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定失敗',
                    'url' => 'admin/mailbase/classlist'
                ));
            }
        }
		else
		{
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'_'.$child_name.'.php'))
			{
				show_404();
			}
            
            $uid = $this->session->userdata('uid');
            
            if($do == 'edit' && $classid !== 0)
            {
                $this->load->model('class_model');
                $this->class_model->db_construct( array('db_where' => array('classid' => $classid, 'modelname' => 'mailbase') ) );
                $data['class'] = $this->class_model->get_array();
            }
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/admin_footer', $data, TRUE);
				
			//output
			$this->load->view('admin/'.$this->father_name.'_'.$child_name, $data);
		}
	}
    
	public function classlist($input = '')
	{
		global $admin;
        $data = $this->data;
        $child_name = 'classlist';//管理分類類別名稱
		
		if($input == 'post')
        {
			$this->form_validation->set_rules('classid', 'classid', 'required');
			$this->form_validation->set_rules('classname', 'classname', 'required');
			$this->form_validation->set_rules('slug', '標籤代號', 'required');
				
			if ($this->form_validation->run() !== FALSE)
			{
				$this->admin_mailbase_model->addmailbase_post();
				
				$message = '設定成功';
				$url = 'admin/mailbase/addmailbase';
				
				$this->load->model('message_model');
				$this->message_model->show(array('message' => $message, 'url' => $url));
			}
			else
			{
				$message = '設定失敗';
				$url = 'admin/mailbase/addmailbase';
					
				$this->load->model('message_model');
				$this->message_model->show(array('message' => $message, 'url' => $url));
			}
		}
		else
		{
			
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'_'.$child_name.'.php'))
			{
				show_404();
			}
            
            $uid = $this->session->userdata('uid');
            
            $this->db->from('class');
            $this->db->where( array('uid' => $uid, 'status !=' => 0, 'modelname' => 'mailbase') );
            $query = $this->db->get();
            $class_list = $query->result_array();
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
			$data['class_list'] = $class_list;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/admin_footer', $data, TRUE);
				
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'_'.$child_name, $data);
		}
	}
	
    public function delete_mailbase($mailbaseid = 0, $hash = '')
    {
        //CSRF過濾
        if($hash == $this->security->get_csrf_hash())
        {
            $this->load->model('mailbase_model');
            $this->mailbase_model->construct( array('mailbaseid' => $mailbaseid) );
            $this->mailbase_model->hidden();

            $this->load->model('message_model');
            $this->message_model->show(array(
                'message' => '刪除成功',
                'url' => 'admin/mailbase/mailbaselist'
            ));
        }
        else
        {
            $this->load->model('message_model');
            $this->message_model->show(array(
                'message' => '刪除失敗',
                'url' => 'admin/mailbase/mailbaselist'
            ));
        }
    }
	
    public function delete_class($classid = 0, $hash = '')
    {
        //CSRF過濾
        if($hash == $this->security->get_csrf_hash())
        {
            $this->load->model('class_model');
            $this->class_model->construct( array('classid' => $classid) );
            $this->class_model->hidden();

            $this->load->model('message_model');
            $this->message_model->show(array(
                'message' => '刪除成功',
                'url' => 'admin/mailbase/classlist'
            ));
        }
        else
        {
            $this->load->model('message_model');
            $this->message_model->show(array(
                'message' => '刪除失敗',
                'url' => 'admin/mailbase/classlist'
            ));
        }
    }
	
	public function set($input = '')
	{
		global $admin;
        $data = $this->data;
        $child_name = 'set';//管理分類類別名稱
		
		if($input == 'post')
        {
			$this->form_validation->set_rules('mailbase_order', '文章顯示排序', 'required');
			$this->form_validation->set_rules('mailbase_amount', '文章顯示數量', 'required');
				
			if ($this->form_validation->run() !== FALSE)
			{
                $mailbase_order = $this->input->post('mailbase_order', TRUE);
                $this->load->model('setting_model');
                $this->setting_model->construct( array('keyword' => 'mailbase_order', 'value' => $mailbase_order, 'status' => 2) );
				$this->setting_model->update();
                
                $mailbase_amount = $this->input->post('mailbase_amount', TRUE);
                $this->setting_model->construct( array('keyword' => 'mailbase_amount', 'value' => $mailbase_amount, 'status' => 2) );
				$this->setting_model->update();
                
				$message = '設定成功';
				$url = 'admin/mailbase/set';
			}
			else
			{
				$message = '設定失敗';
				$url = 'admin/mailbase/set';
			}
            $this->load->model('message_model');
            $this->message_model->show(array('message' => $message, 'url' => $url));
		}
		else
		{
			
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'_'.$child_name.'.php'))
			{
				show_404();
			}
            
            $this->load->model('setting_list_model');
            $this->setting_list_model->db_construct( array('keyword' => array('mailbase_order', 'mailbase_amount') ) );
            $data['setting_list_array'] = $this->setting_list_model->get_array();
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/admin_footer', $data, TRUE);
				
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'_'.$child_name, $data);
		}
	}
}

?>