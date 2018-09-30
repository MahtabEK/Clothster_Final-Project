<!DOCTYPE html>
<html>
	<head>
		<title>productList</title>
		<link rel="stylesheet" type="text/css" href="/css/productListF.css">
		<script type="text/javascript" src="/js/productList.js"></script>
	</head>

	<body>
		<div class="footer">
			<b id="head1"><span>خدمات مشتریان</span></b>
				<p id="head11"><span>سوالات متداول</span></p>
				<p id="head12"><span>بازگرداندن کالا</span></p>
				<p id="head13"><span>شرایط استفاده</span></p>
				<p id="head14"><span>حریم شخصی</span></p>
			
			<b id="head2"><span>اطلاعات ما</span></b>
				<p id="head21"><span>درباره ما</span></p>
				<p id="head22"><span>تماس با ما</span></p>
				
			<b id="head3"><span>به ما در رسانه های اجتماعی بپیوندید</span></b>
			<div class="container1">
				<div class="twitter1"><img src="/pictures/twitter (2).png"></div>
				<div class="twitter12"><img src="/pictures/twitter (2).png"></div>
			</div>
			<div class="container2">
				<div class="google_plus1"><img src="/pictures/google-plus-return.png"></div>
				<div class="google_plus12"><img src="/pictures/google-plus-return.png"></div>
			</div>
			<div class="container3">
				<div class="facebook1"><img src="/pictures/facebook_return.png"></div>
				<div class="facebook12"><img src="/pictures/facebook_return.png"></div>
			</div>
			<div class="container4">
				<div class="twitter2"><img src="/pictures/twitter (2).png"></div>
				<div class="twitter22"><img src="/pictures/twitter (2).png"></div>
			</div>
			<div class="container5">
				<div class="google_plus2"><img src="/pictures/google-plus-return.png"></div>
				<div class="google_plus22"><img src="/pictures/google-plus-return.png"></div>
			</div>
			<div class="container6">
				<div class="facebook2"><img src="/pictures/facebook_return.png"></div>
				<div class="facebook22"><img src="/pictures/facebook_return.png"></div>
			</div>
			
			
			<b dir ="rtl" id="head4"><span>تمامی حقوق این سایت متعلق به دانشگاه امیرکبیر بوده و هرگونه <br>استفاده از منابع و طراحی های این سایت توسط نهادی حارج از</br>دانشگاه با پیگرد قانونی همراه خواهد بود.</span></b>
		</div>
		
		<div class="block_buttons">
			<b id="title1">مردانه</b>
			<b id="title2">زنانه</b>
			<b id="title3">بچه گانه</b>
			<b id="title4">ورزشی</b>
			<b id="title5">تخفیف</b>
			<b id="title6">برندها</b>
			<img id="nav_line" src="/pictures/nav_line.png">
		</div>
		
		<div class="navigation">
			<!--<button id="navigation_member_button">عضویت</button>
			<button id="navigation_login_button">ورود</button>-->
			<div id="enter_section">
				<b id="user_name">مهتاب عزتی</b>
				<img id="arrow_name" src="/pictures/name_arrow.png">
				<p id="basket">سبد خرید</p>
				<img id="bag" src="/pictures/shopping_bag.png">
				<p id="number">&nbsp;0&nbsp;</p>
				<p id="maintain">پیگیری سفارش</p>
				<img id="maintain_image" src="/pictures/maintain_image.png">
			</div>
			
			<img id="clothster" src="/pictures/clothster.png">
			<div class="container">
				<input id="search" dir ="rtl" type="text" size="35"/>
				<div class="magnifier"><img src="/pictures/magnifier2.png"></div>							
				<div class="magnifier2"><img src="/pictures/magnifier2.png"></div>
			</div>
		</div>
		
		<b id="list_title">نام دسته</b>
		<b id="sort_title">مرتب سازی</b>
		<div id="sort_box">
			<p id="sort_menu">محبوب ترین</p>
			<div id="sort_arrow_box" onclick="myFunction()">
				<img id="sort_arrow" src="/pictures/down-arrow.png">
			</div>
			<div id="select_box">
				<div id="option1" onclick="optionSelection(1)">محبوب ترین</div>
				<div id="option2" onclick="optionSelection(2)">جدیدترین</div>
				<div id="option3" onclick="optionSelection(3)">پرفروش ترین</div>
			</div>
		</div>

		<div id="slider_border_search">
			<div id="slideshow-container">

				
					<div class="mySlides">
						<p class="search_slider_text">صفحه 1 از 2</p>
						<?php $i=1; $j=1; ?>
				<?php for($j = 1; $j < $rowNumber+1; $j++): ?>
					<?php for($i = 1; $i < 5; $i++): ?>
						<div class="pack1 row<?php echo e($j); ?>" id="pack<?php echo e($i); ?>">
							<img class="pack_img1" src="/pictures/pic1.png">
							<p class="percentage1">10%</p>
							<p class="brand_name1"><?php echo e($brand); ?></p>
							<p class="product_name1">سوئیشرت</p>
							<strike class="before_off1"><?php echo e($cost); ?></strike>
							<p class="after_off1">180</p>
							<p class="toman1">تومان</p>
						</div>
					<?php endfor; ?>
				<?php endfor; ?>
			

			<div id="next" onclick="plusSlides(1)"><p id="next_text">صفحه بعد</p><img id="next_arrow" src="/pictures/next_search.png"></div>
			<div id="prev" onclick="plusSlides(-1)"><p id="Prev_text">صفحه قبل</p><img id="prev_arrow" src="/pictures/prev_search.png"></div>	
		</div>
		
		<div class="search_right_box">
			<p class="search_right_box_title1">دسته بندی ها</p>
			<img onclick="minus_function()" class="search_right_box_minus1" src="/pictures/minus.png">
			<img onclick="plus_function()" class="search_right_box_plus1" src="/pictures/plus.png"> 
		</div>
		
		<div class="searc_right_box_rest">
			<img class="search_arrow" onclick="search_arrow_function1()" src="/pictures/search_arrow.png">
			<img id="up_replace" onclick="up_replace_function1()" src="/pictures/up.png">
			<p class="searc_right_box_rest_title">مردانه</p>
			<div id="search_right_box_rest_inner">
				<img id="up" src="/pictures/up.png">
				<b class="searc_right_box_rest_title">مردانه</b>
				<p id="sub1">مردانه1</p>
				<p id="sub2">مردانه2</p>
				<p id="sub3">مردانه3</p>
				<p id="sub4">مردانه4</p>
			</div>
			
			
			<img class="search_arrow" id="search_arrow2" src="/pictures/search_arrow.png">
			<!--<img id="up_replace1" onclick="up_replace_function1()" src="/pictures/up.png">-->
			<p class="searc_right_box_rest_title" id="searc_right_box_rest_title2">زنانه</p>
			<!--<div id="search_right_box_rest_inner2">
				<img id="up2" src="/pictures/up.png">
				<b class="searc_right_box_rest_title">زنانه</b>
				<p id="sub21">زنانه1</p>
				<p id="sub22">زنانه2</p>
				<p id="sub23">زنانه3</p>
				<p id="sub24">زنانه4</p>
			</div>-->
			
			<img class="search_arrow" onclick="search_arrow_function3()" id="search_arrow3" src="/pictures/search_arrow.png">
			<p class="searc_right_box_rest_title" id="searc_right_box_rest_title3">بچه گانه</p>
			
			<img class="search_arrow" onclick="search_arrow_function4()" id="search_arrow4" src="/pictures/search_arrow.png">
			<p class="searc_right_box_rest_title" id="searc_right_box_rest_title4">ورزشی</p>
			
			<img class="search_arrow" onclick="search_arrow_function5()" id="search_arrow5" src="/pictures/search_arrow.png">
			<p class="searc_right_box_rest_title" id="searc_right_box_rest_title5">تخفیف</p>
		</div>
		
		<div class="search_right_box" id="search_right_box2">
			<p class="search_right_box_title1">بر اساس برند</p>
			<img onclick="minus_function2()" class="search_right_box_minus1" src="/pictures/minus.png">
			<img onclick="plus_function2()" class="search_right_box_plus1" src="/pictures/plus.png"> 
		</div>
		<div class="searc_right_box_rest" id="search_right_box_rest2">
			<input id="brand_title" value="جست و جو برند" dir=rtl>
			<div id="optionn1"></div>
			<p id="brand_name_1">نام برند</p>
			<p id="brand_name_english1">brand</p>
			
			<div id="optionn2"></div>
			<p id="brand_name_2">نام برند</p>
			<p id="brand_name_english2">brand</p>
			
			<div id="optionn3"></div>
			<p id="brand_name_3">نام برند</p>
			<p id="brand_name_english3">brand</p>
			
			<div id="optionn4"></div>
			<p id="brand_name_4">نام برند</p>
			<p id="brand_name_english4">brand</p>
			
			<div id="optionn5"></div>
			<p id="brand_name_5">نام برند</p>
			<p id="brand_name_english5">brand</p>
			
			<div id="optionn6"></div>
			<p id="brand_name_6">نام برند</p>
			<p id="brand_name_english6">brand</p>
			
			<div id="optionn7"></div>
			<p id="brand_name_7">نام برند</p>
			<p id="brand_name_english7">brand</p>
			
			<div id="optionn8"></div>
		</div>
		
		
		<div class="search_right_box" id="search_right_box3">
			<p class="search_right_box_title1">رنگ</p>
			<img onclick="minus_function3()" class="search_right_box_minus1" src="/pictures/minus.png">
			<img onclick="plus_function3()" class="search_right_box_plus1" src="/pictures/plus.png"> 
		</div>
		<div class="searc_right_box_rest" id="search_right_box_rest3">
			<div class="colors roww1 coll1"></div>
			<div class="colors roww1 coll2" id="fcolor2"></div>
			<div class="colors roww1 coll3" id="fcolor3"></div>
			<div class="colors roww1 coll4" id="fcolor4"></div>
			<div class="colors roww1 coll5" id="fcolor5"></div>
			
			<div class="colors roww2 coll1" id="fcolor6"></div>
			<div class="colors roww2 coll2" id="fcolor7"></div>
			<div class="colors roww2 coll3" id="fcolor8"></div>
			<div class="colors roww2 coll4" id="fcolor9"></div>
			<div class="colors roww2 coll5" id="fcolor10"></div>
			
			<div class="colors roww3 coll1" id="fcolor11"></div>
			<div class="colors roww3 coll2" id="fcolor12"></div>
			<div class="colors roww3 coll3" id="fcolor13"></div>
			<div class="colors roww3 coll4" id="fcolor14"></div>
			<div class="colors roww3 coll5" id="fcolor15"></div>
			
			<div class="colors roww4 coll1" id="fcolor16"></div>
			<div class="colors roww4 coll2" id="fcolor17"></div>
			<div class="colors roww4 coll3" id="fcolor18"></div>
			<div class="colors roww4 coll4" id="fcolor19"></div>
			<div class="colors roww4 coll5" id="fcolor20"></div>
			
			<div class="colors roww5 coll1" id="fcolor21"></div>
			<div class="colors roww5 coll2" id="fcolor22"></div>
			<div class="colors roww5 coll3" id="fcolor23"></div>
			<div class="colors roww5 coll4" id="fcolor24"></div>
			<div class="colors roww5 coll5" id="fcolor25"></div>
			
			<div class="colors roww6 coll1"></div>
		</div>
		</div>
		</div>
	</body>
</html>




