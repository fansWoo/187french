<?=$temp['header_up']?>
<script>
$(function(){
    $(document).on('click', '.fixedButton .circle', function(){
        var bgname = $(this).data('bgname');
		$('.fixedButton .circle').removeClass('clicked');
		$(this).addClass('clicked');
        //新增的
        $('.indexPageBox1, .indexPageBox2, .indexPageBox3, .indexPageBox4').removeClass('hover');
        $('.indexPageBox1[data-bgname=' + bgname + ']').addClass('hover');
        $('.indexPageBox2[data-bgname=' + bgname + ']').addClass('hover');
        $('.indexPageBox3[data-bgname=' + bgname + ']').addClass('hover');
        $('.indexPageBox4[data-bgname=' + bgname + ']').addClass('hover');
    });
    	//首頁廣告滑鼠移入停止
	$(document).on('mouseenter', ".fixedButton .circle", function(){
		clearTimeout(timeIndexSlideT);
	});
    timeIndexSlide(0,4);
});
//首頁廣告切換計時器
function timeIndexSlide(n, count){
	var n;
	var count;
	var n = n + 1;
	if(n >= count){
		var n = 0;
	}
	timeIndexSlideT = setTimeout(function(){
		$(".fixedButton .circle:eq(" + n + ")").click();
		timeIndexSlide(n, count);
	}, 6000);
}
</script>
<?=$temp['header_down']?>
<div class="topHeader_index">
	<div class="topHeaderContent">
		<span data-hrefto="" class="logo">
			<img src="app/img/logo.png">
		</span>
		<div class="nav">
			<div class="li">
			<div class="borderTop"></div>
				公司簡介
				<div class="downbox about">
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>關於我們</a>
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>核心價值</a>
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>組織團隊</a>
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>經營理念</a>
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>公司願景</a>
					<a href="page/about/?page=aboutme" class="item"><div class="dot"></div>沿革歷史</a>
				</div>
			</div>
	
				<div class="li">
				<div class="borderTop"></div>
					產品與市場應用
					<div class="downbox product">
						<div class="ArticleBox">
							<a href="page/product"><div class="h2">產品介紹</div></a>
							<div class="item color">發電系統</div>
							<a href="page/product_item" class="item"><div class="dot"></div>Ammonergy B-5000</a>
							<a href="page/product_item" class="item"><div class="dot"></div>DirectHydrogen B-5000</a>
							<a href="page/product_item" class="item"><div class="dot"></div>DirectHydrogen B-200</a>
							<a href="page/product_item" class="item"><div class="dot"></div>DirectHydrogen B-1000</a>
							<div class="item color">產氫系統</div>
							<a href="page/product_item" class="item">E-110L</a>
						</div>
						<div class="applyBox">
							<a href="page/market"><div class="h2">市場應用</div></a>
							<div class="item color">發電系統</div>
							<a href="page/product" class="item"><div class="dot"></div>電信基地台備援電力</a>
							<a href="page/product" class="item"><div class="dot"></div>鐵路系統備援電力</a>
							<a href="page/product" class="item"><div class="dot"></div>變電站備援電力</a>
							<div class="item color">連續發電</div>
							<a href="page/product" class="item"><div class="dot"></div>離網電力系統</a>
							<a href="page/product" class="item"><div class="dot"></div>氯鹼廠氫氣發電</a>
						</div>
					</div>
				</div>
			
			<!--<a class="li"><div class="borderTop"></div>技術與資源</a>-->
			<div class="li">
			<div class="borderTop"></div>
				新聞與活動
				<div class="downbox news">
					<a href="news" class="item"><div class="dot"></div>新 聞</a>
					<a href="activity" class="item"><div class="dot"></div>活 動</a>
				</div>
			</div>
			<a href="page/contact" class="li"><div class="borderTop"></div>聯絡我們</a>
		</div>
		<div class="bottomArea">
			<div class="text1">
				<div class="leftText">旭浩</div>
				<div class="rightText">
					<p>股份有限公司</p>
					<p>SOLNINE 9 INC</p>
				</div>
			</div>
			<div class="text2">
				<p>新北市新店區民權路95號12樓之3</p>
				<p>TEL :  02-8219-3336</p>
				<p>FAX :  02-8219-1835</p>
			</div>
		</div>
	</div>
	<img src="app/img/index/leftbox_bg.png" class="topHeaderBg">
