<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>產品系統管理 - 產品列表</h2>
<div class="contentBox allWidth">
	<h3>產品列表</h3>
	<h4>請填寫欲新增或更改之產品</h4>
	<div class="spanLine noneBg">
        <div class="spanLineLeft">
			<a href="admin/product/postproduct" class="button">新增產品</a>
        </div>
        <div class="spanLineRight width300">
            <input type="text" class="floatright text" id="search" name="search" placeholder="請輸入想要搜尋的產品名稱" style="display:none;">
        </div>
	</div>
	<div class="spanLine tableTitle">
        <div class="spanLineLeft text width100">
			產品ID
        </div>
        <div class="spanLineLeft text width500">
			產品名稱
        </div>
	</div>
    <?foreach($product_list as $key => $value):?>
    <div class="spanLine">
        <div class="spanLineLeft text width100">
            <?=$value['productid']?>
        </div>
        <div class="spanLineLeft text width500">
            <a href="admin/product/postproduct/edit/<?=$value['productid']?>"><?=$value['title']?></a>
        </div>
        <div class="spanLineLeft width300 hoverHidden">
            <a href="admin/product/postproduct/edit/<?=$value['productid']?>">編輯</a> | 
            <span class="ahref" onClick="fanScript.check_href_action('確定要刪除這篇文章？', 'admin/product/delete_product/<?=$value['productid']?>/<?=$this->security->get_csrf_hash()?>');">刪除</span>
        </div>
	</div>
    <?endforeach?>
    <div class="pageLink"><?=$product_links?></div>
</div>
<?=$temp['admin_footer']?>