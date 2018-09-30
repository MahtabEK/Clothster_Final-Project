<!DOCTYPE html>
<html>
	<head>
		<title>profile</title>
		<link rel="stylesheet" type="text/css" href="/css/profile.css">
		
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
			<b id="title1"><a href="categoryMan">مردانه</a></b>
			<b id="title2"><a href="categoryWomen">زنانه</a></b>
			<b id="title3"><a href="categoryChildren">بچه گانه</a></b>
			<b id="title4">ورزشی</b>
			<b id="title5">تخفیف</b>
			<b id="title6">برندها</b>
			<img id="nav_line" src="/pictures/nav_line.png">
		</div>
		
		<div class="navigation">
			<!--<button id="navigation_member_button">عضویت</button>
			<button id="navigation_login_button">ورود</button>-->
			<div id="enter_section">
				<b id="user_name"><?php echo e($khiyar['name']); ?></b>
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
		
		<div id="profile_form">
			<p id="profile_form_username">نام کاربر</p>
			<img id="profile_picture" src="/pictures/profile_picture.png">
			<img id="gender" src="/pictures/gender.png">
			<img id="man" src="/pictures/man.png">
			<img id="woman" src="/pictures/woman.png">
			<img id="profile_form_right" src="/pictures/profile_form_right.png">
			<img id="profile_form_middle" src="/pictures/profile_form_middle.png">
			<img id="profile_form_left" src="/pictures/profile_form_left.png">
			<img id="profile_form_button" src="/pictures/profile_form_button.png">

			<form method="post" action="/profile/<?php echo e($khiyar['email']); ?>/update">
			<?php echo csrf_field(); ?>

				<input name="FLname" class="profile_input" id="profile_input1" dir ="rtl" type="text" size="35" value="برای مثال مهتاب عزتی"/>
				<input name="mobile" class="profile_input" id="profile_input2" dir ="rtl" type="text" size="35" value="برای مثال 09141061872"/>
				<input name="date" class="profile_input" id="profile_input3" dir ="ltr" type="date" size="35" value="Data Picker is HERE!"/>
				<input name="old_password" class="profile_input" id="profile_input4" dir ="rtl" type="password" size="35"/>
				<input name="new_password" class="profile_input" id="profile_input5" dir ="rtl" type="password" size="35"/>
				<input name="city" class="profile_input" id="profile_input6" dir ="rtl" type="text" size="35" value="برای مثال تهران"/>
				<input name="phone" class="profile_input" id="profile_input7" dir ="rtl" type="text" size="35" value="برای مثال 02144878598"/>
				<input name="creditCar" class="profile_input" id="profile_input8" dir ="rtl" type="text" size="35" value="اختیاری"/>
				<input class="repeatNewPassword" id="profile_input9" dir ="rtl" type="password" size="35"/>
				<button type="submit">ثبت</button>
			</form>
	   </div>
	   
	   <img id="address" src="/pictures/adresses.png">
	   <img id="address_arrow" src="/pictures/address_arrow.png">
	  
		<div class="send_box">
			<img class="chosen_address" src="/pictures/chosen_address.png">
			<img class="pencil" src="/pictures/pencil.png">
			<img class="pencil2" src="/pictures/pencil2.png">
	
			<div class="send_box_row1">
				<div class="send_box_row1_column1">
					<p class="send_box_row1_column1_title" dir=rtl>تحویل گیرنده:</p>
					<p class="send_box_row1_column1_value">نام</p>
				</div>	
				
				<div class="send_box_row1_column2">
					<p class="send_box_row1_column2_title" dir=rtl>شماره تلفن ثابت:</p>
					<p class="send_box_row1_column2_value">شماره</p>
				</div>	
				
				<div class="send_box_row1_column3">
					<p class="send_box_row1_column3_title" dir=rtl>شماره تلفن همراه:</p>
					<p class="send_box_row1_column3_value">شماره</p>
				</div>
			</div>
			
			<div class="send_box_row2">
				<div class="send_box_row2_column1">
					<p class="send_box_row2_column1_title" dir=rtl>آدرس:</p>
					<p class="send_box_row2_column1_value">متن آدرس</p>
				</div>	
				
				<div class="send_box_row2_column2">
					<p class="send_box_row2_column2_title" dir=rtl>کد پستی:</p>
					<p class="send_box_row2_column2_value">مقدار کد پستی</p>
				</div>
			</div>
		</div>
		
		<div class="send_box" id="send_box_2">
			<img class="chosen_address" src="/pictures/Nchosen_address.png">
			<img class="pencil" src="/pictures/pencil.png">
			<img class="pencil2" src="/pictures/pencil2.png">
	
			<div class="send_box_row1">
				<div class="send_box_row1_column1">
					<p class="send_box_row1_column1_title" dir=rtl>تحویل گیرنده:</p>
					<p class="send_box_row1_column1_value">نام</p>
				</div>	
				
				<div class="send_box_row1_column2">
					<p class="send_box_row1_column2_title" dir=rtl>شماره تلفن ثابت:</p>
					<p class="send_box_row1_column2_value">شماره</p>
				</div>	
				
				<div class="send_box_row1_column3">
					<p class="send_box_row1_column3_title" dir=rtl>شماره تلفن همراه:</p>
					<p class="send_box_row1_column3_value">شماره</p>
				</div>
			</div>
			
			<div class="send_box_row2">
				<div class="send_box_row2_column1">
					<p class="send_box_row2_column1_title" dir=rtl>آدرس:</p>
					<p class="send_box_row2_column1_value">متن آدرس</p>
				</div>	
				
				<div class="send_box_row2_column2">
					<p class="send_box_row2_column2_title" dir=rtl>کد پستی:</p>
					<p class="send_box_row2_column2_value">مقدار کد پستی</p>
				</div>
			</div>
		</div>
		
		<img id="add_new_address" src="/pictures/add_new_address.png">
		
	    <img id="order" src="/pictures/order.png">
	    <img id="address_arrow2" src="/pictures/address_arrow.png">
		
	    <img id="titlee" src="/pictures/titlee.png">
	   
	    <div class="orders_row" id="orders_row1">
			<p class="row_number">1</p>
			<p class="row_code">123456</p>
			<p class="row_date_time">00:00 97/2/3</p>
			<p class="row_total_cost" dir=rtl>200 تومان</p>
			<p class="row_status">تحویل شده</p>
			<button class="row_operation">پرداخت</button>
			<img class="row_arrow" src="/pictures/row_arrow.png">
	    </div>
		
		<div class="orders_row" id="orders_row2">
			<p class="row_number">2</p>
			<p class="row_code">123456</p>
			<p class="row_date_time">00:00 97/2/3</p>
			<p class="row_total_cost" dir=rtl>200 تومان</p>
			<p class="row_status">تحویل شده</p>
			<button class="row_operation">پرداخت</button>
			<img class="row_arrow" src="/pictures/row_arrow.png">
	    </div>
		
		 <div class="orders_row" id="orders_row3">
			<p class="row_number">3</p>
			<p class="row_code">123456</p>
			<p class="row_date_time">00:00 97/2/3</p>
			<p class="row_total_cost" dir=rtl>200 تومان</p>
			<p class="row_status">تحویل شده</p>
			<button class="row_operation">پرداخت</button>
			<img class="row_arrow" src="/pictures/row_arrow.png">
	    </div>
		
		<div class="orders_row" id="orders_row4">
			<p class="row_number">4</p>
			<p class="row_code">123456</p>
			<p class="row_date_time">00:00 97/2/3</p>
			<p class="row_total_cost" dir=rtl>200 تومان</p>
			<p class="row_status">تحویل شده</p>
			<button class="row_operation">پرداخت</button>
			<img class="row_arrow" src="/pictures/row_arrow.png">
	    </div>
		
		<div class="orders_row" id="orders_row5">
			<p class="row_number">5</p>
			<p class="row_code">123456</p>
			<p class="row_date_time">00:00 97/2/3</p>
			<p class="row_total_cost" dir=rtl>200 تومان</p>
			<p class="row_status">تحویل شده</p>
			<button class="row_operation">پرداخت</button>
			<img class="row_arrow" src="/pictures/row_arrow2.png">
	    </div>
		
		<!---->
		<div id="firstRow">
			<img id="firstRow_part1" src="/pictures/firstRow_profile.png">
			<img id="firstRow_part2" src="/pictures/firstRow_profile2.png">
			<img id="firstRow_part3" src="/pictures/firstRow_profile3.png">
			<img id="firstRow_part4" src="/pictures/firstRow_profile4.png">
		</div>
		
		<div class="item_in_cart">
			<img class="column_Cart1" src="/pictures/columnHAHA.png">
			<img class="column_Cart2" src="/pictures/columnHAHA.png">
			
			<!--column 1-->
			<div class="cart_item_image"></div>
			<b class="cart_item_brand_name">نام برند</b>
			<p class="cart_item_product_name1">نام محصول</p>
			<p class="cart_item_product_name2">نام محصول</p>
			<p class="cart_item_product_name3">نام محصول</p>
			<p class="cart_item_product_color" dir=rtl>رنگ:</p>
			<p class="cart_item_product_color_value">نام رنگ</p>
			<p class="cart_item_product_size" dir=rtl>سایز:</p>
			<p class="cart_item_product_size_value">عدد سایز</p>
			<p class="cart_item_product_code" dir=rtl>کد کالا:</p>
			<p class="cart_item_product_code_value">کد کالا</p>
			
			<!--column 2-->
			<p class="count_number">1</p>
			<img class="count_plus" src="/pictures/count_plus.png">
			<img class="count_minus" src="/pictures/count_minus.png">
			
			<!--column 3-->
			<p class="item_cost">قیمت واحد</p>
			<p class="item_cost item_cost_value">100</p>
			<p class="item_cost toman">تومان</p>
			<p class="item_cost pink row2">تخفیف</p>
			<p class="item_cost item_cost_value pink row2">20</p>
			<p class="item_cost toman pink row2">تومان</p>
			<img class="table_line" src="/pictures/table_line.png">
			<p class="item_cost row3">قیمت نهایی</p>
			<p class="item_cost item_cost_value row3">100</p>
			<p class="item_cost toman row3">تومان</p>
		</div>
		
		<div class="item_in_cart" id="item2">
			<img class="column_Cart1" src="/pictures/columnHAHA.png">
			<img class="column_Cart2" src="/pictures/columnHAHA.png">
			
			<!--column 1-->
			<div class="cart_item_image"></div>
			<b class="cart_item_brand_name">نام برند</b>
			<p class="cart_item_product_name1">نام محصول</p>
			<p class="cart_item_product_name2">نام محصول</p>
			<p class="cart_item_product_name3">نام محصول</p>
			<p class="cart_item_product_color" dir=rtl>رنگ:</p>
			<p class="cart_item_product_color_value">نام رنگ</p>
			<p class="cart_item_product_size" dir=rtl>سایز:</p>
			<p class="cart_item_product_size_value">عدد سایز</p>
			<p class="cart_item_product_code" dir=rtl>کد کالا:</p>
			<p class="cart_item_product_code_value">کد کالا</p>
			
			<!--column 2-->
			<p class="count_number">1</p>
			<img class="count_plus" src="/pictures/count_plus.png">
			<img class="count_minus" src="/pictures/count_minus.png">
			
			<!--column 3-->
			<p class="item_cost">قیمت واحد</p>
			<p class="item_cost item_cost_value">100</p>
			<p class="item_cost toman">تومان</p>
			<p class="item_cost pink row2">تخفیف</p>
			<p class="item_cost item_cost_value pink row2">20</p>
			<p class="item_cost toman pink row2">تومان</p>
			<img class="table_line" src="/pictures/table_line.png">
			<p class="item_cost row3">قیمت نهایی</p>
			<p class="item_cost item_cost_value row3">100</p>
			<p class="item_cost toman row3">تومان</p>
		</div>
		
		<div class="orders_row" id="orders_row6">
			<p id="sentence" dir=rtl>ارسال به آدرس شماره یک، شهر شماره یک - در تاریخ 97/2/3 ساعت 00:00</p>
	    </div>
				
	</body>
</html>











