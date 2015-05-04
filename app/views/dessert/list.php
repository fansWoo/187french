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
});
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>	
<img src="app/img/index/dessert04.png" class="dessert04">
<div class="Area">
		<img src="app/img/index/dessert02.png" class="dessert02">
		<img src="app/img/index/dessert03.png" class="dessert03">
		<div class="contantArea">
			<img src="app/img/about/dessert/title.png" class="title">
			<div class="top_button">
				<a href="dessert/" class="buttonBox<?if(empty($search_class_slug_Str)):?> clicked<?endif?>">全部分類</a>
    			<?foreach($class_ClassMetaList->obj_Arr as $key => $value_ClassMeta):?>
				<a href="dessert/?class_slug=<?=$value_ClassMeta->slug_Str?>" class="buttonBox<?if($search_class_slug_Str == $value_ClassMeta->slug_Str):?> clicked<?endif?>"><?=$value_ClassMeta->classname_Str?></a>
				<?endforeach?>
			</div>
			<div class="boxArea one">
    			<?foreach($dessert_DessertList->obj_Arr as $key => $value_Dessert):?>
				<div class="itemArea">
					<div class="picBox">
						<div class="pic">
							<img src="<?=$value_Dessert->pic_PicObjList->obj_Arr[0]->path_Arr['w300h300']?>" class="img">
							<img src="app/img/about/dessert/dot.png" class="dot">
						</div>
						<img src="app/img/about/dessert/shadow2.png" class="shadow2">
						<div class="border"></div>
					</div>
					<div class="typeBox" style="width:200px;overflow:hidden;">
						<h2><?=$value_Dessert->name_Str?></h2>
						<h3><?=$value_Dessert->name_french_Str?></h3>
						<h3>售價： <?=$value_Dessert->price_Num?></h3>
					</div>
					<div class="detailedBox">
						<?=$value_Dessert->content_Str?>
					</div>	
				</div>
				<?endforeach?>
			</div>
    		<div class="pageLinks"><?=$page_links?></div>
		</div>
	</div>
		
<?=$temp['footer']?>