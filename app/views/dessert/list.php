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
			<div class="floatright" style="margin-top:20px;">
				<select>
					<option>請選擇甜點類型</option>
				</select>
			</div>
				<img src="app/img/about/dessert/title.png" class="title">
			<div class="boxArea one">
				<?for($i=0;$i<5;$i++):?>
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
						<h3>Madeleine</h3>
						<table>
							<tr>
								<td class="small">售價</td>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="detailedBox">
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula.</p>
					</div>	
				</div>
				<?endfor?>
			</div>	
			
			

		
		</div>	

		
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>