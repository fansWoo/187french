<?=$temp['header_up']?>
<script src="app/js/cycle2.js"></script>
 <script>
    $(document).ready(function(){
            
              $(".slidePic > .square").cycle({
				fx      :       "fade", 
				//fadeout
				//scrollHorz
				timeout: 2000 ,
				speed: 600,
				manualSpeed: 300,
				slides: ' > .slidePicHref',
				next: '.slidePicBox .next',
				prev: '.slidePicBox .prev',
				pager: '.cycle-pager'
        });
            });
		$(document).on('click', '.cycle-pager', function(){
		$('.cycle-pager').removeClass('clicked');
		$(this).addClass('clicked');
  
		});
    $(document).scroll(function(){
        var scroll_top = $(document).scrollTop();
        if(scroll_top == 0){
            $('.bottomArea , .footer ' ).removeClass('hover');
            $('#content1').addClass('hover');
        }
        else if(scroll_top >= 250 && scroll_top < 480){
            $('.slogan2').removeClass('hover');
            $('.slogan2').addClass('hover');
        }
		 else if(scroll_top >= 480 && scroll_top < 900){
            $('.bottomArea').removeClass('hover');
            $('.bottomArea').addClass('hover');
        }
        else if(scroll_top >= 900 && scroll_top < 4200){
			$('.footer').addClass('hover');
		}
    });
	$(document).scroll(function(){
				var scroll_top = $(document).scrollTop();
				if(scroll_top == 0){
					$('').removeClass('hover');

				}
				if(scroll_top <= 100){
					$('.scroll_arrow').removeClass('hover');

				}
				else if(scroll_top >=100  && scroll_top < 2100){
					$('.scroll_arrow').addClass('hover');
				}
			});
	$(document).on('click', '.scroll_arrow', function(){
        $("body").animate({scrollTop: 0}, 1200, 'swing');
    });
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>

	<div class="Area">
		<img src="app/img/scroll_arrow.png" class="scroll_arrow">
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert03.png" class="dessert03">
		<div class="contantArea">
		<div class="topArea">
				<img src="app/img/index/slogan1.png" class="slogan1">
				<img src="app/img/index/slogan2.png" class="slogan2">
			<div class="slidePicBox" >
				<div class="slidePic" >
					<div class="square">
						<img src="app/img/index/pic1.png" class="slidePicHref">
						<img src="app/img/index/pic2.png" class="slidePicHref">
						<img src="app/img/index/pic3.png" class="slidePicHref">
						<img src="app/img/index/pic4.png" class="slidePicHref">
						<img src="app/img/index/pic5.png" class="slidePicHref">
					</div>
					<div class="cycle-pager" ></div>
					<img src="app/img/index/arrow.png" class="next">
					<img src="app/img/index/arrow2.png" class="prev">
				</div>
			</div>
		</div>
			<div class="bottomArea">
				<div class="box">
					<div class="picBox">
						<div class="img">
							<img src="app/img/index/hover_pic2.jpg" class="pic">
						</div>
						<div class="border"></div>
						<div class="hoverBox">
							<img src="app/img/index/text_about.png">
						</div>
						<img src="app/img/index/shadow.png" class="shadow">
					</div>
					<div class="TextBox">
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, </p>
						<div class="enter"></div>
					</div>
				</div>
				<div class="box ">
					<div class="picBox ">
						<div class="img">
							<img src="app/img/index/hover_pic.jpg" class="pic">
						</div>
						<div class="border two"></div>
						<div class="hoverBox">
							<img src="app/img/index/text1.png">
						</div>
						<img src="app/img/index/shadow.png" class="shadow">
					</div>
					<div class="TextBox">
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, </p>
						<div class="enter"></div>
					</div>
				</div>
				<div class="box">
					<div class="picBox">
						<div class="img">
							<img src="app/img/index/hover_pic3.jpg" class="pic"> 
						</div>
						<div class="border"></div>
						<div class="hoverBox">
							<img src="app/img/index/text_news.png">
						</div>
						<img src="app/img/index/shadow.png" class="shadow">
					</div>
					<div class="TextBox">
						<p>Sed id dolor. In hac habitasse platea dictumst. Maecenas diam ligula, vulputate vitae, mollis at, ullamcorper non, velit. Donec in velit. Sed lacus nisl, vestibulum sed, </p>
						<div class="enter"></div>
					</div>
				</div>
			
			</div>
		
		
		
		</div>
		
	
	</div>







<?=$temp['footer']?>