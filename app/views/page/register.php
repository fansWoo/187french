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
$(document).scroll(function(){
        var scroll_top = $(document).scrollTop();
        if(scroll_top == 0){
            $('.processBox ' ).removeClass('hover');
            $('#content1').addClass('hover');
        }
        else if(scroll_top >= 150 && scroll_top < 1080){
            $('.processBox').removeClass('hover');
            $('.processBox').addClass('hover');
        }
		
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
		<img src="app/img/index/dessert06.png" class="dessert06">
		<div class="contantArea">
			<div class="SignUpBox">
				<img src="app/img/contact/title2.png" class="title">
				
				<h1>報名流程:</h1>
				<div class="processBox">
					<div class="line"></div>
					<div class="box">
						<p><span class="dot">1</span class="title"><span>查看課表 : </span>先看看每月課表中，有甚麼想上的課程和時段。
						</p>
						<p><span class="dot">2</span class="title"><span>線上填寫 : </span>線上填寫每月課程報名。</p>
						<p><span class="dot">3</span class="title"><span>報名確認 : </span>我們會在3個工作天內回覆您「報名確認信」並提供匯款資訊。</p>
						<p><span class="dot">4</span class="title"><span>完成繳費 : </span>請於收到「報名確認信」3天內繳費並回覆繳費帳號末五碼。</p>
					</div>
					<div class="box2">
						<p><span class="circle"></span>報名當月課程，請填寫「每月課程報名」表。</p>
						<p><span class="circle"></span>預報專修班、系列課，請填寫「意見回覆」表。<br>
							(告訴我們您想上的課程、可以上課的時段)
						</p>
					</div>
					<img src="app/img/contact/pic2.png" class="pic2">
				</div>	
					<div class="form1 one">
						<h1>每月課程報名</h1>
						<div class="box">
							<p>姓名:</p>
							<input  class="input1" name="lastName" placeholder="name">
						</div>
						<div class="box">
							<p>連絡電話:</p>
							<input  class="input1" name="lastName" placeholder="phone">
						</div>
						<div class="box">
							<p>電子信箱:</p>
							<input  class="input1" name="lastName" placeholder="email">
						</div>
						<div class="box">
							<p>匯款帳號後五碼:</p>
							<input  class="input1" name="lastName" placeholder="">
						</div>
						<div class="box">
							<p>匯款金額:</p>
							<input  class="input1" name="lastName" placeholder="">
						</div>
					
						<div class="box">
							<p>課程名稱:</p>
							<select >
								<option>費南雪-原味、榛果、抹茶栗子
								<option>費南雪-原味、榛果、抹茶栗子
							</select>
						</div>
						<div class="box">
							<div class="checkbox">
								<h3>上課時間:</h3>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
								<p><input type="checkbox" value="1" name="Product_1"> 課程1</p>
							</div>
						</div>
						<textarea placeholder="備註"></textarea>
							
						<div class="submitLine">
							<input type="submit">
						</div>
					</div>
					<h1>注意事項:</h1>
					<div class="precautions">
						<p><span class="circle"></span>報名或留言後三個工作天內，我們會回覆您訊息或「報名確認信」。若未收到回覆信件，請來電洽詢。(週日和周一為公休日，請耐心等候。)</p>
						<p><span class="circle"></span>若無法於繳費期限內匯款，請先主動告知我們，以免被取消名額。</p>
						<p><span class="circle"></span>若繳款後未達開班人數，或遇不可抗力因素（如颱風..）取消時，可全額退費或保留學費至下堂課使用。</p>
						<p><span class="circle"></span>開課前一天取消報名，我們將酌收20%的食材費用。</p>
						<p><span class="circle"></span>響應環保，請攜帶18~20cm大小保鮮盒裝成品，並提早十分鐘報到。</p>
						<p><span class="circle"></span>考量廚房安全和其他學員上課權益，我們無法提供親友或小孩於教室內旁聽，但歡迎在用餐區看雜誌休息。</p>
						
					</div>
			</div>
		
			
		</div>
		
		
	<img src="app/img/index/dessert01.png" class="dessert01">
</div>
		
<?=$temp['footer']?>