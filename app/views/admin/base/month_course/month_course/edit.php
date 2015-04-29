<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2><?=$child2_title_Str?> - <?=$child3_title_Str?></h2>
<div class="contentBox allWidth">
    <h3><?=$child3_title_Str?> > <?if(!empty($month_course_CourseMonth->month_courseid_Num)):?>編輯<?else:?>新增<?endif?></h3>
	<h4>請填寫<?=$child3_title_Str?>之詳細資訊</h4>
	<?php echo form_open_multipart("admin/$child1_name_Str/$child2_name_Str/$child3_name_Str/{$child4_name_Str}_post/") ?>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品名稱
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="name_Str" placeholder="請輸入產品名稱" value="<?=$month_course_CourseMonth->name_Str?>">
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品售價
            </div>
            <div class="spanLineLeft">
                <input type="number" min="0" class="text" name="price_Num" placeholder="請輸入產品售價" value="<?=$month_course_CourseMonth->price_Num?>">
		    </div>
		</div>
	</div>
    <div class="spanLine">
        <div class="spanStage">
            <div class="spanLineLeft">
                課程時間1
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="coursetime1_Str" placeholder="請輸入課程時間" value="<?=$month_course_CourseMonth->coursetime1_Str?>">
            </div>
        </div>
    </div>
    <div class="spanLine">
        <div class="spanStage">
            <div class="spanLineLeft">
                課程時間2
            </div>
            <div class="spanLineLeft width500">
                <input type="text" class="text" name="coursetime2_Str" placeholder="請輸入課程時間" value="<?=$month_course_CourseMonth->coursetime2_Str?>">
            </div>
        </div>
    </div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品照片
            </div>
            <div class="spanLineLeft width500">
                <div><input type="file" name="picids_FilesArr[]" accept="image/*"></div>
                <?if(!empty($month_course_CourseMonth->pic_PicObjList->obj_Arr)):?>
                <div class="picidUploadList">
                    <?foreach($month_course_CourseMonth->pic_PicObjList->obj_Arr as $key => $value_PicObj):?>
                    <div fanswoo-picid="<?=$value_PicObj->picid_Num?>" class="picidUploadLi">
                        <div fanswoo-picDelete class="picDelete"></div>
                        <img src="<?=$value_PicObj->path_Arr['w50h50']?>">
                        <input type="hidden" name="picids_Arr[]" value="<?=$value_PicObj->picid_Num?>">
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
                <span class="gray">請上傳300x300之圖檔</span>
		    </div>
		</div>
	</div>
    <div class="spanLine">
        <div class="spanStage">
            <div class="spanLineLeft">
                分類標籤
            </div>
            <div class="spanLineLeft width300">
                <?if(!empty($month_course_CourseMonth->class_ClassMetaList->obj_Arr)):?>
                <div>
                    <select name="classids_Arr[]">
                        <option value="">沒有分類標籤</option>
                        <?foreach($class_ClassMetaList->obj_Arr as $key2 => $value2_ClassMeta):?>
                        <option value="<?=$value2_ClassMeta->classid_Num?>"<?if($month_course_CourseMonth->class_ClassMetaList->obj_Arr[0]->classid_Num == $value2_ClassMeta->classid_Num):?> selected<?endif?>><?=$value2_ClassMeta->classname_Str?></option>
                        <?endforeach?>
                    </select>
                </div>
                <?else:?>
                <div>
                    <select name="classids_Arr[]">
                        <option value="">沒有分類標籤</option>
                        <?foreach($class_ClassMetaList->obj_Arr as $key => $value_ClassMeta):?>
                        <option value="<?=$value_ClassMeta->classid_Num?>"><?=$value_ClassMeta->classname_Str?></option>
                        <?endforeach?>
                    </select>
                </div>
                <?endif?>
            </div>
        </div>
        <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineLeft width500">
                <a href="admin/<?=$child1_name_Str?>/<?=$child2_name_Str?>/classmeta/tablelist">管理分類標籤</a>
            </div>
        </div>
    </div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                注意事項
            </div>
            <div class="spanLineLeft width500">
                <textarea cols="80" id="precautions_Str" name="precautions_Str" rows="10"><?=$month_course_CourseMonth->precautions_Str?></textarea>
		    </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                產品介紹
            </div>
            <div class="spanLineRight">
                <textarea cols="80" id="content_Str" name="content_Str" rows="10"><?=$month_course_CourseMonth->content_Html?></textarea>
                <script src="app/js/ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'content_Str', {
                        toolbar: 'bbcode'
                    });
                </script>
		    </div>
            <div class="spanLineLeft">
            </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                優先排序指數
            </div>
            <div class="spanLineLeft">
                <input type="number" class="text width100" name="prioritynum_Num" value="<?=$month_course_CourseMonth->prioritynum_Num?>">
            </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
            </div>
		</div>
	</div>
    <?if(!empty($month_course_CourseMonth->month_courseid_Num)):?>
    <div class="spanLine">
        <div class="spanStage">
            <div class="spanLineLeft">
                更新日期
            </div>
            <div class="spanLineLeft">
                <?=$month_course_CourseMonth->updatetime_DateTime->datetime_Str?>
            </div>
        </div>
    </div>
    <?endif?>
	<div class="spanLine spanSubmit">
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <?if(!empty($month_course_CourseMonth->month_courseid_Num)):?><input type="hidden" name="month_courseid_Num" value="<?=$month_course_CourseMonth->month_courseid_Num?>"><?endif?>
                <input type="submit" class="submit" value="<?if(!empty($month_course_CourseMonth->month_courseid_Num)):?>儲存變更<?else:?>新增產品<?endif?>">
                <?if(!empty($month_course_CourseMonth->month_courseid_Num)):?><span class="submit gray" onClick="fanswoo.check_href_action('確定要刪除嗎？', 'admin/<?=$child1_name_Str?>/<?=$child2_name_Str?>/<?=$child3_name_Str?>/delete/?month_courseid=<?=$month_course_CourseMonth->month_courseid_Num?>&hash=<?=$this->security->get_csrf_hash()?>');">刪除<?=$child3_title_Str?></span><?endif?>
            </div>
        </div>
	</div>
	</form>
</div>
<?=$temp['admin_footer']?>