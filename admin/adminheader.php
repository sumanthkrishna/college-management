<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Rajeev Gandhi Memorial College of Engineering & Technology - Admin</title>
    <script type="text/javascript" src="../include/js/jquery-1.4.4.min.js"></script>
    <link rel="stylesheet" href="../include/css/rgit-styles.css" type="text/css" media="screen" />
    
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
			<?php				
			if(isset($_SESSION['username']))
							echo "<li><a href='../logout.php'>Logout</a></li>";
			else				
							echo "<li><a href='../login.php'>Login</a></li>";
			?>				
		</div>
	</div>
</div>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
&nbsp;
</div>

<div class="adminPageContent">
	<div class="adminLeftMenu"></div>
	<div class="adminRighSection"></div>

</div>