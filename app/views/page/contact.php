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
		
		<div class="contantArea">
			<div class="contactBox">
				<img src="app/img/contact/title.png" class="title">
				<img src="app/img/contact/slogan.png" class="slogan">
				<img src="app/img/contact/pic1.png" class="pic1">
				<div class="textBox">
					<div class="course">
						<p><span class="big">{ 烘培＆料理教室 } </span>	<span> 週二~週六 9:00~18:00</span></p>
						<p><span class="big">{ 法式甜點販售日 }</span><span> 週六 9:00~18:00</span></p>
					</div>
					<div class="box phone">
						<div class="pic">
							<img src="app/img/contact/icon1.png">
						</div>
						<div class="right">
							(02)-2882-1871
						</div>
					</div>
					<div class="box mail">
						<div class="pic">
							<img src="app/img/contact/icon2.png">
						</div>
						<div class="right">
							service@187patissiere.com.tw
						</div>
					</div>
					<div class="box map">
						<div class="pic">
							<img src="app/img/contact/icon3.png">
						</div>
						<div class="right">
							台北市士林區中正路187巷2號
						</div>
						<div id="mapBox">
							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
							<script type="text/javascript">
							google.maps.event.addDomListener(window, 'load', function() {
								var mapdiv = document.getElementById('mapBox');
								var myOptions = {
									zoom: 13,
									center: new google.maps.LatLng(25.0955055,121.5273061),
									mapTypeId: google.maps.MapTypeId.ROADMAP,
									scaleControl: true
								};
								var map = new google.maps.Map(mapdiv, myOptions);
								var marker = new google.maps.Marker({
									position: new google.maps.LatLng(25.0955055,121.5273061),
									map: map, 
									title: 'Solnine'
								});
								var infowindow = new google.maps.InfoWindow({
									content: '<strong>EVP</strong><br />',
									size: new google.maps.Size(200, 200)
								});
								google.maps.event.addListener(marker, 'click', function() {
									infowindow.open(map,marker);
								});
							});
							</script>
						</div>
						<p class="bottomtext">士林捷運１號出口步行約５分鐘（中正路右轉至187巷再右轉）</p>
					</div>
				
				</div>
			</div>
			<div class="SignUpBox">
				<img src="app/img/contact/title2.png" class="title">
				<img src="app/img/contact/pic2.png" class="pic2">
				<h1>報名流程:</h1>
				<div class="processBox">
					<div class="line"></div>
					<div class="box">
						<h2>每月課程</h2>
						<p><span>1</span>先看看每月課表中，有甚麼想上的課程和時段 </p>
						<p><span>2</span>線上填寫每月課程報名</p>
						<p><span>3</span>我們會在3個工作天內回覆您「報名確認信」並提供匯款資訊</p>
						<p><span>4</span>請於收到「報名確認信」3天內繳費並回覆繳費帳號末五碼</p>
					</div>
					<div class="box">
						<h2>系列課、專修班</h2>
						<p><span>1</span>先看看甜點系列課、甜點專修班中想上甚麼課</p>
						<p><span>2</span>線上填寫意見回覆</p>
						<p><span>3</span>告訴我們您想上的課程、可以上課的時段</p>
						<p><span>4</span>我們在未來排課時，會優先考量您的意見，並通知您最新開課訊息</p>
					</div>
				</div>	
					<h1>注意事項:</h1>
					<div class="precautions">
						<p><span class="circle"></span>報名後三個工作天內，若未收到回覆信件，請來電洽詢。(週日和周一為公休日，請耐心等候。)</p>
						<p><span class="circle"></span>若無法於繳費期限內匯款，請先主動告知我們，以免被取消名額。</p>
						<p><span class="circle"></span>若繳款後未達開班人數，或遇不可抗力因素（如颱風..）取消時，可全額退費或保留學費至下堂課使用。</p>
						<p><span class="circle"></span>開課前一天取消報名，我們將酌收20%的食材費用。</p>
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
							<p>備註:</p>
							<input  class="input1" name="lastName" placeholder="">
						</div>
						<div class="box">
							<p>課程名稱:</p>
							<select >
								<option>技術支援
								<option>合作開發
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
						<textarea ></textarea>
							
						<div class="bottom">
							送出
						</div>
					</div>
					
					<div class="form1 three">
						<h1>意見回覆</h1>
						<p class="title">謝謝您瀏覽本公司網站，請詳細填寫下列表單並清楚告訴我們您的需要，
						收到留言後，會與您連絡，再次感謝您。</p>
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
						
							<textarea ></textarea>
						
						<div class="bottom">
							送出
						</div>
					</div>
					
					
				
			</div>
		
			
		</div>
		
		
	<img src="app/img/index/dessert01.png" class="dessert01">
</div>
		
<?=$temp['footer']?>