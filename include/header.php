<?php ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Multi Level Hierarchical jQuery Menu: jQSimpleMenu</title>
    <script type="text/javascript" src="../include/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="../include/js/jqsimplemenu.js"></script>
    <link rel="stylesheet" href="../include/css/jqsimplemenu.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../include/css/rgit-styles.css" type="text/css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function () {
            $('.rgit_menu').jqsimplemenu();
        });
    </script>
    <style type="text/css">
        body
        {
            font-size: 12px;
            font-family: Arial;
        }
    </style>
</head>

<body>

<div class="pageContent">
	<div class="headerContent"> 
		<div class="logoTitle">
			<div class="logoSection">
				<img src="../include/images/rgm_logo.jpg" border="0"/>
			</div>
			<div class="titleSection">
				<p class="collegeName">Rajeev Gandhi Memorial College of Engineering & Technology</p>
				<p class="collegeCredits">Autonomous <br> Affilicated to JNTU(A)</p>
			</div>
		
		</div>
		<div class="clearfix"></div>
		<div class="menuSection">
			<ul class="rgit_menu">
				<li><a href="../home1.php">Home</a></li>
				<li><a href="#">Departments </a>
					<ul>
						<li><a href="#">ECE</a></li>
						<li><a href="#">EEE</a></li>
						<li><a href="#">EIE</a></li>
						<li><a href="#">CSE</a></li>
						<li><a href="#">IT</a></li>
						<li><a href="#">MECHANICAL</a></li>
						<li><a href="#">CIVIL</a></li>
					</ul>
				</li>
				<li><a href="#">TRAINING AND PLACEMENT</a></li>
				<li><a href="../staticpages/library.php">LIBRARY</a></li>
				<li><a href="../staticpages/achievements.php">ACHIEVEMENTS</a></li>
				<li><a href="../staticpages/gallery.php">Gallery</a></li>
				<li><a href="../staticpages/hostel.php">HOSTEL</a></li>
				<li><a href="../staticpages/sports.php">SPORTS</a></li>
				<li><a href="../staticpages/aboutus.php">ABOUT US</a></li>
				<li><a href="../staticpages/contactus.php">CONTACT</a></li>
<?php				
if(isset($_SESSION['user']))
				echo "<li><a href='http://localhost/college-management/logout.php'>Logout</a></li>";
else				
				echo "<li><a href='../login.php'>Login</a></li>";
?>				
			</ul>		
		</div>
	
	</div>
</div>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
&nbsp;
</div>