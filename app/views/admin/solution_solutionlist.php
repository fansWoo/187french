<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>解決方案管理 - 解決方案列表</h2>
<div class="contentBox allWidth">
	<h3>解決方案列表</h3>
	<h4>請填寫欲新增或更改之解決方案</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/solution/postsolution" class="button">新增解決方案</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的解決方案名稱" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			解決方案ID
        </div>
        <div class="spanLineLeft text width500">
			解決方案名稱
        </div>
	</div>
    <?foreach($solution_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['solutionid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/solution/postsolution/edit/<?=$value['solutionid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/solution/postsolution/edit/<?=$value['solutionid']?>">編輯</a> | 
            <span class="ahref" onClick="fanScript.check_href_action('確定要刪除這篇解決方案？', 'admin/solution/delete_solution/<?=$value['solutionid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
    <div class="pageLink"><?=$solution_links?></div>
</div>
<?=$temp['admin_footer']?>