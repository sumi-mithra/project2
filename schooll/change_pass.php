<?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<?php include"navbar.php";?><br />
	<img src="img/1.jpg" style="margin-left:90px;" class="sha" />
	
	<div id="section">
		<?php include"sidebar.php";?> <br />
		
		<h3 class="text">Welcome <?php echo $_SESSION["aname"]; ?></h3><br /><hr /><br />
		<div class="content1">
			<h3 >Change Password</h3><br />
			
			<?php
				if(isset($_POST["submit"]))
				{
					$sql="select * from admin where apass='{$_POST["opass"]}' and aid='{$_SESSION["aid"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						if($_POST["npass"]==$_POST["cpass"])
						{
							$s="update admin set apass='{$_POST["npass"]}' where aid='{$_SESSION["aid"]}'";
							$db->query($s);
							echo "<div class='success'>Password Changed</div>";
						}
						else
						{
							echo "<div class='error'>Password Mismatch</div>";
						}	
					}
					else
					{
						echo "<div class='error'>Invalid Password</div>";
					}	
				}
			?>
			
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?> ">
				<label>Old Password</label><br />
				<input type="text" name="opass"  class="input3" /><br /><br />
				<label>New Password</label><br />
				<input type="password" name="npass" class="input3" /><br />
				<label>Confirm Password</label><br />
				<input type="password" name="cpass"  class="input3" /><br />
				<button type="submit" class="btn" style="float:left" name="submit">Change Password</button>
			</form>
		</div>
	</div>
			<?php include"footer.php";?>
</body>
</html>
