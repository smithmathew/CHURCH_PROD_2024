<?php
session_start();
if(isset($_POST['IsSubmit']) && $_POST['IsSubmit'] == "frmenquiry")
{

echo "Inside submittttttttttttt<br><br><br><br>";

		$name=isset($_POST['name']) ? $_POST['name'] : null;

		$email=isset($_POST['email']) ? $_POST['email'] : null;
		$txtphone=isset($_POST['phone']) ? $_POST['phone'] : null;
		$txtcomments=isset($_POST['message']) ? $_POST['message'] : null;

echo $name;


$to	="linukeapen@gmail.com";


$from	=	$email; //user mail id
$subject = "Enquiry  From  ".$name."  - Kallooppara Valiya Pally!";
$headers = "From:  Kallooppara Valiya Pally Website Enquiry \r\n";
if(isset($from) && $from)
{
$headers .= "Reply-To:".$from."\r\n";
}
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$message = '<html><body>';
$message .= '<table width="500" bgcolor="#f7941e" cellpadding="10" cellpadding="1" border="0">    ';
$message .= '<tr><td>';
$message .= '<font face="arial" size="2" color="#FFFFFF">St. Marys Orthodox Church <br>Kallooppara P.O, Thiruvalla<br></font> </td></tr>';
$message .= '<tr><td bgcolor="#FFFFFF">';
$message .= '<table width="100%"  cellpadding="10" border="0">';
$message .= '<tr><td colspan="2">';
$message .= '<font face="arial" size="2" color="#000000">';
$message .= '<p align="left">Dear St. Marys Orthodox Church,<br><br></p>';


$message .= '<p align="left"><b></b>' .$txtcomments. '</p>';
$message .= '<p align="left"><hr noshade="noshade" size="1" /></p>';
$message .= '</font>';
$message .= '</td></tr>';
$message .= '<tr><td><font face="arial" size="2" color="#000000">';
$message .= '<p align="left">' .ucfirst($name). '<br>' .strtolower($email).'<br>'.$txtphone.' <br></p></font>';
$message .= '</td></tr></table></td></tr><tr><td><br></td></tr></table>';
$message .= "</body></html>";




                     if(mail($to,$subject,$message,$headers))
                       {
						   echo "if";
                              $_SESSION['success']="Dear ".ucfirst($name).",<br><br>Thank You for sending us your enquiry. We appreciate and acknowledge your interest shown towards our service.<br>
									Our team would get back to you soon.";

							header("Location:new_contact_us.php"); /* Redirect browser*/

								exit;

                         }
                        else
                        {   

					$_SESSION['success']="Dear ".ucfirst($name).",<br><br>Mail Error";

							header("Location:new_contact_us.php"); /* Redirect browser*/
                            exit;
                        }



}//---------------------submit


else
{
//echo "IsSubmit out=";
}


?>
<!-- By Linu Eappen -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kallooppara Pally</title>

    <link rel = "icon" href =  

"new_images/title/title.png" 

        type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Creature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="new_css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="new_css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="new_css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="new_css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="new_css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<style>
.bannerr {
    background: url(new_images/about/bann.jpg) bottom no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-size: cover;
	height:350px;
}
	
