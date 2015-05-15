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
				
			<div class="boxArea one">
				<div class="topBox">
					<img src="app/img/news/title.png" class="title">
				</div>
				<div class="news_item">
					<div class="right_text">
						<h2><?=$NoteField->title_Str?></h2>
						<div><?=$NoteField->content_Html?></div>
					</div>
					
				</div>
				<?if($NoteField->signup_Num == 1):?>
				<a href="contact" class="box3">
					<div class="border">
						<div class="border_a"></div>
						<div class="border_b"></div>
						<div class="border_c"></div>
						<div class="border_d"></div>
						<div class="hoverBox"></div>
					</div>
					<img src="app/img/course/sign.png" class="sign">
				</a>
				<?endif?>
			</div>
		</div>	
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>