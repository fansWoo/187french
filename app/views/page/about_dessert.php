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
<img src="app/img/index/dessert04.png" class="dessert04">
<div class="Area">
		
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert03.png" class="dessert03">
		
		<div class="contantArea">
				<img src="app/img/about/dessert/title.png" class="title">
			<div class="boxArea one">
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic1.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>瑪德蓮</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>常溫點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td>30元/個</td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p>12入360元</p>
									<p>24入650元</p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<div class="dot"></div>
						<h2>Introduction</h2>
						<p>經典的貝殼造型搭配鬆軟的口感，是法國甜點的代表作。相傳十八世紀時，洛林公爵開派對前，廚師和甜點師為事大打出手，把準備好的甜點給揮翻在地，而有名機靈的年輕女侍自告奮勇說要製作她家鄉的點心，沒想到這貝殼形狀、帶檸檬清香的小蛋糕深受公爵喜愛，決定以女侍的名字Madeleine為此甜點命名。</p>

					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic2.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>可露麗</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>常溫點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>這外表黑嚕嚕內裡軟QQ的甜點是早在 18 世紀法國波爾多一位修道院裡的修女發明的，當地釀酒</p>
						<p>
						
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic3.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>珍珠巧心</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>常溫點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>榛果奶油 Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>千層年輪蛋糕</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>常溫點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic6.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>磅蛋糕</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>常溫點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>下午茶經常會搭配的經典蛋糕，但在甜點店卻不常出現它的身影，就如同字典裡對磅蛋糕的註解，這是一種在家親手製作的家常點心，所以食材相當簡單，只有麵粉、奶油、雞蛋、糖，且四種食材用量比例相同，而且可以隨喜好加入莓果或堅果等，是家庭主婦為小孩準備點心的最佳選擇。.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic7.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>松露巧克力</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>其他點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic8.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>馬卡龍</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>其他點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Panforte是義大利的傳統點心，巧克力包裹豐富果乾與堅果，因富含極高營養，13世紀十字軍抗戰時士兵們會帶著Panforte作為糧食</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>嘉年華巧克力</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>其他點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic10.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>手工果醬</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>其他點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>沖杯黑咖啡，攤開報紙，取出烤箱中溫熱好的可頌麵包，橫剖後塗抹上帶鹽奶油和手工果醬，用簡單的幸福早餐展開充滿活力且美好的一天！挑選當季新鮮的水果，文火慢熬讓糖與水果長時間相處認識，吸收彼此的純粹，造就出一瓶瓶成為你我每日幸福開端的甜蜜果醬。</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic11.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>達克瓦茲</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>其他點心</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>輕盈酥脆的杏仁蛋白餅，內餡夾入榛果奶油霜，是個風味成熟醇厚的甜點，讓人意猶未盡。</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic12.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>布列塔尼酥餅</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>餅乾</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>法國布列塔尼(Bretagne)當地的特色小點，表面的焦糖色與特殊線條是它的特徵之一。使用依思尼奶油、杏仁粉、蛋和少許蘭姆酒製作而成。口感酥鬆，濃郁奶香。</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic13.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>佛羅倫汀</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>餅乾</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>由鮮奶油、蜂蜜、奶油去熬煮成焦糖漿，加入杏仁片牛軋，平鋪在底層甜派皮上烘焙而成</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic14.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>白酒水果慕斯</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>慕斯蛋糕</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic15.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>提拉米蘇</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>慕斯蛋糕</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>草莓慕斯蛋糕</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>慕斯蛋糕</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>這是法國甜點師傅一定要會的甜點之一。草莓整齊貼排於模型邊，填入輕盈質地的奶油卡士達醬，上頭以調色的杏仁膏桿平裝飾頂部，撒上薄薄糖粉宛若降雪般，粉嫩可愛的造型和酸甜輕盈的好滋味，常被作為過節送禮的最佳選擇。</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic17.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>諾曼第蘋果塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic18.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>法式檸檬塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>藍莓塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>芒果布丁塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic21.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>踏雪莓塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic22.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>紅酒西洋梨塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>苦甜巧克力塔</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic24.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>法式鹹派</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>國王派</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td>1400元/7吋</td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>每年十二月底到一月中在法國可看到大大小小的甜點店擺滿金黃色澤像個車輪的大酥餅，這正是法國人在1/6主顯節會與親朋好友同聚共享的國王派。兩張千層酥皮，中間夾著杏仁奶油餡，還有個不知切分後會被誰吃到的小瓷偶(fève)，聽說得到小瓷偶的人會幸運一整年，戴上隨餅附贈的紙製金色王冠當國王，大家得聽命於你替你效勞！</p>
					</div>	
				</div>
					<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="app/img/about/dessert/pic26.png" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox">
						<h2>鄉村蘋果派</h2>
						<table>
							<tr>
								<td class="small">類型</td>
								<td>塔派</td>
							</tr>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
							<tr>
								<td class="small">備註</td>
								<td>
									<p></p>
									<p></p>
								</td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<h2>Introduction</h2>
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
			</div>

		
		</div>	

		
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>