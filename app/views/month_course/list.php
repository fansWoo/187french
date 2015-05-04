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
				<img src="app/img/course/title.png" class="title">
			<div class="boxArea">
				<?foreach($CourseMonthList->obj_Arr as $key => $value_CourseMonth):?>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="month_course/view/?month_courseid=<?=$value_CourseMonth->month_courseid_Num?>">
							<div class="picBox">
								<div class="pic">
									<?if(!empty($value_CourseMonth->pic_PicObjList->obj_Arr[0]->path_Arr['w300h300'])):?>
									<img src="<?=$value_CourseMonth->pic_PicObjList->obj_Arr[0]->path_Arr['w300h300']?>" class="img">
									<?endif?>
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
							</div>
						</a>
					</div>
					<div class="textBox">
						<h2><?=$value_CourseMonth->name_Str?></h2>
						<a href="month_course/view/?month_courseid=<?=$value_CourseMonth->month_courseid_Num?>"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<?endforeach?>
			</div>
			<div class="pageLinks"><?=$page_links?></div>
		</div>	

		
	</div>
	
<?=$temp['footer']?>