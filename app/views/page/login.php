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
	<div class="bg1">
		<div class="topbg">
			
		</div>	
		<div class="contant">
			<div class="centerArea">
				<div class="box">
					<p>電子郵件</p>
					<input  class="input1" name="lastName" placeholder="email">
				</div>
				<div class="bottom">
					註 冊
				</div>
			</div>
		</div>
	</div>
	
<?=$temp['footer']?>