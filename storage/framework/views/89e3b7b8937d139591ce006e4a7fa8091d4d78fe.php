<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/FhomeUnregistered.css">
	<script type="text/javascript" src="js/homeUnregistered.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>

<body>
<?php if(Route::has('login')): ?>
	<div class="top-right links">
		<?php if(Auth::check()): ?>
			
			<a href="<?php echo e(url('/homeIN')); ?>">Home</a>
		<?php else: ?>
			<a href="<?php echo e(url('/login')); ?>"></a>
			<a href="<?php echo e(url('/register')); ?>"></a>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
			<img class="image_slide" src=<?php echo e($banner1); ?>>
		</div>

		<div class="mySlides fade">
			<img class="image_slide" src=<?php echo e($banner2); ?>>
		</div>

		<div class="mySlides fade">
			<img class="image_slide" src=<?php echo e($banner3); ?>>
		</div>

		<div class="mySlides fade">
			<img class="image_slide" src=<?php echo e($banner4); ?>>
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
			<p id="men_text"><?php echo e($category_available1); ?></p>
			<!--<p id="men_text">مردانه</p>-->
		</div>

		<div id="women">
			<img id= "image2" src=<?php echo e($promotion2); ?>>
			<p id="women_text"><?php echo e($category_available2); ?></p>
		</div>

		<div id="children">
			<img id= "image3" src=<?php echo e($promotion3); ?>>
			<p id="children_text"><?php echo e($category_available3); ?></p>
		</div>
	</div>
</div>

<div id="buy_best">
	<p id="buy_best_text"><?php echo e($aboutUSText); ?></p>
</div>

<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="homeUnregistered.js"></script>
</body>
</html>