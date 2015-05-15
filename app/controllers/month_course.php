<?php

class month_course_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 20;

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'slug' => 'news'
            )
        ));

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
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['CourseMonthList']->create_links(array('base_url_Str' => 'month_course/'));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'month_course/list';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('month_course/list', $data);
	}

    public function view()
    {
        $data = $this->data;
            
        $month_courseid_Num = $this->input->get('month_courseid');

        $data['CourseMonth'] = new CourseMonth();
        $data['CourseMonth']->construct_db(array(
            'db_where_Arr' => array(
                'month_courseid' => $month_courseid_Num
            )
        ));

        //global
        $data['global']['style'][] = 'style';
        $data['global']['style'][] = 'month_course/view';
        
        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
        $data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
        $data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
        $data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
        
        //輸出模板
        $this->load->view('month_course/view', $data);
    }

}

?>