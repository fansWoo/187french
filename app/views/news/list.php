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
<?=$temp['leftmenu']?>	
		<div class="centerArea">
			<div class="contantArea">
				<h1>
					 News
				</h1>
				<div class="pic">
					<img src="app/img/news/pic1.jpg">
					<div class="hoverBox">
						<div class="title">
							<img src="app/img/news/title.png">
						</div>
						<div class="text">
							<p>Sed id dolor. In hac habitasse habitasse</p>
							<p>Sed id dolor. In hac habitasse</p>
						</div>
					</div>
				</div>
				<div class="boxArea">
					<div class="news_item">
						<div class="right_text">
							<div class="left_pic">
								<img src="app/img/news/news_item/pic2.JPG">
							</div>
							<h2>TITLE</h2>	
							<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula. Duis vel lacus. In tincidunt. Vestibulum elit. Praesent hendrerit. Suspendisse venenatis.</p>
						</div>
						<a href="news/view">
							<div class="more">
							more
							<img src="app/img/arrow3.png">
							</div>
						</a>
					</div>
					<div class="news_item">
						
						<div class="right_text">
							<div class="left_pic">
								<img src="app/img/news/news_item/pic2.JPG">
							</div>
							<h2>TITLE</h2>	
							<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula. Duis vel lacus. In tincidunt. Vestibulum elit. Praesent hendrerit. Suspendisse venenatis.</p>
						</div>
						<a href="news/view">
							<div class="more">
							more
							<img src="app/img/arrow3.png">
							</div>
						</a>
					</div>
					<div class="news_item">
						<div class="right_text">
							<div class="left_pic">
								<img src="app/img/news/news_item/pic2.JPG">
							</div>
							<h2>TITLE</h2>
							<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula. Duis vel lacus. In tincidunt. Vestibulum elit. Praesent hendrerit. Suspendisse venenatis.</p>
						</div>
						<a href="news/view">
							<div class="more">
							more
							<img src="app/img/arrow3.png">
							</div>
						</a>
					</div>
					<div class="news_item">
						<div class="right_text">
							<div class="left_pic">
								<img src="app/img/news/news_item/pic2.JPG">
							</div>
							<h2>TITLE</h2>
							<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, vehicula et, commodo eu, ligula. Duis vel lacus. In tincidunt. Vestibulum elit. </p>
						</div>
						<a href="news/view">
							<div class="more">
							more
							<img src="app/img/arrow3.png">
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="number_box">
				<a href="" class="prev"></a>
				<div class="number">
					<a href="">1</a>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href="">5</a>
				</div>
				<a href="" class="next"></a>
			</div>
		</div>
</div>	
<?=$temp['footer']?>