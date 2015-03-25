 <script>
$(document).scroll(function(){
        var scroll_top = $(document).scrollTop();
        if(scroll_top == 0){
            $('.scroll_arrow ' ).removeClass('hover');
    
        }
        else if(scroll_top >= 100 && scroll_top < 99999){
            $('.scroll_arrow').removeClass('hover');
            $('.scroll_arrow').addClass('hover');
        }
		 
    });
 </script>
<div class="topHeader">
	<div class="contant">
	
		<a href=""><div class="logoArea">
			<img src="app/img/logo.png">
		</div></a>
		<div class="rightArea" >
			<div class="line"></div>
			<div class="line2"></div>
			<div class="line3"></div>
			
			<a href="page/contact"><div class="li">
				線上報名<br>Register
				<div class="borderTop"></div>
			</div></a>
			<div class="li">
				<p>最新消息<br>News</p>
				<div class="downbox news">
					<a href="news" class="item">最新消息 <br>News</a>
					<a href="activity" class="item">烘焙大小事 <br>Knowledge</a>
				</div>
			</div>
			<div class="li">
				<p>課程介紹<br>Course</p>
					<div class="downbox course">
						<a href="page/" class="item">當月單品課 <br>Monthly course</a>
						<a href="page/" class="item">甜點系列課 <br>Series baking course</a>
						<a href="page/" class="item">甜點專修班 <br>Specialize baking course</a>
					</div>
			</div>
			<div class="li">
				<p>關於我們<br>About us</p>
				<div class="downbox about">
					<a href="page/about" class="item">品牌故事 <br>Story</a>
					<a href="page/about_class" class="item">現場直擊 <br>About class </a>
					<a href="page/" class="item">甜點介紹&販售 <br>Dessert</a>
					<a href="page/about_sales" class="item">食材&器材販售 <br>Sales</a>
				</div>
			</div>	
		</div>
	</div>
		
</div>