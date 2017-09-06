<?php
/************************
*	PHP Form Processor	*
*************************/

//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$fname = trim(strip_tags($_POST['fname']));
$lname = trim(strip_tags($_POST['lname']));
$tname = trim(strip_tags($_POST['tname']));
$email = trim(strip_tags($_POST['email']));
// $phone = trim(strip_tags($_POST['phone']));
// $state = trim(strip_tags($_POST['state']));
$services = trim(strip_tags($_POST['services']));
$comments = trim(strip_tags($_POST['comments']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
First Name: $fname
Last Name: $lname
Team Name: $tname
Email Address: $email
Phone Number: $phone
State: $state
Services: $services
Comments: $comments";

mail('allaboutmada@hotmail.com','Contact Form Subject',$body,$email);

?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inbrowser Assignment</title>
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/styleV02.css">

</head>
<body id="nregister">
	
	<header id="pageHeader" class="cf" >
		<div class="logo"><a href="../index.html"><img src="../images/head-logo-2.png"  alt="Logo header"></a></div>
		<ul class="hsocial cf">
			<li class="fb"><a href="https://www.facebook.com/NationalFoundationforAutismResearch/" target="_blank"></a></li>
			<li class="instagram"><a href="https://www.instagram.com/nfarorg/" target="_blank"></a></li>
			<li class="twitter"><a href="https://twitter.com/nfarorg" target="_blank"></a></li>
			<li class="pintrest"><a href="https://www.pinterest.com/NFARorg/" target="_blank"></a></li>
			<li class="linkedin"><a href="https://www.linkedin.com/groups/126266/profile" target="_blank"></a></li>
		</ul>
		<div class="banner cf">
			<h1>Be A Hero For Those with Autism</h1>
		</div>
	</header>

	<nav class="cf">
		

		<ul class="global cf">
			<li><a href="register.html">Register</a></li>
			<li><a href="location.html">Location</a></li>
		</ul>
	</nav>

<main class="cf">
	<div class="successPage">
	<?php
			//if the email was sent, show the success message
			echo '<div class="success">Thank you '.$fname.' for joining our cause. See you on race day! </div>';
			?>
		</div>

</main>

		<aside class="cf">
<img src="../images/registrationmheader.jpg" alt="registration header">
			<figure class=" cf">
				
				<figcaption>
					<h2>BE A SUPERHERO FOR THOSE WITH AUTISM!</h2>
					<p class="description">100% of the funds raised at the Race for Autism stays in San Diego to support local autism programs, services, treatments, outreach efforts and educational initiatives to hundreds of classrooms. </p>
					<p>THANKS to support of people like you, NFAR has awarded over a MILLION dollars to community programs and classrooms throughout San Diego.</p>
				</figcaption>
			</figure>

			<figure class="feature cf">
				<figcaption>
					<h2>Online Registration</h2>
					<p class="description">Online registration will be open until 6:00 pm Friday so do not forget to invite those last minute friends and family</p>
				</figcaption>
			</figure>

			<figure class="feature cf">
				<figcaption>
					<h2>Prizes</h2>
					<p class="description">Your fundraising efforts are very important and provide the funds necessary to operate the programs that positively impact children, teens, young adults and families affected by autism here in San Diego. To thank you, we have terrific prize packages, provided by our generous sponsors! Donations will be accepted through April 2nd.</p>
				</figcaption>
			</figure>

			<figure class="feature cf">
				<figcaption>
					<h2>DONATIONS</h2>
					<p class="description">Enter your offline donations (checks, cash) as offline donations in your fundraising page, and turn these in at the Donation booth next to the NFAR Tent</p>

					<p class="description">Donate to National Foundation for Autism Research
					</p>
					<p>Attn: Race for Autism</p>
					<p>PO Box 502177
						San Diego CA 92150</p>
						<p>
							Please be use to include your name with donations mailed in so we may add them to your fundraising.
						</p>




					</figcaption>
				</figure>

				<figure class="feature cf">
					<figcaption>
						<h2>RACE FROM HOME</h2>
						<p class="description">Not available on Race Day?  You can still be a hero by selecting the "Race from Home" option when registering.
							We will mail you a bib, Race T-shirt and finisher medal the Monday following the Race!</p>
						</figcaption>
					</figure>

					<figure class="feature cf">
						<figcaption>
							<h2>RUNNERS AWARDS</h2>
							<p class="description">Award medals will be presented to the top three male and female finishers in age divisions: 12 &amp; under,13-17, 18-24, 25-29, 30-34, 35-39, 40-44, 45-49, 50-54, 55-59, 60-64, 65-69, 70-74, 75-79 and 80+.</p>
						</figcaption>
					</figure>

				</aside>

				<footer class="cf">
					<section class="contact">
						<h2>Contact Us</h2>
						<p class="description">National Foundation for Autism Research</p>
						<p class="description">PO Box 502177, San Diego, CA 92150</p>
						<p class="description">P&colon; <a href="tel:858-679-8800" class="phone">858.679.8800</a></p>
					</section>

					<section class="fsocial">
						<h2>Follow Us</h2> <!-- left H3 on purpose to check which size looks better -->
						<ul class="social cf">
							<li class="fb"><a href="https://www.facebook.com/NationalFoundationforAutismResearch/" target="_blank"></a></li>
							<li class="instagram"><a href="https://www.instagram.com/nfarorg/" target="_blank"></a></li>
							<li class="twitter"><a href="https://twitter.com/nfarorg" target="_blank"></a></li>
							<li class="pintrest"><a href="https://www.pinterest.com/NFARorg/" target="_blank"></a></li>
							<li class="linkedin"><a href="https://www.linkedin.com/groups/126266/profile" target="_blank"></a></li>
						</ul>
					</section>

					<section class="copy">
						<small class="description">NFAR is a 501c3 nonprofit organization.</small>
						<small class="description">Copyright &copy; 2014 National Foundation for Autism Research (NFAR). All Rights Reserved.</small>
					</section>

				</footer>
			<!--<script src="../scripts/fluidvids.min.js"></script>
			<script>
			fluidvids.init({
				selector:["iframe"], 
				players: ["www.youtube.com","player.vimeo.com"]
			})
		</script>-->
	</body>
	</html>
<main class="cf">
	<div class="successPage">
	<?php
			//if the email was sent, show the success message
			echo '<div class="success">Thank you '.$fname.' for joining our cause. See you on race day! </div>';
			?>
		</div>

</main>
