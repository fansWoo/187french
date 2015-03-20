<?=$temp['header_up']?>
<?=$temp['admin_header_down']?>
<h2>動態頁面設置 - 基本設置</h2>
<div class="contentBox allWidth">
	<h3>動態頁面顯示設置</h3>
	<h4>請填寫前台動態頁面顯示設置，此設置之設置將影響網站前台之顯示</h4>
	<?php echo form_open('admin/websiteset/set/title') ?>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                動態頁面排序方式
            </div>
            <div class="spanLineLeft">
                <select name="order" id="ordey">
                    <option value="date">依照最新發表日期</option>
                    <option value="priority">依照優先排序指數</option>
                </select>
            </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
                <p class="gray">本設置為前台動態頁面排序之方式設定</p>
            </div>
		</div>
	</div>
	<div class="spanLine">
	    <div class="spanStage">
            <div class="spanLineLeft">
                動態頁面顯示數量
            </div>
            <div class="spanLineLeft width100">
			    <input type="number" class="text width100" min="1" max="30" name="website_title_name" value="">
            </div>
		</div>
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
		    	<p class="gray">本設置為前台動態頁面每頁顯示之數量</p>
            </div>
		</div>
	</div>
	<div class="spanLine spanSubmit">
	    <div class="spanStage">
            <div class="spanLineLeft">
            </div>
            <div class="spanLineRight">
		        <input type="submit" class="submit" value="儲存變更">
            </div>
		</div>
	</div>
	</form>
</div>
<?=$temp['admin_footer']?>