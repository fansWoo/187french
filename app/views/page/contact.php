<?=$temp['header_up']?>
<script>
$(function(){
	$(document).scroll(function(){
		var scroll_top = $(document).scrollTop();
		if(scroll_top == 0){
			$('.contantArea1 , .contantArea2 ').removeClass('hover');
		}
		else if(scroll_top >= 0 && scroll_top < 700){
			$('.contantArea1').addClass('hover');
		}
		else if(scroll_top >= 700 && scroll_top < 3000){
			$('.contantArea2').addClass('hover');
		}
		
		
	});
});
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<div class="Area">
	<div class="topbg">
		<img src="app/img/contact/bg_title2.png" class="title1">
	</div>	
	<div class="centerArea">
		<div class="contantArea">
				<h1>Store</h1>
			<div class="leftBoxArea">
				<div class="contactBox">
					<div class="textBox one">
						<img src="app/img/contact/pic1.png" class="pic">
						<div class="arrow1"></div>
						<h2>台北總公司</h2>
						<p>新北市新店區民權路95號12樓之3</p>
						<p>TEL:+886-2-8219-1366</p>
						<p>FAX:+886-2-8219-1835</p>
					</div>
					<div id="mapBox">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript">
						google.maps.event.addDomListener(window, 'load', function() {
							var mapdiv = document.getElementById('mapBox');
							var myOptions = {
								zoom: 13,
								center: new google.maps.LatLng(24.9829232,121.5376352),
								mapTypeId: google.maps.MapTypeId.ROADMAP,
								scaleControl: true
							};
							var map = new google.maps.Map(mapdiv, myOptions);
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(24.9829232,121.5376352),
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
				</div>
				<div class="contactBox two">
					<div id="mapBox2">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript">
						google.maps.event.addDomListener(window, 'load', function() {
							var mapdiv = document.getElementById('mapBox2');
							var myOptions = {
								zoom: 13,
								center: new google.maps.LatLng(31.077206,121.5171955),
								mapTypeId: google.maps.MapTypeId.ROADMAP,
								scaleControl: true
							};
							var map = new google.maps.Map(mapdiv, myOptions);
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(31.077206,121.5171955),
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
					<div class="textBox two">
						<img src="app/img/contact/pic1.png"class="pic">
						<div class="arrow"></div>
						<h2>上海辦事處</h2>
						<p>中國上海聯航路1588號<br>查爾斯大廈</p>
						<p>TEL:+86-21-6475-7000</p>
						<p>FAX:+86-21-5464-0728</p>
					</div>
				</div>
				<div class="contactBox">
					<div class="textBox one">
						<img src="app/img/contact/pic1.png" class="pic">
						<div class="arrow1"></div>
						<h2>美國辦事處</h2>
						<p>615 Alder Ln, Walnut, <br>CA 91789</p>
					</div>
					<div id="mapBox3">
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript">
						google.maps.event.addDomListener(window, 'load', function() {
							var mapdiv = document.getElementById('mapBox3');
							var myOptions = {
								zoom: 13,
								center: new google.maps.LatLng(34.007942,-117.840633),
								mapTypeId: google.maps.MapTypeId.ROADMAP,
								scaleControl: true
							};
							var map = new google.maps.Map(mapdiv, myOptions);
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(34.007942,-117.840633),
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
				</div>
				
			
			</div>
			<div class="rightBoxArea">
				<h3>填寫表單</h3>
				<h2>謝謝您瀏覽本公司網站，請詳細填寫下列表單並清楚告訴我們您的需要，
				收到留言後，會與您連絡，再次感謝您。</h2>
				<div class="form">
					<div class="box">
						<p>姓名:</p>
						<input  class="input1" name="lastName" placeholder="name">
					</div>
					<div class="box">
						<p>公司:</p>
						<input  class="input1" name="lastName" placeholder="公司名稱">
					</div>
					<div class="box">
						<p>電子信箱:</p>
						<input  class="input1" name="lastName" placeholder="email">
					</div>
					<div class="box">
						<p>詢問類別:</p>
						<select >
							<option>技術支援
							<option>合作開發
						</select>
					</div>
					<div class="box">
						<textarea ></textarea>
					</div>
					<div class="bottom">
						送出
					</div>
				</div>
			
			</div>
		</div>	
	</div>	
</div>		
<?=$temp['footer']?>