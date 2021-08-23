<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	
</head>
<body>
	<input type="text" onkeypress="test(this.value)" name="" value="">
	<?php echo "a"?>

	<script>
		function change(a)
		{
			alert(a);
			
		}
	</script>
	<script type='text/javascript'>

		function test(a)
		{
			var w = <?php echo abc();?>;
			alert(w);
		}

// to call the function

</script>
<?php
function abc()
{
	/*?><script>change(4)</script><?php*/
	return(3);
}
?>
</body>
</html>