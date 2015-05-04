<?=$temp['header_up']?>
<script>
$(function(){
    $(document).on('click', '.buttonArea .box', function(){
        var bgname = $(this).data('bgname');
		$('.buttonArea .box').removeClass('clicked');
		$(this).addClass('clicked');
        //新增的
        $('.story').removeClass('hover');
        $('.story[data-bgname=' + bgname + ']').addClass('hover');
    });
});
$(document).on('click', '.scroll_arrow', function(){
        $("body").animate({scrollTop: 0}, 1200, 'swing');
    });
	
	$(document).scroll(function(){
        var scroll_top = $(document).scrollTop();
        if(scroll_top == 0){
            $('.boxArea.two , .box3 ' ).removeClass('hover');
            $('.boxArea.one').addClass('hover');
        }
        else if(scroll_top >= 400 && scroll_top < 850){
            $('.boxArea.two').removeClass('hover');
            $('.boxArea.two').addClass('hover');
        }
		 else if(scroll_top >= 850 && scroll_top <1500){
            $('.box3').removeClass('hover');
            $('.box3').addClass('hover');
        }
        
    });
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<img src="app/img/index/dessert04.png" class="dessert04">
<div class="Area">
	<img src="app/img/index/dessert02.png" class="dessert02">
	<img src="app/img/index/dessert03.png" class="dessert03">
	<div class="contantArea">
		<img src="app/img/news/knowledge/title.png" class="title">
		<div class="boxArea one">
			<?foreach($NoteFieldList->obj_Arr as $key => $value_Note):?>
			<div class="news_item">
				<?
				$this->load->library('simple_html_dom');
				$html = new simple_html_dom();
				$html->load($value_Note->content_Html);
				$img = $html->find('img', 0);
				?>
				<?if(!empty($img->src)):?>
				<a href="news/view/?noteid=<?=$value_Note->noteid_Num?>">
					<div class="pic">
						<img src="<?=$img->src?>">
					</div>
				</a>
				<?endif?>
				<div class="right_text">
					<h2><a href="knowledge/view/?noteid=<?=$value_Note->noteid_Num?>"><?=$value_Note->title_Str?></a></h2>
					<div class="text">
						<?=mb_substr(strip_tags($value_Note->content_Html), 0, 150, 'utf-8')?>
					</div>
				</div>
				<a href="knowledge/view/?noteid=<?=$value_Note->noteid_Num?>">
					<div class="more">more</div>
				</a>
			</div>
			<?endforeach?>
    		<div class="pageLinks"><?=$page_links?></div>
		</div>
	</div>
</div>
<?=$temp['footer']?>