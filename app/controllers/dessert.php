<?php

class dessert_controller extends FS_controller {

	public function index()
	{
        $data = $this->data;

        $data['search_class_slug_Str'] = $this->input->get('class_slug');

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'modelname' => 'dessert',
                'slug' => $data['search_class_slug_Str']
            ),
            'db_where_deletenull_Bln' => FALSE
        ));

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 1;

        $data['dessert_DessertList'] = new ObjList();
        $data['dessert_DessertList']->construct_db(array(
            'db_where_Arr' => array(
                'dessertid_Num' => $data['search_dessertid_Num']
            ),
            'db_where_like_Arr' => array(
                'name_Str' => $data['search_name_Str']
            ),
            'db_where_or_Arr' => array(
                'classids' => array($class_ClassMeta->classid_Num)
            ),
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('dessertid', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'Dessert',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['dessert_DessertList']->create_links(array('base_url_Str' => 'dessert/?class_slug='.$data['search_class_slug_Str']));

        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'dessert'
            ),
            'model_name_Str' => 'ClassMeta',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));

        //global
		$data['global']['style'][] = 'style';
        $data['global']['style'][] = 'dessert/list';
        
        //temp
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		$data['temp']['leftmenu'] = $this->load->view('temp/leftmenu', $data, TRUE);
		
		//輸出模板
		$this->load->view('dessert/list', $data);
	}
}

?>