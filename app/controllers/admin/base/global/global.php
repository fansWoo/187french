<?php

class global_controller extends FS_controller {

    protected $child1_name_Str = 'base';
    protected $child2_name_Str = 'global';
    protected $child3_name_Str = 'global';

    public function __construct()
    {
        parent::__construct();
        $data = $this->data;

        if($data['user']['uid'] == '')
        {
            $url = base_url('user/login');
            header('Location: '.$url);
        }

        $this->load->model('AdminModel');
        $this->AdminModel->child1_name_Str = $this->child1_name_Str;
        $this->AdminModel->child2_name_Str = $this->child2_name_Str;
        $this->AdminModel->child3_name_Str = $this->child3_name_Str;

        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function common()
    {
        $child_data_Arr = $this->AdminModel->get_child('common');//管理分類類別名稱
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $child_data_Arr);

        //沒有這個頁面
        if ( ! file_exists('app/views/admin/'.$data['admin_child_url_Str']))
        {
            show_404();
        }

        //view sidebox設定
        $data['admin_sidebox'] = $this->AdminModel->reset_sidebox();

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

    public function common_title_post()
    {

        $this->form_validation->set_rules('website_title_name', '網站標題名稱', 'required');

        if ($this->form_validation->run() === TRUE)
        {
            $website_title_name = $this->input->post('website_title_name', TRUE);
            $website_title_introduction = $this->input->post('website_title_introduction', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_title_name',
                        'value_Str' => $website_title_name
                    ),
                    array(
                        'keyword_Str' => 'website_title_introduction',
                        'value_Str' => $website_title_introduction
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/common'
            ));
        }
        else
        {
            //送出失敗訊息
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/common'
            ));
        }
    }

    public function common_webname_post()
    {

        $this->form_validation->set_rules('website_name', '網站名稱', 'required');
        $this->form_validation->set_rules('website_logo', '網站LOGO', 'required');
                
        if ($this->form_validation->run() !== FALSE)
        {
            $website_name = $this->input->post('website_name', TRUE);
            $website_logo = $this->input->post('website_logo', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_name',
                        'value_Str' => $website_name
                    ),
                    array(
                        'keyword_Str' => 'website_logo',
                        'value_Str' => $website_logo
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/common'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/common'
            ));
        }
    }

    public function common_email_post()
    {

        $this->form_validation->set_rules('website_email', '網站電子郵件', 'required');
                
        if ($this->form_validation->run() === TRUE)
        {
            $website_email = $this->input->post('website_email', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_email',
                        'value_Str' => $website_email
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/common'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/common'
            ));
        }
    }
    
    public function seo($input = '')
    {
        $child_data_Arr = $this->AdminModel->get_child('seo');//管理分類類別名稱
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $child_data_Arr);

        //沒有這個頁面
        if ( ! file_exists('app/views/admin/'.$data['admin_child_url_Str']))
        {
            show_404();
        }

        //view sidebox設定
        $data['admin_sidebox'] = $this->AdminModel->reset_sidebox();
        
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

    public function seo_post()
    {
        $this->form_validation->set_rules('website_metatag', 'SEO標籤', 'required');
                
        if ($this->form_validation->run() === TRUE)
        {
            $website_metatag = $this->input->post('website_metatag', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_metatag',
                        'value_Str' => $website_metatag
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/seo'
            ));
        }
        else
        {
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/seo'
            ));
        }
    }
    
    public function plugin($input = '')
    {
        $child_data_Arr = $this->AdminModel->get_child('plugin');//管理分類類別名稱
        $data = $this->data;//取得公用數據
        $data = array_merge($data, $child_data_Arr);

        //沒有這個頁面
        if ( ! file_exists('app/views/admin/'.$data['admin_child_url_Str']))
        {
            show_404();
        }

        //view sidebox設定
        $data['admin_sidebox'] = $this->AdminModel->reset_sidebox();
        
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

    public function plugin_ga_post()
    {

        $this->form_validation->set_rules('website_script_plugin_ga', 'GA Script Plugin');

        if ($this->form_validation->run() === TRUE)
        {
            $website_script_plugin_ga = $this->input->post('website_script_plugin_ga', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_script_plugin_ga',
                        'value_Str' => $website_script_plugin_ga
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/plugin'
            ));
        }
        else
        {
            //送出失敗訊息
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/plugin'
            ));
        }
    }

    public function plugin_fb_post()
    {
        $this->form_validation->set_rules('website_script_plugin_fb', 'Custom Script Plugin');

        if ($this->form_validation->run() === TRUE)
        {
            $website_script_plugin_fb = $this->input->post('website_script_plugin_fb', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_script_plugin_fb',
                        'value_Str' => $website_script_plugin_fb
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/plugin'
            ));
        }
        else
        {
            //送出失敗訊息
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/plugin'
            ));
        }
    }

    public function plugin_custom_post()
    {

        $this->form_validation->set_rules('website_script_plugin_custom', 'Custom Script Plugin');

        if ($this->form_validation->run() === TRUE)
        {
            $website_script_plugin_custom = $this->input->post('website_script_plugin_custom', TRUE);

            $SettingList = new SettingList();
            $SettingList->construct(array(
                'construct_Arr' => array(
                    array(
                        'keyword_Str' => 'website_script_plugin_custom',
                        'value_Str' => $website_script_plugin_custom
                    )
                )
            ));
            $SettingList->update(array());

            //送出成功訊息
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => '設定成功',
                'url' => 'admin/base/global/global/plugin'
            ));
        }
        else
        {
            //送出失敗訊息
            $validation_errors_Str = validation_errors();
            $validation_errors_Str = !empty($validation_errors_Str) ? $validation_errors_Str : '設定錯誤' ;
            $this->load->model('Message');
            $this->Message->show(array(
                'message' => $validation_errors_Str,
                'url' => 'admin/base/global/global/plugin'
            ));
        }
    }

}

?>