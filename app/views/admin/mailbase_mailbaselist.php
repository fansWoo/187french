<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>電子郵件管理 - 郵件列表</h2>
<div class="contentBox allWidth">
	<h3>電子郵件列表</h3>
	<h4>請填寫欲新增或更改之電子郵件</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/mailbase/postmailbase" class="button">新增電子郵件</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的電子郵件標題" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			電子郵件ID
        </div>
        <div class="spanLineLeft text width500">
			電子郵件標題
        </div>
	</div>
    <?foreach($mailbase_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['mailbaseid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/mailbase/postmailbase/edit/<?=$value['mailbaseid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/mailbase/postmailbase/edit/<?=$value['mailbaseid']?>">編輯</a> | 
            <span class="ahref" onClick="fanScript.check_href_action('確定要刪除這個標籤？', 'admin/mailbase/delete_mailbase/<?=$value['mailbaseid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
    <div class="pageLink"><?=$mailbase_links?></div>
</div>
<?=$temp['admin_footer']?>