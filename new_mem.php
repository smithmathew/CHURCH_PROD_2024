<?php	
$wardNameCmb=1;
  $ward= $_REQUEST['wardNameCmb'];
  $readMe = "no";

  if($ward == "")
	$ward="1";

	if($ward == "1")
		$wardName = "KALLOORKARA";
	elseif($ward == "2")
		$wardName = "CHACKOMBHAGAM EAST"; 
	elseif($ward == "3")
		$wardName = "CHACKOMBHAGAM SOUTH";  
	elseif($ward == "4")
		$wardName = "CHACKOMBHAGAM WEST";  
	elseif($ward == "5")
		$wardName = "MARKET";  
	elseif($ward == "6")
		$wardName = "VALLONTHRA";  
	elseif($ward == "7")
		$wardName = "YAKSHIMANNATHU BHAGAM";  
	elseif($ward == "8")
		$wardName = "AZHAKANAPPARA"; 
	elseif($ward == "9")
		$wardName = "MUTTATHUKONAM";  
	elseif($ward == "10")
		$wardName = "KADAMANKULAM";
	else if($ward == "11")
		$wardName = "AIKKARA BHAGAM";
	elseif($ward == "12")
		$wardName = "PUTHUSSERY";
	elseif($ward == "13")
		$wardName = "MADATHUMBHAGAM SOUTH";  
	elseif($ward == "14")
		$wardName = "MADATHUMBHAGAM WEST";  
	elseif($ward == "15")
		$wardName = "MADATHUMBHAGAM EAST";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <style>
.navbar-toggler{
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}





.btn:focus, .btn:active, button:focus, button:active {
    outline: none !important;
    box-shadow: none !important;
}
.navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none;
}

button, html [type="button"], [type="reset"], [type="submit"] {
    -webkit-appearance: button;
}

