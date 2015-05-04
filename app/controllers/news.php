<?php

class news_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

		//沒有這個頁面
		if ( ! file_exists('app/views/news/list.php')){
			show_404();
		}

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 10;

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'slug' => 'news'
            )
        ));

        $data['NoteFieldList'] = new ObjList();
        $data['NoteFieldList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname' => 'note',
                'noteid' => $data['search_noteid_Num'],
                'classids' => 528518
            ),
            'db_where_like_Arr' => array(
                'title_Str' => $data['search_title_Str']
            ),
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('updatetime', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'NoteField',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['NoteFieldList']->create_links(array('base_url_Str' => 'news/'));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'news/list';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('news/list', $data);
	}

	public function view()
	{
        $data = $this->data;

		//沒有這個頁面
		if ( ! file_exists('app/views/news/view.php')){
			show_404();
		}

		$noteid = $this->input->get('noteid');
		$data['NoteField'] = new NoteField();
        $data['NoteField']->construct_db(array(
            'db_where_Arr' => array(
                'note.noteid' => $noteid
            )
        ));
        
        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'news/view';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('news/view', $data);
	}
}

?>