</style>
	</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- banner -->
    <div id="home">
	<!--header-->
	<header>

            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-lg navbar-light navbar-fixed-top">

                <h1>

                    <!-- <a class="navbar-brand" href="index.html" data-blast="color">

                        Creature

                    </a> -->

                </h1>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-lg-auto text-center">

                        <li class="nav-item ">

                            <a class="nav-link" href="index.html" data-blast="color">Home

                               

                            </a>

                        </li>

                        <li class="nav-item dropdown mt-lg-0 mt-3 ">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"

                                aria-haspopup="true" aria-expanded="false">

                                ABOUT US <span class="caret"></span>

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="new_about.html">ABOUt CHURCH<H/a>

                                <a class="nav-link" href="new_church_history.html">CHURCH HISTORY</a>

                                <a class="nav-link" href="new_about_kallooppara.html">ABOUT KALLOOPPARA</a>

                                <!-- <a class="dropdown-item scroll nav-link" href="#posts">latest posts</a> -->

                            </div>

                        </li>

                        

                        <li class="nav-item dropdown mt-lg-0 mt-3">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"

                                aria-haspopup="true" aria-expanded="false">

                                CHURCH<span class="caret"></span>

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="new_vicars_final.html">Vicars</a>

                                <a class="nav-link" href="new_g_bodies.html">Governing Body</a>

                                <a class="nav-link" href="new_bishops.html">Our Bishops</a>

                                <a class="nav-link" href="new_priests.html">Our Priests</a>

                                <!-- <a class="dropdown-item scroll nav-link" href="#posts">Spiritual Leaders</a> -->

                                <a class="nav-link" href="new_personalities.html">Personalities</a>

                                <a class="nav-link" href="Launching_soon.html">Church Members</a>

                                <a class="nav-link" href="new_child_churches.html">Child Churches</a>

                                <a class="nav-link" href="new_org_final.html">Other Organizations</a>

                            </div>

                        </li>

                        <li class="nav-item mt-lg-0 mt-3">

                            <a class="nav-link" href="new_event.html">EVENTS</a>

                        </li>

                        <li class="nav-item mt-lg-0 mt-3">

                            <a class="nav-link" href="new_news.html">NEWS</a>

                        </li>

                        <li class="nav-item mt-lg-0 mt-3">

                            <a class="nav-link" href="new_service.html">SERVICES</a>

                        </li>

                        <li class="nav-item mt-lg-0 mt-3">

                            <a class="nav-link" href="new_portfolio.html">GALLERY</a>

                        </li>

                        <li class="nav-item  mt-lg-0 mt-3">

                            <a class="nav-link active" href="new_contact_us.php">Contact US<span class="sr-only">(current)</span></a>

                        </li>

                    </ul>

                    <!-- <button type="button" class="btn  wthree-link-bnr bg-theme rounded-circle text-center mt-lg-0 mt-3" data-toggle="modal"

                        aria-pressed="false" data-target="#exampleModal" data-blast="bgColor"> <span class="fa fa-user text-white"></span>

                    </button> -->

                </div>



            </nav>

        </header>
		<div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner bannerr">
                    <div class="container">
                        <div class="banner-text" style="padding-top: 18vw;">
                            <div class="slider-info">
                                <!--<h3>protect wildlife</h3>
                                <span class="line"></span>-->
                                <p>"When God Steps in, Miracles Happen.."</p>
                             
                            </div>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
	<!--//header
	<h1>IMMOVABLE</h1>-->
	</div>
	<!--contact-->

    <section class="contact-wthree py-sm-5 py-4" id="contact">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt" style="text-decoration:none;color:rgb(104, 0, 52);">contact us</h3>
                <p>For any queries regarding the church and its activities or to be a part of the community services that we provide, please contact us through the feedback form provided in this page. You can also send us a mail on the mailing address given below.</p>
            </div>
			  
            <div class="row mt-4">
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form"  style="color:rgb(104, 0, 52);">get in touch</h5>
                    <div class="row flex-column">
                        <!--<div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">info@example1.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">info@example2.com</a>
                                <a href="mailto:example@email.com">info@example3.com</a>
                            </div>
                        </div>-->
                       <!-- <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <p>+456 123 7890</p>
                                <p class="my-1">+456 123 7890</p>
                                <p>+856 123 7890</p>
                            </div>
                        </div>-->
                        <div class="contact-w3 contact-form-wthreelayouts">
						<div style="padding-bottom:55px;">
						<img class="card-img-bottom" src="new_images/about/contact.jpg" alt="Card image cap">
						</div>
                            <span class="fa fa-home mb-3" style="color:rgb(104, 0, 52);"></span>
                            <address>St. Mary's Orthodox Church <br>Kallooppara P.O<br>Thiruvalla<br>Pathanamthitta District<br>Kerala, India<br class="fa fa-phone mb-3" style="color:rgb(104, 0, 52);">Ph: +91 469 2677211<br>Email : info@kalloopparachurch.com<br>Technical Support:  +91 9600393765</address>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
				<?php

                                                if(isset($_SESSION['success']) && $_SESSION['success'])
			                                    {
												      echo "<br><font color=#ed1c24>". $_SESSION['success']."</font><br><br>";
								$_SESSION['success']="";
													}

                   ?>
                    <h5 class="cont-form" data-blast="color" style="color: rgb(104, 0, 52);">contact form</h5>
                    <div class="contact-form-wthreelayouts">
                        <form  class="register-wthree" id="contact-form" role="form"  method="post" action="new_contact_us.php">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="Johnson" id="name"  name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" id="phone" pattern='^\+?\d{0,13}' name="phone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}"  required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"  required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" class="form-control" id="message" name="message" required></textarea>
                            </div>
							
							
									
                            <div class="form-group mb-0"><input type="hidden" name="IsSubmit" value="frmenquiry">
                                <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-white w-100 font-weight-bold text-uppercase" value="Submit" class="btn btn-default" id="submit" name="submit"  style="background-color:rgb(104, 0, 52);">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          <div class="mx-auto text-center mt-lg-0 mt-4">        
					<iframe  class="mt-lg-4 contact-form-wthreelayouts" style="border:3px solid rgb(104, 0, 52);"  src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3936.2894821777254!2d76.63406141394117!3d9.395972385722343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3b0624b67e929eb5%3A0x8ca0cc6604585436!2sSt.+Mary&#39;s+Orthodox+Church%2C+Kallooppara%2C+Kallooppara-Pathanamthitta+Road%2C+Kallooppara%2C+Kerala+689583!3m2!1d9.3959671!2d76.6362501!5e0!3m2!1sen!2sin!4v1564162018951!5m2!1sen!2sin" width="600" height="450" allowfullscreen></iframe>
                <!-- //footer right -->
            </div>
        </div>

    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer class="cpy-right bg-theme" style="background-color:rgb(104, 0, 52);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wthree-social">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f icon_facebook"></span>
                                </a>
                            </li>
                           <!-- <li>
                                <a href="#">
                                    <span class="fa fa-twitter icon_twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble icon_dribbble"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-google-plus icon_g_plus"></span>
                                </a>
                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
                    <p style="color:white">© 2019 St Marys OrthodoxChurch. All rights reserved | Design by
                        Smith | Linu | Sherlin
                        <!-- <a href="http://w3layouts.com"> W3layouts.</a> -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- login  -->
    
    <!-- //login -->
    <!-- register -->
    
    <!-- // register -->
    <!-- blog modal1 -->
    
    <!-- //blog modal1 -->
    <!-- blog modal2 -->
    
    <!-- //blog modal2 -->
    <!-- blog modal3 -->
    
    <!-- //blog modal3-->
    <!-- js -->
    <script src="new_js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner  Responsiveslides -->
    <script src="new_js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- Scrolling Nav JavaScript -->
    <script src="new_js/scrolling-nav.js"></script>
    <script src="new_js/counter.js"></script>
    <!-- portfolio -->
    <script src="new_js/jquery.picEyes.js"></script>
    <script>
        $(function () {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //portfolio -->
    <!-- start-smooth-scrolling -->
    <script src="new_js/move-top.js"></script>
    <script src="new_js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="new_js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="new_js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="new_js/bootstrap.js"></script>
</body>

</html>