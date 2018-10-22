<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<div class="sidebar"><br />
<h3 class="text">Dashboard</h3><br /><br /><br />
<ul class="s">

<?php
  # <li class="li"><a href="add_class.php">Class</a></li>
	if(isset($_SESSION["aid"]))
	{
		echo'
	<li class="li"><a href="admin_home.php">About</a></li>
	
	<li class="li"><a href="add_sub.php"> Subject</a></li>
	<li class="li"><a href="enq_stud.php">Enquiry Student</a></li>
	<li class="li"><a href="view_enq_stud.php">view Enquiry Students</a></li>
	<li class="li"><a href="view_reg_stud.php">View Registered Student</a></li>
	<li class="li"><a href="add_staff.php">Staff</a></li>
	<li class="li"><a href="view_staff.php">View Staff</a></li>
	<li class="li"><a href="logout.php">Logout</a></li>

		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="add_estud.php"> Add Student</a></li>
			<li class="li"><a href="view_stud_teach.php"> View Student</a></li>

			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>

</ul>
</div>