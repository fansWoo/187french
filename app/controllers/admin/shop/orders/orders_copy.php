<?php
		
class Orders extends FS_Controller {

	private $father_name = 'orders';//管理分類名稱
    
	public function __construct()
	{
		parent::__construct();
        $data = $this->common_model->data;
        
		if($data['user']['uid'] == '')
		{
			$url = base_url('user/login');
			header('Location: '.$url);
		}
		
		$this->load->model('admin_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function postorders($do = '', $ordersid = 0)
	{
        $data = $this->common_model->data;
        $child_name = 'postorders';//管理分類類別名稱
		
		if($do == 'post')
        {
            $this->form_validation->set_rules('paycheck_status', '付款狀態', 'required');
            $this->form_validation->set_rules('product_status', '貨物狀態', 'required');
            $this->form_validation->set_rules('receive_name', '收件人姓名', 'required');
            $this->form_validation->set_rules('receive_phone', '收件人電話', 'required');
            $this->form_validation->set_rules('receive_address', '收件人地址', 'required');
            $this->form_validation->set_rules('receive_remark', '收件人備註', 'required');
            $this->form_validation->set_rules('sendtime_date', '寄出日期', 'required');
            $this->form_validation->set_rules('sendtime_time', '寄出時間', 'required');
            $this->form_validation->set_rules('orders_status', '訂單狀態', 'required');
            $this->form_validation->set_rules('receive_time', '寄出時間', 'required');
            
            if ($this->form_validation->run() !== FALSE)
            {
                $ordersid = $this->input->post('ordersid', TRUE);
                $paycheck_status = $this->input->post('paycheck_status', TRUE);
                $product_status = $this->input->post('product_status', TRUE);
                $receive_name = $this->input->post('receive_name', TRUE);
                $receive_phone = $this->input->post('receive_phone', TRUE);
                $receive_address = $this->input->post('receive_address', TRUE);
                $receive_remark = $this->input->post('receive_remark', TRUE);
                $sendtime_date = $this->input->post('sendtime_date', TRUE);
                $sendtime_time = $this->input->post('sendtime_time', TRUE);
                $orders_status = $this->input->post('orders_status', TRUE);
                $receive_remark = $this->input->post('receive_remark', TRUE);
                $receive_time = $this->input->post('receive_time', TRUE);
                
                $this->load->model('orders_model');
                $this->orders_model->construct(array(
                    'ordersid' => $ordersid,
                    'paycheck_status' => $paycheck_status,
                    'product_status' => $product_status,
                    'receive_name' => $receive_name,
                    'receive_phone' => $receive_phone,
                    'receive_address' => $receive_address,
                    'receive_remark' => $receive_remark,
                    'sendtime_date' => $sendtime_date,
                    'sendtime_time' => $sendtime_time,
                    'orders_status' => $orders_status,
                    'receive_time' => $receive_time,
                    'receive_remark' => $receive_remark
                ));
                $this->orders_model->update(array(
                    'update_white_list' => array(
                        'ordersid',
                        'paycheck_status',
                        'product_status',
                        'receive_name',
                        'receive_phone',
                        'receive_address',
                        'receive_remark',
                        'sendtime',
                        'orders_status',
                        'receive_time',
                        'receive_remark'
                    )
                ));

                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => '設定成功',
                     'url' => 'admin/orders/orderslist'
                ));
            }
            else
            {
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => validation_errors(),
                    'url' => 'admin/orders/orderslist'
                ));
            }
		}
        else if(empty($ordersid))
        {
            $this->load->model('message_model');
            $this->message_model->show(array(
                'message' => '請先選擇欲修改的訂單',
                'url' => 'admin/orders/orderslist'
            ));
        }
		else
		{
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'/'.$child_name.'.php'))
			{
				show_404();
			}
            
            $this->load->model('orders_model');
            if( !empty($ordersid) )
            {
                $this->orders_model->db_construct( array('db_where' => array('ordersid' => $ordersid) ) );
            }
            $data['orders'] = $this->orders_model->get_array();
            
            $this->load->model('class_list_model');
            $this->class_list_model->db_construct( array('db_where' => array('uid' => $data['user']['uid'], 'modelname' => 'orders') ) );
            $data['class_list_array'] = $this->class_list_model->get_array();
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/temp/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/temp/admin_footer', $data, TRUE);
            
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'/'.$child_name, $data);
		}
	}
	
	public function orderslist($input = '')
	{
		global $admin;
        $data = $this->common_model->data;
        $child_name = 'orderslist';//管理分類類別名稱
		
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
                     'url' => 'admin/orders/orderslist'
                ));
			}
			else
			{
                $this->load->model('message_model');
                $this->message_model->show(array(
                    'message' => validation_errors(),
                     'url' => 'admin/orders/orderslist'
                ));
			}
		}
		else
		{
			
			//沒有這個頁面
			if ( ! file_exists('app/views/admin/'.$this->father_name.'/'.$child_name.'.php'))
			{
				show_404();
			}
            
            $limitstart = $this->input->get('limitstart');
            $limitcount = $this->input->get('limitcount');
            $limitcount = empty($limitcount) ? 20 : $limitcount;
            $limitcount = $limitcount > 100 ? 100 : $limitcount;

            $this->load->model('orders_list_model');
            $this->orders_list_model->db_construct(array(
                'db_where' => array(
                ),
                'limitstart' => $limitstart,
                'limitcount' => $limitcount
            ));
            $data['orders_list'] = $this->orders_list_model->get_array();
            $data['orders_links'] = $this->orders_list_model->create_links( array('base_url' => 'admin/orders/orderslist') );
				
			//view data設定
			$data['admin_sidebox'] = reset_admin_sidebox($this->father_name, $child_name);
			$data['child_name'] = $child_name;
            
            //global
			$data['global']['style'][] = 'admin';
			$data['global']['js'][] = 'script_common';
            
            //temp
			$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
			$data['temp']['admin_header_down'] = $this->load->view('admin/temp/admin_header_down', $data, TRUE);
			$data['temp']['admin_footer'] = $this->load->view('admin/temp/admin_footer', $data, TRUE);
				
			//輸出模板
			$this->load->view('admin/'.$this->father_name.'/'.$child_name, $data);
		}
	}
}

?>