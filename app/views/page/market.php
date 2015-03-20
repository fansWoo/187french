<?=$temp['header_up']?>
<script>
$(function(){
    $(document).on('click', '.buttonArea .box', function(){
        var bgname = $(this).data('bgname');
		$('.buttonArea .box').removeClass('clicked');
		$(this).addClass('clicked');
        //新增的
        $('.about').removeClass('hover');
        $('.about[data-bgname=' + bgname + ']').addClass('hover');
    });
});
</script>

<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<div class="Area">
		<div class="topbg">
			<img src="app/img/market/bg_title2.png" class="title1">
		</div>	
	<div class="centerArea">
			<div class="contantArea">
				<h1>
					<span class="floatright">Application / <a href="page/market_list">Application 2</a></span>
					Application
				</h1>
				<div class="boxArea one">
					<div class="textArea">
						<div class="set two">
							<div class="pic">
								<img src="app/img/product/pic3.jpg">
								<div class="hoverBox">
									<div class="title">
										<img src="app/img/product/title2.png">
									</div>
									<div class="text">
										<p>Sed id dolor. In hac habitasse platea dictumst.</p>
										<p>Maecenas diam ligula, vulputate vitae, mollis at, </p>
									</div>
								</div>
							</div>
							<p class="p1">Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula. Duis vel lacus. In tincidunt. Vestibulum elit. Praesent hendrerit. Suspendisse venenatis. </p>
							<div class="listBox">
								<div class="box">
									<p class="listBox_item">發電系統</p>
									<div class="dotBorder"></div>
									<a href="page/market_list" class="project"><div class="dot"></div>Ammonergy B-5000</a>
									<a href="page/market_list" class="project"><div class="dot"></div>DirectHydrogen B-5000</a>
									<a href="page/market_list" class="project"><div class="dot"></div>DirectHydrogen B-200</a>
									<a href="page/market_list" class="project"><div class="dot"></div>DirectHydrogen B-1000</a>
								</div>
								<div class="box">
									<p class="listBox_item">產氫系統</p>
									<div class="dotBorder"></div>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									
								</div>
								<div class="box">
									<p class="listBox_item">CLASS</p>
									<div class="dotBorder"></div>
									<a href="page/market_list" class="project"><div class="dot"></div>item</a>
									<a href="page/market_list" class="project"><div class="dot"></div>item</a>
									<a href="page/market_list" class="project"><div class="dot"></div>item</a>
									<a href="page/market_list" class="project"><div class="dot"></div>item</a>
									<a href="page/market_list" class="project"><div class="dot"></div>item</a>
								</div>
									<div class="box">
									<p class="listBox_item">產氫系統</p>
									<div class="dotBorder"></div>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/market_list" class="project"><div class="dot"></div>E-110L</a>
									
									
								</div>
								<div class="box">
									<p class="listBox_item">CLASS</p>
									<div class="dotBorder"></div>
									<a href="" class="market_list"><div class="dot"></div>item</a>
									<a href="" class="market_list"><div class="dot"></div>item</a>
									<a href="" class="market_list"><div class="dot"></div>item</a>
									<a href="" class="market_list"><div class="dot"></div>item</a>
									<a href="" class="market_list"><div class="dot"></div>item</a>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
	
	</div>
</div>	
<?=$temp['footer']?>