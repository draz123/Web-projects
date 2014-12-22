<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tworzenie wpisu</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	</head>
	<body>

		<?php
			include 'menu.php';
		?>
		
		<form action="wpis.php" method="post" enctype="multipart/form-data">
			Nazwa użytkownika:<br/>
			<input type="text" name="nazwa" required/><br/><br/>
			Hasło:<br/>
			<input type="password" name="haslo" required/><br/><br/>
			Wpis do bloga:</br>
			<textarea name="wpis" cols="30" rows="5"></textarea><br/><br/>
			Data:<br/>
			<input type="text" name="data" value=<?php echo date('Y-m-d')?> readonly><br/><br/>
			Godzina:<br/>
			<input type="text" name="godzina" value=<?php echo (date('H:i'))?> readonly><br/><br/>
			<br/>
			Dodaj pliki:<br/>
			<input type="file" name="plik1"><br/>
			<input type="file" name="plik2"><br/>
			<input type="file" name="plik3"><br/>
			<br/>
			<input type="submit" value="Potwierdź">
			<input type="reset" value="Wyczyść">	
		</form>	
		
		<?php
			menu();
		?>
		
	</body>
</html>