</div>
	<div class="indexPageBox1 hover" data-bgname="pic1">
        <div class="bg"></div>
		<div class="treeBall">
			<img src="app/img/index/bg1/bg1_pic2.png" >
		</div>
		<img src="app/img/index/bg1/bg1_pic3.png" class="shadow">
		<img src="app/img/index/bg1/bg1_pic4.png" class="light1">
		<div class="light2">
			<img src="app/img/index/bg1/light.png" >
		</div>
		<div class="light3">
			<img src="app/img/index/bg1/light2.png" >
		</div>
		<div class="leaf01">
			<img src="app/img/index/bg1/leaf1.png" >
		</div>
		<div class="leaf02">
			<img src="app/img/index/bg1/leaf2.png" >
		</div>
		<div class="leaf03">
			<img src="app/img/index/bg1/leaf3.png" >
		</div>
		<div class="leaf04">
			<img src="app/img/index/bg1/leaf4.png" >
		</div>
		<div class="contant">
			<div class="titleArea">
				<img src="app/img/index/bg1/text1.png" class="text1">
				<img src="app/img/index/bg1/text2.png" class="text2">
				<img src="app/img/index/light.png" class="light">
				<img src="app/img/index/bg1/icon.png" class="icon">
				<a href="page/about"><img src="app/img/index/arrow.png" class="arrow"></a>
			</div>
			
			<div class="title2">
				<p>HydroGen為工業級產氫系統，透過專利的製程技術，可在短時間內大量產氫，為目前最具效
					率的產氫設備，提供燃料電池系統足夠的氫氣來源、也可滿足其他工業應用需求... </p>
			</div>
		</div>
	</div>
	<div class="indexPageBox2" data-bgname="pic2">
        <div class="bg"></div>
		<div class="BigWater">
			<img src="app/img/index/bg2/bg2.png" >
		</div>
		<div class="SmallWater">
			<img src="app/img/index/bg2/water2.png" >
		</div>
		<div class="water1">
			<img src="app/img/index/bg2/water3.png" >
		</div>
		<div class="water2">
			<img src="app/img/index/bg2/water4.png" >
		</div>
		<div class="water3">
			<img src="app/img/index/bg2/water5.png" >
		</div>
		<div class="contant">
			<div class="titleArea">
				<img src="app/img/index/bg2/text1.png" class="text1">
				<img src="app/img/index/bg2/text2.png" class="text2">
				<img src="app/img/index/bg2/icon.png" class="icon">
				<a href="page/product"><img src="app/img/index/arrow2.png" class="arrow"></a>
			</div>
			<div class="title2">
				<p>旭浩推出全球唯一以氨為燃料來源的發電系統可將氨轉化為氫氣供應發電系統發電
						採用水冷式散熱技術，較氣冷式燃料電池系統具有更佳的系統壽命與發電穩定性... </p>
			</div>
		</div>
	</div>
	<div class="indexPageBox3" data-bgname="pic3">
		<div class="battery01">
			<img src="app/img/index/bg3/battery01.png" >
		</div>
		<div class="battery02">
			<img src="app/img/index/bg3/battery02.png" >
		</div>
		<div class="battery03">
			<img src="app/img/index/bg3/battery03.png" >
		</div>
		<div class="battery04">
			<img src="app/img/index/bg3/battery04.png" >
		</div>
		<div class="shadow">
			<img src="app/img/index/bg3/shadow.png" >
		</div>
		<div class="line1">
			<img src="app/img/index/bg3/line1.png" >
		</div>
		<div class="line2">
			<img src="app/img/index/bg3/line2.png" >
		</div>
		<div class="contant">
			<div class="titleArea">
				<img src="app/img/index/bg3/text1.png" class="text1">
				<img src="app/img/index/bg3/text2.png" class="text2">
				<img src="app/img/index/bg3/icon.png" class="icon">
				<a href="page/product"><img src="app/img/index/arrow.png" class="arrow"></a>
			</div>
			<div class="title2">
				<p>具備低成本與高能量密度的優勢，適用於長時間備援電力應用或連續電力供給可大幅減少維護成本與運輸成本...</p>
			</div>
		</div>
	</div>
	<div class="indexPageBox4" data-bgname="pic4">
		<div class="contant">
			<div class="titleArea">
				<img src="app/img/index/bg4/text1.png" class="text1">
				<img src="app/img/index/bg4/text2.png" class="text2">
				<img src="app/img/index/bg4/icon.png" class="icon">
				<a href="page/market"><img src="app/img/index/arrow.png" class="arrow"></a>
			</div>
			<div class="title2">
				<p>可即時提供備援電力，提供無縫電力備援，可滿足如電信基地台、鐵道與變電站等需要高度穩定備援能力的應用。</p>
			</div>
		</div>
        <div class="bg"></div>
		<div class="bg2">
			
		</div>
		<div class="tower">
			<img src="app/img/index/bg4/tower.png" >
		</div>
	</div>
	<div class="fixedButton">
		<div class="circle clicked" data-bgname="pic1"></div>
		<div class="circle" data-bgname="pic2"></div>
		<div class="circle" data-bgname="pic3"></div>
		<div class="circle" data-bgname="pic4"></div>
	</div>
	<div class="languageBox">
		<p>繁中 | 簡體 | 英文</p>
	</div>

		</div>
		<div class="footer_index">
			<span class="floatright">
				Designed by fansWoo.com
			</span>
			<span class="floatleft">
				Partner zone |   
			</span>
			
		</div>
	</body>
</html>
