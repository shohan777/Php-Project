<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diamond Global LTD.</title>
<link rel="stylesheet" type="text/css" href="css_sub.css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #C8E650;
}
#main_body_content{
	background:url(images/body_conten.png) repeat-y;
	height:400px;
	width:750px;
	border:solid 1px #FECF70;
	border-radius: 5px;
	float:right;
	margin-right:12px;
	margin-top:10px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
}
#main_body_content p{
	text-align:justify;
	margin: 15px 15px 15px 260px;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:20px;
}
#heading{
	height:38px;
	width:500px;
	margin-top:10px;
	font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	font-size:24px;
	color:#F60;
	background: url(images/heading_bg.png) repeat-y;
}
</style>
<script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type="text/javascript">
google.load("mootools", "1.2.1");
</script>
<script type='text/javascript' src='js/MenuMatic_0.68.3.js'></script>
<link type='text/css' href='css/MenuMatic.css' rel='stylesheet'/>
<style type="text/css">
/* ----[ LINKS ]----*/
a:link{ 
	color: #cf7f18; 
	font-weight: normal; 
	font-family: Tahoma, Geneva, sans-serif;
	font-size: inherit; 
 }

a:visited{ 
	color: #cf7f18; 
	font-weight: normal; 
	font-family: Tahoma, Geneva, sans-serif;
	font-size: inherit; 	
}

/* all menu links */
#nav a, #subMenusContainer a{
	text-decoration:none;
	display:block;
	padding: 10px 20px;
	background-color:#ffffff ;
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	border-radius: 7px;
	border: 0px solid #000000; 
}

/* Just main menu links --[for non-javascript users this applies to submenu links as well]*/
#nav a{
	margin:0;
	float:left;	
}

/* Just sub menu links */
#subMenusContainer a, #nav li li a{
	text-align:left;
}

/* All menu links on hover or focus */
#nav a:hover, #nav a:focus, #subMenusContainer a:hover, #subMenusContainer a:focus, #nav a.mainMenuParentBtnFocused, #subMenusContainer a.subMenuParentBtnFocused{
	background-color: #f6c739; 
	color: #ffffff; 
}

/* sub menu links on hover or focus */
#subMenusContainer a:hover, 
#subMenusContainer a:focus, 
#nav a.mainMenuParentBtnFocused, 
#subMenusContainer a.subMenuParentBtnFocused,
#nav li a:hover,
#nav li a:focus{
	background-color: #f6c739; 
	color: #ffffff; 
}

/* ----[ OLs ULs, LIs, and DIVs ]----*/

/* All ULs and OLs */
#nav, #nav ul, #nav ol, #subMenusContainer ul, #subMenusContainer ol { 
	padding: 0;
	margin: 0;
	list-style: none;
	line-height: 1em;
}

/* All submenu OLs and ULs */
#nav ol, #nav ul, #subMenusContainer ul, #subMenusContainer ol {	
	/*border around submenu goes here*/	 
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	background:#fff;	
	border:1px solid #C3D46A;
	left:0;
}

/* List items in main menu --[for non-javascript users this applies to submenus as well]  */
#nav li { 
	/*great place to use a background image as a divider*/
	display:block;
	list-style:none;
	position:relative;
	float:left;
}
 
#subMenusContainer li{
	list-style: none;
}

/* main menu ul or ol elment */
#nav{
	display:block;
	position: absolute;
	list-style:none;
    margin-top:115px;
	margin-left:2px;
	z-index:5;
	top:15px;
	display:block;
}

#subMenusContainer{	display:block; 	position:absolute;	top:0;	left:0;	width:100%;	height:0;	overflow:visible;	z-index:1000000000; }


/* --------------------------[ The below is just for non-javscript users ]--------------------------*/
#nav li li{	float:none; }

#nav li li a{ /* Just submenu links*/	
	position:relative;
	float:none;
}

