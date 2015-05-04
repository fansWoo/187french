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
	$(function () {
            $('a[href^=#]').click(function () {
                var speed = 500;
                var href = $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
              $("html, body").animate({scrollTop: position}, speed, "swing");
                    return false;
            });
        });//ie 適用 

 </script>
<div class="topHeader" id="topHeader">
	<div class="contant">
	
		<a href=""><div class="logoArea">
			<img src="app/img/logo.png">
		</div></a>
		<div class="rightArea" >
			<div class="line"></div>
			<div class="line3"></div>
			
			<div class="fb">
				<a href="https://www.facebook.com/187patissiere"><img src="app/img/fb.png"></a>
			</div>
			<a href="contact"><div class="li">
				線上報名<br>Register
				<div class="borderTop"></div>
			</div></a>
			<a href="news">
				<div class="li">
					<p>最新消息<br>News</p>
					<div class="downbox news">
						<a href="news" class="item">最新消息 <br>News</a>
						<a href="knowledge" class="item">烘焙大小事 <br>Knowledge</a>
					</div>
				</div>
			</a>
			<a href="month_course">
				<div class="li">
					<p>課程介紹<br>Course</p>
						<div class="downbox course">
							<a href="month_course" class="item">當月課程<br>Monthly course</a>
							<a href="course" class="item">專修班<br> Specialize Course</a>
							<a href="series_course" class="item">系列課<br> Series Course</a>
						</div>
				</div>
			</a>
			<a href="page/about_story">
				<div class="li">
					<p>關於我們<br>About us</p>
					<div class="downbox about">
						<a href="page/about_story" class="item">品牌故事 <br>Story</a>
						<a href="page/about_class" class="item">現場直擊 <br>About class </a>
						<a href="dessert" class="item">甜點介紹&販售 <br>Dessert</a>
						<a href="page/about_sales" class="item">器材&食材販售<br>Sales</a>
						<a href="page/about_contact" class="item">聯絡我們<br>Contact us</a>
					</div>
				</div>
			</a>	
		</div>
	</div>
		
</div>
<a href="#topHeader"><img src="app/img/scroll_arrow.png" class="scroll_arrow"></a>