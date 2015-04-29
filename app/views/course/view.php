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
				<img src="app/img/course/title2.png" class="title">
			<div class="boxArea">
				<div class="top_introduction">
					<h1>馬卡龍專修班</h1>
					<div class="box">
						<p>最新開課時間：4/9（四）~4/10(五) 10:00~16:00</p>
						<p>課程費用：15,000元</p>
					</div>
				</div>
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<img src="app/img/course/pic2.jpg" class="img">
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
					<div class="textBox">
						<p class="left">馬卡龍最早其實是出現在義大利的修道院，1533年梅第奇家族的Catherine嫁到法國時，同行的廚師才把這項甜點也帶到法國來。
							最近在台灣流行的這個小甜點，些人對她有些誤會，覺得她好像又甜、又貴，吃不懂！的確，馬卡龍的材料不多，杏仁粉、糖粉、蛋白，再搭配上不同口味的內餡，乍看之下好像很簡單、很便宜，但實際上每一項食材、每一個程序，都會影響最後烤出來的成敗。因此，貴是貴在師傅的手藝。要能夠做出如少女酥胸般的外殼，必須先經歷過無數考壞的杏仁蛋白餅阿！
						</p>
						<p class="left">馬卡龍專修班讓你練習擠出數百顆的外殼，並教會你做十種不同的口味，包括覆盆子、黑醋栗、青蘋果、羅勒檸檬、香草、苦巧克力、蜜香紅茶、咖啡、起司羅勒和鮭魚。
						</p>
						<p class="left">再選擇材料上，一開始就決定了成敗。杏仁粉、糖粉和蛋白，要如何挑選？我們更使用法國原裝進口色粉，從天然食材中萃取，保證不含人工添加物!
						</p>
						<img src="app/img/course/pic3.jpg" class="img">
						<p>混合杏仁粉、糖粉、製作義大利蛋白霜這些是烤出美麗裙襬和酥脆外殼的關鍵。</p>
						<img src="app/img/course/pic4.jpg" class="img">
						<p>不同的餡料，有不同的配方和處理方式，十種口味一次學齊吧！</p>
						<img src="app/img/course/pic5.jpg" class="img">
						<p>最後再做點小裝飾，完成美麗的馬卡龍！</p>
						<img src="app/img/course/pic6.jpg" class="img">
						<p>每個人帶回家一百多顆馬卡龍，來和親朋好友一起分享吧～</p>
						<img src="app/img/course/pic7.jpg" class="img">
						
					</div>
				</div>
			</div>
			<!--<div class="number_box">
				<a href="news" class="prev">
					<img src="app/img/arrow3.png">
				</a>
				<div class="number">
					<a href="page/course_specialize">1</a>
					<a href="page/course_specialize">2</a>
					<a href="page/course_specialize">3</a>
					<a href="page/course_specialize">4</a>
					<a href="page/course_specialize">5</a>
				</div>
				<a href="news" class="next">
					<img src="app/img/arrow.png">
				</a>
			</div>-->
		</div>	

		<img src="app/img/index/dessert01.png" class="dessert01">	
		
	</div>
	
<?=$temp['footer']?>