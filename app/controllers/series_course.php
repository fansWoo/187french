<?php

class series_course_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 20;

        $data['search_class_slug_Str'] = $this->input->get('class_slug');

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'modelname' => 'series_course',
                'slug' => $data['search_class_slug_Str']
            ),
            'db_where_deletenull_Bln' => FALSE
        ));

        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'series_course'
            ),
            'model_name_Str' => 'ClassMeta',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));

        $data['CourseSeriesList'] = new ObjList();
        $data['CourseSeriesList']->construct_db(array(
            'db_where_Arr' => array(
                'series_courseid_Num' => $data['search_series_courseid_Num']
            ),
            'db_where_like_Arr' => array(
                'name_Str' => $data['search_name_Str']
            ),
            'db_where_or_Arr' => array(
                'classids' => array($class_ClassMeta->classid_Num)
            ),
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('series_courseid', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'CourseSeries',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['CourseSeriesList']->create_links(array('base_url_Str' => 'series_course/'));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'series_course/list';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('series_course/list', $data);
	}

    public function view()
    {
        $data = $this->data;
            
        $series_courseid_Num = $this->input->get('series_courseid');

        $data['CourseSeries'] = new CourseSeries();
        $data['CourseSeries']->construct_db(array(
            'db_where_Arr' => array(
                'series_courseid' => $series_courseid_Num
            )
        ));

        //global
        $data['global']['style'][] = 'style';
        $data['global']['style'][] = 'series_course/view';
        
        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
        $data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
        $data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
        $data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
        
        //輸出模板
        $this->load->view('series_course/view', $data);
    }

}

?>