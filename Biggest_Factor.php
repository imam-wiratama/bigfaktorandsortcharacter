<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Biggest Factor</title>
</head>
<body>

<form method="post" action="">
	<label>Input N:</label> <br>
	<input type="number" name="input">
	<input type="submit">
</form>
<?php 
	session_start();
	if(!isset($_POST["submit"])) {
	  if(isset($_POST["input"])){
		  ?>
		  <labe>input value: </labe>
		  <form method="post" action="calculating_factor.php">
			<?php
			$panjangInput = 0;
			for($index=0; $index < ($_POST["input"]) ; $index++){
				$name = "input".$index;
				?>
				<input type="text" name="<?php echo $name ?>">
				<br>
				<?php	
			}$_SESSION["banyakInput"] = $index;
			?>
			<input type="submit">
		</form>
		<?php
	  }	
	}
		?>
		<!-- I am sorry, I can't give my best, I need more time -->
</body>
</html>