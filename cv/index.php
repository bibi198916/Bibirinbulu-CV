<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="My Portfolio" content="My skills and portfolio">
	<meta name=”robots” content="index, follow">
	<title>Bibirinbulu Aremieye CV</title>
	<!-- fontawesome icons link -->
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="./Bibirinbulu-CV/style.css">

	<!-- My CSS link -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


	<!-- Address Table row section -->
	<div class="address box">
		<div class="add">
			<div class="icon">
				<img src="Bibirinbulu-CV/img/address.svg" alt="">
				<div class="icon-add">
					<p>Akenfa III, Ken-Kiama Street</p>
					<p>Yenagoa, Bayelsa State</p>
				</div>
			</div>
			
			<div class="icon">
				<img src="Bibirinbulu-CV/img/phone-contact.svg" alt="">
				<p>+2348165025176</p>
			</div>
			<div class="icon">
				<img src="Bibirinbulu-CV/img/email.png" alt="">
				<p><a href="bibiaremieye@gmail.com">bibiaremieye@gmail.com</a></p>
			</div>
		</div>
		<!-- My Image -->
		<div class="img">
			<img src="https://res.cloudinary.com/bibi1989/image/upload/c_scale,h_400,w_500/v1566551283/bibi_eek592.jpg"
				alt="Bibi Image">
		</div>
	</div>


	<!-- Name Title Table row section -->
	<div class="title box">
		<h1>Aremieye Bibirinbulu</h1>
		<!-- <hr> -->
	</div>

	<div class="container">
		<!-- Objective Table row section -->
		<div class="objective box">
			<h2>OBJECTIVE</h2>
			<p>A Mechanical Engineer and a Web Developer with experience on Machines, Energy audit, electrical and
				solar installation, motor automation and a year experience in web development, proficient in HTML,
				CSS and JavaScript. Seeking a new role with responsibilities in order to make progress with my
				career.</p>
		</div>

		<div class="skill box">
			<h2>Skills</h2>
			<ul>
				<li>proficient In HTML and CSS</li>
				<li>Junior JavaScript Developer</li>
				<li>Team Player</li>
				<li>Analytical Skills</li>
			</ul>
		</div>

		<!-- Experience Table Section -->
		<div class="experience box">
			<div>
				<h2>EXPERIENCE</h2>
				<div class="xperience">
					<h3>Self Project, LAGOS STATE - <i>Personal Web Development</i></h3>
					<p>MAY 2018 - PRESENT</p>
					<ul>
						<li>Design and Implement a persistent TodoList to localStorage, Calculator, and Budget App
						</li>
						<li>Designed and develop a simple shopping cart</li>
						<li>Designed static web pages</li>
					</ul>
				</div>

				<div class="xperience">
					<h3>Afeni Global Services Ltd, BAYELSE STATE - <i>Assistant Site Engineer</i></h3>
					<p>APRIL 2014 - SEPTEMBER 2016</p>
					<ul>
						<li>Assisted in supervising the installation of Street Solar light.</li>
						<li>Assisted in supervising the installation of transformer.</li>
					</ul>
				</div>

				<div class="xperience">
					<h3>Nigeria Engineering Works LTD (N.E.W), RIVERS STATE - <i>Design And Development</i></h3>
					<p>MAY 2010 - OCTOBER 2010</p>
					<ul>
						<li>Responsible for Designing and Fabrication of metal sheet to Manufacture Metal Cabinet,
							Metal framework of Refrigerator.</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Education Table row section -->

		<div class="education box">
			<h2>EDUCATION</h2>
			<div class="university">
				<h3>Niger Delta University, Amassoma, Bayelsa State - <i>B.Eng Mechanical Engineering</i></h3>
				<p>OCTOBER 2006 - SEPTEMBER 2011</p>
			</div>

			<div class="secondary">
				<h3>Federal Government College, Odi, Bayelsa State - <i>West Africa Examination Council (WAEC)</i>
				</h3>
				<p>OCTOBER 2000 - MAY 2006</p>
			</div>
		</div>


		<!-- Certification Table row section -->
		<div class="certification box">
			<h2>CERTIFICATION</h2>
			<ul>
				<li>SEIMENS CERTIFICATE</li>
				<li>LAGOS ENERGY ACADEMY CERTIFICATE</li>
			</ul>
		</div>


		<!-- Training Table row section -->
		<div class="training box">
			<h2>TRAINING</h2>
			<p>Smart Electrical Engineering Training Program</p>
		</div>
	</div>

	<!-- Contact Form section -->
	<div class="form">
		<form action="/cv/file.php" target="_blank" method="POST">
			<h1>Contact Me</h1>
			<span class="require">*</span>
			<div class="name">
				<i class="fas fa-user"></i>
				<input type="text" name="name" id="name" placeholder="Names">
			</div>
			
			<span class="require">*</span>
			<div class="email">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" id="email" placeholder="E-mail">
			</div>
	
			<span class="require">*</span>
			<div class="titles">
				<i class="fas fa-book"></i>
				<input type="text" name="title" id="title" placeholder="Title">
			</div>
			
			<span class="require">*</span>
			<div class="msg">
				<i class="fas fa-envelope-open-text"></i>
				<input type="text" name="message" id="message" placeholder="Message...">
			</div>

			<div class="button">
				<i class="fas fa-arrow-right"></i>
				<button type="submit">Submit</button>
			</div>
			<div class="success"></div>
		</form>
	</div>

	<script src="/main.js"></script>

</body>

</html>