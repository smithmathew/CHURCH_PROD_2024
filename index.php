<!DOCTYPE html>
<html lang="zxx">

<head>

    <style>




.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 10s linear infinite;
 -webkit-animation: scroll-left 10s linear infinite;
 animation: scroll-left 10s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}
           li:id1 {
        list-style-image: url('new_images/gifs/new.gif');
    }

    li:id2{
        list-style-image: url('anyimg2.gif');
    }
        /* .modal-full {
    min-width: 100%;
    margin: 0;
    
}
.modal-header {
    border-bottom: none;
    padding: 15px 15px 0 15px;
    background-image: url(http://www.bahai.org/chrome/img/beliefs/bahaullah-covenant-feature-img.jpg?3e7a0319);
    height: 208px;
    background-size: cover;
    background-repeat: no-repeat;
} */

/* .img-responsive-height
{
  display: block;
  width: auto;
  max-height: 100%
} */
/* .modal-full .modal-content {
    min-height: 100vh;
} */
        </style>
    <title>Kallooppara Pally</title>
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

</head>

<body  style="
background: rgba(230, 236, 203, 0.32);
" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- banner -->
    <div id="home">
        <!-- color scheme -->
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
                <input type="color" name="blastCustomColor" value="#ddddd">

            </div>
            <div class="blast-icon"><span class="fa fa-paint-brush" aria-hidden="true"></span></div>
        </div> -->
        <!-- //color scheme -->
        <!-- header -->
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
                            <a  class="nav-link"  href="new_event.html">15 NOYAMB</a>
                            <!-- <span><img src="new_images/gifs/new.gif" alt=" " </span> -->
                            <!-- <link rel="icon" type="image/x-icon" href="new_images/gifs/new.gif"> -->

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
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner banner1">
                    <div class="container">
                        <div class="banner-text">
                             <div class="slider-info">
                                <h3>St Mary's Orthodox Church</h3>
                                <span class="line"></span>
                                 <p>“Our problems sometimes show the degree of our relationship with God.” </p> 
                                <!-- <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                    role="button">View
                                    More</a> -->
                            </div> 
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <div class="banner-text">
                             <div class="slider-info">
                                <h3> <h3>St Mary's Orthodox Church</h3></h3>
                                <span class="line"></span>
                                <p>When you can’t put your prayer into words, God hears your heart.</p>
                                <!-- <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                    role="button">View
                                    More</a> -->
                            </div> 
                        </div>
                    </div>
                </li>
                <li class="banner banner3">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                 <h3>St Mary's Orthodox Church</h3>
                                <span class="line"></span>
                                <p>“Sinning when alone is easy but Worshipping alone is difficult.” 
                                   </p>
                                <!-- <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                    role="button">View
                                    More</a> -->
                            </div> 
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->

<!-- stats -->
<!-- <h3  class="churchTitle" style="padding-bottom: 13px;padding-top: 13px;text-align: center !important;">15 NOYAMB-2023
                 </h3>  
    <section class="w3_stats py-sm-5 py-4" style ="height:400px"id="stats">
        <div class="container">
            <div class="py-lg-5 w3-stats"> -->
                 <!-- <h2 class="w3pvt-title">Summary 2019-2020 -->
                <!-- </h2>  -->
                <!-- <p class="my-4 text-white">
                    Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor
                    nec sem a, ornare auctor mi. Sed
                    mi tortor, commodo a felis in, fringilla tincidunt nulla.</p> -->
                <!-- <div class="row py-4">
                    <div class="col-md-4 col-6">
                        <div class="counter"> -->
                            <!-- <span class="fa fa-users"></span> -->
                            <!-- <div class="timer count-title count-number mt-2 text-white" data-to="720" data-speed="3000"></div> -->
                            <!-- <p class="count-text text-uppercase text-white"><a  href="#programModal" data-toggle="modal" aria-pressed="false" data-target="#programModal"
                                role="button">Today's Program</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="counter">
                            <!-- <span class="fa fa-users"></span> -->
                            <!-- <div class="timer count-title count-number mt-2 text-white" data-to="12" data-speed="2500"></div> -->
                            <!-- <p class="count-text text-uppercase text-white"><a href ="new_pdf/15nombu2023.pdf">VIEW PDF</a></p> -->
                            
                        <!-- </div> -->
                    <!-- </div> --> 
                    <!-- <div class="col-md-4 col-6 ">
                        <div class="counter">
                           
                            <div class="timer count-title count-number mt-2 text-white" data-to="7" data-speed="1500"></div>
                            <p class="count-text text-uppercase text-white"><a href ="Launching_soon.html">Baptism</a></p>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4 col-6 "> -->
                        <!-- <div class="counter"> -->
                            <!-- <span class="fa fa-database"></span> -->
                            <!-- <div class="timer count-title count-number mt-2 text-white" data-to="8" data-speed="2500"></div> -->
                            <!-- <p class="count-text text-uppercase text-white"><a href ="new_15Noyamb_2023.php">IMAGE & VIDEOS</a></p>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </section>
    <!-- <div style="background-color:#e30b0b;" >
