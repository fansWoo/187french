<?=$temp['header_up']?>
<script>
$(function(){
   $(document).on('click', '.addClassidSelect', function(){
       $('.pClassid:last').clone().css('display','block').insertAfter('.pClassid:last');
   });
});
</script>
<?=$temp['admin_header_down']?>
<h2>文章管理 - 新增文章</h2>
<div class="contentBox allWidth">
	<h3>新增文章</h3>
	<h4>請填寫欲新增之文章資訊</h4>
	<?php echo form_open('admin/contact/postcontact/post') ?>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                文章標題
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="title" placeholder="請輸入網站標題名稱" value="<?if(isset($contact['title'])):?><?=$contact['title']?><?endif?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                文章分類標籤
            </div>
            <div class="spanLineLeft width300">
                <?if(isset($contact['classid_array'])):?>
                <?foreach($contact['classid_array'] as $key => $value):?>
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
                <p class="pClassid" style="display:none;">
                    <select name="classid_array[]">
                        <option value="0">沒有分類標籤</option>
                        <?foreach($class_list_array as $key2 => $value2):?>
                        <option value="<?=$value2['classid']?>"><?=$value2['classname']?></option>
                        <?endforeach?>
                    </select>
                </p>
                <p><span class="ahref addClassidSelect">新增分類標籤</span> | <a href="admin/contact/classlist">管理分類標籤</a></p>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                文章內容
            </div>
            <div class="spanLineRight">
                <textarea cols="80" id="content" name="content" rows="10">
                <?if(isset($contact['content'])):?><?=$contact['content']?><?endif?>
                </textarea>
                <script src="app/js/ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'content', {
                        toolbar: 'bbcode',
                        extraPlugins: 'bbcode'
                    });
                </script>
		    </div>
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <p style="display:none;">
                    您目前使用的是 fansWoo BBCode 安全編輯器，您還可以切換成：
                    <a href="">文章編輯器</a> / 
                    <a href="">網頁編輯器</a>
                </p>
                <p class="gray">建議使用 fansWoo BBCode 安全編輯器進行內容編輯，可有效降低程式碼複寫並且防止第三方駭客使用XSS攻擊</p>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                優先排序指數
            </div>
            <div class="spanLineLeft">
                <input type="number" class="text width100" name="prioritynum" value="<?if(isset($contact['prioritynum'])):?><?=$contact['prioritynum']?><?endif?>">
            </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <p class="gray">目前文章排序方式為???，若需變更文章排序方式，請於「文章設置」後台變更</p>
            </div>
		</div>
	</div>
	<div class="spanLine spanSubmit">
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <?if(isset($contact['contactid'])):?><input type="hidden" name="contactid" value="<?=$contact['contactid']?>"><?endif?>
                <input type="submit" class="submit" value="<?if(isset($contact['contactid'])):?>儲存變更<?else:?>新增文章<?endif?>">
                <?if( empty($contact['contactid']) === FALSE ):?><span class="submit gray" onClick="fanScript.check_href_action('確定要刪除這篇文章？', 'admin/contact/delete_contact/<?=$contact['contactid']?>/<?=$this->security->get_csrf_hash()?>');">刪除文章</span><?endif?>
            </div>
        </div>
	</div>
	</form>
</div>
<?=$temp['admin_footer']?>