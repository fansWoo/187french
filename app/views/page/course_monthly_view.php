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
				<p>費南雪-原味、榛果、抹茶栗子</p>
			</div>	
			<div class="boxArea">
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<img src="app/img/course/pic_big.jpg" class="img">
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
				</div>
				<div class="box2">
					<div class="leftbox">
						<h2>費南雪-原味、榛果、抹茶栗子</h2>
						<div class="box">
							<div class="circle">上課時間</div>
							<div class="right">
								<p>3/07(六)14:00~17:00</p>
								<p>3/26(四)09:30~12:30</p>
							</div>
						</div>
						<div class="box">
							<div class="circle">課程費用</div>
							<div class="right">
								<p>3,000元</p>
								<p>(含教學及個人實作食材費用)</p>
								
							</div>
						</div>
						<div class="box">						
							<div class="circle">注意事項</div>
							<div class="right">
								<p>響應環保，請攜帶約18cm大小的保鮮盒或盒子裝成品。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box1">
					<p>這款來自法國的經典小蛋糕Financier，直接音譯便是大家所熟悉的「費南雪」，由字義翻則是「金融家蛋糕」!

					關於費南雪的由來，其實有個可愛的小故事。
					當時忙著投資、洽談生意的金融家們，每天都連吃飯的空檔沒有，於是在巴黎金融區的蛋糕師便發明了這種不用刀叉、不黏手的小糕點費南雪。

					除了長得像金磚外，還有兩個特點杏仁粉和榛果奶油，前者讓蛋糕充滿堅果香酥，後者則有焦糖奶油的獨特風味。

					這個看似簡單的小糕點，其實蘊藏了很多烘焙的基礎概念，焦化奶油該怎麼處理，才能香而不焦？常溫小糕點該怎麼澎的漂亮？怎麼保持濕潤的口感？
					三個口味：原味、榛果、抹茶栗子，一次學會吧！
					
					</p>
				</div>
				<a href=""><div class="box3">
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