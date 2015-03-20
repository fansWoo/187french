<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>動態頁面管理 - 動態頁面列表</h2>
<div class="contentBox allWidth">
	<h3>動態頁面列表</h3>
	<h4>請填寫欲新增或更改之動態頁面</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/page/postpage" class="button">新增動態頁面</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的動態頁面名稱" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			動態頁面ID
        </div>
        <div class="spanLineLeft text width500">
			動態頁面名稱
        </div>
	</div>
    <?foreach($page_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['pageid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/page/postpage/edit/<?=$value['pageid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/page/postpage/edit/<?=$value['pageid']?>">編輯</a> | 
            <span class="ahref" onClick="fanScript.check_href_action('確定要刪除這篇文章？', 'admin/page/delete_page/<?=$value['pageid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
</div>
<?=$temp['admin_footer']?>