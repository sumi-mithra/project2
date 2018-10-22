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
					
					
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>enq No</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>Phone</th>
							<th>Mail</th>
							<th>Address</th>
							<th>Class</th>
							<th>Sec</th>
							
							
						</tr>
						<?php
							$s="select * from enquiry ";
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
											<td>{$r["ENO"]}</td>
											<td>{$r["NAME"]}</td>
											<td>{$r["FNAME"]}</td>
											<td>{$r["PHO"]}</td>
											<td>{$r["MAIL"]}</td>
											<td>{$r["ADDR"]}</td>
											<td>{$r["CLA"]}</td>
											<td>{$r["BOARD"]}</td>
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