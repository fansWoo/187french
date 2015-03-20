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
			<img src="app/img/product/bg_title2.png" class="title1">
		</div>	
	<div class="centerArea">
		<div class="contantArea">
				<h1>
					<span class="floatright">Product / <a href="page/product_list">Product 2</a></span>
					Product
				</h1>
			<div class="boxArea one">
					<div class="textArea">
						<div class="set two">
							<div class="pic">
								<img src="app/img/product/pic2_2.jpg">
								<div class="hoverBox">
									<div class="title">
										<img src="app/img/product/title.png">
									</div>
									<div class="text">
										<p>旭浩HydroGen為工業級產氫系統，以氨為原料</p>
										<p>在高溫下將氨裂解為氫氣與氮氣，透過專利的製程技術</p>
									</div>
								</div>
							</div>
							<p class="p1">旭浩HydroGen為工業級產氫系統，以氨為原料，在高溫下將氨裂解為氫氣與氮氣，透過專利的製程技術，可在短時間內大量產氫，為目前最具效率的產氫設備，除了提供燃料電池系統足夠的氫氣來源，也可滿足其他工業應用需求。 </p>
							<div class="listBox">
								<div class="box">
									<p class="listBox_item">發電系統</p>
									<div class="dotBorder"></div>
									<a href="page/product_list" class="project"><div class="dot"></div>Ammonergy B-5000</a>
									<a href="page/product_list" class="project"><div class="dot"></div>DirectHydrogen B-5000</a>
									<a href="page/product_list" class="project"><div class="dot"></div>DirectHydrogen B-200</a>
									<a href="page/product_list" class="project"><div class="dot"></div>DirectHydrogen B-1000</a>
								</div>
								<div class="box">
									<p class="listBox_item">產氫系統</p>
									<div class="dotBorder"></div>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									
								</div>
								<div class="box">
									<p class="listBox_item">CLASS</p>
									<div class="dotBorder"></div>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
								</div>
									<div class="box">
									<p class="listBox_item">產氫系統</p>
									<div class="dotBorder"></div>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									<a href="page/product_list" class="project"><div class="dot"></div>E-110L</a>
									
									
								</div>
								<div class="box">
									<p class="listBox_item">CLASS</p>
									<div class="dotBorder"></div>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									<a href="page/product_list" class="project"><div class="dot"></div>item</a>
									
								</div>
							</div>
							
						</div>
					</div>
			</div>
		</div>
	</div>
</div>	
<?=$temp['footer']?>