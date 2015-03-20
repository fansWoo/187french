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
					<span class="floatright">Product / <a href="page/product">Product 2</a></span>
					Product
				</h1>
				<div class="boxArea one">
					<div class="textArea">
						<div class="set two">
							<p>旭浩HydroGen為工業級產氫系統，以氨為原料，在高溫下將氨裂解為氫氣與氮氣，透過專利的製程技術，可在短時間內大量產氫，為目前最具效率的產氫設備，除了提供燃料電池系統足夠的氫氣來源，也可滿足其他工業應用需求。 </p>
				
							<div class="product_1">
								<?for($i=0;$i<3;$i++):?>
								<a href="page/product_item"><div class="item_contant">
									<div class="item blue">
										<div class="item_pic big">
											<img src="app/img/product/a3.jpg">
										</div>
										<div class="text">
											<h2 class="title">B-5000</h2>
											<div class="text_contant">
												<p>5kW,48Vdc輸出, 備援型，搭配氨重組器燃料系統...</p>
											</div>
										</div>
									</div>
								</div></a>	
								<a href="page/product_item"><div class="item_contant">
									<div class="item green">
										<div class="item_pic big">
											<img src="app/img/product/a4.jpg">
										</div>
										<div class="text">
											<h2 class="title">B-5000</h2>
											<div class="text_contant">
												<p>5kW,48Vdc輸出, 備援型，搭配氨重組器燃料系統...</p>
											</div>
										</div>
									</div>
								</div></a>	
								<?endfor?>
									<?for($i=0;$i<3;$i++):?>
								<a href="page/product_item"><div class="item_contant">
									<div class="item blue">
										<div class="item_pic big">
											<img src="app/img/product/a3.jpg">
										</div>
										<div class="text">
											<h2 class="title">B-5000</h2>
											<div class="text_contant">
												<p>5kW,48Vdc輸出, 備援型，搭配氨重組器燃料系統...</p>
											</div>
										</div>
									</div>
								</div></a>	
								<a href="page/product_item"><div class="item_contant">
									<div class="item green">
										<div class="item_pic big">
											<img src="app/img/product/a4.jpg">
										</div>
										<div class="text">
											<h2 class="title">B-5000</h2>
											<div class="text_contant">
												<p>5kW,48Vdc輸出, 備援型，搭配氨重組器燃料系統...</p>
											</div>
										</div>
									</div>
								</div></a>	
								<?endfor?>
							</div>
						</div>
					</div>
				</div>
			</div>
	
	</div>
</div>	
<?=$temp['footer']?>