<p><marquee><b>CHRISTMAS EVENT : AN IMMERSIVE LIVE BIBLICAL DRAMA COMPRISES 200 PERFORMERS, A 50-MEMBERED CHOIR, AND MESMERIZING PROFESSIONAL DANCE PERFORMANCE. THIS EVENT SERVES AS A SEQUEL TO THE SPECTACULAR SHOW HELD IN DECEMBER 2017, TITLED "A JOURNEY TO BETHLEHEM."</b> </marquee></p>
</div> -->
    <!--  about -->
    <section class="wthree-slide-btm pt-lg-5" id="about">
        <div class="container pt-sm-5 pt-4" style="border:2px solid rgb(104, 0, 52);border-bottom: none;">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="slide-banner">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt light-bg">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 style="color:rgb(104, 0, 52)" class="main-title-w3pvt">About Us</h4>
                                <!-- <p>helping animals & working on environmental issues.</p> -->
                            </div>
                            <!-- <div class="row flex-column mt-lg-4 mt-3"> -->
                                <div class="abt-grid">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-ravelry"></span>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <!-- <h4>sanctus takimata </h4> -->
                                                <p>St. Mary's Orthodox Church is situated at the heart of a small village called Kallooppara, Pathanamthitta District, Kerala, India. It is one of the oldest and renowned churches in Kerala and a priced possession of Malankara Sabha. The church have a legacy of around seven centuries, keeping its tradition and culture intact without compromising on its religious values. The church is a perfect example of the ancient temple architecture and is an elegant representation of the beautiful shingled roof tops in the early Travancore style. The church has a splendid blend of beauty and science in it and is a mystery the way it has overcome all the challenges of time. The church which is the worshiping place of thousands has been a topic of research for many.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-primary btn-md" href ="new_about.html">Read More</a>
                                <!-- <div class="abt-grid mt-4 pt-lg-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-laptop"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <h4>takimata sanctus</h4>
                                                <p>Lo sea takimata sanctus est Lorem ipsum dolorsita.Lorem ipsum dolor
                                                    sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                                    magna aliquyam erat, At vero eos et accusam et justo duo dolores et
                                                    ea
                                                    rebum. Lorem ipsum dolor sit amet, no sea takimata sanctus est
                                                    Lorem
                                                    ipsum dolor sit amet. Stet clita kasd gubergren.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!--  about bottom -->
    <section class="wthree-slide-btm pb-lg-5">
        <div class="container pb-md-5 pb-4" style="border:2px solid rgb(104, 0, 52);border-top: none;">
            <div class="row flex-row-reverse no-gutters">
                <div class="col-lg-5">
                    <div class="ab-banner">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 style="color:rgb(104, 0, 52)"class="main-title-w3pvt">Church History</h4>
                                <!-- <p>helping animals & working on environmental issues.</p> -->
                            </div>
                            <div class="row flex-column mt-lg-4 mt-3">
                                <div class="abt-grid">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-ravelry"></span>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <!-- <h4>sanctus takimata </h4> -->
                                                <p>In the earlier days the Christian believers of Kallooppara had to depend on the 'Niranam Church' for the holy mass, funeral ceremonies and other religious rites. The journey on Vallom (small boat) through the Manimala and Pampa rivers was tedious, tiresome and risky.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="abt-grid mt-4 pt-lg-2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <!-- <div class="abt-icon" data-blast="bgColor">
                                                <span class="fa fa-laptop"></span>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                                <!-- <h4>takimata sanctus</h4> -->
                                                <p>The much renowned Edappally Kings were ruling at that time and they used to spend their time in the famous and explicably beautiful Elangalloor Maddom, rich in its architectural antiquity, that once existed on the north side of the river Manimala, can still be seen now in Angadikadavu of Puramattam panchayat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-md" href ="new_church_history.html">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about boottom -->
    <!-- stats -->
      <!-- <h3  class="churchTitle" style="padding-bottom: 31px;text-align: center !important;">Summary 2019-2020 
                 </h3>   -->
   
    <!-- //stats -->
    <!-- services -->
    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="churchTitle">Church Services</h3>
                <!-- <p>helping animals & working on environmental issues.</p> -->
            </div>
            <div class="w3lspvt-about-row row  text-center pt-md-0 pt-5 mt-lg-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-book" style="background-color: lemonchiffon;"> </span>
                            <!-- <span img src="images/Church1 (12).jpg"></span> -->

                            <!-- <span  class="fa">
                                <img  src="images/fr_cherian_george_small.jpg"></img>
                              </span> -->
                        <!-- </span> -->

                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Educational Help</h4>
                        <p>Education is another area where a lot of deserving candidate miss out because of the lack of money. We are providing both financial and material helps to the students.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-home" style="background-color:lemonchiffon"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Help For Homeless
                            </h4>
                        <p>we are on a mission to provide shelter for at least all the members of our church. So every year we do provide financial support to one or two of the most deserving people to have a shelter of their own</p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-plus-square" style="background-color:lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Medical Help
                            </h4>
                        <p>The expenses of treatment and medicines are going up every day and it is hard for many of us to afford such expenses. So the church has kept apart a fixed sum every year to provide support to the needed for medical expenses.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-md" href="new_service.html">View All</a>
        </div>
        
    </div>
    

    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="churchTitle">Church Events</h3>
                <!-- <p>helping animals & working on environmental issues.</p> -->
            </div>

            <div class="w3lspvt-about-row border-top row text-center pt-md-0 pt-5 mt-md-0 mt-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-heart" style="background-color: lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">CHURCH FEAST
                            </h4>
                        <p>The annual church feast (Perunal) of the patron saint, St. Mary is being celebrated on 13th, 14th and 15th January of every year. Celebrations start a week prior to the Perunal with the hosting of the flag ( Kodi Uyarthal) done by the Vicar in the presence of thousands of devotees.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-handshake-o" style="background-color: lemonchiffon;">
                        </span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">ABHAYAM PRAYER</h4>
                        <p>Due to the never ending flow of pilgrims and request made by many to have an opportunity to participate in mass prayers, the church authorities have decided to organize a mass prayer named <b>Abhayam</b> on the first Wednesday of every month</p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-users" style="background-color:lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">CONVENTIONS</h4>
                        <p>
                                Kallooppara convention is one of the biggest conventions of Malanakara Sabha which is being conducted on the Koithottu sand banks of river Manimala. The vicar of our church is the president of the convention.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-md" href="new_event.html">View All</a>
        </div>
        
    </div>


    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="churchTitle">Church News</h3>
                <!-- <p>helping animals & working on environmental issues.</p> -->
            </div>

            <div class="w3lspvt-about-row border-top row text-center pt-md-0 pt-5 mt-md-0 mt-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-trophy" style="background-color:lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Marian Puraskaram
                            </h4>
                        <p>'MARIAN PURESKARAM', a sign of recognition and appreciation of st mary's orthodox valliya pally, kallooppara to organisations,which carry out exemplary social services and philanthropic endeavours. It is awarded in connection with the feast of the ascension of st mary. the award is of rs 50001 and the certificate of appreciation</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-handshake-o" style="background-color:lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Diocese Choir Meeting</h4>
                        <p>St. Mary's Orthodox Church is situated at the heart of a small village called Kallooppara, Pathanamthitta District, Kerala, India. It is one of the oldest and renowned churches in Kerala and a priced possession of Malankara Sabha.St. Mary's Orthodox Church is situated at the heart of a small village called Kallooppara, Pathanamthitta District, Kerala, India.</p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-heart" style="background-color:lemonchiffon;"></span>
                        <h4 class="mt-2 mb-3" style="color: rgb(104, 0, 52);">Abhayam Prardhana Sanghamam
                            </h4>
                        <p>'ABHAYAM' is the prayer gahering,held on the first wednesday of every month. it commences at 10:30 am with songs and hymns by the parish choir. Believers from different walks of life participate in this meeting and return with a very blessed experience. </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-md" href="new_news.html">View All</a>
        </div>
        
    </div>
    <!-- //services -->
    <!-- slide -->
    <div class="abt_bottom py-lg-5 bg-theme" style="background-color: rgb(104, 0, 52);">
        <div class="container py-sm-4 py-3">
            <h4 style="color: ivory" class="abt-text text-capitalize text-sm-center">Philippians 4:19. “And my God will meet all your needs according to his glorious riches in Christ Jesus.”</h4>
            <div class="d-sm-flex justify-content-center">
                <a class="btn light-bg mt-4 ml-sm-3 w3_pvt-link-bnr" href="new_contact_us.php" role="button">contact
                    us
                </a>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="btn light-bg mt-4 ml-sm-3 w3_pvt-link-bnr">
                    make a contribution</a>
            </div>
        </div>
    </div>
    <!-- //slide -->
    <!-- pricing plans -->

    <section class="py-lg-5 py-4" id="plans">F
        <div class="container py-md-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="churchTitle">UPCOMING PRAYERS</h3>
                <!-- <p>helping animals & working on environmental issues.</p> -->
            </div>
            <div class="row price-row">
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box" style="border: 5px solid rgb(104, 0, 52);">
                        <div class="title">
                            <!-- <span class="fa fa-gg" style="color: rgb(104, 0, 52);"></span> -->
                            <h5 style="color: rgb(104, 0, 52);">15 Noyamb</h5>
                        </div>
                        <div class="price">
                            <h6>DATE - <sup></sup><span class="font-weight-bold">15-08-2023</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>TIME : 6:45 AM</li>
                                <li>SPEECH : His Grace Youhanon Mar Chrysostomos</li>
                                 <li>View Live</li>
                            </ul>
                        </div>
                        <button type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#pollModal" style="background-color: rgb(104, 0, 52);">
                            I AM ATTENDING
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 column mb-lg-0 mb-4">
                    <div class="box"style="border: 5px solid rgb(104, 0, 52);">
                        <div class="title">
                            <!-- <span class="fa fa-money" style="color: rgb(104, 0, 52);"></span> -->
                            <h5 style="color: rgb(104, 0, 52);">8 Noyamb</h5>
                        </div>
                        <div class="price">
                            <h6>DATE- <sup></sup><span class="font-weight-bold">01-08-2023</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>Time:7:30 </li>
                                <li>Speech : FR.M O JOHN</li>
                                <!-- <li>20 Email Address</li> -->
                                <li>View Live </li>
                            </ul>
                        </div>
                        <button style="background-color: rgb(104, 0, 52);" type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#pollModal" >
                            I AM ATTENDING
                        </button>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6  mx-auto mt-lg-0 mt-4 column">
                    <div class="box" style="border: 5px solid rgb(104, 0, 52);">
                        <div class="title">
                            <!-- <span class="fa fa-gg" style="color: rgb(104, 0, 52);"></span> -->
                            <h5 style="color: rgb(104, 0, 52);">SUNDAY MASS</h5>
                        </div>
                        <div class="price">
                            <h6>DATE-<span class="font-weight-bold">Every Sunday</span></h6>
                        </div>
                        <div class="option">
                            <ul>
                                <li>Time:5AM & 7:30AM</li>
                                <li>SPEECH: FR JOHN MATHEW/FR LIJO</li>
                                <!-- <li>20 Email Address</li> -->
                                <li>View Live</li>
                            </ul>
                        </div>
                        <button style="background-color: rgb(104, 0, 52);" type="button" class="btn w3ls-btn bg-theme  d-block" data-toggle="modal" aria-pressed="false"
                            data-target="#pollModal" >
                           I AM ATTENDING
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //pricing plans -->
    <!-- team -->
    <!-- <section class="team py-4 py-lg-5" id="team">
        <div class="container py-lg-5 py-sm-4">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">our team</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div class="row py-4 mt-lg-5  team-grid">
                <div class="col-lg-4 col-sm-6">
                    <div class="box13">
                        <img src="images/Church1 (12).jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Williamson</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="box13">
                        <img src="images/Church1 (13).jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Kristiana</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-4">
                    <div class="box13">
                        <img src="images/Church1 (14).jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Thomson</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6  mt-4">
                    <div class="box13">
                        <img src="images/Church1 (15).jpg class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">dolor sit</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="box13">
                        <img src="images/Church1 (16).jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">ipsum dolor</h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="box13">
                        <img src="images/Church1 (17).jpg" class="img-fluid img-thumbnail" alt="" />
                        <div class="box-content">
                            <h3 class="title" data-blast="color">Lorem ipsum </h3>
                            <span class="post">role in detail</span>
                            <ul class="social">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //team -->
    <!-- portfolio -->
    <section class="wthree-row w3-gallery cliptop-portfolio-wthree pt-lg-5" id="portfolio">
        <div class="container-fluid">
            <div class="title-desc text-center pb-3">
                <h3 class="churchTitle">GALLERY</h3>
                <!-- <p>create your outstanding clean and high quality website.</p> -->
            </div>
            <ul class="demo row py-lg-5 py-sm-4 pb-4">
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/ch3.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (8).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (17).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/ch2.jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>

                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (25).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (26).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (27).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="new_images/home_gallery/Church1 (31).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>

                <!-- <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (19).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (17).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-4 col-sm-6 mx-auto">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (25).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li> -->
                <!-- <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (21).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (31).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (24).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="images/Church1 (28).jpg" alt=" " class="img-fluid img-thumbnail" />
                    </div>
                </li> -->
            </ul>
        </div>
    </section>
    <!-- //portfolio -->
    <!-- testimonials -->
    <!-- <div class="testimonials py-lg-5 py-4" id="testi">
        <div class="container">
            <div class="title-desc text-center pb-3">
                <h3 class="main-title-w3pvt">Our Volunteer</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide py-lg-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" data-blast="borderColor"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" data-blast="borderColor"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid my-lg-0 my-4">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Aliquyam</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Takimata</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid my-lg-0 my-4">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Takimata</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonials_grid">
                                    <div class="testi-text text-center">
                                        <p><span class="fa fa-quote-left"></span>Stet clita kasd gubergren, no sea
                                            takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right"></span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="testi-desc">
                                            <span class="fa fa-user" data-blast="color"></span>
                                            <h5>Sanctus</h5>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
    <!-- //testimonials -->
    <!-- blog -->
    <section class="blog_w3ls pb-lg-5 pb-4" id="posts">
        <div class="container py-sm-5 py-4">
            <div class="title-desc text-center pb-sm-3 mb-lg-5">
                <h3 class="churchTitle">BISHOP & VICARS</h3>
                <!-- <p>Helping animals & working on environmental issues.</p> -->
            </div>
            <div class="row mt-4">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                role="button">
                                <img class="card-img-bottom" src="new_images/home_bishop&Vicar/bishop.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" style="background-color: rgb(104, 0, 52);"></span>

                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                    role="button">His Grace Youhanon Mar Chrysostomos</a>
                            </h5>
                            <!-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p> -->
                            <!-- <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>08.10.2018</label> -->
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                role="button">
                                <img class="card-img-bottom" src="new_images/home_bishop&Vicar/vicar1.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" style="background-color: rgb(104, 0, 52);"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                    role="button">Rev. Fr. BINO JOHN</a>
                                    <br>
                            </h5>
                            <!-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p> -->
                            <!-- <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>02.11.2018</label> -->
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mx-auto">
                    <div class="card">
                        <div class="card-header p-0  position-relative">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                role="button">
                                <img class="card-img-bottom" src="new_images/home_bishop&Vicar/vicar2.jpg" alt="Card image cap">
                                <span class="fa fa-user post-icon bg-theme" aria-hidden="true" style="background-color: rgb(104, 0, 52);"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                    role="button">Rev. Fr. DIPU V JACOB</a>
                                    <br>
                            </h5>
                            <!-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                ametLorem ipsum dolor sit amet,sed diam nonumy.</p> -->
                            <!-- <label class="mt-2"> <span class="fa fa-calendar mr-3"></span>10.11.2018</label> -->
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal4">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- slide -->
    <!-- <div class="abt_bottom py-lg-5 bg-theme" data-blast="bgColor">
        <div class="container py-sm-4 py-3">
            <h4 class="abt-text text-capitalize text-sm-center mb-0">Join the Mission to help World</h4>
            <p class="text-white text-sm-center ">We Move The World To Protect Animals</p>
            <div class="d-sm-flex justify-content-center">
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal" class="btn light-bg mt-sm-4 mt-3 ml-3 w3_pvt-link-bnr">
                    make a contribution</a>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="btn light-bg mt-sm-4 mt-3 ml-3 w3_pvt-link-bnr">
                    become volunteer</a>
            </div>
        </div>
    </div> -->
    <!-- //slide -->
    <!-- contact -->
    <!-- <section class="contact-wthree py-sm-5 py-4" id="contact">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">contact us</h3>
                <p>Helping animals & working on environmental issues.</p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form" data-blast="color">get in touch</h5>
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">info@example1.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">info@example2.com</a>
                                <a href="mailto:example@email.com">info@example3.com</a>
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3" data-blast="color"></span>
                            <div class="d-flex flex-column">
                                <p>+456 123 7890</p>
                                <p class="my-1">+456 123 7890</p>
                                <p>+856 123 7890</p>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3" data-blast="color"></span>
                            <address>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</address>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <h5 class="cont-form" data-blast="color">contact form</h5>
                    <div class="contact-form-wthreelayouts">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="Johnson" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-white w-100 font-weight-bold text-uppercase"
                                    data-blast="bgColor">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mx-auto text-center mt-lg-0 mt-4">
                <iframe class="mt-lg-4 contact-form-wthreelayouts" data-blast="borderColor" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197"
                    allowfullscreen></iframe>
                <!-- //footer right -->
            </div>
        </div>

    </section> 
    <!-- //contact -->
    <!-- footer -->
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
    <!-- //footer -->
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div 
                >
                    <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-sm-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name=" name" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col-sm-6 sub-w3_pvt">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col-sm-6 forgot-w3l text-sm-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do modal-footer1">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="font-weight-bold"
                                data-blast="color">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">You Have to Register for Contribution</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-sm-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name=" name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="" name="Email" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="" name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="" name="Confirm Password" id="password2"
                                required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3_pvt">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3">
                              <a style="color:black" href="#">      <span>I Accept to the Terms & Conditions</span></a></label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // register -->
    <!-- blog modal1 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel2">His Grace Youhanon Mar Chrysostomos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                   <img src="new_images/home_bishop&Vicar/bishop.jpg" class="img-fluid" alt="" /> 
                    <p class="text-left my-4">
                            His Grace Youhanon Mar Chrysostomos was born in 1954 to Mr KV Yohannan and Mrs Aleyamma Yohannan, Mannil Puthen Purayil, Kottoor, Thiruvalla. He had his early education in local schools at Kottoor, and college education at SB College, Chenganachery. After his BSc from the University of Kerala, he joined Orthodox Theological Seminary, Kottayam, and took his GST and BD from Serampore University. He did his MTH from United Theological College, Bangalore, and PhD from The San Francisco Theological Seminary.
                    </p>
                    <p class="text-left my-4">
                            Metropolitan Geevarghese Mar Osthathios ordained him as a deacon on 19 April 1982, and got his priesthood from HH Baselios Marthoma Mathews II on 5 June 1982. On 28 January 1998, H.H. Baselios Marthoma Mathews II made him a Ramban at Parumala Seminary. He was the Secretary of the Karunagiri MGD Ashram and Balabhavan. He has held the post of Principal, St Paul�s Mission Training Center, Mavelikkara, visiting faculty of St Thomas Orthodox Theological Seminary, Nagpur, coordinator of Malankara Orthodox Mission Board, St Thomas Karunya Guidance Center, Ulloor, Trivandrum, Karunya Vishranthi Bhavan Kattela, Trivandrum, Marriage Assistance Foundation (MAF), Sick Aid Foundation (SAF), Member of Malankara Association Managing Committee, Council Member of Parumala Seminary, Member of Catholic-Orthodox Dialogue Commission and many other posts of distinction. Besides being a scholar, exceptionally good organizer, preacher at conventions, he has participated in and given leadership to many meetings and also to many conferences.
                    </p>
                    <p class="text-left my-4">
                            He was elevated to the post of Metropolitan on 5 March 2005 by HH Baselios Mathews II along with His Grace Mar Gregorios, His Grace Mar Theophilos, and His Grace Mar Dionysius at Parumala Seminary. He took the mantle of Niranam Diocese from His Grace Geevarghese Mar Osthathios in 2007.
                    </p>
                </div>
            </div>
        </div>
       
    </div>

    <div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel3">15 NOYAMB PROGRAM - 01-08-2023</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="new_images/15Noyamb/01-tuesday.jpeg" class="img-fluid" alt="" />
                    <!-- <p class="text-left my-4">
                            Date of birth : <br>

                            Family Details : . <br>
                            
                            Home Parish : <br>
                            
                            <!-- Qualification : <br> -->
                            
                            Seminary : <br>
                            
                            Date of Ordination : <br>
                            
                            <!-- Personal Details :  -->
                            
                            <!-- Contact Details : Mob - +91 . <br> -->
                    <!-- </p> --> -->
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal1 -->
    <!-- blog modal2 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel3">FR.BINO JOHN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="new_images/home_bishop&Vicar/vicar1.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                            <!-- Date of birth : <br> -->

                            <!-- Family Details : . <br> -->
                            
                            Home Parish : <br>
                            
                            <!-- Qualification : <br> -->
                            
                            Seminary : <br>
                            
                            Date of Ordination : <br>
                            
                            <!-- Personal Details :  -->
                            
                            Contact Details : Mob - +91 9947398661 <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="pollModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme">
                <p style="background-color: rgb(104, 0, 52); color: ivory">Thank You for your Poll</p>
                <!-- <h5 class="modal-title" id="exampleModalLabel3">FR.KOSHY PHILIP</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                    <P style="color: rgb(104, 0, 52);font-style: bold">WARM WELCOME TO THE FUNCTION</p>
                    <p>  THERE ARE MORE THAN 1000 PEOPLE ATTENDING ALONG WITH YOU</p>
                 <!-- <img src="images/fr_koshy_philip.jpg" class="img-fluid" alt="" />
                <p class="text-left my-4">
                        Date of birth : 

                        Family Details : Kalathil. 
                        
                        Home Parish : 
                        
                        Qualification : 
                        
                        Seminary : 
                        
                        Date of Ordination : 
                        
                        Personal Details : 
                        
                        Contact Details : Mob - +91 9447102564. 
                </p>  -->
            </div>
        </div>
    </div>
