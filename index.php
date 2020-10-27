<?php
session_start();
?>
<html class="html">

<link rel="stylesheet" href="PortfolioMain.css">
<link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
	<head>
		<title>Olivier van der Molen - Home</title>

	</head>
	
	<body>
	<div class="headerMain" style="z-index: 10;">
		<img src="recources/headerLogo.png" class="headerLogo">
		<h1 class="headerTitle">OLIVIER VAN DER MOLEN</h1>
		<h2 class="headerSubtitle">PORTFOLIO</h2>
		<div class="headerButtonPages">
			<a href="index.php"><button type="button" class="headerButtonActive" class="headerButtonHome" >HOME </button><a/>
				<a href="AboutMe.html"><button type="button" class="headerButtonIntro">ABOUT ME </button></a>
				<a href="index.html"><button type="button" class="headerButtonRes">RESUME </button></a>
				<a href="index.html"><button type="button" class="headerButtonProjects">PROJECTS </button></a>
				<a href="index.html"><button type="button" class="headerButtonLearn">LEARNING GOALS </button></a>
				<a href="PortfolioContact.html"><button type="button" class="headerButtonContact">CONTACT </button></a>
				<a href="PortfolioLogin.php"><button type="button" class="headerButtonLogin">LOGIN</button></a>
				<p><?php echo $_SESSION['user_id'];?></p>
			</a>
		</div>
	</div>

		<div class="mainDisplayName">
			<h1 class="displayNameText">Olivier van der Molen</h1>
				<div class="divider"></div>
			<h2 class="displayNameText2">PERSONAL PORTFOLIO WEBSITE</h2>
			<input id="scrollButton2" type="image" src="recources/arrowDown.gif" style="width: 100px; height: 100px; margin-top: 400px;" onclick="document.getElementById('scrollButton2').scrollIntoView({ behavior: 'smooth' });"></input>

		</div>
		<div class="mainScrollBody">
			<div id="aboutMe">
				<img src="recources/portrait.png" class="aboutMeImage">
				<h1 class="aboutMeTitle"> ABOUT ME </h1>
				<p1 class="aboutMeText">My name is Olivier and I am a student at Hogeschool Utrecht.</p1>
				<p2 class="aboutMeText2">From working on school projects to realising your technological wishes, I do it all.</p2>
				<p3 class="aboutMeText3">Being young helps with finding a solution that is best for users of all generations, while still implementing the clients' wishes. </p3>
				<h2 class="aboutMeText4">PERSONAL INTERESTS:</h2>
				<p4 class="aboutMeText5">- Artificial intelligence / Machine Learning </p4>
				<p5 class="aboutMeText6">- Cars, Motorcycles and automotive tinkering </p5>
				<button type="button" class="aboutMeReadMore">READ MORE >></button>
			</div>

			<div class="mainPageCV">
				<div class="cvText">
					<p1 style="display: absolute; font-family: 'Bebas Neue'; font-size: 50; text-decoration: underline; text-decoration-color: #0092d2;">RESUME</p1>
					<p2 style="display: flex; font-family: 'Bebas Neue'; font-size: 30; top: 50px; left: 20px;">PERSONALIA</p2>
					<p3 style="display: flex; font-family: 'Bebas Neue'; font-size: 25; line-height: 1;">
					NAME: OLIVIER VAN DER MOLEN <br>
					BIRTHDAY: 07/11/2002 <br>
					BIRTHPLACE: ZOETERMEER <br>
					GENDER: MALE
					</p3>
					<p4 style="display: flex; font-family: 'Bebas Neue'; font-size: 30; margin-top: 80px;">QUALITIES</p4>
					<p5 style="display: flex; font-family: 'Bebas Neue'; font-size: 25; line-height: 1;">
						- DRIVEN <br>
						- AMBITIOUS <br>
						- ENERGETIC <br>
						- STRESS-RESISTENT <br>
						- STUDIOUS <br>
						- TEAMPLAYER
					</p5>
					<p6 style="display: flex; font-family: 'Bebas Neue'; font-size: 30; margin-top: -410px; margin-left: 350px;">EDUCATION</p6>
					<p7 style="display: flex; font-family: 'Bebas Neue'; font-size: 25; margin-left: 350px; line-height: 1;">
						- VMBO-TL, SEPTEMBER 2014 / JULI 2018 > GRADUATED <br>
						- HAVO, AUGUST 2018 / MARCH 2020 > GRADUATED <br>
						- HBO-ICT, SEPTEMBER 2020 / CURRENT <br>
					</p7>
					<p8 style="display: flex; font-family: 'Bebas Neue'; font-size: 30; margin-left: 350px; margin-top: 100px;">WORKING EXPERIENCE</p8>
					<p9 style="display: flex; font-family: 'Bebas Neue'; font-size: 25; line-height: 1; margin-left: 350px;">
						- EDITOR AT PIXELVAULT, SEPTEMBER 2019 / FEBRUARI 2020 <br>
						- VOLUNTEER AT STICHTING KINDERZWERFBOEK, APRIL 2018 > CURRENT <br>
						- ALLROUND EMPLOYEE AT GAMMA CULEMBORG, MARCH 2019 > CURRENT

					</p9>
					<div style="width: 200px; height: 10px; position: absolute; background-color: #e6331c; margin-top: -260px; margin-left: -250px; border-radius: 5px;"></div>
					<div style="width: 800px; height: 10px; position: absolute; background-color: #0092d2; margin-top: -160px; border-radius: 5px;"></div>
					<img src="recources/hexagonJobs.png" style="position: relative; left: 1000px; top: -360px; width: 400px;">
				</div>
				<div class="cvDownloads">
					<button type="button" CLASS="downloadCVWord">DOWNLOAD - WORD</button>
					<button type="button" CLASS="downloadCVPDF">DOWNLOAD - PDF</button>
				</div>
				<div style="width: 250px; position: relative; height: 250px; left: 50px;">
					<button class="readfull">READ FULL RESUME ONLINE >></button>
				</div>



			</div>
			<div class="mainPageProjects">
				<h1 style="font-family: 'Bebas Neue'; font-size: 40; text-align: center; position: relative; text-decoration: underline; text-decoration-color: #e6331c; text-decoration-thickness: 8px;">MY PROJECTS</h1>
					<div class="projectsHolder">
						<div style="left: 350px; background-image: url('recources/Project1.png'); background-size: cover;"  class="Project">
							<h1 class="projectTitle">RASPBERRY WEBHOSTING</h1>
							<h2 class="projectDesc">Home-hosted raspberry pi webserver, made with apache2 in combi with php7, with remote file acces.</h2>
						</div>
						<div style="left: 350px; background-image: url('recources/project3.png'); background-size: cover;"  class="Project">
							<h3 class="projectTitle">PORTFOLIO WEBSITE</h3>
							<h4 class="projectDesc">A portfolio website, custom-made in html, with css styling and javascript functionality.</h4>
						</div>
						<div style="left: 350px; background-image: url('recources/Project2.png'); background-size: cover;" class="Project">
							<h5 class="projectTitle">SPAMBOT</h5>
							<h6 class="projectDesc">Self-coded spambot, made to counter AFK measures, later redesigned to annoy friends and family.</h6>
						</div>
					</div>

			</div>
			<div class="footerMenu">
				<h1 style="font-family: 'Bebas Neue'; font-size: 30; position: relative; display: inline-block; margin-left: 20px; text-decoration: underline; text-decoration-color: #0092d2; text-underline-offset: 3px; text-decoration-thickness: 5px;">DISCLAIMER</h1>
				<p1 style="font-family: 'Bebas Neue'; font-size: 20; position: relative; display: block; margin-left: 20px;">THIS WEBSITE IS CUSTOM-MADE WITH HTML. <br> THEREFORE THERE MAY BE OBJECTS THAT DO NOT FUNCTION AS DESIRED. <br> <br> THANK YOU FOR YOUR UNDERSTANDING.</p1>
				<h2 style="font-family: 'Bebas Neue'; font-size: 30; position: absolute; display: inline-block; margin-left: 600px; margin-top: -170px; text-decoration: underline; text-decoration-color: #0092d2; text-underline-offset: 3px; text-decoration-thickness: 5px;">QUICK MENU</h2>
				<a href="index.html" style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: inline-block; color: #ede8e8;  margin-left: 600px; margin-top: -130px;">HOME</a>
				<a href="AboutMe.html" style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: inline-block; color: #ede8e8;  margin-left: 600px; margin-top: -100px;">ABOUT ME</a>
				<a href="index.html" style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: inline-block; color: #ede8e8;  margin-left: 600px; margin-top: -70px;">RESUME</a>
				<a href="index.html" style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: inline-block; color: #ede8e8;  margin-left: 600px; margin-top: -40px;">PROJECTS</a>
				<a href="PortfolioContact.html" style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: inline-block; color: #ede8e8;  margin-left: 600px; margin-top: -10px;">CONTACT</a>
				<h3 style="font-family: 'Bebas Neue'; font-size: 30; position: absolute; display: flex; margin-left: 20px; text-decoration: underline; text-decoration-color: #0092d2; text-underline-offset: 3px; text-decoration-thickness: 5px; margin-left: 900px; margin-top: -170px;">QUICK CONTACT</h3>
				<p3 style="font-family: 'Bebas Neue'; font-size: 20; position: absolute; display: flex; margin-left: 900px; margin-top: -120px;">MAIL: OLIVIER.MOLEN@GMAIL.COM / OLIVIER.BEUSICHEM@GMAIL.COM <br>
				PHONE: +31 6 57 00 72 56 / +31 6 40 13 83 18
				</p3>
				<a href="https://www.facebook.com/olivier.vandermolen" target="_blank"><input type="image" src="recources/socialFacebook.png"  style="position: absolute; display: inline-block; width: 50px; margin-left: 900px; margin-top: -40px;"/></a>
				<a href="http://www.linkedin.com/in/olivier-molen" target="_blank"><input type="image" src="recources/socialLinkedin.png" style="position: absolute; display: inline-block; width: 50px; margin-left: 970px; margin-top: -40px;"/></a>
				<a href="https://www.instagram.com/oli4vandermolen" target="_blank"><input type="image" src="recources/socialInsta.png" style="position: absolute; display: inline-block; width: 50px; margin-left: 1040px; margin-top: -40px;"/></a>
				<a href="mailto:olivier.molen@gmail.com" target="_blank"><input type="image" src="recources/socialMail.png" style="position: absolute; display: inline-block; width: 50px; margin-left: 1110px; margin-top: -40px;"/></a>
				<a href="PortfolioContact.html" target="_self"><input type="image" src="recources/socialMore.png" style="position: absolute; display: inline-block; width: 50px; margin-left: 1180px; margin-top: -40px;"/></a>

				<div style="width: 10px; height: 200px; background-color: #e6331c; position: absolute; display: flex; margin-top: -170px; margin-left: 550px; border-radius: 5px;"></div>
				<div style="width: 10px; height: 200px; background-color: #e6331c; position: absolute; display: flex; margin-top: -170px; margin-left: 850px; border-radius: 5px;"></div>

			</div>


		</div>





	</body>
	
	<footer>
	</footer>






</html>