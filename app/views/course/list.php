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
		<img src="app/img/index/dessert06.png" class="dessert06">
		<div class="contantArea">
				<img src="app/img/course/title3.png" class="title">
			<div class="boxArea">
				<div class="itemArea">
					<div class="picBox_border">
						<a href="course/view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<!--<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>-->
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。 
						</p>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="course/view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<!--<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>-->
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。 
						</p>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="course/view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<!--<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>-->
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。 
						</p>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<a href="course/view">
							<div class="picBox">
								<div class="pic">
									<img src="app/img/course/pic.png" class="img">
									<img src="app/img/about/dessert/dot.png" class="dot">
								</div>
								<img src="app/img/about/dessert/shadow2.png" class="shadow2">
								<!--<div class="hoverBox">
									<p>這款來自法國的經典小蛋糕Fin<br>ancier，直接音譯便是大家所熟悉的「費南雪」...</p>
								</div>-->
							</div>
						</a>
					</div>
					<div class="textBox">
						
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<p>這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」! 關於費南雪的由來，其實有個可愛的小故事。 當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。 
						</p>
					</div>
				</div>
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