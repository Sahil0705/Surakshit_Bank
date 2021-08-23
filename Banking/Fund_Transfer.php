<?php
include('conn1.php');

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TSF - View Customers and Transfer Money</title>
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
		#main
		{
			display: none;
			position: absolute;
			top:0%;
			left:0%;
			width:100%;
			height:100%;
			background-color: black;
			opacity:0.7;
			z-index: 30;
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
		#s3
		{
			font-family: 'Secular One';font-size: 20px;
			/* background: linear-gradient(to right, #33ccff 0%, #ffff00 100%); */
			width: 130px;
		}
		#s3:hover
		{
			font-weight: bold;
		}
		#s1
		{
			font-family: 'Secular One';font-size: 20px;
			/* background: linear-gradient(to right, #33ccff 0%, #ffff00 100%); */
			width: 150px;
		}
		#s1:hover
		{
			font-weight: bold;
		}

		#div3 {
			border-radius: 5px;
			/* background-color: #eeeeee; */
			padding-top: 7px;
			margin-top: 7px;
			margin-right: 30px;
			margin-left: 30px;
			background-color: #f1f1f1;
			border-radius: 30px;
			height: 680px;
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
		#view
		{
			font-family: 'Akaya Kanadaka';font-size: 30px;
			padding-left: 600px;

		}
		#transact
		{
			border-radius: 15px;
			background-color: #f1f1f1;
		}
		#transact tr
		{
			text-align: center;
			font-family: 'Solway';font-size: 20px;
		}
		#transact tr:hover
		{
			font-weight: bold; 
			font-size: 21px;
			background-color: #d5d5d5;
		}
		#transact tr:nth-child(even){background-color: white;}
		#transact tr:nth-child(even):hover{background-color: #d5d5d5;}

		#transact th {
		  background: linear-gradient(to bottom, #800000 0%, #cc6600 100%);
		  color: white;
		  text-align: center;
		  font-family: 'Acme';font-size: 24px;
		  position: sticky;
		  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
		}
		#transact
		{
			overflow-y: auto;
		}
		.table_sticky th
		{
			position: sticky;
			top: 0;
		}
		#invlaid
		{
			z-index: 40;
		}
		#msb1
		{
			font-family: 'Averia Gruesa Libre';font-size: 30px;
		}
		#msb2
		{
			font-family: 'Cagliostro';font-size: 26px;
		}
		#trans
		{
			display: none;
			width: 600px;
			height: 550px;
			background-color: red;
			z-index: -100;
			/* margin-top: 100px;
			margin-left: 500px; */
			opacity: 1;
		}
		.open-button {
		  background-color: #555;
		  color: white;
		  padding: 16px 20px;
		  border: none;
		  cursor: pointer;
		  opacity: 0.8;
		  position: fixed;
		  bottom: 23px;
		  right: 28px;
		  width: 280px;
		}

		/* The popup form - hidden by default */
		.form-popup {
		  display: none;
		  position: fixed;
		  bottom: 200px;
		  /* right: 400px; */
		  /* top: 30px; */
		 
		  left: 550px;
		  top: 50px;
		  border: 3px solid #f1f1f1;
		  z-index: 100;
		  height: 583px;
		}

		/* Add styles to the form container */
		.form-container {
		  height: 580px;
		  max-width: 500px;
		  padding: 10px;
		  background-color: white;
		}

		/* Full-width input fields */
		.form-container input[type=text], .form-container input[type=password] {
		  width: 100%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  border: none;
		  background: #f1f1f1;
		}

		/* When the inputs get focus, do something */
		.form-container input[type=text]:focus, .form-container input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Set a style for the submit/login button */
		.form-container .btn {
		  background-color: #04AA6D;
		  color: white;
		  padding: 16px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  margin-bottom:10px;
		  opacity: 0.8;
		}

		/* Add a red background color to the cancel button */
		.form-container .cancel {
		  background-color: red;
		}

		/* Add some hover effects to buttons */
		.form-container .btn:hover, .open-button:hover {
		  opacity: 1;
		}
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
        
         #back {background-image: linear-gradient(to right, #2b5876 0%, #4e4376  51%, #2b5876  100%)}
         #back {
            margin-left: 650px;
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
            width: 220px;
          	height: 50px;
          }

          #back:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
            font-weight: bold;
          }


	</style>
	<script>
		function send_money()
		{
			document.getElementById('trans').style.display='block';
			document.getElementById('main').style.display='block';

		}
		function send_money1()
		{
			alert(<?php echo $a;?>);
		}
	</script>
