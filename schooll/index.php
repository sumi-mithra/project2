<?php
  include "database.php";
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="back">
	<?php include"navbar.php";?>
	<img src="img/b4.jpg" width="800" />
	
	<div class="login">
		<h1 class="heading">Admin Login</h1>
		<div class="log">
		
		<?php
			if(isset($_POST["login"]))
			{
				$sql="select * from admin where aname='{$_POST["aname"]}' and apass='{$_POST["apass"]}'";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					$ro=$res->fetch_assoc();
					$_SESSION["aid"]=$ro["aid"];
					$_SESSION["aname"]=$ro["aname"];
					echo $_SESSION["aname"];
					echo "<script>window.open('admin_home.php','_self');</script>";
				}
				else
				{
					echo "<div class='error'>Invalid Username or Password</div>";
				}
			}
			if(isset($_GET["mes"]))
			{
				echo "<div class='error'>{$_GET["mes"]}</div>";
			}
		?>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?> ">
				<label>User name</label><br />
				<input type="text" name="aname" required class="input" /><br /><br />
				<label>Password</label><br />
				<input type="password" name="apass" required class="input" /><br />
				<button type="submit" class="btn" name="login">Login Here</button>
			</form>
		</div>
	</div>
	
	<div class="footer">
		<footer><p>Copyright &copy; Mithra</p></footer>
	</div>
	
</body>
</html>
