<!DOCTYPE html>
<html lang="en">
<head>
    <title>BD Wedding Planning</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body id="page1">
    <header>
    	<div class="main">
        	<h1 style="font-family: 'Lobster', cursive; font-size: 35px; padding-bottom: 10px">BD Wedding Planning</h1>
        </div>
        <div class="menu-row">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    	<div class="grid_12">
                        	<nav>
                                <ul class="menu">
                                    <li><a class="active" href="index.php">About</a></li>
                                    <li><a href="pack.php">Packages</a></li>
                                    <li><a href="contacts.php">Contacts</a></li>                   
                                    <li><a href="admin.php">Admin</a></li>
                                    <li><a href="">FAQ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
        	<div class="slider-wrapper">
                <div class="slider">
                    <ul class="items">
                        <li>
                            <img src="images/slider-img1.jpg" alt="" />
                        </li>
                        <li>
                            <img src="images/slider-img2.jpg" alt="" />
                        </li>
                        <li>
                            <img src="images/slider-img3.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_4">
                    	<div class="indent-right">
                        	<h2>About Us</h2>
                            <p><strong class="text-1">BD Wedding Planning</strong> is first company which is providing services on internet. We are providing three packages. Customer can select any pakage they want.</p>
                            <ul class="list-1 p2">
                            	<li><a href="#">Premium</a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">Regular</a></li>
                                
                            </ul>
                            <p class="img-indent-bot">This three packages are providing different types of services. For example we are providing free uest Card in every package and also have many offers.</p>
                            
                        </div>
                    </article>
                    <article class="grid_8">
                    	<div class="indent-left">
                            <h2 class="indent-bot2">Previous Customers Feedback</h2>
                            <div class="wrapper p3">
                                <figure class="img-indent">
                                    <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img1.jpg" alt=""></a><span class="clear"></span></p>
                                    <span class="text-1">Hasib Hasan Werdun</span>
                                </figure>
                                <div class="extra-wrap">
                                    <blockquote class="q1">
                                    	<span class="quote-marker1"></span>
                                        <div class="quote-bot">
                                            <div class="quote-top">
                                                <div class="quote">
                                                    <div class="padding">
                                                        <p class="p2">Hello everyone, I am very happy beacuse "BD Wedding planning" provided all the services i wanted. Thank you "Bd Wedding Planning</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent-r">
                                    <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img2.jpg" alt=""></a><span class="clear"></span></p>
                                    <div class="alignright">
                                    	<span class="text-1">Mihadul H Chowdhury</span>
                                    </div>
                                </figure>
                                <div class="extra-wrap">
                                    <blockquote class="q2">
                                    	<span class="quote-marker2"></span>
                                        <div class="quote-bot">
                                            <div class="quote-top">
                                                <div class="quote">
                                                    <div class="padding">
                                                        <p>BD Wedding planning is really awesome. They fulfilled all the services i wanted. Thank You BD Wedding Planning</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <a class="link-1" href="#">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
            <span class="footer-text">
                <h3 class="text-1">BD Wedding Planning, 2017</h3>
            </span>
        </div>
    </footer>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>