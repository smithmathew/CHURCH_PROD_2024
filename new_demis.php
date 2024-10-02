<!DOCTYPE html>
<html lang="zxx">

<head>
        <title>Kallooppara Pally</title>
        <!-- <base href="/" /> -->
        <link rel = "icon" href =  
    "new_images/title/title.png" 
            type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Kallooppara Church, Kallooppara Pally, 
	Kallooppara, st mary's orthodox church, mary's, Abayam, prayer, Christmas" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
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



<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="new_css/pagination.css" rel="stylesheet">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script type="text/javascript" src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script> -->
<script type="application/javascript" src="new_js/JQueryPagination.js"></script>
<script>
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 5,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages: 5,

initiateStartPageClick: true,

// template for pagination links
href: false,

// variable name in href template for page number
hrefVariable: '{{number}}',

// Text labels
first: 'First',
prev: 'Previous',
next: 'Next',
last: 'Last',

// carousel-style pagination
loop: false,

// callback function
onPageClick: function (event, page) {
   $('.page-active').removeClass('page-active');
  $('#page'+page).addClass('page-active');
},

// pagination Classes
paginationClass: 'pagination',
nextClass: 'next',
prevClass: 'prev',
lastClass: 'last',
firstClass: 'first',
pageClass: 'page',
activeClass: 'active',
disabledClass: 'disabled'

});

});


</script>
<style>

.card   
{

    border: 5px solid rgba(0, 0, 0, 0.125);
    border-color: rgb(104, 0, 52);
}
.card-title
{
    color: rgb(104, 0, 52);

}

.card-text

{
    color: rgb(104, 0, 52);
}
.col-md-4
{

     padding-right: 0px; 
     padding-left: 0px;
}


.row 
{

    margin-right: 0px;
    margin-left: 0px;
}
.bgimg-1 {
    background-image: url(new_images/demis/background.jpg);
    height: 100%;
    position: relative;
    /* opacity: 0.65; */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
<body class="bgimg-1" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- banner -->
        <div  id="home">
          
            <!-- <div class="blast-box">
                <div class="blast-frame">
                    <p>color schemes</p>
                    <div class="blast-colors d-flex justify-content-center">
                        <div class="blast-color">#23d48f</div>
                        <div class="blast-color">#d3b800</div>
                        <div class="blast-color">#18e7d3</div>
                        <div class="blast-color">#e5902a</div>
                        <div class="blast-color">#16d9e9</div>
                      
                    </div>
                    <p class="blast-custom-colors">Choose Custom color</p>
                    <input type="color" name="blastCustomColor" value="#d3b800">
    
                </div>
                <div class="blast-icon"><span class="fa fa-paint-brush" aria-hidden="true"></span></div>
            </div> -->
            <header>
                <nav style="background-color:black" class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php" data-blast="color">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown mt-lg-0 mt-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    ABOUT US<span class="caret"></span>
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
                                    <a class="nav-link" href="new_mem.php">Church Members</a>
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
                                <a class="nav-link" href="new_contact_us.php">Contact US</a>
                            </li>
                        </ul>
                        <!-- <button type="button" class="btn  wthree-link-bnr bg-theme rounded-circle text-center mt-lg-0 mt-3" data-toggle="modal"
                            aria-pressed="false" data-target="#exampleModal" data-blast="bgColor"> <span class="fa fa-user text-white"></span>
                        </button> -->
                    </div>
    
                </nav>
            </header>
    
<!-- <div class="container"> -->

<h1 style ="text-decoration: underline;text-align: center;margin-top:100px;color:#dc3545";>കർത്താവിൽ നിദ്ര പ്രാപിച്ചവർ</h1>
    <p style="font-style: italic;margin-left: 220px;margin-top: 15px;;color:#f8f9fa;"> "ഇന്ന് നീ എന്നോടുകൂടെ പറുദീസയിൽ ഇരിക്കും എന്നു ഞാൻ സത്യമായി നിന്നോട് പറയുന്നു"</p>
    <br>
<section>
  <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img src="new_images/demis/3.jpg" class="w-100">
          </div>
          <div class="col-md-8 px-3" style="background-color: antiquewhite;">
            <div class="card-block px-3">
              <h4 class="card-title">Annamma Chacko</h4>
              <p class="card-text">Wife of Late Kunjunne, 81 , mukalil  </p>
              <p class="card-text">-------------------------------------------  </p>
              <p class="card-text">Date of Demis: 24-02-2020</p>
              <p class="card-text">-------------------------------------------  </p>
              <p class="card-text">Date of Funeral:3pm, 25-02-2020</p>
              <p class="card-text">-------------------------------------------  </p>
              <!-- <a href="#" class="btn btn-primary">Read More</a> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
    <br>
<section>
  <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img src="new_images/demis/1.jpg" class="w-100">
          </div>
          <div class="col-md-8 px-3" style="background-color: antiquewhite;">
            <div class="card-block px-3">
              <h4 class="card-title">Annamma Chacko</h4>
              <p class="card-text">Wife of Late Kunjunne, 81 , mukalil  </p>
              <p class="card-text">-------------------------------------------  </p>
              <p class="card-text">Date of Demis: 24-02-2020</p>
              <p class="card-text">-------------------------------------------  </p>
              <p class="card-text">Date of Funeral:3pm, 25-02-2020</p>
              <p class="card-text">-------------------------------------------  </p>
              <!-- <a href="#" class="btn btn-primary">Read More</a> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<br>
<section>
  <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <img style="width:75px" src="new_images/demis/2.jpg" class="w-100">
          </div>
          <div class="col-md-8 px-3" style="background-color: antiquewhite;">
            <div class="card-block px-3">
              <h4 class="card-title">JOY ZACHARIAH</h4>
              <p class="card-text">Son of Late K C ZACHARIAH, 50 , IYKARAPADI, IYKARAMALAYIL  </p>
              <p class="card-text">---------------------------------------  </p>
              <p class="card-text">Date of Demis: 24-02-2020 </p>
              <p class="card-text">---------------------------------------  </p>
              <p  class="card-text">Date of Funeral:3pm, 11-02-2020</p>
              <p class="card-text">---------------------------------------  </p>
              <!-- <a href="#" class="btn btn-primary">Read More</a> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

   <ul style="display: none" id="pagination-demo"></ul>
</div>

<footer class="cpy-right bg-theme" style="background-color: rgb(104, 0, 52);">
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
                            </li> -->
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
   
        <!-- </div> -->
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
    <script src="new_js/jquery.picEyes.js"></script>

        <script src="new_js/SmoothScroll.min.js"></script>
        <!-- //smooth-scrolling-of-move-up -->
        <!-- color switch -->
        <script src="new_js/blast.min.js"></script>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="new_js/bootstrap.js"></script>

        <script src="new_js/scrolling-nav.js"></script>
    <script src="new_js/counter.js"></script>
    <!-- portfolio -->
    <!-- <script src="js/jquery.picEyes.js"></script> -->
    <script>
        $(function () {
            picturesEyes($('.demo li'));
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
        </body>
</head>