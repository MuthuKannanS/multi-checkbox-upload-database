<?php
	include"config.php";
	
	if(isset($_POST['multi-checkbox']))
	{
		$all_id=$_POST['add'];
		$extract_id=implode(',',$all_id);
		//echo $extract_id;
		$sql="DELETE FROM student_details WHERE id IN($extract_id)";
		if($con->query($sql))
		{
			header("location:index.php");
		}
	}
?>