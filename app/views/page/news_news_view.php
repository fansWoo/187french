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
				<p><a href="page/news_news">最新消息</a> > 2月份課程資訊</p>
			</div>
				<div class="news_item">
					<div class="right_text">
						<h2>【每月課程】2月份課程資訊</h2>
						<div class="pic">
							<img src="app/img/news/pic1.jpg">
						</div>
						<p>2月份的課程資訊，歡迎下載!</p>
						<p>每班4~6人小班教學</p>
						<p>個人材料，每位學員實際操作</p>
						<p>為響應環保，上課請攜帶18cm大小的保鮮盒</p>
						<div class="buttonBox">
							<a href="page/course_monthly"><div class="box3">
								<div class="border">
									<div class="border_a"></div>
									<div class="border_b"></div>
									<div class="border_c"></div>
									<div class="border_d"></div>
									<div class="hoverBox"></div>
								</div>
						
								<img src="app/img/course/sign2.png" class="sign">
							</div></a>
							<a href="page/contact"><div class="box3">
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
				
			
				
				
			</div>

		
		</div>	

		
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>