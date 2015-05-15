<?php

class contact_controller extends FS_controller {

	public function __construct()
	{
        parent::__construct();
        $data = $this->data;

        $this->load->helper('form');
        $this->load->library('form_validation');
	}
    
	public function index()
	{
        $data = $this->data;

        $data['CourseMonthList'] = new ObjList();
        $data['CourseMonthList']->construct_db(array(
            'db_where_Arr' => [
                'open_use' => 1
            ],
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('updatetime', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'CourseMonth',
            'limitstart_Num' => 0,
            'limitcount_Num' => 1000
        ));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'contact/index';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		
		//輸出模板
		$this->load->view('contact/index', $data);
	}

	public function contact_ask_post()
	{
        $this->form_validation->set_rules('name_Str', '姓名', 'required');
        $this->form_validation->set_rules('email_Str', '電子郵件', 'required');
        $this->form_validation->set_rules('phone_Str', '聯繫電話', 'required');

        if ($this->form_validation->run() !== FALSE)
        {
            //基本post欄位
            $name_Str = $this->input->post('name_Str', TRUE);
            $email_Str = $this->input->post('email_Str', TRUE);
            $phone_Str = $this->input->post('phone_Str');
            $content_Str = $this->input->post('content_Str', TRUE);

	        //建構ContactAsk物件，並且更新
	        $ContactAsk = new ContactAsk();
	        $ContactAsk->construct(array(
	            'name_Str' => $name_Str,
	            'email_Str' => $email_Str,
	            'phone_Str' => $phone_Str,
	            'content_Str' => $content_Str,
	            'status_process_Num' => 1
	        ));
	        $ContactAsk->update();

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'contact'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'contact'
            ));
        }
	}

	public function contact_pay_post()
	{
        $this->form_validation->set_rules('name_Str', '姓名', 'required');
        $this->form_validation->set_rules('email_Str', '電子郵件', 'required');
        $this->form_validation->set_rules('phone_Str', '聯繫電話', 'required');
        $this->form_validation->set_rules('pay_learn_name_Str', '付費課程', 'required');
        $this->form_validation->set_rules('pay_name_Str', '匯款人姓名', 'required');
        $this->form_validation->set_rules('pay_time_Str', '匯款時間', 'required');

        if ($this->form_validation->run() !== FALSE)
        {
            //基本post欄位
            $name_Str = $this->input->post('name_Str', TRUE);
            $email_Str = $this->input->post('email_Str', TRUE);
            $phone_Str = $this->input->post('phone_Str');
            $content_Str = $this->input->post('content_Str', TRUE);
            $pay_learn_name_Str = $this->input->post('pay_learn_name_Str', TRUE);
            $pay_account_Str = $this->input->post('pay_account_Str', TRUE);
            $pay_name_Str = $this->input->post('pay_name_Str', TRUE);
            $pay_time_Str = $this->input->post('pay_time_Str', TRUE);

	        //建構ContactAsk物件，並且更新
	        $ContactPay = new ContactPay();
	        $ContactPay->construct(array(
	            'name_Str' => $name_Str,
	            'email_Str' => $email_Str,
	            'phone_Str' => $phone_Str,
	            'content_Str' => $content_Str,
	            'pay_learn_name_Str' => $pay_learn_name_Str,
	            'pay_account_Str' => $pay_account_Str,
	            'pay_name_Str' => $pay_name_Str,
	            'pay_time_Str' => $pay_time_Str,
	            'status_process_Num' => 1
	        ));
	        $ContactPay->update();

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'contact'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'contact'
            ));
        }
	}

	public function contact_learn_post()
	{
        $this->form_validation->set_rules('name_Str', '姓名', 'required');
        $this->form_validation->set_rules('email_Str', '電子郵件', 'required');
        $this->form_validation->set_rules('phone_Str', '聯繫電話', 'required');
        $this->form_validation->set_rules('phone_Str', '課程名稱', 'required');
        $this->form_validation->set_rules('phone_Str', '上課時間', 'required');

        if ($this->form_validation->run() !== FALSE)
        {
            //基本post欄位
            $name_Str = $this->input->post('name_Str', TRUE);
            $email_Str = $this->input->post('email_Str', TRUE);
            $phone_Str = $this->input->post('phone_Str');
            $learn_name_Str = $this->input->post('learn_name_Str');
            $learn_time_Str = $this->input->post('learn_time_Str');
            $content_Str = $this->input->post('content_Str', TRUE);

	        //建構ContactAsk物件，並且更新
	        $ContactLearn = new ContactLearn();
	        $ContactLearn->construct(array(
	            'name_Str' => $name_Str,
	            'email_Str' => $email_Str,
	            'phone_Str' => $phone_Str,
	            'learn_name_Str' => $learn_name_Str,
	            'learn_time_Str' => $learn_time_Str,
	            'content_Str' => $content_Str,
	            'status_process_Num' => 1
	        ));
	        $ContactLearn->update();

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'contact'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'contact'
            ));
        }
	}

}

?>