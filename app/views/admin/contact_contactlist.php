<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>文章管理 - 文章列表</h2>
<div class="contentBox allWidth">
	<h3>文章列表</h3>
	<h4>請填寫欲新增或更改之文章</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/contact/postcontact" class="button">新增文章</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的文章標題" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			文章ID
        </div>
        <div class="spanLineLeft text width500">
			文章標題
        </div>
	</div>
    <?foreach($contact_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['contactid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/contact/postcontact/edit/<?=$value['contactid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/contact/postcontact/edit/<?=$value['contactid']?>">編輯</a> | 
            <span class="ahref" onClick="fanScript.check_href_action('確定要刪除這個標籤？', 'admin/contact/delete_contact/<?=$value['contactid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
    <div class="pageLink"><?=$contact_links?></div>
</div>
<?=$temp['admin_footer']?>