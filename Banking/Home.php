<?php
include("conn1.php");
//error_reporting(0);

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
		#fname,#lname,#cont
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
			font-size: 25px;
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

	</style>
	<script>
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

		function check_username_existence(a)
		{
			
			<?php
				$a = echo json_decode($_POST['a']);
				$query="select from user_info where Name='$a'";
				$data=mysqli_query($conn,$query);

			if($data)
			{
				?>
				document.getElementById('f1').innerHTML = "Exist";
				document.getElementById('f1').style.visibility='visible';
			 	<?php
			}
			else
			{
				?>
				document.getElementById('f1').innerHTML = "Not exist";
				document.getElementById('f1').style.visibility='visible';
			 	<?php
			}
			?>
		}
	</script>
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
	<div id='div1'>
		<table border="0px" width="100%">
			<tr height="15px">
				<td colspan="2"></td>
			</tr>
			
			<tr height="40px" class='text-right' width="50%">
				<td colspan="2">
					<span width="10%" class='nav1'>Home</span>
					<span width="10%" class='nav1'>About</span>
					<span width="10%" class='nav1'>Contact</span>
					<span width="10%" class='nav1'>Admin</span>
					<span width="10%" class='nav1'>Transfer</span>
				</td>
			</tr>
			<tr height="500px">
				<td id='home_1' align="left" rowspan="2"><img src="home1.png" alt="" width="750px" height="610px"></td>
				<td>
					<div id='div3'>
						<form action="" method="POST">
							<label id='f' for="fname">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label id='f1' for="fname" style="visibility: hidden">Name</label>
							<input type="text" id="fname" name="firstname" placeholder="Your name.." onkeypress="check_username_existence(this.value)"><br>
							<br/>
							<label id='f' for="em">Email Id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label id='f2' for="em" style="visibility: hidden">Email</label>
							<input type="email" id="lname" name="em" placeholder="Your email.."><br>
							<br/>
							<label id='f' for="cont">Balance</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label id='f3' for="cont" style="visibility: hidden">Balance</label>
							<input type="text" id="cont" name="bal" placeholder="Your current balance.."><br>
							<br/>
							<input name="sub" type="submit" id='s' style="cursor: pointer;font-style:bold;background-image: linear-gradient(to bottom right, red, yellow); border-radius: 15px" value="Register" >
						</form>
					</div>
				</td>
			</tr>
			<tr>
				<td align='right' colspan="2"><span id='p1'>Already have an account ?</span>&nbsp;&nbsp;&nbsp;&nbsp;<span id='p2' >Transfer Money</span></td>
			</tr>
		</table>
		
	</div>
<div id='main'>
	</div>


<?php

if(isset($_POST['sub']))
{
	$fn=$_POST['firstname'];
	$em=$_POST['em'];
	$bal=$_POST['bal'];

	if($fn!="" && $em!="" && $bal!="")
	{
		?>
		<script>document.getElementById('main').style.display='block';</script>
		<?php
		$query="insert into user_info (Name,Email_id,Balance) values ('$fn','$em','$bal')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
            //echo "<h2 align='center'>Successfully Registered<h2><br>";
            //echo "<h2 align='center'>Click on Existing User to login<h2>";
            //header("location:log.php");
			?>
			<script type="text/javascript">
				
					
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

	}
}
?>



</body>
</html>