</head>
<body>

	
	<!-- <div id='invalid_username' title='Messagebox' class='mydiv' style="display:none"> -->

	<?php
		$i1=$_SESSION['username'];
		echo $i1;
		$i2 = $_GET['use'];

		$query3 = "select * from user_info where Name='$_SESSION[username]'";
		$data3 = mysqli_query($conn,$query3);
		$result = mysqli_fetch_assoc($data3);
		$mydate=getdate(date("U"));

	?>
	<div id = 'div3'>
		<table cellpadding=6px width=75% border='0px' align="center" style="border-radius: 5px; background: linear-gradient(to bottom, #33ccff 0%, #66ff99 100%); margin-top: 9px;" >
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
		<span id='view'>View and Transact</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button onclick='openForm()' id='s3' style="color:white;cursor: pointer;background: linear-gradient(to bottom, #ff5050 0%, #ff9900 100%); border-radius: 15px; border:none; font-size:23px; ">Transfer</button><br/>

		<div style="align:center; overflow:auto; height: 450px;width:75%px; margin-top: 12px;">
		<table align='center' width='80%' border=0px id='transact' cellpadding=15px style="border-radius: 15px;  position: relative;" class='table_sticky'>
			<tr>
				<th align='center'>Beneficiary Name</th>
				<th align='center'>Email Id</th>
				<th align='center'>Balance</th>
				<th align='center'>Transact</th>
			</tr>

		<?php
		$query = "select * from user_info where Name!='$i1'";
		$data = mysqli_query($conn,$query);

		while($result=mysqli_fetch_assoc($data))
	    {
	    ?>
	        <tr>
	        <td align='center'><?php echo $result['Name']; ?></td>
	        <td align='center'><?php echo $result['Email_Id']; ?></td>
	        <td align='center'><?php echo $result['Balance'];?></td>
	        <!-- <td align='center'><a href="transac_history.php?us=<?php echo $result['Name'];?>"><button id='s1' type='button' style="color:white; cursor: pointer;font-style:bold;background-image: linear-gradient(to right, #3333ff 0%, #ff3300 100%); border-radius: 15px">Send Money</button></a></td> -->
	        <td align='center'><a href='money.php?user=<?php echo $result['Name'];?>'><button id='s1' type='button' style="color:white; cursor: pointer;font-style:bold;background-image: linear-gradient(to right, #3333ff 0%, #ff3300 100%); border-radius: 15px" onclick=''>Send Money</button></a></td>
	        </tr>
	    <?php
		}
		?>

		</table>	
		<br/>
		<a href='Logout.php'><button type="button" id='back'>Back to Home</button></a>
	</div>
	
	
	<div id='invalid_username'>
	<p align="center"><img src='boy.jpg' width=400px height=250px></p>
	<h3 align="center" id='msb1'>Welcome <?php echo "<b>",$i1,"</b>";?></h3><br>
	<h4 align='center' id='msb2'>Click <kbd>ok</kbd> to start Fund Transfer</h4>
	</div>

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

	<div id='main'>


</div>


<!-- <button class="open-button" onclick="openForm()">Open Form</button> -->

<div class="form-popup" id="myForm">
  <form action="actual_transfer1.php" class="form-container" method='POST' autocomplete="off">
    

    <label for="sname" style="font-family: 'Akaya Kanadaka';font-size: 30px;"><b>Sender Name</b></label>
    <input type="text" value="<?php echo $i1;?>" name="sname" required style="font-family: 'Solway';font-size: 20px;">

    <label for="bname" style="font-family: 'Akaya Kanadaka';font-size: 30px;" ><b>Beneficiary Name</b></label>
    <input type="text" placeholder="Enter Beneficiary Name" name="bname" required id='user1' style="font-family: 'Solway';font-size: 20px;">

    <label for="amnt" style="font-family: 'Akaya Kanadaka';font-size: 30px;"><b>Amount</b></label>
    <input type="text" placeholder="Enter Amount" name="amnt" required style="font-family: 'Solway';font-size: 20px;"><br/><br/>

    <input type="submit" id='s1' style="color:white; cursor: pointer;font-style:bold;background: linear-gradient(to bottom, #00ffff 0%, #ffff00 100%);color:black;border:none; border-radius: 6px; font-family: 'Akaya Kanadaka';font-size: 30px;width:480px;height:40px;" class='button' value='Send Money' name='sub'><br/><br/>
    <button type="button" style=" cursor: pointer;font-style:bold;background: linear-gradient(to bottom, #66ccff 0%, #ccccff 100%);border:none; border-radius: 6px; font-family: 'Akaya Kanadaka';font-size: 30px;width:480px;height:40px;" id='s1' onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("main").style.display = "block";

}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("main").style.display = "none";

}
</script>

<script type="text/javascript">

<?php
		if($i2=="1")
		{
?>
	document.getElementById('success').style.display='none';
	document.getElementById('fail').style.display='none';

		document.getElementById('main').style.display='block';
		$('#invalid_username').dialog(
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
					$('#invalid_username').dialog("close");
					document.getElementById('main').style.display='none';
					


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
			document.getElementById('invalid_username').style.display='none';
<?php
		}
?>
	</script>


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