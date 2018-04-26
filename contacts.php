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
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
</head>
<body>
	<!--==============================header=================================-->
    <header>
    	<div class="main">
           <div class="main">
            <h1 style="font-family: 'Lobster', cursive; font-size: 35px; padding: 17px; padding-left: 22px; color: black">BD Wedding Planning</h1>
        </div>
        </div>
        <div class="menu-row">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    	<div class="grid_12">
                        	<nav>
                                <ul class="menu">
                                    <li><a href="index.php">About</a></li>  
                                    <li><a href="pack.php">Packages</a></li>
                                    <li><a class="active" href="contacts.php">Contacts</a></li>
                                    <li><a href="admin.php">Admin</a></li>  
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <div class="msf-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 msf-title">
                        <br>
                        <h3>Fill In The Form</h3>
                        <p>Please complete the form below to get instant access to our application and all its features:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 msf-form">
                        
                        <form role="form" action="" method="post" class="form-inline">
                            
                            <fieldset>
                                <h4>Select Package  <span class="step">(Step 1 / 6)</span></h4>
                                <div class="selects-1">
                                    <p>Select 1:</p>
                                    <select class="form-control" name="select-1">
                                        <option value="1">Premium</option>
                                        <option value="2">Standard</option>
                                        <option value="3">Regular</option>
                                    </select>
                                </div>
                                <br>
                                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                            

                            <fieldset>
                                <h4>Customer Name  <span class="step">(Step 2 / 6)</span></h4>

                                <div class="form-group">
                                    <label for="first-name">First Name:</label><br>
                                    <input type="text" name="first-name" class="first-name form-control" id="first-name">
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Last Name:</label><br>
                                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
                                </div>

                                <br>
                                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                             <fieldset>
                                <h4>Select Relegion<span class="step">(Step 3/ 6)</span></h4><div class="selects-2">
                                    <p>Select 2:</p>
                                    <select class="form-control" name="select-2">
                                        <option value="1">Muslim</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Cristian</option>
                                        <option value="4">Other</option>
                                    </select>
                                </div>
                                <br>
                                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                            </fieldset>


                            <fieldset>
                                <h4>Address and Contact Information <span class="step">(Step 4 / 6)</span></h4>
                                <div class="form-group">
                                    <label for="address">Address:</label><br>
                                    <input type="text" name="address" class="address form-control" id="address">
                                </div>
                                <div class="form-group">
                                    <label for="address-city">City:</label><br>
                                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="address-postal-code">Postal Code:</label><br>
                                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Telephone:</label><br>
                                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
                                </div>
                                <div class="form-group">
                                    <label for="mobile-phone">Mobile Phone:</label><br>
                                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label><br>
                                    <input type="text" name="email" class="email form-control" id="email">
                                </div>
                                <br>
                                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                            
                            <fieldset>
                                <h4>Social Media Profiles <span class="step">(Step 5 / 6)</span></h4>
                                <div class="form-group">
                                    <label for="social-facebook">Facebook:</label><br>
                                    <input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook">
                                </div>
                                <div class="form-group">
                                    <label for="social-twitter">Twitter:</label><br>
                                    <input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter">
                                </div>
                                <div class="form-group">
                                    <label for="social-google-plus">Google Plus:</label><br>
                                    <input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus">
                                </div>
                                <div class="form-group">
                                    <label for="social-instagram">Instagram:</label><br>
                                    <input type="text" name="social-instagram" class="social-instagram form-control" id="social-instagram">
                                </div>
                                <div class="form-group">
                                    <label for="social-pinterest">Pinterest:</label><br>
                                    <input type="text" name="social-pinterest" class="social-pinterest form-control" id="social-pinterest">
                                </div>
                                <br>
                                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                            </fieldset>
                            
                            <fieldset>
                                <h4>About You <span class="step">(Step 6 / 6)</span></h4>
                                <div class="form-group">
                                    <label for="about-you">Tell us a bit about yourself:</label><br>
                                    <textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
                                </div>
                                <br>
                               <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                                <button type="submit" class="btn">Submit</button>
                            </fieldset>
                       </form>                        
                    </div>
                </div>
            </div>
        </div>
        
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    
	<!--==============================footer=================================-->
   <footer>
        <div class="main">
            <span class="footer-text">
                <h3 class="text-1">BD Wedding Planning, 2017</h3>
            </span>
        </div>
    </footer>
</body>
</html>