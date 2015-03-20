<?=$temp['header_up']?>
<script>
    $(function(){
        
    });
    function check_action(message, url){
        var message;
        var url;
        var answer = confirm(message);
        if (answer){
            location.href = url;
        }
    }
</script>
<?=$temp['admin_header_down']?>
<h2>動態頁面管理 - 動態頁面列表</h2>
<div class="contentBox allWidth">
	<h3>動態頁面列表</h3>
	<h4>請填寫欲新增或更改之動態頁面</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/dynamic/postdynamic" class="button">新增動態頁面</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的動態頁面標題" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			動態頁面ID
        </div>
        <div class="spanLineLeft text width500">
			動態頁面標題
        </div>
	</div>
    <?foreach($dynamic_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['dynamicid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/dynamic/postdynamic/edit/<?=$value['dynamicid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/dynamic/postdynamic/edit/<?=$value['dynamicid']?>">編輯</a> | 
            <span class="ahref" onClick="check_action('確定要刪除這篇動態頁面？', 'admin/dynamic/delete_dynamic/<?=$value['dynamicid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
</div>
<?=$temp['admin_footer']?>