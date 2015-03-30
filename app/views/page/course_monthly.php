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
		<img src="app/img/index/dessert03.png" class="dessert03">
		<img src="app/img/index/dessert06.png" class="dessert06">
		<div class="contantArea">
				<img src="app/img/course/title.png" class="title">
			<div class="boxArea">
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
									
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>	
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
				
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="page/course_monthly_view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>
							</div>
						</a>
					</div>
					<div class="textBox">
					
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>上課時間：</p>
						<p>3/07(六)14:00~17:00</p>
						<p>3/26(四)09:30~12:30</p>
						<a href="page/course_monthly_view"><div class="more">
							more
						</div></a>
					</div>
				</div>					
			</div>

		</div>	

		<img src="app/img/index/dessert01.png" class="dessert01">	
		
	</div>
	
<?=$temp['footer']?>