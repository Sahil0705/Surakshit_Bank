<?php
include("conn1.php");
//error_reporting(0);

session_start();

?>
<?php

if(isset($_POST['sub1']))
{
	$i1=$_POST['u'];
	$_SESSION['username'] = $i1;
	header('location:Fund_Transfer.php?use=1');
		//echo "<script>window.location.href='Fund_Transfer.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  
	<title>TSF - Home</title>
	<link rel = "stylesheet" type="text/css" href = "bootstrap.css">
	<link rel="stylesheet" href="">
	<link href='https://fonts.googleapis.com/css?family=Solway' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Akaya Kanadaka' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Averia Gruesa Libre' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src='jquery-ui/jquery-ui.js' type='text/javascript'></script>
	<link rel='stylesheet' href='jquery-ui/jquery-ui.css'>
	<link rel='stylesheet' href='jquery-ui/jquery-ui-structure.css'>
	<link rel='stylesheet' href='jquery-ui/jquery-ui-theme.css'>
	<style>
	#home_1
	{
		width:800px;
	}
	#div1
	{
		margin:30px;
		background-color: white;
		border-radius: 30px;
		height: 680px;
		z-index: 20;
	}
	#div2
	{
		margin:30px;
		background-color: #f1f1f1;
		border-radius: 30px;
		height: 480px;
		box-shadow: 1px 1px 5px 5px #888888;
	}
	body
	{
		background-image: url("backg2.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		z-index: -33;
	}
	.nav1
	{
		margin:40px;
		font-size: 20px;
		font-family: Arial Rounded MT Bold, Helvetica, sans-serif;
	}
	.nav1:hover
	{
		text-decoration: underline;
		text-decoration-style:solid;
		text-decoration-color: brown;
		font-size: 23px;
		cursor: pointer;
		font-weight: bold;
	}
	input[type=text], input[type=email] 
	{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=submit] {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	#div3 {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		margin:30px;
		background-color: #f1f1f1;
		border-radius: 30px;
		height: 510px;
		box-shadow: 1px 1px 5px 5px #888888;
	}
	#fname,#lname,#cont,#user
	{
		font-family: 'Solway';font-size: 18px;
	}
	#f,#s
	{
		font-family: 'Secular One';font-size: 20px;
	}
	#s:hover
	{
		box-shadow: 1px 1px 5px 5px grey;
		font-size: 23px;
	}
	#p1
	{
		font-family: 'Solway';font-size: 20px;
		/* margin-right: 34px; */
	}
	#p2
	{
		font-family: 'Akaya Kanadaka';font-size: 23px;
		padding-right: 155px;

	}
	#p2:hover
	{
		/* font-size: 2px; */
		font-weight: bold;
		cursor: pointer;
	}
	#messagebox
	{
		z-index: 999;
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
	#dv4
	{
		z-index: 140;
	}
	#msb1
	{
		font-family: 'Averia Gruesa Libre';font-size: 26px;
	}
	#msb2
	{
		font-family: 'Cagliostro';font-size: 23px;
	}
	#div5
	{
		display: none;

		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		margin-top:45px;
		margin-right: 30px;
		background-color: #f1f1f1;
		border-radius: 30px;
		height: 510px;
		box-shadow: 1px 1px 5px 5px #888888;
	}
	#welcome
	{
		font-family: 'Amarante';font-size: 29px;
	}
	.ui-autocomplete {
		max-height: 200px;
		overflow-y: auto;
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
		/* add padding to account for vertical scrollbar */
		padding-right: 20px;
	} 
	#all_cust
	{
		width: 300px;
		height: 400px;
		display: none;
		margin-bottom: 2px;
		background-color: white;
		position: relative;
		float: left;
		z-index: 100;
	}
	.form-popup {
		display: none;
		position: fixed;
		bottom: 200px;
		/* right: 400px; */
		/* top: 30px; */
		width: 1200px;
		left: 250px;
		top: 50px;
		border: none;
		z-index: 100;
		height: 583px;
		overflow-y: auto;
	}

	/* Add styles to the form container */
	.form-container {
		display: none;
		height: 580px;
		width: 900px;
		padding: 10px;
		border: none;
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
	#transact
		{
			border-radius: 15px;
			background-color: #f1f1f1;
			width: 1000px;
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
		.abc:hover
		{
			font-weight: bold;
		}
		#cont{
			background-color: white;
		}

</style>
<script>
	var c = 1;
	function openpopup()
	{
			//document.getElementById('Messagebox').style.display='block';
			alert("O");
			document.getElementById('main').style.display='block';
		}
		function closepopup()
		{
			//document.getElementById('Messagebox').style.display='block';
			alert("C");
			document.getElementById('main').style.display='none';
		}
		function transfer()
		{
			if(c==1)
			{
				document.getElementById('div3').style.display='none';
				document.getElementById('p1').style.display='none';
				document.getElementById('p2').style.display='none';
				document.getElementById('div5').style.display='block';
				document.getElementById('tra').innerHTML = 'Register';
				c=0;
			}
			else
			{
				document.getElementById('div3').style.display='block';
				document.getElementById('div5').style.display='none';
				document.getElementById('tra').innerHTML = 'Transfer';

				c=1;
			}
			
		}
		function check_username_existence(a)
		{
			//alert(a);
			//alert(userid);
			var n = userid.includes(a);
			if(n==true && a!="")
			{
				document.getElementById('f1').style.visibility='visible';
				document.getElementById('f1').innerHTML='Not available';
				document.getElementById('f1').style.color='red';
				document.getElementById('f1').style.fontWeight='bold';
			}
			else
			{
				document.getElementById('f1').style.visibility='visible';
				document.getElementById('f1').innerHTML='Available';
				document.getElementById('f1').style.color='green';
				document.getElementById('f1').style.fontWeight='bold';
			}
			if(a=="")
			{
				document.getElementById('f1').style.visibility='hidden';
			}
		}
		function view_cust()
		{
			document.getElementById('main').style.display = "block";
			//document.getElementById('all_cust').style.display = "block";
			document.getElementById("myForm").style.display = "block";
		}
		function contact()
		{
			document.getElementById('main').style.display = "block";
			//document.getElementById('all_cust').style.display = "block";
			document.getElementById("myForm1").style.display = "block";
		}
		function closeForm() {
			document.getElementById("myForm").style.display = "none";
			document.getElementById("main").style.display = "none";
			document.getElementById("myForm1").style.display = "none";
		}
		
	</script>

	<style>
	.ui-autocomplete {
		max-height: 200px;
		overflow-y: auto;
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
		/* add padding to account for vertical scrollbar */
		padding-right: 20px;
	} 
</style>
</head>
<body>

	


	<!-- <div id='dv4'>
	<input type="submit" name="dsf" onclick="openpopup()" value="Open">
	<button type="button" onclick="closepopup()">Close</button>
</div> -->
<div id='messagebox' title='Messagebox' class='mydiv' style="display:none">

	<p align="center"><img src='man.jpg' width=150px></p>
	<h3 align="center" id='msb1'>Successfully Registered</h3><br>
	<h4 align='center' id='msb2'>Click <kbd>ok</kbd> to Proceed</h4>
</div>

<div id='invalid_username' title='Messagebox' class='mydiv' style="display:none">

	<p align="center"><img src='monk.png' width=150px></p>
	<h3 align="center" id='msb1'><b>Username</b> already exists</h3><br>
	<h4 align='center' id='msb2'>Click <kbd>ok</kbd> to enter new username</h4>
</div>

<div id='div1'>
	<table border="0px" width="100%">
		<tr height="15px">
			<td colspan="2"></td>
		</tr>

		<tr height="40px" class='text-right' width="50%">
			<td colspan="2">
				<span width="10%" class='nav1'>Home</span>
				<span width="10%" class='nav1'>About</span>
				<span width="10%" class='nav1' onclick="view_cust()">Customers</span>
				<span width="10%" class='nav1' onclick='contact()'>Contact</span>
				<span width="10%" class='nav1' id='tra' onclick="transfer()">Transfer</span>
			</td>
		</tr>
		<tr height="500px">
			<td id='home_1' align="left" rowspan="2"><img src="home1.png" alt="" width="750px" height="590px"></td>
			<td>
				<div id='div3'>
					<form action="" method="POST" autocomplete="off">
						<label id='f' for="fname">Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label id='f1' for="fname" style="visibility: hidden">Name</label>
						<input type="text" id="fname" name="firstname" placeholder="Your name.." onkeyup ="check_username_existence(this.value)" autocomplete="off"><br>
						<br/>
						<label id='f' for="em">Email Id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label id='f2' for="em" style="visibility: hidden">Email</label>
						<input type="email" id="lname" name="em" placeholder="Your email.." autocomplete="off"><br>
						<br/>
						<label id='f' for="cont">Balance</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label id='f3' for="cont" style="visibility: hidden">Balance</label>
						<input type="text" id="cont" name="bal" placeholder="Your current balance.." autocomplete="off"><br>
						<br/>
						<input name="sub" type="submit" id='s' style="cursor: pointer;font-style:bold;background-image: linear-gradient(to bottom right, red, yellow); border-radius: 15px" value="Register" >
					</form>
				</div>

				<div id='div5'>
					
					<p align="center"><img src='transfer.jpg' width=330px></p><br/>
					<h2 align='center' id='welcome'>Enter your Username for Fund Transfer</h2>
					<form action="" method='POST'>
						<input id='user' type="text" name="u" value="" placeholder="username">
						<input name="sub1" type="submit" id='s' style="cursor: pointer;font-style:bold;background-image: linear-gradient(to bottom right, red, yellow); border-radius: 15px" value="Fund Transfer" >
					</form>
				</div>
			</td>
		</tr>
		<tr>
			<td align='right' colspan="2"><span id='p1'>Already have an account ?</span>&nbsp;&nbsp;&nbsp;&nbsp;<span id='p2' onclick="transfer()" >Transfer Money</span></td>
		</tr>
	</table>

</div>
<div id='main'>

</div>
<div class="form-popup" id="myForm">
	<form action="actual_transfer.php" method='POST' autocomplete="off">
		<table align='center' width='80%' border=0px id='transact' cellpadding=15px style="border-radius: 15px;  position: relative; overflow-y:scroll;" class='table_sticky'>
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
					<td align='center'><a href='session.php?user=<?php echo $result['Name'];?>'><button id='s1' type='button' style="color:white; cursor: pointer;font-style:bold;background-image: linear-gradient(to right, #3333ff 0%, #ff3300 100%); border-radius: 15px; width:100px;" onclick=''>View</button></a></td>
				</tr>
				<?php
				
			}
			?>

		</table><br/><br/>
		<button type="button" style=" cursor: pointer;font-style:bold;background: linear-gradient(to bottom, #66ccff 0%, #ccccff 100%);border:none; border-radius: 6px; font-family: 'Akaya Kanadaka';font-size: 30px;width:480px;height:40px;margin-left:300px; margin-bottom:20px;" class="abc" id='s1' onclick="closeForm()">Close</button>
	</form>
</div>

<div class="form-popup" id="myForm1" style="top:80px; height:1000px;">

	<table style='background-color:white; width:1300px; text-align:center; font-size:25px; border-radius:50px;background: linear-gradient(to bottom, #ccffff 0%, #ffff99 100%);' id='fname' cellpadding="18px" align='center'>
		<tr><td></td></tr>
		<tr>
			<th>Name</th>
			<td>Sahil Sachin Donde</td>
		</tr>
		<tr>
			<th>Email Id</th>
			<td>sahildonde7@gmail.com</td>
		</tr>
		<tr>
			<th>Website (Portfolio)</th>
			<td>https://sahil0705.gitlab.io/first-website/</td>
		</tr>
		<tr>
			<th>Linkedin Profile</th>
			<td>www.linkedin.com/in/sahil-donde-b788a4913</td>
		</tr>
		<tr>
			<th>Github link</th>
			<td>https://github.com/Sahil0705/Basic_Banking_System_TSF</td>
		</tr>
		<tr><td colspan="2"><td></td></tr>
</table>
<br/>
<p type="button" style="font-style:bold;background: linear-gradient(to bottom, #ccffff 0%, #00ffcc 100%);border:none; border-radius: 6px; font-size: 20px;margin-left:350px; margin-bottom:20px;width:40%; padding: 10px;text-align:center;">© 2021, <i>Made by <b>Sahil Sachin Donde</b></i></p>
<br/>
<button type="button" style=" cursor: pointer;font-style:bold;background: linear-gradient(to bottom, #66ccff 0%, #ccccff 100%);border:none; border-radius: 6px; font-family: 'Akaya Kanadaka';font-size: 30px;width:280px;height:40px;margin-left:430px; " class="abc" id='s1' onclick="closeForm()">Close</button>
</div>



<?php
if(isset($_POST['sub']))
{
	$fn=$_POST['firstname'];
	$em=$_POST['em'];
	$bal=$_POST['bal'];

	if($fn!="" && $em!="" && $bal!="")
	{
		$query1 = "select * from user_info where Name='$fn'";
		$data1 = mysqli_query($conn,$query1);
		$tot=mysqli_num_rows($data1);

		if($tot==0)
		{
			
			$query="insert into user_info (Name,Email_id,Balance) values ('$fn','$em','$bal')";
			$data=mysqli_query($conn,$query);

			if($data)
			{
	            //echo "<h2 align='center'>Successfully Registered<h2><br>";
	            //echo "<h2 align='center'>Click on Existing User to login<h2>";
	            //header("location:log.php");
				?>
				<script type="text/javascript">
					document.getElementById('main').style.display='block';

					$('#messagebox').dialog(
					{
						title:"TSF E-Bank",
						draggable:0,
						resizable:0,
						height:400,
						width:400,
						modal:1,

						buttons:  
						[
						{
							text:"Close",
							icon:"ui-icon-close",
							click:function()
							{
								$('#messagebox').dialog("close");
								document.getElementById('main').style.display='none';
							}
						},
						{
							text:"ok",
							icon:"ui-icon-check",
							click:function()
							{
								$('#messagebox').dialog("close");
								document.getElementById('main').style.display='none';
								document.getElementById('div3').style.display='none';
								document.getElementById('p1').style.display='none';
								document.getElementById('p2').style.display='none';
								document.getElementById('div5').style.display='block';
								transfer();
							}
						}
						]
					}
					);
					


				</script>
				<?php
			}
			else
			{
				echo "Data not inserted into databse";
				echo $data;
			}
		}
		else
		{
			?>
			<script type="text/javascript">

				document.getElementById('main').style.display='block';
				$('#invalid_username').dialog(
				{
					title:"TSF E-Bank",
					draggable:0,
					resizable:0,
					height:360,
					width:400,
					modal:1,

					buttons:  
					[
					{
						text:"Close",
						icon:"ui-icon-close",
						click:function()
						{
							$('#invalid_username').dialog("close");
							document.getElementById('main').style.display='none';
						}
					},
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

			</script>
			<?php
		}
	}
	else
	{

	}
}


?>

<?php


$query2 = "select * from user_info";
$data2 = mysqli_query($conn,$query2);
$arr = array();
while($result=mysqli_fetch_assoc($data2))
{
	array_push($arr,$result['Name']);
}
?>
<script type="text/javascript">userid = <?php echo json_encode($arr); ?>;</script>
<!-- <script>alert(userid);</script> -->
<script>

	$("#user").autocomplete({
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


