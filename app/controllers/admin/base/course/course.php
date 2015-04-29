<?php

class course_controller extends FS_controller {

    protected $child1_name_Str = 'base';
    protected $child2_name_Str = 'course';
    protected $child3_name_Str = 'course';

    public function __construct()
    {
        parent::__construct();
        $data = $this->data;

        if($data['user']['uid'] == '')
        {
            $url = base_url('user/login/?url=admin');
            header('Location: '.$url);
        }

        $this->load->model('AdminModel');
        $this->AdminModel->child1_name_Str = $this->child1_name_Str;
        $this->AdminModel->child2_name_Str = $this->child2_name_Str;
        $this->AdminModel->child3_name_Str = $this->child3_name_Str;

        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function edit()
    {
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $this->AdminModel->get_data(array(
            'child4_name_Str' => 'edit'//管理分類名稱
        )));
            
        $courseid_Num = $this->input->get('courseid');

        $data['course_Course'] = new Course();
        $data['course_Course']->construct_db(array(
            'db_where_Arr' => array(
                'courseid_Num' => $courseid_Num
            )
        ));
        
        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'course'
            ),
            'model_name_Str' => 'ClassMeta',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));
        
        $data['class2_ClassMetaList'] = new ObjList();
        $data['class2_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'course_class2'
            ),
            'model_name_Str' => 'ClassMeta',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));

        //global
        $data['global']['style'][] = 'admin';
        $data['global']['js'][] = 'script_common';
        $data['global']['js'][] = 'admin';

        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['admin_header_down'] = $this->load->view('admin/temp/admin_header_down', $data, TRUE);
        $data['temp']['admin_footer'] = $this->load->view('admin/temp/admin_footer', $data, TRUE);

        //輸出模板
        $this->load->view('admin/'.$data['admin_child_url_Str'], $data);
    }

    public function edit_post()
    {
        $data = $this->data;//取得公用數據

        $this->form_validation->set_rules('name_Str', '產品名稱', 'required');

        if ($this->form_validation->run() !== FALSE)
        {
            //基本post欄位
            $courseid_Num = $this->input->post('courseid_Num', TRUE);
            $name_Str = $this->input->post('name_Str', TRUE);
            $price_Num = $this->input->post('price_Num', TRUE);
            $synopsis_Str = $this->input->post('synopsis_Str', TRUE);
            $classids_Arr = $this->input->post('classids_Arr', TRUE);
            $content_Str = $this->input->post('content_Str');
            $content_specification_Str = $this->input->post('content_specification_Str');
            $prioritynum_Num = $this->input->post('prioritynum_Num', TRUE);

            //主要圖片上傳（單張上傳）
            $mainpicids_Arr = $this->input->post('mainpicids_Arr', TRUE);
            $mainpicids_FileArr = $this->input->file('mainpicids_FileArr');
            if(!empty($mainpicids_FileArr['name']))
            {
                $mainpic_PicObj = new PicObj();
                $mainpic_PicObj->construct(array(
                    'picfile_FileArr' => $mainpicids_FileArr,
                    'thumb_Str' => 'w50h50,w300h300,w600h600'
                ));
                $mainpic_PicObj->upload();
                $mainpicids_Arr[] = $mainpic_PicObj->picid_Num;
            }

            //其它圖片上傳（多張上傳）
            $picids_Arr = $this->input->post('picids_Arr', TRUE);
            $picids_FilesArr = $this->input->file('picids_FilesArr');
            foreach($picids_FilesArr['name'] as $key => $value)
            {
                if(!empty($value))
                {
                    $pic_PicObj = new PicObj();
                    $pic_PicObj->construct(array(
                        'picfile_FileArr' => getfile_from_files(array(
                            'files_Arr' => $picids_FilesArr,
                            'key_Str' => $key
                        )),
                        'thumb_Str' => 'w50h50,w300h300,w600h600'
                    ));
                    $pic_PicObj->upload();
                    $picids_Arr[] = $pic_PicObj->picid_Num;
                }
            }

            //建構Course物件，並且更新
            $course_Course = new Course();
            $course_Course->construct(array(
                'courseid_Num' => $courseid_Num,
                'name_Str' => $name_Str,
                'price_Num' => $price_Num,
                'synopsis_Str' => $synopsis_Str,
                'mainpicids_Arr' => $mainpicids_Arr,
                'picids_Arr' => $picids_Arr,
                'classids_Arr' => $classids_Arr,
                'content_Str' => $content_Str,
                'content_specification_Str' => $content_specification_Str,
                'prioritynum_Num' => $prioritynum_Num
            ));
            $course_Course->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/course/course/tablelist'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/course/course/tablelist'
            ));
        }
    }

    public function tablelist()
    {
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $this->AdminModel->get_data(array(
            'child4_name_Str' => 'tablelist'//管理分類名稱
        )));

        $data['search_courseid_Num'] = $this->input->get('courseid');
        $data['search_name_Str'] = $this->input->get('name');
        $data['search_class_slug_Str'] = $this->input->get('class_slug');

        $limitstart_Num = $this->input->get('limitstart');
        $limitcount_Num = $this->input->get('limitcount');
        $limitcount_Num = !empty($limitcount_Num) ? $limitcount_Num : 20;

        $class_ClassMeta = new ClassMeta();
        $class_ClassMeta->construct_db(array(
            'db_where_Arr' => array(
                'slug_Str' => $data['search_class_slug_Str']
            )
        ));

        $data['course_CourseList'] = new ObjList();
        $data['course_CourseList']->construct_db(array(
            'db_where_Arr' => array(
                'courseid_Num' => $data['search_courseid_Num']
            ),
            'db_where_like_Arr' => array(
                'name_Str' => $data['search_name_Str']
            ),
            'db_where_or_Arr' => array(
                'classids' => array($class_ClassMeta->classid_Num)
            ),
            'db_orderby_Arr' => array(
                array('prioritynum', 'DESC'),
                array('courseid', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'Course',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['course_links'] = $data['course_CourseList']->create_links(array('base_url_Str' => 'admin/'.$data['child1_name_Str'].'/'.$data['child2_name_Str'].'/'.$data['child3_name_Str'].'/'.$data['child4_name_Str']));

        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'course'
            ),
            'model_name_Str' => 'ClassMeta',
            'limitstart_Num' => 0,
            'limitcount_Num' => 100
        ));

        //global
        $data['global']['style'][] = 'admin';
        $data['global']['js'][] = 'script_common';
        $data['global']['js'][] = 'admin';

        //temp
        $data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
        $data['temp']['admin_header_down'] = $this->load->view('admin/temp/admin_header_down', $data, TRUE);
        $data['temp']['admin_footer'] = $this->load->view('admin/temp/admin_footer', $data, TRUE);

        //輸出模板
        $this->load->view('admin/'.$data['admin_child_url_Str'], $data);

    }

    public function tablelist_post()
    {
        $data = $this->data;//取得公用數據

        $search_courseid_Num = $this->input->post('search_courseid_Num', TRUE);
        $search_class_slug_Str = $this->input->post('search_class_slug_Str', TRUE);
        $search_name_Str = $this->input->post('search_name_Str', TRUE);

        $url_Str = base_url('admin/base/course/course/tablelist/?');

        if(!empty($search_courseid_Num))
        {
            $url_Str = $url_Str.'&courseid='.$search_courseid_Num;
        }

        if(!empty($search_class_slug_Str))
        {
            $url_Str = $url_Str.'&class_slug='.$search_class_slug_Str;
        }

        if(!empty($search_name_Str))
        {
            $url_Str = $url_Str.'&name='.$search_name_Str;
        }

        header("Location: $url_Str");
    }

    public function delete()
    {
        $hash_Str = $this->input->get('hash');
        $courseid_Num = $this->input->get('courseid');

        //CSRF過濾
        if($hash_Str == $this->security->get_csrf_hash())
        {
            $course_Course = new Course();
            $course_Course->construct(array('courseid_Num' => $courseid_Num));
            $course_Course->delete();

            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '刪除成功',
                'url' => 'admin/base/course/course/tablelist'
            ));
        }
        else
        {
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => 'hash驗證失敗，請使用標準瀏覽器進行刪除動作',
                'url' => 'admin/base/course/course/tablelist'
            ));
        }
    }

}
