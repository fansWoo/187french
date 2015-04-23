<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//會員群組權限管理，紀錄每個groupid的會員能夠使用那些功能
$config['group_purview_Arr'] = array(
	'0' => array(//超級管理員
	),
	'1' => array(//總管理員
		array('base', 'global', 'global'),
		array('base', 'pic', 'pic'),
		array('base', 'pic', 'album'),
		array('base', 'note', 'note'),
		array('base', 'note', 'classmeta'),
		array('base', 'dessert', 'dessert'),
		array('base', 'dessert', 'classmeta'),
		array('base', 'month_course', 'month_course'),
		array('base', 'month_course', 'classmeta'),
		array('base', 'courses', 'courses'),
		array('base', 'courses', 'classmeta'),
		array('base', 'order', 'order'),
		array('base', 'order', 'set'),
		array('user', 'global', 'global')
	),
	'2' => array(//管理員
	),
	'100' => array(//一般會員
		array('user', 'global', 'global'),
		array('user', 'order', 'order')
	),
	'101' => array(//進階會員
	)
);

//後台架構
$config['admin_sidebox'] = array(
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
						),
					)
				),
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
				'note' => array(
					'title' => '文章管理',
					'child3' => array(
						'note' => array(
							'title' => '文章',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '分類標籤',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
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
				'dessert' => array(
					'title' => '甜點販售',
					'child3' => array(
						'dessert' => array(
							'title' => '甜點',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '分類標籤',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'month_course' => array(
					'title' => '當月課程',
					'child3' => array(
						'month_course' => array(
							'title' => '課程',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '分類標籤',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'courses' => array(
					'title' => '專修班管理',
					'child3' => array(
						'courses' => array(
							'title' => '專修班',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '分類標籤',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						)
					)
				),
				'order' => array(
					'title' => '聯繫單管理',
					'child3' => array(
						'order' => array(
							'title' => '專修班',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'classmeta' => array(
							'title' => '分類標籤',
							'child4' => array(
								'edit' => array('title' => '編輯'),
								'tablelist' => array('title' => '列表')
							)
						),
						'set' => array(
							'title' => '設置',
							'child4' => array(
								'set' => array('title' => '設置')
							)
						)
					)
				)
			)
		),
		'user' => array(
			'title' => '我的帳號',
			'child2' => array(
				'global' => array(
					'title' => '基本資料',
					'child3' => array(
						'global' => array(
							'title' => '全域',
							'child4' => array(
								'user' => array('title' => '會員資料')
							)
						)
					)
				)
			)
		)
	);