<?=$temp['header_up']?>
<script>
$(function(){
//    $(document).on('change', '.fileMultiple', function(){
//        if($(".fileMultiple :file[value='']").size() == 0)
//        {
//            $(this).clone().val('').insertAfter('.fileMultiple:last');
//        }
//        else
//        {
//            $(this).remove();
//        }
//    });
    $(document).on('click', '[fanScript-picDelete]', function(){
        var picid = $(this).parent('[fanScript-picid]').attr('fanScript-picid');
        $.ajax({
            url: 'ajax/pic/delete_pic/picid/' + picid,
            error: function(xhr){},
            success: function(response){
                $('[fanScript-picid=' + picid + ']').remove();
                alert('刪除成功')
            }
        });
    });
});
</script>
<?=$temp['admin_header_down']?>
<h2>動態頁面管理 - 新增動態頁面</h2>
<div class="contentBox allWidth">
	<h3>新增動態頁面</h3>
	<h4>請填寫欲新增之動態頁面資訊</h4>
	<?php echo form_open_multipart('admin/page/postpage/post') ?>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                動態頁面名稱
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="title" placeholder="請輸入動態頁面名稱" value="<?if(!empty($page['title'])):?><?=$page['title']?><?endif?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                動態頁面連結
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="href" placeholder="請輸入動態頁面連結" value="<?if(!empty($page['href'])):?><?=$page['href']?><?endif?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                照片上傳
            </div>
            <div class="spanLineLeft width500">
                <div class="fileMultiple"><input type="file" name="picid_file[]" accept="image/*"></div>
                <?if($page['piclist_array']):?>
                <div style="padding-top:10px;">
                    <?foreach($page['piclist_array'] as $key => $value):?>
                    <div fanScript-picid="<?=$value['picid']?>" style="float:left; width:50px; height: 50px; border: 2px solid #FFF; position:relative; margin: 0 5px 5px 0;">
                        <div fanScript-picDelete style="position:absolute; top: 0; right: 0;">刪除</div>
                        <img src="<?=$value['path']['w50h50']?>">
                        <input type="hidden" name="picid_array[]" value="<?=$value['picid']?>">
                    </div>
                    <?endforeach?>
                </div>
                <?endif?>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                優先排序指數
            </div>
            <div class="spanLineLeft">
                <input type="number" class="text width100" name="prioritynum" value="<?if(!empty($page['prioritynum'])):?><?=$page['prioritynum']?><?endif?>">
            </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
            </div>
		</div>
	</div>
	<div class="spanLine spanSubmit">
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <?if(!empty($page['pageid'])):?><input type="hidden" name="pageid" value="<?=$page['pageid']?>"><?endif?>
                <input type="submit" class="submit" value="<?if(!empty($page['pageid'])):?>儲存變更<?else:?>新增動態頁面<?endif?>">
                <?if( empty($page['pageid']) === FALSE ):?><span class="submit gray" onClick="fanScript.check_href_action('確定要刪除這個動態頁面？', 'admin/page/delete_page/<?=$page['pageid']?>/<?=$this->security->get_csrf_hash()?>');">刪除動態頁面</span><?endif?>
            </div>
        </div>
	</div>
	</form>
</div>
<?=$temp['admin_footer']?>