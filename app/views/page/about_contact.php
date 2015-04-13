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
		</div>
	<img src="app/img/index/dessert01.png" class="dessert01">
</div>
		
<?=$temp['footer']?>