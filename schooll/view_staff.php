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
			
				<h3 class="text">Welcome <?php echo $_SESSION["aname"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >View Student Details</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Tid</th>
							<th>Name</th>
							<th>Qualification</th>
							<th>Salary</th>
							<th>Phone</th>
							<th>Mail</th>
							<th>Address</th>
							<th>Image</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from staff";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
										<tr>
											<td>{$i}</td>
											<td>{$r["tid"]}</td>
											<td>{$r["tname"]}</td>
											<td>{$r["qual"]}</td>
											<td>{$r["sal"]}</td>
											<td>{$r["PNO"]}</td>
											<td>{$r["MAIL"]}</td>
											<td>{$r["PADDR"]}</td>
											<td><img src='{$r["IMG"]}' height='70' width='70'></td>
											<td><a href='staff_delete.php?id={$r["tid"]}' class='btnr'>Delete</a><td>
										</tr>
									
									
									
									";
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
						
					</table>
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>