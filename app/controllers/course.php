<?php

class course_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 10;

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'slug' => 'news'
            )
        ));

        $data['CourseList'] = new ObjList();
        $data['CourseList']->construct_db(array(
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('updatetime', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'Course',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['CourseList']->create_links(array('base_url_Str' => 'course/'));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'course/list';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('course/list', $data);
	}

    public function view()
    {
        $data = $this->data;
            
        $courseid_Num = $this->input->get('courseid');

        $data['course_Course'] = new Course();
        $data['course_Course']->construct_db(array(
            'db_where_Arr' => array(
                'courseid_Num' => $courseid_Num
            )
        ));

        // echoe($data['course_Course']);

        //global
        $data['global']['style'][] = 'style';
        $data['global']['style'][] = 'course/view';
        
        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
        $data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
        $data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
        $data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
        
        //輸出模板
        $this->load->view('course/view', $data);
    }

}

?>