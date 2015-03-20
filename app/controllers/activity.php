<?php

class activity_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

		//沒有這個頁面
		if ( ! file_exists('app/views/activity/view.php')){
			show_404();
		}
        
        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'activity/activity';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('activity/list', $data);
	}

	public function view()
	{
        $data = $this->data;

		//沒有這個頁面
		if ( ! file_exists('app/views/activity/view.php')){
			show_404();
		}
        
        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'activity/activity_view';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('activity/view', $data);
	}
}

?>