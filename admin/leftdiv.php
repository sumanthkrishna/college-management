<html>
<script type="text/javascript" src="../include/js/jquery-1.4.4.min.js"></script>
<script language="javascript">
$(document).ready(function () {
  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});
</script>

<style type="text/css">
#nav {
    float: left;
    width: 280px;
    border-top: 1px solid #999;
    border-right: 1px solid #999;
    border-left: 1px solid #999;
}
#nav li a {
    display: block;
    padding: 10px 15px;
    background: #ccc;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #999;
    text-decoration: none;
    color: #000;
}
#nav li a:hover, #nav li a.active {
    background: #999;
    color: #fff;
}
#nav li ul {
    display: none; // used to hide sub-menus
}
#nav li ul li a {
    padding: 10px 25px;
    background: #ececec;
    border-bottom: 1px dotted #ccc;
}
</style>


<body>

<div id="content" style="background-color:#EEEEEE;height:100%;width:25%;float:left;">

<!-- ---------------------- --------------------- ---------------->

<ul id="nav">
  <li><a href="#">Student Details</a>
    <ul>
      <li><a href="../student/add.php">Add Student details</a></li>
      <li><a href="../student/search.php">Update student details</a></li>
    </ul>
  </li>
  <li><a href="#">Staff Details</a>
    <ul>
      <li><a href="../staff/add.php">Add staff details</a></li>
      <li><a href="../staff/search.php">Update staff details</a></li>
    </ul>
  </li>
  <li><a href="#">Subject Details</a>
    <ul>
      <li><a href="../subjects/add.php">Add subject Details</a></li>
      <li><a href="../subjects/search.php">Update subject details</a></li>
    </ul>
  </li>
  <li><a href="#">Course Details</a>
    <ul>
      <li><a href="../course/add.php">Add course deatils</a></li>
      <li><a href="../course/search.php">Update course details</a></li>
    </ul>
  </li>
  <li><a href="#">Department Details</a>
	<ul>
      <li><a href="../department/add.php">Add department details</a></li>
      <li><a href="../department/search.php">Update department details</a></li>
    </ul>
  </li>
  
  <li><a href="#">Subject Staff Linking</a>
	<ul>
		<li><a href="../subjectplusstaff/add.php">Add staff's subject</a></li>
		<li><a href="../subjectplusstaff/search.php">Update staff's subject</a></li>
	</ul>
  </li>
  <li><a href="#">User Management</a>
	<ul>
		<li><a href="../login/add.php">Add user details</a></li>
		<li><a href="../login/search.php">Update user details</a></li>
	</ul>
  </li>
  <li><a href="search.php">Edit Attendance</a></li>
  <li><a href="../results/results.php">Update Results</a></li>
</ul>
</div>
</body>
</html>


