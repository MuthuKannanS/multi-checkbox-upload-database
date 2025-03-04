<?php
	include "config.php";
	
?>
<html>
	<head>
		<title>Multi Checkbox</title>
		<link href="bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<h1>Multi Check box Concept</h1>
		<div class="col-md-12">
			<div class="card mt-2">
				<div class="card-body">
					<form method="post">
						<div class="form-row">
							<div class="col-md-2">
								<h5>Name</h5>
								<input type="text" name="user_name" placeholder="Enter your name" required>
							</div>
							<div class="col-md-2">
								<h5>Mobile No</h5>
								<input type="text" name="mobile_no" placeholder="Enter your Mobile no" required>
							</div>
							<div class="col-md-2">
								<h5>Email</h5>
								<input type="email" name="email" placeholder="Enter your email" required>
							</div>
							<div class="col-md-2">
								<input type="submit" name="submit" class="btn btn-success" value="submit">
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['submit']))
					{
						$name=$_POST['user_name'];
						$mobile_no=$_POST['mobile_no'];
						echo $mobile_no;
						$email=$_POST['email'];
						$sql="INSERT INTO student_details (name,mobile_no,email) VALUES ('$name','$mobile_no','$email')";
						if($con->query($sql))
						{
                            echo "<script>window.open('index.php','_self')</script>";
						}
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card mt-4">
				<div class="card-body">
					<form method="post" action="code.php">
						<table class="table table-bordered">
							<tr>
								<th><button type="submit" name="multi-checkbox" class="btn btn-danger">Delete</button></th>
								<th>Id</th>
								<th>Name</th>
								<th>Mobile no</th>
								<th>Email</th>
							</tr>
							<?php
							$sql="SELECT * FROM student_details";
							$res=$con->query($sql);
							$i=0;
							foreach($res as $row)
							{
								$i=$i+1;
								$id=$row['id'];
								$name=$row['name'];
								$mobile_no=$row['mobile_no'];
								$email=$row['email'];
							?>
							<tr>
								<td><input type="checkbox" value='<?php echo $id;?>' name="add[]"> </td>
								<td><?php echo $id; ?></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $mobile_no; ?></td>
								<td><?php echo $email; ?></td>			
							</tr>
							<?php
							}
							?>
						</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>