#nav li ul { /* second-level lists */


	position: absolute;
	width: 10em;
	margin-left: -1000em; /* using left instead of display to hide menus because display: none isn't read by screen readers */
	margin-top:2.2em;
}

/* third-and-above-level lists */
#nav li ul ul { margin: -1em 0 0 -1000em; }
#nav li:hover ul ul {	margin-left: -1000em; }

 /* lists nested under hovered list items */
#nav li:hover ul{	margin-left: 0; }
#nav li li:hover ul {	margin-left: 10em; margin-top:-2.5em;}

/* extra positioning rules for limited noscript keyboard accessibility */
#nav li a:focus + ul {  margin-left: 0; margin-top:2.2em; }
#nav li li a:focus + ul { left:0; margin-left: 1010em; margin-top:-2.2em;}
#nav li li a:focus {left:0;  margin-left:1000em; width:10em;  margin-top:0;}
#nav li li li a:focus {left:0; margin-left: 2010em; width: 10em;  margin-top:-1em;}
#nav li:hover a:focus{ margin-left: 0; }
#nav li li:hover a:focus + ul { margin-left: 10em; }
/*SLIDE SHOW START BELLOW*/
</style>


</head>
     
<body>
<div id="main" align="center">


<?php

    include ("include/header.php");
    
?>


<div id="body">

<?php
if($_SESSION['user_ok'] == 'true')
{
?>
<div id="mainmenu">

<ul id="nav">

			<li><a href="index.php">Home</a></li>
		
			<li><a href="about-us.php">About us</a>
				<ul>
					<li><a href="about-us.php">Overview</a></li>
					<li><a href="our_goal.php">Our goal</a></li>
					<li><a href="contuct_us.php">Contuct us</a></li>
			    </ul>
			</li>
		
			<li><a href="#">Our services</a>
				<ul>
					<li><a href="office_basic.php">Computer courses</a>
                         <ul>
                               <li><a href="office_basic.php">Beginners package</a>
                                    <ul>
                                         <li><a href="office_basic.php">Office program</a></li>
                                         <li><a href="hardware_troubleshooting.php">Hardware and Maintenance</a></li>
                                    </ul>
                               </li>
                               <li><a href="website_development.php">Professional package</a>
                                    <ul>
                                         <li><a href="website_development.php">Website development</a></li>
                                         <li><a href="software_development.php">Software development</a></li>
                                         <li><a href="graphics_design.php">Graphics designing</a></li>
                                    </ul>
                               </li>
                               <li><a href="online_outsourcing.php">Online outsourcing</a></li>
                              
                         </ul>
                    </li>
					<li><a href="health_service.php">Health service</a></li>
					<li><a href="online_service.php">Online service</a></li>
                    <li><a href="member.php">Member account</a></li>
					

				</ul>
			</li>
			
			<li><a href="software_marketing.php">Career opportunity</a>
				<ul>
                     <li><a href="software_marketing.php">Software marketing</a></li>
                     <li><a href="website_marketing.php">Website marketing</a></li>
                     <li><a href="product_marketing.php">Product marketing</a></li>
                </ul>
                
			</li>
		
		<li><a href="log_in.php">log out</a>
        <script type="text/javascript">
window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({
				id:"nav",
				effect: "slide & fade",
				duration: "600",
				hideDelay: "300",
				matchWidthMode: "false",
				orientation: "horizontal",
				direction:{	x: 'right',	y: 'down' },
				opacity: 95
			});
		});
</script>


</div>

