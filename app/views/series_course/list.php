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
	<img src="app/img/index/dessert02.png" class="dessert02">
	
<div class="Area">
		<img src="app/img/index/dessert05.png" class="dessert05">
		<div class="contantArea">
			<img src="app/img/course/title3.png" class="title">
			<div class="top_button">
				<a href="series_course/" class="buttonBox<?if(empty($search_class_slug_Str)):?> clicked<?endif?>">全部分類</a>
    			<?foreach($class_ClassMetaList->obj_Arr as $key => $value_ClassMeta):?>
				<a href="series_course/?class_slug=<?=$value_ClassMeta->slug_Str?>" class="buttonBox<?if($search_class_slug_Str == $value_ClassMeta->slug_Str):?> clicked<?endif?>"><?=$value_ClassMeta->classname_Str?></a>
				<?endforeach?>
			</div>
			<div class="top_introduction">
				<h1>初級系列課</h1>
				<p>「187巷的法式」推出的初級系列課的十堂中包含了8個類別、17個初階的法式甜點。沒有任何經驗的新手，可以在這30個小時中，透過理論的學習和實作的經驗，讓您對法式甜點有更進一步的認識。</p>
				<p class="price">30,000元/10堂 (含個人材料和教學費用)<p>
			</div>
			<div class="boxArea">
				<?foreach($CourseSeriesList->obj_Arr as $key => $value_CourseSeries):?>
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<?if(!empty($value_CourseSeries->pic_PicObjList->obj_Arr[0]->path_Arr['w300h300'])):?>
								<img src="<?=$value_CourseSeries->pic_PicObjList->obj_Arr[0]->path_Arr['w300h300']?>" class="img">
								<?endif?>
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
					<div class="textBox">
						<h2><?=$value_CourseSeries->name_Str?><br><?=$value_CourseSeries->name_french_Str?></h2>
						<p><span>學習重點 :</span> <?=$value_CourseSeries->precautions_Str?></p>
					</div>
				</div>
				<?endforeach?>
			</div>
			<div class="pageLinks"><?=$page_links?></div>
		</div>
		
	</div>
	
<?=$temp['footer']?>