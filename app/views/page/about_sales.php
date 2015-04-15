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
		<img src="app/img/about/sales/pie.png" class="pie">
		<div class="contantArea">
				<img src="app/img/about/sales/title.png" class="title">
			<div class="boxArea one">
				<h1>器材販售</h1>
				<div class="item">
					<div class="pic">
						<div class="img">
							<img src="app/img/about/sales/article3.jpg">
							<img src="app/img/about/sales/shadow.png" class="shadow">
						</div>
						<div class="border"></div>
					</div>
					<div class="text">
						<h2>各式抹刀</h2>
						<p>打蛋器、檸檬皮刨刀、削皮刀、各式木匙、橡皮刮刀 、各式抹刀<span>(12cm/15cm/21cm/23cm/巧克力抹刀)</span></p>
					</div>
				</div>
				<div class="item">
					<div class="pic">
						<div class="img">
							<img src="app/img/about/sales/article2.jpg">
							<img src="app/img/about/sales/shadow.png" class="shadow">
						</div>
						<div class="border"></div>
					</div>
					<div class="text">
						<h2>矽膠模墊</h2>
						<p>矽膠墊、馬卡龍矽膠墊、雪糕模型</p>
						<p>圓球和半圓球慕斯模<span>(4.8cm/5.8cm/8cm)</span></p>
						<p>特殊造型矽膠模<span>(心型/花型/Daoguoise)</span></p>
					</div>
				</div>
				
				<div class="item">
					<div class="pic">
						<div class="img">
							<img src="app/img/about/sales/article5.jpg">
							<img src="app/img/about/sales/shadow.png" class="shadow">
						</div>
						<div class="border"></div>
					</div>
					<div class="text">
						<h2>裝飾工具</h2>
						<p>擠花袋、裝飾筆、蛋糕轉台</p>
						<p>開蛋殼器、馬卡龍塑膠盒</p>
						
					</div>
				</div>
				<div class="item">
					<div class="pic">
						<div class="img">
							<img src="app/img/about/sales/article1.jpg">
							<img src="app/img/about/sales/shadow.png" class="shadow">
						</div>
						<div class="border"></div>
					</div>
					<div class="text">
						<h2>烤焙模具</h2>
						<p>法式空心模<span>(8cm/10cm/14cm/16cm/18cm/20cm)</span></p>
						<p>各式方形烤模、可麗餅平底鍋、小銅鍋</p>
						<p>專用烤模<span>(吐司、瑪德蓮、費南雪、布里歐修)</span></p>
						<p>蛋糕烤模<span>( 圓形、花形、磅蛋糕)</span>、圓形烤盤</p>
						
						
					</div>
				</div>
				<div class="item">
					<div class="pic">
						<div class="img">
							<img src="app/img/about/sales/article4.jpg">
							<img src="app/img/about/sales/shadow.png" class="shadow">
						</div>
						<div class="border"></div>
					</div>
					<div class="text">
						<h2>輔助工具</h2>
						<p>過篩網<span>（圓形、三角）</span>、毛刷、烘焙紙</p>
						<p>各式壓模、鋼杯</p>
					</div>
				</div>
				
			</div>
			
			<div class="bottomBox">
				<h1>食材販售</h1>
				<div class="itemBox">
					<div class="item">
						<div class="pic">
							<div class="img">
								<img src="app/img/about/sales/food_1.jpg">
								<img src="app/img/about/sales/shadow.png" class="shadow">
							</div>
							<div class="border"></div>
						</div>
						<div class="text">
							<h2>法國進口巧克力</h2>
							<p>選用法國最頂級的兩大品牌巧克力Cacao和法芙娜，使用不同莊園生產的可可去做調配，為各式甜點調配出專屬的最佳比例。<span>(40%、55%、64%、66%、70%、85%、白巧克力)</span></p>
						</div>
					</div>
					<div class="item">
						<div class="pic">
							<div class="img">
								<img src="app/img/about/sales/food_2.jpg">
								<img src="app/img/about/sales/shadow.png" class="shadow">
							</div>
							<div class="border"></div>
						</div>
						<div class="text">
							<h2>天然添加物</h2>
							<p>製作甜點時添加適量的天然香料，增添芳香特質外，更能提升糕點細緻度與味蕾的層次。<span>(香草粉、香草莢、法國色粉、肉桂粉、紅椒粒、食用乾燥花、玫瑰水)</span></p>
						</div>
					</div>
					<div class="item">
						<div class="pic">
							<div class="img">
								<img src="app/img/about/sales/food_3.jpg">
								<img src="app/img/about/sales/shadow.png" class="shadow">
							</div>
							<div class="border"></div>
						</div>
						<div class="text">
							<h2>粉油糖類</h2>
							<p>依思尼奶油、鮮奶油、安東T55麵粉、杏仁粉、純白糖</p>
						</div>
					</div>
				</div>
			</div>	
			
		
			
		
		</div>	

		<img src="app/img/index/dessert01.png" class="dessert01">	
		
	</div>
	
<?=$temp['footer']?>