button, input, select, textarea {
    font-family: inherit;
    /* font-size: inherit; */
    /* line-height: inherit; */
    text-transform: none;
}
.navbar {
    
    
    display: flex;
    
    flex-wrap: wrap;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    /* padding: 0.5rem 1rem; */
    /* position: relative; */
    /* min-height: 50px; */
    /* margin-bottom: 20px; */
    /* border: 1px solid transparent; */
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.body
{
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}
.navbar-light .navbar-toggler-icon {
    background-image: url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://ww…p='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E);
}


 </style>
        <title>Kallooppara Pally</title>
        <link rel = "icon" href =  
    "new_images/title/title.png" 
            type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Kallooppara Church, Kallooppara Pally,Kallooppara, st mary's orthodox church, mary's, Abayam, prayer, Christmas" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
 <!-- <link href="new_css/bootstrap.css" type="text/css" rel="stylesheet" media="all">  -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">  

<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
 <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.js"></script><link href="//cdn.datatables.net/responsive/2.1.1/css/dataTables.responsive.css"/>
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
<!-- <link href="css/pagination.css" rel="stylesheet"> -->

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->



<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>


<SCRIPT LANGUAGE="JavaScript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
function GotoWard()
{	
	//document.frm.ward.value = document.frm.wardName.value;
	document.frm.action="new_mem.php";
	document.frm.submit();
}
</script>

</head>
<body TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">



<!-- <script type="text/javascript" src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script> -->
<!-- <script type="text/javascript" src="css/JQueryPagination"></script> -->
<script type="text/javascript">
// $(document).ready(function() {
// $('#pagination-demo').twbsPagination({
// totalPages: 5,
// // the current page that show on start
// startPage: 1,

// // maximum visible pages
// visiblePages: 5,

// initiateStartPageClick: true,

// // template for pagination links
// href: false,

// // variable name in href template for page number
// hrefVariable: '{{number}}',

// // Text labels
// first: 'First',
// prev: 'Previous',
// next: 'Next',
// last: 'Last',

// // carousel-style pagination
// loop: false,

// // callback function
// onPageClick: function (event, page) {
//    $('.page-active').removeClass('page-active');
//   $('#page'+page).addClass('page-active');
// },

// // pagination Classes
// paginationClass: 'pagination',
// nextClass: 'next',
// prevClass: 'prev',
// lastClass: 'last',
// firstClass: 'first',
// pageClass: 'page',
// activeClass: 'active',
// disabledClass: 'disabled'

// });

// });
</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
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
                    <input type="color" name="blastCustomColor" value="#d3b800">
    
                </div> -->
                <!-- <div class="blast-icon"><span class="fa fa-paint-brush" aria-hidden="true"></span></div> -->
            </div>
            <header>                <nav style="background-color:black" class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-lg navbar-light navbar-fixed-top">                    <h1>                        <!-- <a class="navbar-brand" href="index.html" data-blast="color">                            Creature                        </a> -->                    </h1>                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">                        <span class="navbar-toggler-icon"></span>                    </button>                    <div class="collapse navbar-collapse" id="navbarSupportedContent">                        <ul class="navbar-nav mx-lg-auto text-center">                            <li class="nav-item active">                                <a class="nav-link" href="index.php" data-blast="color">Home                                    <span class="sr-only">(current)</span>                                </a>                            </li>                            <li class="nav-item dropdown mt-lg-0 mt-3">                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"                                    aria-haspopup="true" aria-expanded="false">                                    ABOUT US<span class="caret"></span>                                </a>                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">                                    <a class="nav-link" href="new_about.html">ABOUt CHURCH<H/a>                                    <a class="nav-link" href="new_church_history.html">CHURCH HISTORY</a>                                    <a class="nav-link" href="new_about_kallooppara.html">ABOUT KALLOOPPARA</a>                                    <!-- <a class="dropdown-item scroll nav-link" href="#posts">latest posts</a> -->                                </div>                            </li>                                                        <li class="nav-item dropdown mt-lg-0 mt-3">                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"                                    aria-haspopup="true" aria-expanded="false">                                    CHURCH<span class="caret"></span>                                </a>                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">                                    <a class="nav-link" href="new_vicars_final.html">Vicars</a>                                    <a class="nav-link" href="new_g_bodies.html">Governing Body</a>                                    <a class="nav-link" href="new_bishops.html">Our Bishops</a>                                    <a class="nav-link" href="new_priests.html">Our Priests</a>                                    <!-- <a class="dropdown-item scroll nav-link" href="#posts">Spiritual Leaders</a> -->                                    <a class="nav-link" href="new_personalities.html">Personalities</a>                                    <a class="nav-link" href="new_mem.php">Church Members</a>                                    <a class="nav-link" href="new_child_churches.html">Child Churches</a>                                    <a class="nav-link" href="new_org_final.html">Other Organizations</a>                                </div>                            </li>                            <li class="nav-item mt-lg-0 mt-3">                                <a class="nav-link" href="new_event.html">EVENTS</a>                            </li>                            <li class="nav-item mt-lg-0 mt-3">                                <a class="nav-link" href="new_news.html">NEWS</a>                            </li>                            <li class="nav-item  mt-lg-0 mt-3">                            <a class="nav-link" href="new_corona_news.php">Corona Updates</a>                        </li>                            <li class="nav-item mt-lg-0 mt-3">                                <a class="nav-link" href="new_service.html">SERVICES</a>                            </li>                            <li class="nav-item mt-lg-0 mt-3">                                <a class="nav-link" href="new_portfolio.html">GALLERY</a>                            </li>                            <li class="nav-item  mt-lg-0 mt-3">                                <a class="nav-link" href="new_contact_us.php">Contact US</a>                            </li>                        </ul>                        <!-- <button type="button" class="btn  wthree-link-bnr bg-theme rounded-circle text-center mt-lg-0 mt-3" data-toggle="modal"                            aria-pressed="false" data-target="#exampleModal" data-blast="bgColor"> <span class="fa fa-user text-white"></span>                        </button> -->                    </div>                    </nav>            </header>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<link href="new_css/team.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 style ="text-align: center;margin-top:100px;color:rgb(97, 7, 7)";>CHURCH MEMBERS
    </h1>
    <p style="font-family: 'Lato', sans-serif;margin: 25px">Our church has been the worshiping place for more than 700 
    families and the number of members belonging to the church will come in thousands.
     Members of our church are present all around the globe and their endless support and 
     help has contributed a lot to the betterment and growth of the church. The families 
     belonging to the church are divided into 15 different wards according to their location and to view 
    families belonging to a particular ward select the ward from the selection box to the right.

            </p>
<center>
<form name="frm" action ="" method="post">

    <table>
<tr>					
    
<!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div> -->
														
								<td align="right"><select name="wardNameCmb" onChange="javascript:GotoWard()">
								<option value="1" ><-- Select A Ward --></option>
								<option value="1" >Kalloorkara</option>
								<option value="2" >Chackombhagam East</option>
								<option value="3" >Chackombhagam South</option>
								<option value="4" >Chackombhagam West</option>
								<option value="5" >Market</option>
								<option value="6" >Vallonthra</option>
								<option value="7" >Yakshimannathu Bhagam</option>
								<option value="8" >Azhakanappara</option>
								<option value="9" >Muttathukonam</option>
								<option value="10" >Kadamankulam</option>
								<option value="11" >Aikkara Bhagam</option>
								<option value="12" >Puthussery</option>
								<option value="13" >Madathumbhagam South</option>
								<option value="14" >Madathumbhagam West</option>
								<option value="15" >Madathumbhagam East</option>
                                </select>&nbsp;&nbsp;&nbsp;<span style="background-color: rgb(104, 0, 52);color: white;"><?php echo $wardName; ?> WARD	</span></td>
							</tr></table>
<table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead style="color: white;
    background-color: rgb(104, 0, 52);
}">
            <tr>
                <th>No</th>
                <th>Family Name</th>
                <th>Head of the Family</th>
                <th>Phone No</th>            
            </tr>
        </thead>
        
        <tbody>
        <?php
							$file = fopen("data_files/ward.txt", "r") or exit("Unable to open file!");
							//Output a line of the file until the end is reached
											
							while(!feof($file))
							{					
								$fileLine = fgets($file);
								if(trim($fileLine) == $ward."*"){
									$readMe = "yes";
									$fileLine = fgets($file);
								}else if(trim($fileLine) == ($ward+1)."*"){
									$readMe = "no";						
								}
							
								if($readMe=="yes"){
							?>

            <tr>
            <td><?php echo substr($fileLine,0,strpos($fileLine," ")); ?></td>
			<td><?php echo substr($fileLine,strrpos($fileLine,",")+1,(strrpos($fileLine,".")- (strrpos($fileLine,",")+1))); ?></td>
			<td><?php echo substr($fileLine,strpos($fileLine," ")+1,(strpos($fileLine,",")- (strpos($fileLine," ")+1))); ?></td>									
			<td><?php echo substr($fileLine,strrpos($fileLine,".")+1,strlen($fileLine));  ?></td>
            </tr>
            <?php 
								}				
							}
							fclose($file);
							?> 
        </tbody>
        
    </table>
</form>
</center>


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
                    <p style="color:white">© 2020 St Marys OrthodoxChurch. All rights reserved | Design by
                        Smith | Linu | Sherlin
                        <!-- <a href="http://w3layouts.com"> W3layouts.</a> -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
   
        <!-- </div> -->

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
        </body>
</head>