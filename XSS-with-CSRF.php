<!DOCTYPE html>
<html>
<head>
	<title>Steal CSRF Tokens with Simple XSS </title>
</head>
<body>
	<h4>Steal CSRF Tokens with Simple XSS </h4>
	<h6>by @sametsahinnet</h6>



//	<?php 
//	$benCSRFtoken = "samet";
//	$printMD5 = md5($benCSRFtoken);
//	?>


	<a href="?search=query">XSS with CSRF ! </a>

	<form>

//		<input type="hidden" name="search" value="<?php echo $_GET['search']; ?>">	

//		<input type="hidden" name="CSRFtoken" value="<?php echo $printMD5 ?>">

		<input type="submit" value="Submit">
	
	</form>


</body>
</html>
