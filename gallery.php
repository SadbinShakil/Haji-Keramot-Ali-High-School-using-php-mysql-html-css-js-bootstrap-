<!DOCTYPE html>
<html>
<head>
	<title>Gallery Page</title>
	 <!-- Link is using for google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.gallery{
			margin: 10px 10px;
		}
		.gallery img{
			padding: 5px;
			width: 230px;
			filter: grayscale(100%);
			transition: 1s;
		}
		.gallery img:hover{
			filter: grayscale(0);
			transform: scale(1.1);
		}
		.a{
            background: url('school_image/bg.jpg')no-repeat center center fixed ;
            -moz-background-size: cover;
            -webkik-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
             font-family: 'Josefin Sans', sans-serif;
		}
		h1{
			color: lightgray;
		}
	</style>

</head>
<body class="a">

	<header>
		<div class="headerdiv">
			<div class="logodiv">
				<a href="index.html">	<img src="mainlogo.gif"></a>
			</div>
			
		</div>
	</header>

<h1 align="center">
	Image Gallery
</h1>
<div class="gallery">
	<a href="school_image/1.jpg"> <img src="school_image/1.jpg"></a>
	<a href="school_image/2.jpg"><img src="school_image/2.jpg"></a>
	<a href="school_image/3.jpg"><img src="school_image/3.jpg"></a>
    <a href="school_image/4.jpg"><img src="school_image/4.jpg"></a>
    <a href="school_image/5.jpg"><img src="school_image/5.jpg"></a>
   <a href="school_image/6.jpg"> <img src="school_image/6.jpg"></a>
    <a href="school_image/7.jpg"><img src="school_image/7.jpg"></a>
   <a href="school_image/8.jpg"> <img src="school_image/8.jpg"></a>
    <a href="school_image/9.jpg"><img src="school_image/9.jpg"></a>
    <a href="school_image/10.jpg"><img src="school_image/10.jpg"></a>
    <a href="school_image/11.jpg"><img src="school_image/11.jpg"></a>
    <a href="school_image/12.jpg"><img src="school_image/12.jpg"></a>
    <a href="school_image/13.jpg"><img src="school_image/13.jpg"></a>
    <a href="school_image/14.jpg"><img src="school_image/14.jpg"></a>
    <a href="school_image/15.jpg"><img src="school_image/15.jpg"></a>
</div>

</body>
</html>