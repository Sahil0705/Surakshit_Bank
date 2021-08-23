<?php
include('conn1.php');
if(isset($_POST['sub']))
{
	$sname = $_POST['sname'];
	$bname = $_POST['bname'];
	$amn = $_POST['amnt'];
	echo $amn;
	$query1 = "select * from user_info where Name='$sname'";
	$query2 = "select * from user_info where Name='$bname'";
	$data1 = mysqli_query($conn,$query1);
	$data2 = mysqli_query($conn,$query2);
	$result1 = mysqli_fetch_assoc($data1);
	$result2 = mysqli_fetch_assoc($data2);
	if($result1['Balance']>=$amn)
	{
		$a = $result1['Balance'];
		$a = $a - $amn;
		$b = $result2['Balance'];
		$b = $b + $amn;
		$query1 = "update user_info set Balance='$a' where Name='$sname'";
		$query2 = "update user_info set Balance='$b' where Name='$bname'";
		$data1 = mysqli_query($conn,$query1);
		$data2 = mysqli_query($conn,$query2);
		if($data1==1 && $data2==1)
		{
			?>
			<script type="text/javascript">alert("Success")</script>
			<?php
			//echo $data1;
			header('location:Fund_Transfer.php?use=0');
		}
		else
		{
			?>
			<!-- <script type="text/javascript">alert("No success")</script> -->
			<?php
		}
	}
	else
	{
		?>
		<!-- <script type="text/javascript">alert("No success")</script> -->
		<?php
		header('location:Fund_Transfer.php?use=2');
	}

}

?>