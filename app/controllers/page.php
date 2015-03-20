<?php

class page_controller extends FS_controller {

    public $data = array();
    
	public function _remap($page = 'index'){
        $data = $this->data;
        
        if(empty($page))
        {
            $page = 'index';
        }
		//沒有這個頁面
		if ( ! file_exists('app/views/page/'.$page.'.php')){
			show_404();
		}
        
        //global
		$data['global']['style'][] = 'style';
        if($page == 'index')
        {
		  $data['global']['style'][] = 'index';
        }
        else
        {
		  $data['global']['style'][] = $page;
        }
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		
		//輸出模板
		$this->load->view('page/'.$page, $data);
	}
}

?>