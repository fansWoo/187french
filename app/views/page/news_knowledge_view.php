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
				
			<div class="boxArea one">
			<div class="topBox">
				<img src="app/img/news/title.png" class="title">
				<p><a href="page/news_knowledge">烘焙大小事</a> > 2月份課程資訊</p>
			</div>
				<div class="news_item">
					<div class="right_text">
						<h2>187食安教室-玫瑰花瓣</h2>
						<div class="box">
							<div class="pic">
								<img src="app/img/news/knowledge/pic1.jpg">
							</div>
							<p>一般市售的玫瑰花是觀賞用途，為了美觀大都有灑農藥，不適合拿來做成食材入菜。
							而大部分商家，為了省錢省時，都會選擇化學製成的玫瑰花香精和紅色色素來代替。
							</p>
							<p>但是，真正的玫瑰花瓣其實是含有很多健康成分的食材呢!
							(維他命C、花青素、生物類黃酮、B群、維他命K、胡蘿蔔素、鈣質、鎂、和銅)
							而我們為了讓消費者吃得健康，特地向花農訂購新鮮的有機花瓣。
							訂購當天現採的花瓣，不含農藥可以直接食用，色澤和和香氣也都特別濃郁。
							</p>
							<p>愛吃甜點的你，知道嗎?
							玫瑰和荔枝其實是很好的朋友，搭配在一起甜甜的香氣，瞬間讓整個甜點高級起來。
							我們在果醬和馬卡龍中，都做了荔枝玫瑰口味。
							</p>
							<p>有時間可以大家可以在家做看看，沒時間也可以來「187巷的法式」吃看看!
							</p>
						</div>
						
							
						
					</div>
					
				</div>
				
			
				
				
			</div>

		
		</div>	

		
		<img src="app/img/index/dessert01.png" class="dessert01">
	</div>
		
<?=$temp['footer']?>