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
			<?for($i=0;$i<5;$i++):?>
			<div class="news_item">
				<a href="page/news_news_view">
					<div class="pic">
						<img src="app/img/news/pic1.jpg">
					</div>
				</a>
				<div class="right_text">
					<h2>【每月課程】2月份課程資訊 </h2>
					<div class="text">
						<p>2月份的課程資訊，歡迎下載!...</p>
					</div>
				</div>
				<a href="page/news_news_view">
					<div class="more">more</div>
				</a>
			</div>
			<?endfor?>
		</div>
	</div>
	<img src="app/img/index/dessert01.png" class="dessert01">
</div>
<?=$temp['footer']?>