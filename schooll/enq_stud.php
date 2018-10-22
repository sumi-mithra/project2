<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["aid"]))
	{
		echo"<script>window.open('admin_login.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["aname"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >ADD ENQUIRY STUDENT</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							
								$sq="insert into enquiry(ENO,NAME,FNAME,PHO,MAIL,ADDR,CLA,BOARD,aid) values('{$_POST["eno"]}','{$_POST["name"]}','{$_POST["fname"]}','{$_POST["pho"]}','{$_POST["email"]}','{$_POST["addr"]}','{$_POST["cla"]}','{$_POST["board"]}','{$_SESSION["aid"]}')";
								
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed</div>";
								}
							
							
						}
				
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="lbox">
					<label> ID</label><br>
						<?php
							$no="E101";
							$sql="select * from enquiry order by ID desc limit 1";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$row1=$res->fetch_assoc();
								$no=substr($row1["ENO"],1,strlen($row1["ENO"]));
								$no++;
								$no="E".$no;
							}
						
						
						
						?>
					<input type="text" class="input3" name="eno" style="background:#b1b1b1;" value="<?php echo $no;?>" readonly  ><br><br>
					<label> Student Name</label><br>
					<input type="text" class="input3" name="name"><br><br>
					<label> Father Name</label><br>
					<input type="text" class="input3" name="fname"><br><br>
	
					<label> Phone No</label><br>
					<input type="text" class="input3" maxlength="10" name="pho"><br><br>
				</div>
				
				<div class="rbox">
				
				<label> Parent's Mail Id</label><br>
					<input type="email" class="input3" name="email"><br><br>
					
					<label>  Address</label><br>
					<textarea rows="5" name="addr"></textarea><br><br>
				
					<label>Class</label><br>
					<input type="text" class="input3" name="cla"><br><br>
					
				
						<?php 
						/*	 $sl="SELECT DISTINCT(CNAME) FROM class";
							$r=$db->query($sl);
								if($r->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($ro=$r->fetch_assoc())
										{
											echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
										}
									} */
						?>
					
					</select>
					<br><br>
						<label>Section</label><br>
						<select name="board" required class="input3">
							<option value="">Select</option>
							<option value="Matric">Matric</option>
							<option value="CBSC">CBSC</option>
					</select><br><br>
					
					
						<?php 
					/*	
							 $sl="SELECT DISTINCT(CSEC) FROM class";
							$r=$db->query($sl);
								if($r->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($ro=$r->fetch_assoc())
										{
											echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
										}
									} */
						?>
					
			
			<button type="submit" style="float:right;" class="btn" name="submit">Add Student Details</button>
				</div>
					
				</form>
				
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>