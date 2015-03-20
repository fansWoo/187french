<?php

class AdminModel extends FS_Model {

    public $child1_name_Str = '';
    public $child2_name_Str = '';
    public $child3_name_Str = '';
    public $child4_name_Str = '';
    public $child1_title_Str = '';
    public $child2_title_Str = '';
    public $child3_title_Str = '';
    public $child4_title_Str = '';
    public $admin_child_url_Str = '';
	protected $ac_father_online = array(//目前開放的功能
		'global', 'advertising', 'pic', 'user',
		'product', 'showpiece', 'orders'
	);
	protected $sidebox_display_array = array('base', 'shop');//顯示的功能
	protected $ac_father_display = 'hidden';//此值若為display則會顯示不能使用之功能
	private $admin_sidebox = array(//後台架構
		'base' => array(
			'title' => '基本管理',
			'child2' => array(
				'global' => array(
					'title' => '全域管理',
					'child3' => array(
						'global' => array(
							'title' => '全域',
							'child4' => array(
								'common' => array('title' => '基本設置'),
								'seo' => array('title' => 'SEO標籤'),
								'plugin' =>array('title' => '第三方外掛')
							)
						)
					)
				),
				// 'webcontent' => array(
				// 	'title' => '內容管理',
				// 	'child3' => array(
				// 		'webcontent' => array(
				// 			'title' => '內容',
				// 			'child4' => array(
				// 				'edit' => array('title' => '首頁內容')
				// 			)
				// 		)
				// 	)
				// ),
				'advertising' => array(
					'title' => '廣告管理',
					'child3' => array(
						'advertising' => array(
							'title' => '廣告',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '廣告分類',
							'child4' => array(
								// 'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				// 'note' => array(
				// 	'title' => '文章管理',
				// 	'child3' => array(
				// 		'note' => array(
				// 			'title' => '文章',
				// 			'child4' => array(
				// 				'edit' => array('title' => '編輯'),
				// 				'tablelist' => array('title' => '列表')
				// 			)
				// 		),
				// 		'classmeta' => array(
				// 			'title' => '分類標籤',
				// 			'child4' => array(
				// 				'edit' => array('title' => '編輯'),
				// 				'tablelist' => array('title' => '列表')
				// 			)
				// 		)
				// 	)
				// ),
				'pic' => array(
					'title' => '照片管理',
					'child3' => array(
						'pic' => array(
							'title' => '照片',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'album' => array(
							'title' => '相簿',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'user' => array(
					'title' => '會員管理',
					'child3' => array(
						'user' => array(
							'title' => '會員',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '會員群組',
							'child4' => array(
								// 'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				// 'page' => array(
				// 	'title' => '動態頁面',
				// 	'child3' => array(
				// 		'page' => array(
				// 			'title' => '頁面',
				// 			'child4' => array(
				// 				'edit' => array('title' => '編輯'),
				// 				'tablelist' => array('title' => '列表')
				// 			)
				// 		),
				// 		'set' => array(
				// 			'title' => '設置',
				// 			'child4' => array(
				// 				'common' => array('title' => '一般')
				// 			)
				// 		)
				// 	)
				// )
			)
		),
		'shop' => array(
			'title' => '購物系統',
			'child2' => array(
				'product' => array(
					'title' => '銷售產品',
					'child3' => array(
						'product' => array(
							'title' => '產品',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '產品分類',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta2' => array(
							'title' => '二級分類',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'showpiece' => array(
					'title' => '租賃產品',
					'child3' => array(
						'showpiece' => array(
							'title' => '產品',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '產品分類',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta2' => array(
							'title' => '二級分類',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'orders' => array(
					'title' => '訂單管理',
					'child3' => array(
						'orders' => array(
							'title' => '訂單',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'set' => array(
							'title' => '設置',
							'child4' => array(
								'common' => array('title' => '一般')
							)
						)
					)
				)
			)
		)
	);
	public $data = array();

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data($arg)
	{
		$child4_name_Str = !empty($arg['child4_name_Str']) ? $arg['child4_name_Str'] : '';
		$child_data_Arr = $this->get_child($child4_name_Str);

		$data_Arr = $this->data;
		$data_Arr['admin_sidebox'] = $this->reset_sidebox();
		$data_Arr = array_merge($data_Arr, $child_data_Arr);

        //沒有這個頁面
        if ( ! file_exists('app/views/admin/'.$data_Arr['admin_child_url_Str']))
        {
            show_404();
        }

		return $data_Arr;
	}

	public function get_child($arg)
	{
		$child4_name_Str = $arg;

        $child1_name_Str = $this->child1_name_Str;
        $child2_name_Str = $this->child2_name_Str;
        $child3_name_Str = $this->child3_name_Str;

        $this->child4_name_Str = $child4_name_Str;

		$this->child1_title_Str = $this->admin_sidebox[$child1_name_Str]['title'];
		$this->child2_title_Str = $this->admin_sidebox[$child1_name_Str]['child2'][$child2_name_Str]['title'];
		$this->child3_title_Str = $this->admin_sidebox[$child1_name_Str]['child2'][$child2_name_Str]['child3'][$child3_name_Str]['title'];
		$this->child4_title_Str = $this->admin_sidebox[$child1_name_Str]['child2'][$child2_name_Str]['child3'][$child3_name_Str]['child4'][$child4_name_Str]['title'];

		$this->admin_child_url_Str = $this->child1_name_Str.'/'.$this->child2_name_Str.'/'.$this->child3_name_Str.'/'.$this->child4_name_Str.'.php';

		$return_Arr = array(
			'child1_name_Str' => $this->child1_name_Str,
			'child2_name_Str' => $this->child2_name_Str,
			'child3_name_Str' => $this->child3_name_Str,
			'child4_name_Str' => $this->child4_name_Str,
			'child1_title_Str' => $this->child1_title_Str,
			'child2_title_Str' => $this->child2_title_Str,
			'child3_title_Str' => $this->child3_title_Str,
			'child4_title_Str' => $this->child4_title_Str,
			'admin_child_url_Str' => $this->admin_child_url_Str
		);

		return $return_Arr;
	}

	public function reset_sidebox()
	{
		$child1_name_Str = $this->child1_name_Str;
		$child2_name_Str = $this->child2_name_Str;
		$child3_name_Str = $this->child3_name_Str;
		$child4_name_Str = $this->child4_name_Str;

		$admin_sidebox = $this->admin_sidebox;
		$sidebox_display_array = $this->sidebox_display_array;
		$ac_father_online = $this->ac_father_online;
		$ac_father_display = $this->ac_father_display;

		foreach($admin_sidebox as $key => $child1)
		{
	        if( in_array($key, $sidebox_display_array) )
	        {
		        foreach($child1['child2'] as $key2 => $child2)
		        {
		            foreach($child2['child3'] as $key3 => $child3)
		            {
			            foreach($child3['child4'] as $key4 => $child4)
			            {
				            if(
				                $key == $child1_name_Str &&
				                $key2 == $child2_name_Str &&
				                $key3 == $child3_name_Str &&
				                $key4 == $child4_name_Str
				            )
				            {
				                $admin_sidebox[$key]['child2'][$key2]['child3'][$key3]['child4'][$key4]['select'] = TRUE;
				                $admin_sidebox[$key]['child2'][$key2]['select'] = TRUE;
				                $admin_sidebox[$key]['select'] = TRUE;
				            }
				        }
		            }
		            if(in_array($key2, $ac_father_online) == FALSE)
		            {
		                if($ac_father_display == 'display')
		                {
		                    $admin_sidebox[$key]['child2'][$key2]['display'] = TRUE;
		                }
		                else
		                {
		                    unset($admin_sidebox[$key]['child2'][$key2]);
		                }
		            }
		        }
	        }
	        else
	        {
	            unset($admin_sidebox[$key]);
	        }
		}
		return $admin_sidebox;
	}
	
}