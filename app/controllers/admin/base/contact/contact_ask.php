<?php

class contact_ask_controller extends FS_controller {

    protected $child1_name_Str = 'base';
    protected $child2_name_Str = 'contact';
    protected $child3_name_Str = 'contact_ask';

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
            
        $contactid_Num = $this->input->get('contactid');

        $data['ContactAsk'] = new ContactAsk();
        $data['ContactAsk']->construct_db(array(
            'db_where_Arr' => array(
                'contactid_Num' => $contactid_Num
            )
        ));
        
        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'contact_ask'
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

        //基本post欄位
        $contactid_Num = $this->input->post('contactid_Num', TRUE);
        $status_process_Num = $this->input->post('status_process_Num');

        //建構ContactAsk物件，並且更新
        $ContactAsk = new ContactAsk();
        $ContactAsk->construct(array(
            'contactid_Num' => $contactid_Num,
            'status_process_Num' => $status_process_Num
        ));
        $ContactAsk->update(array(
            'db_update_Arr' => ['status_process']
        ));

        //送出成功訊息
        $this->load->model('Message');
        $this->Message->show(array(
            'message' => '設定成功',
            'url' => 'admin/base/contact/contact_ask/tablelist'
        ));
    }

    public function tablelist()
    {
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $this->AdminModel->get_data(array(
            'child4_name_Str' => 'tablelist'//管理分類名稱
        )));

        $data['search_contactid_Num'] = $this->input->get('contactid');
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

        $data['ContactAskList'] = new ObjList();
        $data['ContactAskList']->construct_db(array(
            'db_where_Arr' => array(
                'contactid_Num' => $data['search_contactid_Num']
            ),
            'db_where_like_Arr' => array(
                'name_Str' => $data['search_name_Str']
            ),
            'db_where_or_Arr' => array(
                'classids' => array($class_ClassMeta->classid_Num)
            ),
            'db_orderby_Arr' => array(
                array('contactid', 'DESC')
            ),
            'db_where_deletenull_Bln' => TRUE,
            'model_name_Str' => 'ContactAsk',
            'limitstart_Num' => $limitstart_Num,
            'limitcount_Num' => $limitcount_Num
        ));
        $data['page_links'] = $data['ContactAskList']->create_links(array('base_url_Str' => 'admin/'.$data['child1_name_Str'].'/'.$data['child2_name_Str'].'/'.$data['child3_name_Str'].'/'.$data['child4_name_Str']));

        $data['class_ClassMetaList'] = new ObjList();
        $data['class_ClassMetaList']->construct_db(array(
            'db_where_Arr' => array(
                'modelname_Str' => 'contact_ask'
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

        $search_contactid_Num = $this->input->post('search_contactid_Num', TRUE);
        $search_class_slug_Str = $this->input->post('search_class_slug_Str', TRUE);
        $search_name_Str = $this->input->post('search_name_Str', TRUE);

        $url_Str = base_url('admin/base/contact/contact_ask/tablelist/?');

        if(!empty($search_contactid_Num))
        {
            $url_Str = $url_Str.'&contactid='.$search_contactid_Num;
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
        $contactid_Num = $this->input->get('contactid');

        //CSRF過濾
        if($hash_Str == $this->security->get_csrf_hash())
        {
            $ContactAsk = new ContactAsk();
            $ContactAsk->construct(array('contactid_Num' => $contactid_Num));
            $ContactAsk->delete();

            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '刪除成功',
                'url' => 'admin/base/contact/contact_ask/tablelist'
            ));
        }
        else
        {
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => 'hash驗證失敗，請使用標準瀏覽器進行刪除動作',
                'url' => 'admin/base/contact/contact_ask/tablelist'
            ));
        }
    }

}
