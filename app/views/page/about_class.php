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
<div class="Area">
		<img src="app/img/scroll_arrow.png" class="scroll_arrow">
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert03.png" class="dessert03">
		
		<div class="contantArea">
				<img src="app/img/about/class/title.png" class="title">
			<div class="boxArea one">
				<div class="picbox">
					<img src="app/img/about/class/pic1.png" class="pic1">
					<img src="app/img/about/class/pic2.png" class="pic2">
				</div>
				<div class="textbox">
					<h2>教學理念</h2>
					<p>
						小班教學‧每班3~6人，貼身學習專業甜點師的手藝實際手作‧每位學員獨立實作，並帶回6人份的成品與親友一起分享 我們間堅持最好，每一道工序，都摻入了最誠摯的用心，在這個小教室裡，師生就像是一群法國的老朋友們，聚在其中一人家裡的廚房一起煮煮東西，輕鬆愉快的學會一道道經典料理。
					</p>
				</div>
				<div class="line1"></div>
				<div class="line2"></div>
			</div>
			
			<div class="boxArea two">
				<div class="picbox">
					<img src="app/img/about/class/pic1.png" class="pic1">
					<img src="app/img/about/class/pic2.png" class="pic2">
				</div>
				<div class="textbox ">
					<h2>教室設備</h2>
					<p>
						豪華設備‧使用工藝精緻的進口廚具，讓您體驗大師級的經典與嚴謹
						為了完美呈製成一道道的甜點與料理，並縮短製作及學員等待的，購買媲美國外五星級飯店餐廚等級的歐洲進口設備，如德國Rational蒸烤箱、義大利IRINOX急速冷凍冰箱，和台灣最高等級的中部電機烤箱。
					</p>
					<p>
						教室所選用器材都是精挑細選國外進口商品，以安全性與實用性為優先考量，讓學員放心無慮地製作甜點，美國Kitchenaid Mixer攪拌器、法國Mauviel銅鍋、法國與日本進口的各式烘焙器材等。
					</p>
				</div>
				
			</div>	
			
			<div class="box3">
				<img src="app/img/about/class/solgon1.png" class="solgon1">
				<div class="itemBox">
					<div class="item">	
						<div class="leftPic">
							<img src="app/img/about/class/itempic4.jpg">
						</div>
						<div class="rightText">
							<h2>Isigny(鮮)奶油</h2>
							<p>通過法國AOC政府認證，依循傳統方式製造出濃郁奶香的頂級(鮮)奶油。</p>
						</div>
					</div>
					<div class="item">	
						<div class="leftPic">
							<img src="app/img/about/class/itempic1.jpg">
						</div>
						<div class="rightText">
							<h2>法國安東尼麵粉</h2>
							<p>嚴選法國農場種植出的優質黑麥與小麥，深受當地烘焙坊和米其林餐廳的喜愛</p>
						</div>
					</div>
					<div class="item">	
						<div class="leftPic">
							<img src="app/img/about/class/itempic2.jpg">
						</div>
						<div class="rightText">
							<h2>牧場直送安心蛋</h2>
							<p>江夏畜牧場土雞紅蛋，通過多項國家認證，定期送SGS檢查，確保安全無虞</p>
						</div>
					</div>
					<div class="item">	
						<div class="leftPic">
							<img src="app/img/about/class/itempic5.jpg">
						</div>
						<div class="rightText">
							<h2>法國頂級巧克力</h2>
							<p>嚴選Cacao barry(可可巴芮)、Vallrhon(法芙娜)，以優質可可豆製成頂級風味巧克力</p>
						</div>
					</div>
					<div class="item">	
						<div class="leftPic">
							<img src="app/img/about/class/itempic3.jpg">
						</div>
						<div class="rightText">
							<h2>當季水果&進口果泥</h2>
							<p>選用在地當季新鮮水果，和法國原裝進口果泥，100%新鮮水果製成，不添加化學劑料。</p>
						</div>
					</div>
						
						
					
				
				</div>
			
			</div>
			
		
		</div>	

		
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>