</div>

    <!-- //blog modal2 -->
    <!-- blog modal3 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme">
                    <h5 class="modal-title" id="exampleModalLabel4">Fr DIPU V JACOB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="new_images/home_bishop&Vicar/vicar2.jpg" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                            Date of birth : <br>

                            Family Details :  <br>
                            
                            Home Parish :<br>
                            
                            <!-- Qualification :  -->
                            
                         Seminary : <br>
                            
                            Date of Ordination : <br>
                            
                            <!-- Personal Details :  -->
                            
                            Contact Details : Mob - +91 9656967106 <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal3-->
        <!-- blog modal3 -->
         
            <!-- Modal -->

          
                  
               

                <div class="modal fade" id="xmasmodal2" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content modal-full" style="border: 0px solid #f8f9fa;background-color: rgba(0, 0, 0, 0.075);">
                            <div class="modal-header" style="border-bottom: none;
                            padding: 15px 15px 0 15px;
                            background-image: url(new_images/Xmas/xmas.jpeg);
                            height: 717px;
                            background-size: cover;
                            background-repeat: no-repeat;">
                              </div>
                              <!-- <div style="background-color:#e30b0b;" >
<p><marquee><b>CHRISTMAS EVENT : AN IMMERSIVE LIVE BIBLICAL DRAMA COMPRISES 200 PERFORMERS, A 50-MEMBERED CHOIR, AND MESMERIZING PROFESSIONAL DANCE PERFORMANCE. THIS EVENT SERVES AS A SEQUEL TO THE SPECTACULAR SHOW HELD IN DECEMBER 2017, TITLED "A JOURNEY TO BETHLEHEM."</b> </marquee></p>
</div> -->
                              <div class="modal-footer">
                              <a class="btn btn-primary btn-md" href ="new_news.html">Read More</a>

                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                        
                      </div>
    </div>
    <div class="visitor-count">
   <?php include "counter.php"; ?>
</div>
    <!-- js -->
    <script src="new_js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        // window.onload = function () {
        //     document.getElementById("password1").onchange = validatePassword;
        //     document.getElementById("password2").onchange = validatePassword;
        // }

        // function validatePassword() {
        //     var pass2 = document.getElementById("password2").value;
        //     var pass1 = document.getElementById("password1").value;
        //     if (pass1 != pass2)
        //         document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        //     else
        //         document.getElementById("password2").setCustomValidity('');
        //     //empty string means no validation error
        // }
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

        $(window).load(function()
{
//     $('#xmasmodal2').modal('show');
// });
    </script>
    <script src="new_js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="new_js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="new_js/bootstrap.js"></script>
    <!-- <script type="text/javascript">
            $(window).load(function(){ // on window finish load
        $('#xmasmodal2').css("display", "none"); // turn off the popup
    });
</script> -->
</body>

</html>