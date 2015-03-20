<?=$temp['header_up']?>
<script src="app/js/cycle2.js"></script>
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
 <script>
            $(document).ready(function(){
            
              $(".slidePic > .square").cycle({
				fx      :       "scrollHorz", 
				timeout: 0 ,
				manualSpeed: 300,
				slides: ' > .slidePicHref',
				next: '.slidePicBox .next',
				prev: '.slidePicBox .prev',
				pager: '.cycle-pager'
        });
            });
        </script>

<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<div class="Area">
	<div class="centerArea">
			<div class="contantArea">
				<div class="boxArea one">
					<div class="topTitle">
						<h2>備援型燃料電池系統 -</h2>
						<h2>DirectHydrogen B-5000</h2>
					</div>
					<div class="top_floatBox">
						<div class="slidePicBox" >
							<div class="slidePic" >
								<div class="square">
									<img src="app/img/product/product_2.jpg" class="slidePicHref">
									<img src="app/img/product/product_3.jpg" class="slidePicHref" >
									<img src="app/img/product/product_2.jpg" class="slidePicHref" >
								</div>
								<div class="cycle-pager"></div>
							</div>
						</div>
						<div class="rightbox">
							<div class="dot1 "></div>
							<h4>產品特性 feature</h4>
							<p><span class="circle"></span>水冷式燃料電池組提供長時間備援能力</p>
							<p><span class="circle"></span>快速提供無縫備援電力</p>
							<p><span class="circle"></span>遠端監控與控制，確保運作穩定</p>
							<p><span class="circle"></span>氣體壓力偵測與洩漏保護</p>
							<p><span class="circle"></span>內建智能型保護機制，提供全面安全防護</p>
							<p><span class="circle"></span>全自動控制，維護成本低</p>
							<div class="dot1"></div>
						</div>
					</div>
					<div class="textArea">
							<div class="p1">
								<h3>介紹</h3>
								<p>
								DirectHydrogen B-5000為備援型燃料電池系統，採用高純度氫氣鋼瓶為燃料來源，最高可提供5,000W電力；燃料電池組採用水冷式冷卻技術，可較一般系統提供更長的運作時間，純氫鋼瓶為燃料的燃料電池系統可在最短時間內供氫發電，提供無縫備援電力，適合配置於氫氣運補容易地區。</p>
								<br>
								<p>
								DirectHydrogen B-5000系列可選用-48V, 110V與125V直流輸出系統，具有環保、維護成本低與備援時間長的優勢。系統內建保護裝置，具備智能型氣體偵測與保護機制，並且可透過軟體遠端監控，由遠端進行檢測工作，可應用在電信基地台、鐵道與變電站等需要高度穩定的備援電力應用。 </p>
							</div>
							<div class="Application">
								<h3>應用</h3>
								<p><a href="page/product_item"><span class="circle"></span>電信基地台備援電力</a></p>
								<p><a href="page/product_item"><span class="circle"></span>鐵道備援電力</a></p>
								<p><a href="page/product_item"><span class="circle"></span>變電站備援電力</a></p>
							</div>
							<div class="Specification">
								<h3>規格</h3>
								<p><span class="circle"></span>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at.</p>
								<p><span class="circle"></span>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at.Maecenas diam ligula, vulputate vitae, mollis at.Maecenas diam ligula, vulputate vitae, mollis at.</p>
								<p><span class="circle"></span>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at.</p>
								<p><span class="circle"></span>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at.Maecenas diam ligula, vulputate vitae, mollis at.</p>
								<p><span class="circle"></span>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at.</p>
							</div>
							<div class="other">
								<div class="box">
									<p>Sed id dolor. In hac habitasse platea dictumst.vitae, mollis at.</p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula,vitae, </p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, </p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, </p>
								</div>	
								<div class="box">
									<p>Sed id dolor. In hac habitasse platea dictumst.vitae, mollis at.</p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula,vitae, </p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, </p>
									<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, </p>
								</div>	
							</div>
					</div>
					
				</div>
			</div>
	
	</div>
</div>	
<?=$temp['footer']?>