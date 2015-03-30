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
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<div class="Area">
		
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert03.png" class="dessert03">
		<div class="topArea">
			<img src="app/img/about/pic1.png" class="pic1">	
			<img src="app/img/about/solgon1.png" class="solgon1">	
		</div>
		<div class="contantArea">
			<div class="story">
				<img src="app/img/about/title.png" class="title">
				<p>	2004年，冬。<br>
				某個週三深夜，十一點半。<br>
				她總算將電腦關機，準備收拾東西下班。<br>
				儘管早已身心俱疲，但想著回到家後，就能做個喜歡的蛋糕來犒賞自己，她仍淺淺的揚起嘴角。
				那是她最快樂的時間，也是她少數感覺到自己真正活著的時刻。但有時候身為一名普通會計人員的她不禁會想……
				「如果我能成為一個甜點師該有多好？」
				</p>
				<p>
					隔年，她已經運用假日時間進修完一系列專業甜點課程，並毅然決然辭去工作，買了一張飛往法國的機票。
				一張，飛往夢想的機票。
				</p>
				<p>
					在法國L’Ecole Ritz Escoffier與日本東京進修的2年間，她做出了許多讓自己感動、讓品嚐者沉醉的甜點。
				然後，她想起了在台灣學習甜點料理的時候，坊間的烘焙教室幾乎都選用廉價、品質差的食材。而且上課人數過多，導致只能使用「示範教學」或「小組操作」上課方式，在課堂中學員沒有充分實作的機會，下課回家自己練習的時候，碰到問題也找不到合適的對象詢問。
				</p>
				<p>
					於是她決定要回台灣。將正統法式甜點所蘊藏的幸福滋味，以及法國Ritz的專業教學方式帶回故鄉。
				2013年初春，座落於台北士林的「187巷的法式」成立了。
				</p>
				<p>
					這間飽滿著她的理想與希冀的法式甜點教室，當然每個細節都不能被妥協。
				不計成本的採購進口設備和食材；採3~6人的小班制教學，老師能針對學生不同的學習狀況給予最適當的指導，學員也都能實際操作每道料理的每個環節。
				在這個小教室裡，師生就像是一群法國的老朋友們，聚在其中一人家裡的廚房一起煮煮東西，輕鬆愉快的學會一道道經典料理。

				</p>
				<p>
					一個滿溢幸福氛圍的法式甜點殿堂，187巷的法式。
				一位燃燒熱情、一心一意想讓更多人享受到魔幻滋味的甜點師，Linda。

				</p>	
			</div>
			<div class="story">
				<img src="app/img/about/title2.png" class="title">
				<div class="WhiteBox">
					<div class="item">
						<div class="day">
							2007-2011  
						</div>
						<div class="event">
							巧思廚藝甜點、麵包系統課程、師資訓練班
						</div>
					</div>
					<div class="item">
						<div class="day">
							2008-2011
						</div>
						<div class="event">
							柯瑞玲法國廚藝教室
						</div>
					</div>
					<div class="item">
						<div class="day">
							2008. Aug 
						</div>
						<div class="event">
							Le Cordon Bleu, Tokyo
						</div>
					</div>
					<div class="item">
						<div class="day">
							2011 .Aug  
						</div>
						<div class="event">
							Japan Cake & Confection Collage, Tokyo
						</div>
					</div>
					<div class="item">
						<div class="day">
							2011.Oct - 2012. Mar 
						</div>
						<div class="event">
							L’ Ecole Ritz Escoffier baking, bread and cuisine Diploma
						</div>
					</div>
					<div class="item">
						<div class="day">
							2012. June-July 
						</div>
						<div class="event">
							L’ecole Francaise de Gastronomie Paris(Ferrandi)
						</div>
					</div>
					<div class="item">
						<div class="day">
							102.Jan-Feb 
						</div>
						<div class="event">
							International Baking Academy, in Weinheim, Germany Bread Diploma
						</div>
					</div>
					<div class="item">
						<div class="day">
							102.Jan-Feb 
						</div>
						<div class="event">
							International Baking Academy, in Weinheim, Germany Bread Diploma
						</div>
					</div>
					<div class="item">
						<div class="day">
							102.Jan-Feb 
						</div>
						<div class="event">
							International Baking Academy, in Weinheim, Germany Bread Diploma
						</div>
					</div>

				
				</div>	
			</div>
		
			
		</div>
		
	<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>