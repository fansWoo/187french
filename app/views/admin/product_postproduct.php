<?=$temp['header_up']?>
<script>
$(function(){
    $(document).on('change', '.fileMultiple', function(){
        if($(".fileMultiple :file[value='']").size() == 0)
        {
            $(this).clone().val('').insertAfter('.fileMultiple:last');
        }
        else
        {
            $(this).remove();
        }
    });
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
<h2>產品系統管理 - 新增產品</h2>
<div class="contentBox allWidth">
	<h3>新增產品</h3>
	<h4>請填寫欲新增之產品資訊</h4>
	<?php echo form_open_multipart('admin/product/postproduct/post') ?>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品名稱
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="title" placeholder="請輸入產品名稱" value="<?if(!empty($product['title'])):?><?=$product['title']?><?endif?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品照片
            </div>
            <div class="spanLineLeft width500">
                <div class="fileMultiple1"><input type="file" name="toppicid_file[]" accept="image/*" multiple></div>
                <?if(!empty($product['toppiclist_array'])):?>
                <div style="padding-top:10px;">
                    <div fanScript-picid="<?=$product['toppiclist_array'][0]['picid']?>" style="float:left; width:50px; height: 50px; border: 2px solid #FFF; position:relative; margin: 0 5px 5px 0;">
                        <div fanScript-picDelete style="position:absolute; top: 0; right: 0;">刪除</div>
                        <img src="<?=$product['toppiclist_array'][0]['path']['w50h50']?>">
                        <input type="hidden" name="toppicid_array[]" value="<?=$product['toppiclist_array'][0]['picid']?>">
                    </div>
                </div>
                <?endif?>
		    </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineLeft width500">
                請上傳200x200之圖檔
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品其它照片
            </div>
            <div class="spanLineLeft width500">
                <div class="fileMultiple"><input type="file" name="picid_file[]" accept="image/*" multiple></div>
                <?if($product['piclist_array']):?>
                <div style="padding-top:10px;">
                    <?foreach($product['piclist_array'] as $key => $value):?>
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
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineLeft width500">
                請上傳600x450之圖檔
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品分類標籤
            </div>
            <div class="spanLineLeft width300">
                <?if(!empty($product['classid_array'])):?>
                <?foreach($product['classid_array'] as $key => $value):?>
                <p class="pClassid">
                    <select name="classid_array[]">
                        <option value="0">沒有分類標籤</option>
                        <?foreach($class_list_array as $key2 => $value2):?>
                        <option value="<?=$value2['classid']?>"<?if($value == $value2['classid']):?> selected<?endif?>><?=$value2['classname']?></option>
                        <?endforeach?>
                    </select>
                </p>
                <?endforeach?>
                <?else:?>
                <p class="pClassid">
                    <select name="classid_array[]">
                        <option value="0">沒有分類標籤</option>
                        <?foreach($class_list_array as $key2 => $value2):?>
                        <option value="<?=$value2['classid']?>"><?=$value2['classname']?></option>
                        <?endforeach?>
                    </select>
                </p>
                <?endif?>
                <?if(0):?>
                <p class="pClassid" style="display:none;">
                    <select name="classid_array[]">
                        <option value="0">沒有分類標籤</option>
                        <?foreach($class_list_array as $key2 => $value2):?>
                        <option value="<?=$value2['classid']?>"><?=$value2['classname']?></option>
                        <?endforeach?>
                    </select>
                </p>
                <p><span class="ahref addClassidSelect">新增分類標籤</span> | <a href="admin/product/classlist">管理分類標籤</a></p>
                <?endif?>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                連結網址
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="href" placeholder="請輸入連結網址" value="<?if(!empty($product['href'])):?><?=$product['href']?><?endif?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品簡介
            </div>
            <div class="spanLineRight">
                <textarea cols="80" id="content" name="content" rows="10"><?if(!empty($product['content'])):?><?=$product['content']?><?endif?></textarea>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                優先排序指數
            </div>
            <div class="spanLineLeft">
                <input type="number" class="text width100" name="prioritynum" value="<?if(!empty($product['prioritynum'])):?><?=$product['prioritynum']?><?endif?>">
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
                <?if(!empty($product['productid'])):?><input type="hidden" name="productid" value="<?=$product['productid']?>"><?endif?>
                <input type="submit" class="submit" value="<?if(!empty($product['productid'])):?>儲存變更<?else:?>新增產品<?endif?>">
                <?if( empty($product['productid']) === FALSE ):?><span class="submit gray" onClick="fanScript.check_href_action('確定要刪除這個產品？', 'admin/product/delete_product/<?=$product['productid']?>/<?=$this->security->get_csrf_hash()?>');">刪除產品</span><?endif?>
            </div>
        </div>
	</div>
	</form>
</div>
<?=$temp['admin_footer']?>