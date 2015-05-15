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
	<img src="app/img/index/dessert06.png" class="dessert06">
	
<div class="Area">
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert05.png" class="dessert05">
		<div class="contantArea">
			<div class="topBox">
				<img src="app/img/course/title.png" class="title">
			</div>	
			<div class="boxArea">
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<img src="<?=$CourseMonth->pic_PicObjList->obj_Arr[0]->path_Arr['w0h0']?>" class="img">
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
				</div>
				<div class="box2">
					<div class="leftbox">
						<h2><?=$CourseMonth->name_Str?></h2>
						<div class="box">
							<div class="circle">上課時間</div>
							<div class="right">
								<?=nl2br($CourseMonth->coursetime_Str)?>
							</div>
						</div>
						<div class="box">
							<div class="circle">課程費用</div>
							<div class="right">
								<p>NT$ <?=$CourseMonth->price_Num?></p>
								<p>(含教學及個人實作食材費用)</p>
								
							</div>
						</div>
						<div class="box">						
							<div class="circle">注意事項</div>
							<div class="right">
								<p><?=$CourseMonth->precautions_Str?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="box1">
					<?=$CourseMonth->content_Html?>
				</div>
				<a href="contact"><div class="box3">
					<div class="border">
						<div class="border_a"></div>
						<div class="border_b"></div>
						<div class="border_c"></div>
						<div class="border_d"></div>
						<div class="hoverBox"></div>
					</div>
					
					<img src="app/img/course/sign.png" class="sign">
				</div></a>
			</div>

		</div>	

		
	</div>
	
<?=$temp['footer']?>