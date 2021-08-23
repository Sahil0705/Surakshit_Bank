<?php
include("conn1.php");
//error_reporting(0);

session_start();
$userid=$_GET['user'];
echo $userid;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TSF - Transaction History</title>
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

</head>
<body>

<div id='div3'>
	<span style="font-family: 'Akaya Kanadaka';font-size: 35px;margin-left: 620px; top:45px;">Transaction History</span> 

			<div style="align:center; overflow:auto; height: 550px;width:75%px; margin-top: 12px;">
		<table align='center' width='80%' border=0px id='transact' cellpadding=15px style="border-radius: 15px;  position: relative;" class='table_sticky'>
			<tr>
				<th align='center'>Sender Name</th>
				<th align='center'>Beneficiary Name</th>
				<th align='center'>Amount Trnasfered</th>
				<th align='center'>Date_Time</th>
			</tr>

		<?php
		$query = "select * from transac_hist where username='$userid'";
		$data = mysqli_query($conn,$query);

		while($result=mysqli_fetch_assoc($data))
	    {
	    ?>
	        <tr>
	        <td align='center'><?php echo $result['username']; ?></td>
	        <td align='center'><?php echo $result['beneficiary']; ?></td>
	        <td align='center'><?php echo $result['amount'];?></td>
	        <td align='center'><?php echo $result['time'];?></td>
	        </tr>
	    <?php
		}
		?>

		</table>	
		<br/>
		<a href='Fund_Transfer.php'><button type="button" id='back'>Back</button></a>
	</div>
</div>

</body>
</html>