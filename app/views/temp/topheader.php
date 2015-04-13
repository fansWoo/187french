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
			<div class="line2"></div>
			<div class="line3"></div>
			
			<a href="page/register"><div class="li">
				線上報名<br>Register
				<div class="borderTop"></div>
			</div></a>
			<div class="li">
				<p>最新消息<br>News</p>
				<div class="downbox news">
					<a href="page/news_news" class="item">最新消息 <br>News</a>
					<a href="page/news_knowledge" class="item">烘焙大小事 <br>Knowledge</a>
				</div>
			</div>
			<div class="li">
				<p>課程介紹<br>Course</p>
					<div class="downbox course">
						<a href="page/course_monthly" class="item">當月單品課 <br>Monthly course</a>
						<a href="page/" class="item">甜點系列課 <br>Series baking course</a>
						<a href="page/" class="item">甜點專修班 <br>Specialize baking course</a>
					</div>
			</div>
			<div class="li">
				<p>關於我們<br>About us</p>
				<div class="downbox about">
					<a href="page/about_story" class="item">品牌故事 <br>Story</a>
					<a href="page/about_class" class="item">現場直擊 <br>About class </a>
					<a href="page/about_dessert" class="item">甜點介紹&販售 <br>Dessert</a>
					<a href="page/about_sales" class="item">食材&器材販售 <br>Sales</a>
					<a href="page/about_contact" class="item">聯絡我們<br>Contact us</a>
				</div>
			</div>	
		</div>
	</div>
		
</div>
<a href="#topHeader"><img src="app/img/scroll_arrow.png" class="scroll_arrow"></a>