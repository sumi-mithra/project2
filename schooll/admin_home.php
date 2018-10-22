<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["aid"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<mete name="viewport" content="width=device-width,initial-scale=1">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<?php include"navbar.php";?><br />
	<img src="img/b4.jpg" width="1199" height="368"class="sha" style="margin-left:90px" />
		<div id="section">
			<?php include"sidebar.php";?><br />
			<div class="content">
			<center>
			<h1 class="text">Welcome <?php echo $_SESSION["aname"];?></h1><br /><hr /><br /></center>
			<img src="img/home.jpg" class="imgs" />
			
		  </div>
		</div>
		
	<?php include"footer.php";?>
</body>
</html>
