<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>


       <!--for google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}


		



		/*for Contact Form */
		

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Josefin Sans', sans-serif;
		}
		.contact{
			position: relative;
			min-height: 100vh;
			padding: 50px 100px;
			display: flex;
			justify-content: center;
			flex-direction: column;

		}
		.contact .content{
			max-width: 80px;
			text-align: center;

		}
		.contact .content h2{
          font-size: 36px;
          font-weight: 600;
           color: #463f3f;
           margin-left: 500%;
           width: 200px;

		}
		.contact .content p{

         font-weight: 700;
         color:#463f3f;
         margin-left: 250%;
           width: 600px;

		}
		.container{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 30px;

		}

		.container .contactInfo{
			width: 50%;
			display: flex;
			flex-direction: column;
		}
        .container .contactInfo .box{
        	position: relative;
        	padding: 20px 0;
        	display: flex;

        }
        .container .contactInfo .box .icon{
        	min-width: 60px;
        	height: 60px;
        	background: #fff;
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	border-radius: 50%
        	font-size: 22px;

        }
        .container .contactInfo .box .text{
        	display: flex;
        	flex-direction: column;
        	margin-left: 20px;
        	font-size: 16px;
        	color: #fff;
        	font-weight: 300;

        }
         .container .contactInfo .box .text h3{
         	font-weight: 500;
         	color: #000000;


         }
         .contactForm{
         	width: 40%;
         	padding: 40px;
         	background: #fff;

         }
         .contactForm h2{
         	font-size: 30px;
         	color: #333;
         	font-weight: 500;

         }
         .contactForm .inputBox{
         	position: relative;
         	width: 100%;
         	margin-top: 10px;

         }
         .contactForm .inputBox input,
         .contactForm .inputBox textarea{
         	width: 100%;
         	padding: 5px 0;
         	font-size: 16px;
         	margin: 10px 0;
         	border: none;
         	border-bottom: 2px solid #333;
         	outline: none;
            resize: none;

         }

         .contactForm .inputBox span{
         	position: absolute;
         	left: 0;
         	padding: 5px 0;
         	font-size: 16px;
         	margin: 10px 0;
         	pointer-events: none;
         	transition: 0.5s;
         	color: #666;


         }
     
           .contactForm .inputBox input[type="submit"]{
           	width: 100px;
           	background: #00bcd4;
           	color: #fff;
           	border: none;
           	cursor: pointer;
           	padding: 10px;
           	font-size: 18px;

           }


          

           .map{
           	margin-left: 40%;
           	 color:#f3f5f2;
           }

	</style>
	<meta name="viewpory" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<section class="contact">
	<div class="content">
		<h2>Contact Us</h2>
		<p>We'll be in touch as soon as possible with you. Thanks for contacting with us.</p>
	</div>
	<div class="container">
		<div class="contactInfo">
			<div class="box">
				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
				<div class="text">
					<h3>Address</h3>
					<p>Munshigang<br>Gazaria<br>Dhaka,Bangladesh</p>
				</div>
				
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
				<div class="text">
					<h3>Phone</h3>
					<p>01857297599</p>
				</div>
				
			</div>
			<div class="box">
				<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
				<div class="text">
					<h3>Email</h3>
					<p>sadbinshakil75@gmail.com</p>
				</div>
				
			</div>
		</div>
		<div class="contactForm">
			<form>
				<h2>Send Message</h2>
				<div class="inputBox">
					<input type="text" name="" required="required" placeholder="Full Name">
					<span></span>
				</div>
				<div class="inputBox">
					<input type="text" name="" required="required" placeholder="Email">
					<span></span>
				</div>
				<div class="inputBox">
					<input type="text" name="" required="required" placeholder="Type Your Message....">
					<span></span>
				</div>
				<div class="inputBox">
					<input type="submit" name="" value="send">
					
				</div>
			</form>
			
		</div>
	</div>
</section>
<section>
	<div class="map">
        <h2>Find Us in Google Map</h2>
        <br>
		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14628.215924860404!2d90.61365723609923!3d23.56650466037813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad4e436e14127294!2sHAJI%20KARAMOT%20ALI%20HIGH%20SCHOOL!5e0!3m2!1sen!2sbd!4v1607622453547!5m2!1sen!2sbd" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
	</div>
</section>
	
	
</body>
</html>