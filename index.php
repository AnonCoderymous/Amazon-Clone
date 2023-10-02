<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Huzefa Dayanji" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Amazon.in: Online Shopping India - Buy mobiles, laptops, cameras, books, watches, apparel, shoes and e-Gift Cards. Free Shipping & Cash on Delivery Available." />
	<script src="https://kit.fontawesome.com/0d1b6d31de.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/ico" href="./images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<title>Online Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in</title>
</head>
<body>
	
	<section class="main">
		<nav>
			<div class="logoArea">
				<div class="mainlogo"></div>
				<div class="mainlogoDotin">.in</div>
			</div>
			<div class="addressArea smallTxt">
				<div class="helloText">Hello</div>
				<div class="addressSelect">
					<div class="addressIcon"></div>
					<div class="addressText">Select your address</div>
				</div>
			</div>
			<div class="searchInputArea">
				<div class="select mooli-font">
					<select>
						<?php
							$optionValues = 
							array( 'All', 'Alexa Skills', 'Amazon Devices',
								'Amazon Fashion', 'Amazon Fresh', 'Amazon Pharmacy',
								'Appliances', 'Apps & Games', 'Audible Audiobooks',
								'Baby', 'Beauty', 'Books', 'Car & Motorbike',
								'Clothing & Accessories', 'Collectibles',
								'Computers & Accessories', 'Electronics', 'Furniture',
								'Garden & Outdoors', 'Gift Cards', 'Grocery & Gourmet Foods'
								, 'Health & Personal Care', 'Home & Kitchen', 'Industrial & Scientific', 'Jewellery', 'Kindle Store', 'Luggage & Bags', 'Luxury Beauty', 'Movies & TV Shows', 'Music',
								'Musical Instruments', 'Office Products', 'Pet Supplies',
								'Prime Video', 'Shoes & Handbags', 'Software',
								'Sports, Fitness & Outdoors', 'Subscribe & Save',
								'Tools & Home Improvement', 'Toys & Games', 'Under ₹500',
								'Video Games', 'Watches'
							);
							foreach ($optionValues as $option) {
						?><option><?php echo $option; ?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="input mooli-font">
					<input type=text id=search placeholder="Search Amazon.in">
				</div>
				<div class="searchbutton">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
			</div>
			<div class="languageSelect">
				<div class="flag"></div>
				<div class="lang">EN</div>
			</div>
			<div class="signIntextArea">
				<div class="upper">Hello, sign in</div>
				<div class="optionsLst">Account & Lists</div>
			</div>
			<div class="orders">
				<div class="rt">Returns</div>
				<div class="tr">& Orders</div>
			</div>
			<div class="cartOption">
				<div class="cartImg"></div>
				<div class="qty">0</div>
				<div class="txt">Cart</div>
			</div>
		</nav>
		<div class="nav-child">
			<div class="left_nav_options">
				<div>
					<a href=""><div class="icon"><i class="fa-solid fa-bars"></i></div><div class="txt">All</div></a>
				</div>
				<div><a href=""><div class="txt">Amazon miniTv</div></a></div>
				<div><a href=""><div class="txt">Sell</div></a></div>
				<div><a href=""><div class="txt">Best Sellers</div></a></div>
				<div><a href=""><div class="txt">Mobiles</div></a></div>
				<div><a href=""><div class="txt">Today's Deals</div></a></div>
				<div><a href=""><div class="txt">New Releases</div></a></div>
				<div><a href=""><div class="txt">Prime</div></a></div>
				<div><a href=""><div class="txt">Customer Service</div></a></div>
				<div><a href=""><div class="txt">Electronics</div></a></div>
			</div>
			<div class="right_nav_img">
				<a href=""><img src="./images/festive-child-nav.jpg" alt="Festive Image" /></a>
			</div>
		</div>
		<div class="banner">
			<div class="left"><i class="fa-solid fa-chevron-left"></i></div>
			<div class="right"><i class="fa-solid fa-chevron-right"></i></div>
		</div>
		<div class="discountArea">
			<div class="box">
				<h1>Up to 60% off | Baby <br/> products & toys</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-1-1.jpg"></div>
						<div class="coltxt">Starting ₹179 | Diapers <br/> & wipes</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-1-3.jpg"></div>
						<div class="coltxt">Starting ₹99 | Soft toys</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-1-2.jpg"></div>
						<div class="coltxt">Starting ₹229 | Baby <br/> bath tubs & play gym</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-1-4.jpg"></div>
						<div class="coltxt">Minimum 50% off | <br/> Toys & games</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
			<div class="box">
				<h1>Cricket Fever <br/> Offers</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-2-1.jpg"></div>
						<div class="coltxt">Up to 60% off on TVs</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-2-3.jpg"></div>
						<div class="coltxt">Up to 60% off on <br/> cricket bats</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-2-2.jpg"></div>
						<div class="coltxt">Jerseys starting ₹999</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-2-4.jpg"></div>
						<div class="coltxt">Up to 40% off on <br/> mobile phones</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
			<div class="box">
				<h1>Up to 75% off |<br/> Headphones</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-3-1.jpg"></div>
						<div class="coltxt">Up to 75% off | boAt</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-3-3.jpg"></div>
						<div class="coltxt">Up to 75% off | Noise</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-3-2.jpg"></div>
						<div class="coltxt">Up to 75% off | boult</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-3-4.jpg"></div>
						<div class="coltxt">Up to 75% off | <br/> Zebronics</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
			<div class="box single">
				<h1>Bluetooth Calling <br/> Smartwatch starts at</h1>
				<div class="col">
					<div class="colimgsingle"><img src="./images/box-4-0.jpg"></div>
				</div>
				<div class="link single_box"><a href="">See all offers</a></div>
			</div>
			<div class="box">
				<h1>Revamp your home in style</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-5-1.jpg"></div>
						<div class="coltxt">Bedsheets, curtains &<br/> more</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-5-3.jpg"></div>
						<div class="coltxt">Home decorations</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-5-2.jpg"></div>
						<div class="coltxt">Home Storage</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-5-4.jpg"></div>
						<div class="coltxt">Lighting solutions</div>
					</div>
				</div>
				<div class="link"><a href="">Explore more</a></div>
			</div>
			<div class="box">
				<h1>Appliances for your home | <br/> Up to 55% off</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-6-1.jpg"></div>
						<div class="coltxt">Air conditioners</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-6-3.jpg"></div>
						<div class="coltxt">Refrigerators</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-6-2.jpg"></div>
						<div class="coltxt">Microwaves</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-6-4.jpg"></div>
						<div class="coltxt">Washing machines</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
			<div class="box">
				<h1>Up to 60% off | Styles for <br/> women</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-7-1.jpg"></div>
						<div class="coltxt">Women's clothing</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-7-3.jpg"></div>
						<div class="coltxt">Watches</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-7-2.jpg"></div>
						<div class="coltxt">Footwear+Handbags</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-7-4.jpg"></div>
						<div class="coltxt">Fashion Jwellery</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
			<div class="box">
				<h1>Up to 60% off | Styles for<br/> men</h1>
				<div class="top">
					<div class="col">
						<div class="colimg"><img src="./images/box-8-1.jpg"></div>
						<div class="coltxt">Clothing</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-8-3.jpg"></div>
						<div class="coltxt">Watches</div>
					</div>
				</div>
				<div class="bottom">
					<div class="col">
						<div class="colimg"><img src="./images/box-8-2.jpg"></div>
						<div class="coltxt">Footwear</div>
					</div>
					<div class="col">
						<div class="colimg"><img src="./images/box-8-4.jpg"></div>
						<div class="coltxt">Bags & Wallets</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
		</div>
		<div class="dealsArea">
			<div class="headSec">
				<div class="h1"><h1>Today's Deals</h1></div>
				<div class="anchor"><a href="">See all deals</a></div>
			</div>
			<div class="dealProducts">
				<div class="probox">
					<div class="product">
						<div class="proboximg"><img src="./images/deal-1.jpg"></div>
					</div>
					<div class="proboxoffer">
						<div class="col-1">Up to 46% off</div>
						<div class="col-2">Deal of the Day</div>
					</div>
					<div class="proboxname">Best Offers on V-Guard Products</div>
				</div>
				<div class="probox">
					<div class="product">
						<div class="proboximg"><img src="./images/deal-2.jpg"></div>
					</div>
					<div class="proboxoffer">
						<div class="col-1">Up to 95% off</div>
						<div class="col-2">Deal of the Day</div>
					</div>
					<div class="proboxname">Best offers on PC and Electronic acces…</div>
				</div>
				<div class="probox">
					<div class="product">
						<div class="proboximg"><img src="./images/deal-3.jpg"></div>
					</div>
					<div class="proboxoffer">
						<div class="col-1">Up to 87% off</div>
						<div class="col-2">Deal of the Day</div>
					</div>
					<div class="proboxname">Wallpapers from wolpin</div>
				</div>
				<div class="probox">
					<div class="product">
						<div class="proboximg"><img src="./images/deal-4.jpg"></div>
					</div>
					<div class="proboxoffer">
						<div class="col-1">Up to 27% off</div>
						<div class="col-2">Deal of the Day</div>
					</div>
					<div class="proboxname">8GB RAM 5G Phone at Rs. 12,999</div>
				</div>
				<div class="probox">
					<div class="product">
						<div class="proboximg"><img src="./images/deal-5.jpg"></div>
					</div>
					<div class="proboxoffer">
						<div class="col-1">Up to 47% off</div>
						<div class="col-2">Deal of the Day</div>
					</div>
					<div class="proboxname">Best Offers on Paragon footwear</div>
				</div>
			</div>
		</div>
		<div class="modelArea">
			<div class="headSec">
				<div class="h1"><h1>Festive wear from small businesses</h1></div>
				<div class="anchor"><a href="">See all offers</a></div>
			</div>
			<div class="dealProducts">
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-1.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-2.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-3.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-4.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-5.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-6.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-7.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/model-8.jpg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="accessoriesArea">
			<div class="headSec">
				<div class="h1"><h1>Best Sellers in Computers & Accessories</h1></div>
			</div>
			<div class="dealProducts">
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/acc-1.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/acc-2.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/acc-3.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/acc-4.jpg"></div>
					</div>
				</div>
				<div class="probox">
					<div class="model">
						<div class="proboximg"><img src="./images/acc-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="webseriesBanner">
			<div class="bannerSec">
				<img src="./images/web_series_banner.jpg">
			</div>
		</div>
		<div class="storeSec">
			<div class="b">
				<div class="bheadSec"><h2>Birthday store</h2></div>
				<div class="topSec">
					<div>
						<div class="imgSec"><img src="./images/b-1.jpg"></div>
						<div class="txtSec">Gift for men</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-2.jpg"></div>
						<div class="txtSec">Gift for women</div>
					</div>
				</div>
				<div class="bottomSec">
					<div>
						<div class="imgSec"><img src="./images/b-3.jpg"></div>
						<div class="txtSec">Gift for men</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-4.jpg"></div>
						<div class="txtSec">Gift for women</div>
					</div>
				</div>
				<div class="link"><a href="">See more</a></div>
			</div>
			<div class="b">
				<div class="bheadSec"><h2>Essentials for Expecting <br/> Mothers</h2></div>
				<div class="topSec">
					<div>
						<div class="imgSec"><img src="./images/b-2-2-1.jpg"></div>
						<div class="txtSec">Pregnancy <br/> Supplements</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-2-2-2.jpg"></div>
						<div class="txtSec">Maternity Sleep & <br/>Loungewear</div>
					</div>
				</div>
				<div class="bottomSec">
					<div>
						<div class="imgSec"><img src="./images/b-2-2-3.jpg"></div>
						<div class="txtSec">Maternity Pillows</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-2-2-4.jpg"></div>
						<div class="txtSec">Maternity Skin care</div>
					</div>
				</div>
			</div>
			<div class="b">
				<div class="bheadSec"><h2>Hip Hop India | Watch Now <br/> Only on miniTV</h2></div>
				<div class="imgSecSingle"><img src="./images/b-3-1.jpg"></div>
				<div class="link"><a href="">Watch for FREE | miniTV</a></div>
			</div>
			<div class="b">
				<div class="bheadSec"><h2>Great Indian Festival | <br/> Brands in focus</h2></div>
				<div class="topSec">
					<div>
						<div class="imgSec"><img src="./images/b-4-4-1.jpg"></div>
						<div class="txtSec">Starting ₹__,__9 | <br/> Samsung Smartphones</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-4-4-2.jpg"></div>
						<div class="txtSec">Up to ₹40,000 off | <br/> Intel powered laptops</div>
					</div>
				</div>
				<div class="bottomSec">
					<div>
						<div class="imgSec"><img src="./images/b-4-4-3.jpg"></div>
						<div class="txtSec">Up to 55% off | <br/> Hisense TV</div>
					</div>
					<div>
						<div class="imgSec"><img src="./images/b-4-4-4.jpg"></div>
						<div class="txtSec">Starting ₹6_,___ | LG <br/> TVs</div>
					</div>
				</div>
				<div class="link"><a href="">See all offers</a></div>
			</div>
		</div>
		<div class="groceryArea">
			<div class="headSec">
				<div class="h1"><h1>Grocery & Gourmet</h1></div>
				<div class="anchor"><a href="">See all offers</a></div>
			</div>
			<div class="dealProducts">
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-1.jpg"></div>
					</div>
				</div>
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-2.jpg"></div>
					</div>
				</div>
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-3.jpg"></div>
					</div>
				</div>
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-4.jpg"></div>
					</div>
				</div>
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-5.jpg"></div>
					</div>
				</div>
				<div class="goprobox">
					<div class="grocery">
						<div class="groproboximg"><img src="./images/g-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="booksArea">
			<div class="bheadSec">
				<div class="h1"><h1>Best Sellers in Books</h1></div>
			</div>
			<div class="dealProducts">
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-1.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-2.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-3.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-4.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-5.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-6.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-7.jpg"></div>
					</div>
				</div>
				<div class="bookprobox">
					<div class="book">
						<div class="bookboximg"><img src="./images/book-8.jpg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="signArea">
			<div class="signInAreaWrapper">
				<div class="signIn_top_text">See personalized recommendations</div>
				<div class="signIn_middle_button"><button>sign in</button></div>
				<div class="signIn_buttom_text">New customer? <a href="#">Start here</a></div>
			</div>
		</div>
		<div class="footer">
			<div class="topButtonWrapper">
				<div class="toTopButtonArea">
					<div class="topButton">Back to Top</div>
				</div>
			</div>
			<div class="footerWrapper">
				<div class="row-1">
					<div class="titleArea"><h2>Get to Know Us</h2></div>
					<div class="optionsArea">
						<div class="option"><a href="">about us</a></div>
						<div class="option"><a href="">careers</a></div>
						<div class="option"><a href="">press releases</a></div>
						<div class="option"><a href="">amazon science</a></div>
					</div>
				</div>
				<div class="row-2">
					<div class="titleArea"><h2>Connect with Us</h2></div>
					<div class="optionsArea">
						<div class="option"><a href="">facebook</a></div>
						<div class="option"><a href="">twitter</a></div>
						<div class="option"><a href="">instagram</a></div>
						<div class="option"><a href="">snapchat</a></div>
					</div>
				</div>
				<div class="row-3">
					<div class="titleArea"><h2>Make Money with Us</h2></div>
					<div class="optionsArea">
						<div class="option"><a href="">sell on amazon</a></div>
						<div class="option"><a href="">sell under amazon accelerator</a></div>
						<div class="option"><a href="">protect and build your brand</a></div>
						<div class="option"><a href="">Amazon Global Selling</a></div>
						<div class="option"><a href="">Become an Affiliate</a></div>
						<div class="option"><a href="">Fulfilment by Amazon</a></div>
						<div class="option"><a href="">Advertise Your Products</a></div>
						<div class="option"><a href="">Amazon Pay on Merchants</a></div>
					</div>
				</div>
				<div class="row-4">
					<div class="titleArea"><h2>Let Us Help You</h2></div>
					<div class="optionsArea">
						<div class="option"><a href="">COVID-19 and Amazon</a></div>
						<div class="option"><a href="">Your Account</a></div>
						<div class="option"><a href="">Returns Centre</a></div>
						<div class="option"><a href="">amazon science</a></div>
						<div class="option"><a href="">100% Purchase Protection</a></div>
						<div class="option"><a href="">Amazon App Download</a></div>
						<div class="option"><a href="">Help</a></div>
					</div>
				</div>
			</div>
			<hr>
			<div class="bottom_div">
				<div class="bottom_div_wrapper">
					<div class="bdivicon"></div>
					<div class="bdivlang">
						<div class="select">
							<select>
								<option>English - EN</option>
								<option>हिन्दी - HI</option>
								<option>தமிழ் - TA</option>
								<option>తెలుగు - TE</option>
								<option>ಕನ್ನಡ - KN</option>
								<option>മലയാളം - ML</option>
								<option>বাংলা - BN</option>
								<option>मराठी - MR</option>
							</select>
						</div>
					</div>
				</div>
				<div class="lang_links">
					<ul>
						<li><a href="#">Australia</a></li>
						<li><a href="#">Brazil</a></li>
						<li><a href="#">Canada</a></li>
						<li><a href="#">China</a></li>
						<li><a href="#">France</a></li>
						<li><a href="#">Germany</a></li>
						<li><a href="#">Italy</a></li>
						<li><a href="#">Japan</a></li>
						<li><a href="#">Mexico</a></li>
						<li><a href="#">Netherlands</a></li>
						<li><a href="#">Poland</a></li>
						<li><a href="#">Singapore</a></li>
						<li><a href="#">Spain</a></li>
						<li><a href="#">Turkey</a></li>
						<li><a href="#">United Arab Emirates</a></li>
						<li><a href="#">United Kingdom</a></li>
						<li><a href="#">United States</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer_two">
			<div class="bottom_nav_1">
				<div class="bottom_nav_row_1">
					<a href="">
						<div class="highlited_txt">AbeBooks</div>
						<div class="unhighlited_txt">Books, arts <br/> & collectibles</div>
					</a>
				</div>
				<div class="bottom_nav_row_2">
					<a href="">
						<div class="highlited_txt">Amazon Web Services</div>
						<div class="unhighlited_txt">Scalable Cloud <br/>Computing Services</div>
					</a>
				</div>
				<div class="bottom_nav_row_3">
					<a href="">
						<div class="highlited_txt">Audible</div>
						<div class="unhighlited_txt">Download <br/>Audio Books</div>
					</a>
				</div>
				<div class="bottom_nav_row_4">
					<a href="">
						<div class="highlited_txt">DPReview</div>
						<div class="unhighlited_txt">Digital <br/>Photography</div>
					</a>
				</div>
				<div class="bottom_nav_row_5">
					<a href="">
						<div class="highlited_txt">IMDb</div>
						<div class="unhighlited_txt">Movies, TV <br/> & celebrities</div>
					</a>
				</div>
			</div>
			<div class="bottom_nav_2">
				<div class="bottom_nav_row_1">
					<a href="">
						<div class="highlited_txt">Shopbop</div>
						<div class="unhighlited_txt">Designer <br/> Fashion Brands</div>
					</a>
				</div>
				<div class="bottom_nav_row_2">
					<a href="">
						<div class="highlited_txt">Amazon Business</div>
						<div class="unhighlited_txt">Everything for <br/> Your Business</div>
					</a>
				</div>
				<div class="bottom_nav_row_3">
					<a href="">
						<div class="highlited_txt">Prime Now</div>
						<div class="unhighlited_txt">2-Hour Delivery <br/>on Everyday Items</div>
					</a>
				</div>
				<div class="bottom_nav_row_4">
					<a href="">
						<div class="highlited_txt">Amazon Prime Music</div>
						<div class="unhighlited_txt">100 million songs, ad-free <br/>Over 15 million podcast episodes</div>
					</a>
				</div>
			</div>
			<div class="copyright">
				<div class="txt">
					© 1996-<script>document.write(new Date().getFullYear());</script>, Amazon.com, Inc. or its affiliates
				</div>
			</div>
		</div>
	</section>

</body>
<script src="./js/script.js"></script>
<script>
	console.log("This clone was made in year "+new Date().getFullYear());
</script>
</html>