<?php
}
else
{
?>
<div id="mainmenu">

<ul id="nav">

			<li><a href="index.php">Home</a></li>
		
			<li><a href="about-us.php">About us</a>
				<ul>
					<li><a href="about-us.php">Overview</a></li>
					<li><a href="our_goal.php">Our goal</a></li>
					<li><a href="contuct_us.php">Contuct us</a></li>
			    </ul>
			</li>
		
			<li><a href="#">Our services</a>
				<ul>
					<li><a href="office_basic.php">Computer courses</a>
                         <ul>
                               <li><a href="office_basic.php">Beginners package</a>
                                    <ul>
                                         <li><a href="office_basic.php">Office program</a></li>
                                         <li><a href="hardware_troubleshooting.php">Hardware and Maintenance</a></li>
                                    </ul>
                               </li>
                               <li><a href="website_development.php">Professional package</a>
                                    <ul>
                                         <li><a href="website_development.php">Website development</a></li>
                                         <li><a href="software_development.php">Software development</a></li>
                                         <li><a href="graphics_design.php">Graphics designing</a></li>
                                    </ul>
                               </li>
                               <li><a href="online_outsourcing.php">Online outsourcing</a></li>
                              
                         </ul>
                    </li>
					<li><a href="health_service.php">Health service</a></li>
					<li><a href="online_service.php">Online service</a></li>
                    
					

				</ul>
			</li>
			
			<li><a href="software_marketing.php">Career opportunity</a>
				<ul>
                     <li><a href="software_marketing.php">Software marketing</a></li>
                     <li><a href="website_marketing.php">Website marketing</a></li>
                     <li><a href="product_marketing.php">Product marketing</a></li>
                </ul>
                
			</li>
		<li><a href="log_in.php">log in</a>
        <script type="text/javascript">
window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({
				id:"nav",
				effect: "slide & fade",
				duration: "600",
				hideDelay: "300",
				matchWidthMode: "false",
				orientation: "horizontal",
				direction:{	x: 'right',	y: 'down' },
				opacity: 95
			});
		});
</script>


</div>
<?php
}
?>
<div id="side_bar">
<div id="side_title_aboutus">
<div class="txt_title"><b>About us</b></div>
</div>

<div id="overview"><div class="text">Overview</div></div>
<div id="our_goal"><div class="text">Our goal</div></div>
<div id="contact_us"><div class="text">Contact us</div></div>

<div id="side_title_our_services">
<div class="txt_title"><b>Our services</b></div>
</div>

<div id="health_service"><div class="text">Health service</div></div>
<div id="online_service"><div class="text">Online service</div></div>

<div id="side_title_career">
<div class="txt_title"><b>Career opportunity</b></div>
</div>

<div id="software_m"><div class="text">Software marketing</div></div>
<div id="website_m"><div class="text">Website marketing</div></div>
<div id="product_m"><div class="text">Product marketing</div></div>

<div id="side_title_computer_course">
<div class="txt_title"><b>Computer education</b></div>
</div>

<div id="office"><div class="text">Office program</div></div>
<div id="hardware"><div class="text">Hardware and maintanance</div></div>
<div id="software"><div class="text">Software development</div></div>
<div id="website"><div class="text">Website development</div></div>
<div id="graphics"><div class="text">Graphics designing</div></div>
<div id="outsourcing"><div class="text">Online outsourcing</div></div>
</div>
<div id="main_body_content">

<div id="heading"><b >Software Development</b></div><br />
<p align="center">

1. Computer Basic. <br />
2. Introduction to Computer Programming.<br />
3. Programming Language Basic.<br />
4. Introduction to C/C++.<br />
5. Advance C/C++ Tecnique.<br />
6. Introduction to C#/VB Programming Language.<br />
7. Advance C#/VB Programming Tecnique with OOP concept.<br />
8. Introduction to Database.<br />
9. Basic of RDBMS.<br />
10.Introduction to SQL SERVER Database.<br />
11.Working with C#/VB Programming and SQL SERVER Database.<br />
12. Real life Software Development Project (Complete project). <br />
13. Internet basic.
</p><br /><br /><br />
<b style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">Other courses:</b><br /><br />
<a href="#">Hardware and Troubleshooting</a> | 
<a href="#">Graphics Design</a> | 
<a href="#">Website Development</a> | 
<a href="#">Office Program</a> | 
<a href="#">Online Outsourcing</a>
</div>
</div>

<?php    
        include ("include/footer.php");

?>

</div>

</body>
</html>
