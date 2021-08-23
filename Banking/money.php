<?php

include("conn1.php");
session_start();

//echo $_SESSION['username'];
$i = $_GET['user'];
//echo $i;

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TSF - Fund Trnasfer</title>
	<link rel = "stylesheet" type="text/css" href = "bootstrap.css">
	<link rel="stylesheet" href="">
	<link href='https://fonts.googleapis.com/css?family=Solway' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Averia Gruesa Libre' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src='jquery-ui/jquery-ui.js' type='text/javascript'></script>
	<link rel='stylesheet' href='jquery-ui/jquery-ui.css'>
	<link rel='stylesheet' href='jquery-ui/jquery-ui-structure.css'>
	<link rel='stylesheet' href='jquery-ui/jquery-ui-theme.css'>

	<style>

	body
	{
		background-image: url("backg2.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		z-index: -33;
	}
	#div3 {
		border-radius: 5px;

		/* background-color: #eeeeee; */
		padding-top: 7px;
		margin-top: 30px;
		margin-right: 100px;
		margin-left: 100px;
		background-color: #f1f1f1;
		border-radius: 30px;
		height: 680px;
		width: 1400px;
		box-shadow: 1px 1px 5px 5px #888888;
		background-image: url('div_img.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	#tr1
	{
		text-align: center;
		font-family: 'Acme';font-size: 24px;

	}
	#tr2
	{
		text-align: center;
		font-family: 'Solway';font-size: 20px;
	}
	#f,#s
	{
		font-family: 'Secular One';font-size: 20px;
		/* background: linear-gradient(to right, #33ccff 0%, #ffff00 100%); */
		width: 100px;
	}
	#s:hover
	{
		font-weight: bold;
	}
	#frm1
	{
		margin-left: 500px;
		margin-top: 15px;
	}
	input[type=text]
	{
		width: 400px;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	#back {background-image: linear-gradient(to right, #2b5876 0%, #4e4376  51%, #2b5876  100%)}
         #back {
            margin-left: 615px;
            margin-top: 10px;
            margin-bottom:6px; 
            
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            font-family: 'Akaya Kanadaka';font-size: 26px;
            text-decoration: none;
            width: 170px;
          	height: 50px;
          }

          #back:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
            font-weight: bold;
          }

</style>
</head>
<body>

	<?php
	$i1=$_SESSION['username'];
	//echo $i1;
	$i2 = $_GET['user'];

	$query3 = "select * from user_info where Name='$_SESSION[username]'";
	$data3 = mysqli_query($conn,$query3);
	$result = mysqli_fetch_assoc($data3);

	$query4 = "select * from user_info where Name='$i2'";
	$data4 = mysqli_query($conn,$query4);
	$result1 = mysqli_fetch_assoc($data4);

	$mydate=getdate(date("U"));

	?>

	<div id = 'div3'>
		
		<span style="font-family: 'Akaya Kanadaka';font-size: 35px;margin-left: 650px; ">Sender</span>
		<table cellpadding=6px width=75% border='0px' align="center" style="border-radius: 5px; background: linear-gradient(to bottom, #66ffff 0%, #ffff00 100%); margin-top: 9px;" >
			<tr id='tr1'>
				<td><u>Username</u></td>
				<td><u>Email Id</u></td>
				<td><u>Current Balance</u></td>
				<td><u>Current Date</u></td>
				<td><u>Transaction History</u></td>
			</tr>
			<tr id='tr2'>
				<td><?php echo $i1," <i>(You)</i>";?></td>
				<td><?php echo $result['Email_Id'];?></td>
				<td><?php echo $result['Balance'];?></td>
				<td><?php echo "$mydate[weekday] - $mydate[month] $mydate[mday], $mydate[year]";?></td>
				<td><a href='transac_history.php?user=<?php echo $i1;?>'><button id='s' type='button' style="color:white; cursor: pointer;font-style:bold;background-image: linear-gradient(to right, #3333ff 0%, #ff3300 100%); border-radius: 15px">View</button></a></td>
			</tr>
			<tr height='3px'>
				<td colspan="4"></td>
			</tr>
		</table>
		<br/>
		<span style="font-family: 'Akaya Kanadaka';font-size: 35px;margin-left: 620px; top:45px;">Beneficiary</span>
		<table cellpadding=6px width=75% border='0px' align="center" style="border-radius: 5px; background: linear-gradient(to bottom, #00ffcc 0%, #ff99ff 100%); margin-top: 9px;" >
			<tr id='tr1'>
				<td><u>Username</u></td>
				<td><u>Email Id</u></td>
				<td><u>Current Balance</u></td>
				<td><u>Current Date</u></td>
				<td><u>Transaction History</u></td>
			</tr>
			<tr id='tr2'>
				<td><?php echo $i2," <i>(You)</i>";?></td>
				<td><?php echo $result1['Email_Id'];?></td>
				<td><?php echo $result1['Balance'];?></td>
				<td><?php echo "$mydate[weekday] - $mydate[month] $mydate[mday], $mydate[year]";?></td>
				<td><a href='transac_history.php?user=<?php echo $i2;?>'><button id='s' type='button' style="color:white; cursor: pointer;font-style:bold;background-image: linear-gradient(to right, #3333ff 0%, #ff3300 100%); border-radius: 15px">View</button></a></td>
			</tr>
			<tr height='3px'>
				<td colspan="4"></td>
			</tr>
		</table>
		<br/>
		<div id='frm1'>
			<form action='actual_transfer1.php' method="POST" autocomplete="off">
				<input type='hidden' value="<?php echo $i1; ?>" name='sname'>
				<input type='hidden' value="<?php echo $i2; ?>" name='bname'>
				<input type='text' name='amnt' placeholder="enter the amount to be transfered" style="font-family: 'Acme';font-size: 24px;"><br/>
				<input type="submit" name='sub' value='Send Money' id='s' style="cursor: pointer;font-style:bold;background-image: linear-gradient(to bottom right, red, yellow); border-radius: 15px; border:none; color:white; width: 200px; height: 40px; margin-left: 100px; margin-top:20px;">
			</form>
		</div>
		<br/>
		<a href='Fund_Transfer.php'><button type="button" id='back'>Back</button></a>


			<div id='success'>
	<p align="center"><img src='success.gif' width=400px height=250px></p>
	<h3 align="center" id='msb1'>Transfer <?php echo "<b>Successful</b>";?></h3><br>
	<h4 align='center' id='msb2'>Click <kbd>ok</kbd> to use our Service</h4>
	</div>

	<div id='fail'>
	<p align="center"><img src='monkey.gif' width=400px height=250px></p>
	<h3 align="center" id='msb1'><b>Insufficient Balance</b></h3><br>
	<h4 align='center' id='msb2'>Click <kbd>ok</kbd> to enter valid amount</h4>
	</div>


	</div>


<script type="text/javascript">

<?php
		if($i2=="0")
		{
?>
		document.getElementById('main').style.display='block';
	document.getElementById('fail').style.display='none';

		$('#success').dialog(
		{
			title:"TSF E-Bank",
			draggable:0,
			resizable:0,
			height:510,
			width:500,
			modal:1,

			buttons:  
			[
			{
				text:"ok",
				icon:"ui-icon-check",
				click:function()
				{
					$('#success').dialog("close");
					document.getElementById('main').style.display='none';
					document.getElementById('fail').style.display='none';


				}
			}
			]
		}
		);
<?php
		}
		else
		{
?>
			document.getElementById('success').style.display='none';
<?php
		}
?>
	</script>



<script type="text/javascript">

<?php
		if($i2=="2")
		{
?>
	document.getElementById('success').style.display='none';
		document.getElementById('main').style.display='block';
		$('#fail').dialog(
		{
			title:"TSF E-Bank",
			draggable:0,
			resizable:0,
			height:510,
			width:500,
			modal:1,

			buttons:  
			[
			{
				text:"ok",
				icon:"ui-icon-check",
				click:function()
				{
					$('#fail').dialog("close");
					document.getElementById('main').style.display='none';
					document.getElementById('success').style.display='none';
					


				}
			}
			]
		}
		);
<?php
		}
		else
		{
?>
			document.getElementById('fail').style.display='none';
<?php
		}
?>
	</script>












<?php

	$query2 = "select * from user_info where Name!='$i1'";
	$data2 = mysqli_query($conn,$query2);
	$arr = array();
	while($result=mysqli_fetch_assoc($data2))
	{
		array_push($arr,$result['Name']);
	}
	?>
	<script type="text/javascript">userid = <?php echo json_encode($arr); ?>;</script>
	<?php
?>
<!-- <script>alert(userid);</script> -->
<script>

$("#user1").autocomplete({
    source:userid
},
{
    autuFocus:true,
    delay:0,
    minLength:1,
});


</script>



</body>
</html>