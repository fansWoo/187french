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
            $('.boxArea.two , .box3').removeClass('hover');
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
		<img src="app/img/index/dessert06.png" class="dessert06">
		<div class="contantArea">
				<img src="app/img/course/title3.png" class="title">
			<div class="boxArea">
				<?foreach($CourseList->obj_Arr as $key => $value_Course):?>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="course/view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
							</div>
						</a>
					</div>
					<div class="textBox">
						<h2><?=$value_Course->nane_Str?></h2>
						<?=$value_Course->content_Html?>
					</div>
				</div>
				<?endforeach?>
			</div>
			<div class="number_box">
				<a href="news" class="prev">
					<img src="app/img/arrow3.png">
				</a>
				<div class="number">
					<a href="page/course_series">1</a>
					<a href="page/course_series">2</a>
					<a href="page/course_series">3</a>
					<a href="page/course_series">4</a>
					<a href="page/course_series">5</a>
				</div>
				<a href="news" class="next">
					<img src="app/img/arrow.png">
				</a>
			</div>
		</div>	

		<img src="app/img/index/dessert01.png" class="dessert01">	
		
	</div>
	
<?=$temp['footer']?>