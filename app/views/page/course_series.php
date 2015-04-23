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
				<div class="top_button">
					<a href="" class="buttonBox">初級系列課</a>
					<a href="" class="buttonBox">中級系列課</a>
					<a href="" class="buttonBox">高級系列課</a>
				</div>
				<div class="top_introduction">
					<h1>初級系列課</h1>
					<p>「187巷的法式」推出的初級系列課的十堂中包含了8個類別、17個初階的法式甜點。沒有任何經驗的新手，可以在這30個小時中，透過理論的學習和實作的經驗，讓您對法式甜點有更進一步的認識。</p>
					<p class="price">30,000元/10堂 (含個人材料和教學費用)<p>
				</div>
			<div class="boxArea">
				<?for($i=0;$i<5;$i++):?>
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<img src="app/img/course/pic1.jpg" class="img">
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
					<div class="textBox">
						<h2>蘋果塔<br>Tarte aux Pommes</h2>
						<p class="class"><span>類別 :</span> 塔皮</p>
						<p><span>學習重點 :</span> 塔皮的認識和操作、焦糖蘋果餡、花形裝飾。</p>
					</div>
				</div>
				<?endfor?>
				<?for($i=0;$i<4;$i++):?>
				<div class="itemArea">
					<div class="picBox_border">
						<div class="picBox">
							<div class="pic">
								<img src="app/img/course/pic1.jpg" class="img">
								<img src="app/img/about/dessert/dot.png" class="dot">
							</div>
							<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						</div>
					</div>
					<div class="textBox">
						<h2>蘋果塔<br>Tarte aux Pommes</h2>
						<p class="class"><span>類別 :</span> 塔皮</p>
						<p><span>學習重點 :</span> 塔皮的認識和操作、焦糖蘋果餡、花形裝飾。</p>
					</div>
				</div>
				<?endfor?>
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