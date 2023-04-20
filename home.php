<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restro</title>
	<link rel="stylesheet" href="/css/home.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// booking 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$service = $_POST['service'];
		$preferences = $_POST['preferences'];
		$guests = $_POST['guests'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$con = mysqli_connect("localhost", "root", "", "restaurant");
		$query = "INSERT INTO booking (name,email,phone,service,preferences,guests,date,time)
		 		  VALUES('$name','$email','$phone','$service','$preferences','$guests','$date','$time')";
		$result = mysqli_query($con, $query);
		if ($result) {
			echo ("Scheduled");
			header("location:scheduled.php");
		} else {
			echo ("Schedule Failed");
		}
	}
	?>
	<nav class="navbar background1 h-nav-resp">
		<div class="logo">
			<h2>Restro</h2>
		</div>
		<ul class="nav-list v-class-resp">
			<li><a href="#home">Home</a></li>
			<li><a href="#bookings">Bookings</a></li>
			<li><a href="#products">Menu</a></li>
			<li><a href="#aboutus">About Us</a></li>
			<li><a href="#contactus">Contact Us</a></li>
		</ul>
		<div class="burger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</nav>
	<!-- home section  -->
	<section class="background firstsection" id="home">
		<h1>Services</h1>
		<div class="box-main">
			<div class="card-services-container">
				<div class="card-services-card">
					<img src="/img/dinein.jpg" alt="dinein">
					<h3>Dine in</h3>
					<p>"Experience our delicious cuisine in a cozy ambiance. Join us for a memorable dine-in experience today!"</p>
					<a href="#bookings">Book Now</a>
				</div>

				<div class="card-services-card">
					<img src="/img/takeaway.jpg" alt="poolsessions">
					<h3>Take Away</h3>
					<p>"Order online or by phone and pick up your favorite dishes to enjoy at home. Quick, easy and delicious take-away meals available now!"</p>
					<a href="#bookings">Book Now</a>
				</div>

				<div class="card-services-card">
					<img src="/img/delivery.jpg" alt="Card 3">
					<h3>Delivery</h3>
					<p>"Order online or by phone and have our tasty food delivered straight to your door. Quick, easy and convenient delivery service available now!"</p>
					<a href="#bookings">Book Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/birthday.jpg" alt="Card 3">
					<h3>Birthday</h3>
					<p>"Let us help you make your next birthday party unforgettable. Our team will work with you to create the perfect menu and ambiance for your special occasion. Contact us to start planning today!"</p>
					<a href="#bookings">Book Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/boarding.jpg" alt="Card 3">
					<h3>Drinks</h3>
					<p>"Quench your thirst with our selection of delicious drinks. From handcrafted cocktails to refreshing mocktails, we have something for everyone. Join us for a drink or two and elevate your dining experience today!"</p>
					<a href="#bookings">Book Now</a>
				</div>
				<div class="card-services-card">
					<img src="/img/games.jpg" alt="Card 3">
					<h3>Group parties</h3>
					<p>"We offer a variety of fun games, contests, and physical activities for pets, including agility courses and playtime. Our trained staff ensure a safe and enjoyable experience for your furry friend."</p>
					<a href="#bookings">Book Now</a>
				</div>
			</div>
		</div>
	</section>

	<!-- booking section  -->
	<section class="background2 secondsection" id="bookings">
		<h1>Bookings</h1>
		<div class="box-main">
			<div class="form-container">
				<form action="" method="POST">
					<h3>Book here!</h3>
					<label for="name">Full Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your full name" required>
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="Enter you Email Address" required>
					<label for="phone">Contact Number</label>
					<input type="text" id="phone" name="phone" placeholder="Enter your Phone number" required>
					<label for="service">Which service you want to avail?</label>
					<select id="service" name="service" placeholder="Choose service" required>
						<option value="Dine In">Dine In</option>
						<option value="Take Away">Take Away</option>
						<option value="Delivery">Delivery</option>
						<option value="Birthday">Birthday</option>
						<option value="Drinks">Drinks</option>
						<option value="Group Parties">Group Parties</option>
					</select>
					<label for="preferences">Combos you want to avail?</label>
					<select id="preferences" name="preferences" placeholder="Choose here" >
						<option value="Unlimited Buffet Indian Non-Veg + 1 drink">Unlimited Buffet Indian Non-Veg + 1 drink</option>
						<option value="Unlimited Buffet Indian Veg + 1 drink">Unlimited Buffet Indian Veg + 1 drink</option>
						<option value="Unlimited Italian Pizza + 1 drink">Unlimited Italian Pizza + 1 drink</option>
						<option value="Unlimited Italian Buffet + 2 drink">Unlimited Italian Buffet + 2 drink</option>
						<option value="5 mocktails + 5 cocktails">5 mocktails + 5 cocktails</option>
						<option value="Unlimited access to all sections + 10 drinks">Unlimited access to all sections + 10 drinks</option>
					</select>
					<label for="guests">No of Guests</label>
					<input type="text" id="guests" name="guests" placeholder="How many guests" required>
					<label for="date">Choose a date:</label>
					<input type="date" id="date" name="date">
					<label for="time">Choose a time:</label>
					<input type="time" id="time" name="time">
					<button type="submit">Book Now</button>
				</form>
			</div>
		</div>
	</section>
	<!-- products section  -->
	<section class="background3 thirdsection" id="products">
		<h1>Menu</h1>
		<div class="box-main">
			<div class="card-container">
				<div class="card">
					<img src="/img/burger.jpg" alt="Product 1">
					<div class="card-content">
						<h3 class="card-title">Burger Classico</h3>
						<p class="card-description">All of our burgers are made to order and served with a side of crispy fries. We also offer a variety of toppings and sauces, so you can customize your burger just the way you like it.</p>
						<p class="card-price">&#8377; 350</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>

				<div class="card">
					<img src="/img/pizza.jpg" alt="Product 2">
					<div class="card-content">
						<h3 class="card-title">El Classico Pizza Cheese Burst</h3>
						<p class="card-description">"Indulge in our mouth-watering pizza, featuring a deliciously cheesy crust and irresistible toppings, all freshly baked to perfection. Savor the savory and flavorful taste of our delectable pizza, guaranteed to satisfy your cravings and leave you feeling satisfied."</p>
						<p class="card-price">&#8377; 450</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/pasta.jpg" alt="Product 3">
					<div class="card-content">
						<h3 class="card-title">Paaaaasta</h3>
						<p class="card-description">"Experience the perfect bite with our al dente pasta, paired with rich and creamy sauce and topped with freshly grated cheese. Enjoy the flavor explosion of our handmade noodles and flavorful sauce, making every bite an unforgettable one."</p>
						<p class="card-price">&#8377; 370</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/spaghetti.jpg" alt="Product 4">
					<div class="card-content">
						<h3 class="card-title">Spaghetti Classic</h3>
						<p class="card-description">"Experience the classic flavors of our spaghetti dish, featuring al dente noodles and a homemade sauce that is sure to transport you to Italy with every bite."</p>
						<p class="card-price">&#8377; 249</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/hotdog.jpg" alt="Product 5">
					<div class="card-content">
						<h3 class="card-title">Hotdog</h3>
						<p class="card-description">"Satisfy your hunger cravings with our hearty hotdogs, made with high-quality ingredients and served with a side of our signature sauce that will keep you coming back for more."</p>
						<p class="card-price">&#8377; 3780</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>
				<div class="card">
					<img src="/img/lasagne.jpg" alt="Product 6">
					<div class="card-content">
						<h3 class="card-title">Lasagne</h3>
						<p class="card-description">"Treat yourself to our deliciously layered lasagne, featuring perfectly cooked noodles, a rich and savory sauce, and a blend of melted cheeses that will melt in your mouth with every bite."</p>
						<p class="card-price">&#8377; 485</p>
						<div class="card-cart">
							<input type="number" id="quantity1" name="quantity1" min="1" value="1">
							<button class="add-to-cart-btn" onclick="addToCart('product1', document.getElementById('quantity1').value)">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about us section  -->
	<section class="background fourthsection about-section" id="aboutus">
		<h1>About Us</h1>
		<div class="box-main">
			<div class="about-container">
				<div class="about-item">
					<div class="about-text">
						<h1>Our Story</h1>
						<p>At Restro , we believe that food is not just about nourishment, but also about creating memories and bringing people together. Our warm and inviting atmosphere, friendly staff, and exceptional service ensure that every visit is a special one. We are dedicated to providing our guests with an authentic Italian experience that will leave them feeling satisfied and inspired.Our menu features classic Italian dishes prepared with a modern twist, utilizing the finest ingredients sourced from local farmers and artisanal producers. From our handcrafted pasta and homemade sauces to our wood-fired pizzas and signature desserts, every dish is an expression of our love for Italian cuisine."Welcome to Restro, where every dish tells a story of Italy's rich culinary heritage. Our passion for authentic Italian cuisine began with our founder's childhood memories of the bustling markets, charming cafes, and savory aromas of his hometown in Italy. It was there that he fell in love with the art of cooking and the importance of using only the freshest ingredients.</p>
					</div>
					<div class="about-image">
						<img src="/img/pancake.jpg" alt="Image 1">
					</div>
				</div>
				<div class="about-item">
					<div class="about-image">
						<img src="/img/desert.jpg" alt="Image 2">
					</div>
					<div class="about-text">
						<h1>Our Mission</h1>
						<p>"At Restro, our mission is to provide our guests with an exceptional dining experience that exceeds their expectations. We believe that great food should be accompanied by great service, and we strive to create a warm and welcoming atmosphere where our guests can feel at home.

							Our passion for food extends beyond the kitchen. We are committed to sourcing only the freshest and highest quality ingredients from local farmers and artisanal producers, supporting sustainable agriculture and reducing our carbon footprint.

							We believe that our responsibility extends beyond the walls of our restaurant, and we are dedicated to giving back to the community through various charitable initiatives and events.

							At Restro, we believe that every meal should be an experience. Our menu is crafted with creativity and attention to detail, with each dish designed to tantalize the taste buds and leave our guests feeling satisfied and inspired.

							Our mission is to create memories, celebrate food, and bring people together. We invite you to join us and experience the passion and dedication that goes into every aspect of Restro."</p>
					</div>
				</div>
				<div class="about-item">
					<div class="about-text">
						<h1>Our Values</h1>
						<p>At Restro, we believe that our values are what set us apart from other restaurants. We are passionate about providing our guests with exceptional food and service, and we are dedicated to upholding our values in everything we do.

							Quality is at the core of our values. We believe that using only the freshest and highest quality ingredients is essential to creating delicious and memorable dishes. We source our ingredients from local farmers and artisanal producers, supporting sustainable agriculture and reducing our carbon footprint.

							Creativity is another value that we hold dear. Our menu is crafted with creativity and attention to detail, with each dish designed to tantalize the taste buds and leave our guests feeling satisfied and inspired.Hospitality is essential to creating a memorable dining experience. We strive to create a warm and welcoming atmosphere where our guests can feel at home. We believe that every guest should be treated with the utmost care and respect.</p>
					</div>
					<div class="about-image">
						<img src="/img/drinks.jpg" alt="Image 3">
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- contact us section  -->
	<section class="background fifthsection" id="contactus">
		<h1>Contact Us</h1>
		<div class="box-main">
			<div class="form-container">
				<form action="contacted.php" method="POST">
					<h3>Contact Us!</h3>
					<div class="form-group">
						<label for="name1">Full Name</label>
						<input type="text" id="name1" name="name1" placeholder="Enter your full name" required>
					</div>
					<div class="form-group">
						<label for="email1">Email</label>
						<input type="text" id="email1" name="email1" placeholder="Enter you Email Address" required>
					</div>
					<div class="form-group">
						<label for="message1">Message/Queries</label>
						<textarea id="message1" name="message1" placeholder="Enter your message here" required></textarea>
					</div>
					<button type="submit">Send</button>
				</form>
			</div>
		</div>
	</section>
	<!-- footer  -->
	<section class="footer">

		<div class="box-container">

			<div class="box">
				<h4>Restro</h4>
				<p> Thank you for reaching us</p>
				<p class="links"><i class="fas fa-clock"></i>Everyday</p>
				<p class="days">11:00AM - 2:00AM</p>
			</div>

			<div class="box">
				<h3>Contact Info</h3>
				<a href="tel:+919777024404" class="links"><i class="fas fa-phone"></i> 9777024404</a>
				<a href="tel:+919949702763" class="links"><i class="fas fa-phone"></i> 9949702763</a>
				<a href="tel:+918730862882" class="links"><i class="fas fa-phone"></i> 8730862882</a>
				<a href="mailto:patelanish081@gmail.com" class="links"><i class="fas fa-envelope"></i> patelanish081@gmail.com</a>
				<a href="mailto:yvvivek14@gmail.com" class="links"><i class="fas fa-envelope"></i> yvvivek14@gmail.com</a>
				<a href="mailto:zumironaldo77@gmail.com" class="links"><i class="fas fa-envelope"></i> zumironaldo77@gmail.com</a>
				<a href="https://goo.gl/maps/p3LpvEMURTvswfEr9" class="links"><i class="fas fa-map-marker-alt"></i> Bengaluru, Karnataka</a>
			</div>

			<div class="box">
				<h3>Quick Links</h3>
				<a href="#home" class="links"> <i class="fas fa-arrow-right"></i>Home</a>
				<a href="#bookings" class="links"> <i class="fas fa-arrow-right"></i>Bookings</a>
				<a href="#products" class="links"> <i class="fas fa-arrow-right"></i>Products</a>
				<a href="#aboutus" class="links"> <i class="fas fa-arrow-right"></i>About Us</a>
				<a href="#contactus" class="links"> <i class="fas fa-arrow-right"></i>Contact Us</a>
			</div>

			<div class="box">
				<h3>Newsletter</h3>
				<p>Subscribe for latest updates</p>
				<input type="email" placeholder="Your Email" class="email">
				<a href="#" class="btn">Subscribe</a>
				<div class="share">
					<h3>Follow Us</h3>
					<a href="" target="blank" class="fab fa-facebook-f"></a>
					<a href="" class="fab fa-twitter" target="blank"></a>
					<a href="" class="fab fa-instagram" target="blank"></a>
					<a href="" target="blank" class="fab fa-linkedin"></a>
					<a href="" target="blank" class="fab fa-github"></a>
				</div>
			</div>

		</div>

		<div class="credit">&#169; 2023 Restro. All rights reserved by <a href="#" class="link">AVJ</a></div>

	</section>

	<script>
		burger = document.querySelector(".burger");
		navbar = document.querySelector(".navbar");
		navList = document.querySelector(".nav-list");

		burger.addEventListener("click", () => {
			navList.classList.toggle("v-class-resp");
			navbar.classList.toggle("h-nav-resp");
		});

		var shoppingCart = {};

		function addToCart(productName, quantity) {
			// code by Anish 
			if (shoppingCart[productName]) {
				shoppingCart[productName] += parseInt(quantity);
			} else {
				shoppingCart[productName] = parseInt(quantity);
			}
			alert("Product added to cart!");
			console.log(shoppingCart);
			// code by Anish 
		}
	</script>
</body>

</html>