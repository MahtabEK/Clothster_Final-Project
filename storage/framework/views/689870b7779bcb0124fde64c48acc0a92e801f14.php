<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/homeRegisteredF.css">
		<script type="text/javascript" src="js/homeRegistered.js"></script>
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
				<div class="twitter1"><img src="pictures/twitter (2).png"></div>
				<div class="twitter12"><img src="pictures/twitter (2).png"></div>
			</div>
			<div class="container2">
				<div class="google_plus1"><img src="pictures/google-plus-return.png"></div>
				<div class="google_plus12"><img src="pictures/google-plus-return.png"></div>
			</div>
			<div class="container3">
				<div class="facebook1"><img src="pictures/facebook_return.png"></div>
				<div class="facebook12"><img src="pictures/facebook_return.png"></div>
			</div>
			<div class="container4">
				<div class="twitter2"><img src="pictures/twitter (2).png"></div>
				<div class="twitter22"><img src="pictures/twitter (2).png"></div>
			</div>
			<div class="container5">
				<div class="google_plus2"><img src="pictures/google-plus-return.png"></div>
				<div class="google_plus22"><img src="pictures/google-plus-return.png"></div>
			</div>
			<div class="container6">
				<div class="facebook2"><img src="pictures/facebook_return.png"></div>
				<div class="facebook22"><img src="pictures/facebook_return.png"></div>
			</div>
			
			
			<b dir ="rtl" id="head4"><span>تمامی حقوق این سایت متعلق به دانشگاه امیرکبیر بوده و هرگونه <br>استفاده از منابع و طراحی های این سایت توسط نهادی حارج از</br>دانشگاه با پیگرد قانونی همراه خواهد بود.</span></b>
		</div>
		
		<div>
			<img id="brands" src="pictures/brands.png">
			<p id="brand_experience"><span>تمام برندهای معتبر را با ما تجربه کنید</span></p>
		</div>
		
		<div class="news">
			<img id="open_envelope_icon" src="pictures/open_envelope.png">
			<p id="news_text1">در خبرنامه ی ما</p>
			<b id="news_text2">!عضو شوید</b>
			<div class="big"><input id="email_input_field" dir ="rtl" type="text" size="35" value="آدرس ایمیل خود را وارد کنید"/>
			<div class="container7">
				<div class="closed_envelope_icon"><img src="pictures/closed_envelope.png"></div>
				<div class="closed_envelope_icon2"><img src="pictures/closed_envelope2.png"></div>
			</div></div>
			<button id="member_button">عضو شوید</button>
		</div>

		<div id="slider_border">
			<div id="slideshow-container">
				<div class="mySlides fade">
					<img class="image_slide" src="pictures/image1.jpg">
				</div>

				<div class="mySlides fade">
					<img class="image_slide" src="pictures/image2.jpg">
				</div>

				<div class="mySlides fade">
					<img class="image_slide" src="pictures/image3.jpg">
				</div>

				<div class="mySlides fade">
					<img class="image_slide" src="pictures/image4.jpg">
				</div>

				<img class="next" src="pictures/next.png" onclick="plusSlides(1)">
				<img class="prev" src="pictures/previous.png" onclick="plusSlides(-1)">

	        </div>
			<div id="dots">
				<div class="dot" onclick="currentSlide(1)"></div>
				<div class="dot" onclick="currentSlide(2)"></div>
				<div class="dot" onclick="currentSlide(3)"></div>
				<div class="dot" onclick="currentSlide(4)"></div>
			</div>

			<div id="slider_buttom">
				<div id="men">
					<img id= "image1" src=<?php echo e($promotion1); ?>>
					<p id="men_text">مردانه</p>
				</div>

				<div id="women">
					<img id= "image2" src=<?php echo e($promotion2); ?>>
					<p id="women_text">زنانه</p>
				</div>

				<div id="children">
					<img id= "image3" src=<?php echo e($promotion3); ?>>
					<p id="children_text">بچه گانه</p>
				</div>
			</div>
		</div>
		
		<div id="buy_best">
			<p id="buy_best_text">بهترین ها را از ما خرید کنید</p>
		</div>
		

		
		<div class="block_buttons">
			<b id="title1"><a href="categoryMan">مردانه</a></b>
			<b id="title2"><a href="categoryWomen">زنانه</a></b>
			<b id="title3"><a href="categoryChildren">بچه گانه</a></b>
			<b id="title4">ورزشی</b>
			<b id="title5">تخفیف</b>
			<b id="title6">برندها</b>
			<img id="nav_line" src="pictures/nav_line.png">
		</div>
		
		<div class="navigation">
			<!--<button id="navigation_member_button">عضویت</button>
			<button id="navigation_login_button">ورود</button>-->
			<div id="enter_section">
				<b id="user_name"><?php echo e(Auth::user()->name); ?></b>
				<img id="arrow_name" src="pictures/name_arrow.png">
				<p id="basket">سبد خرید</p>
				<img id="bag" src="pictures/shopping_bag.png">
				<p id="number">&nbsp;0&nbsp;</p>
				<p id="maintain">پیگیری سفارش</p>
				<img id="maintain_image" src="pictures/maintain_image.png">
			</div>
			
			<img id="clothster" src="pictures/clothster.png">
			<div class="container">
				<input id="search" dir ="rtl" type="text" size="35"/>
				<div class="magnifier"><img src="pictures/magnifier2.png"></div>							
				<div class="magnifier2"><img src="pictures/magnifier2.png"></div>
			</div>
		</div>
	</body>
</html>











