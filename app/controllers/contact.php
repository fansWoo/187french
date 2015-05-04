<?php

class contact_controller extends FS_controller {
    
	public function index()
	{
        $data = $this->data;

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
}

?>