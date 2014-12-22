<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Zakładanie bloga</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	</head>
	<body>
		
		<?php
			include 'menu.php';
		?>
		
		<form action="nowy.php" method="post">
			Tytuł bloga:<br/>
			<input type="text" name="tytul"><br/><br/>
			Nazwa użytkownika:<br/>
			<input type="text" name="nazwa" ><br/><br/>
			Hasło:<br/>
			<input type="password" name="haslo"><br/><br/>
			Opis:<br/>
			<textarea name="opis" cols="25" rows="5"></textarea><br/><br/>
			<input type="submit" value="Potwierdź"/>
			<input type="reset" value="Wyczyść"/>	
		</form>		

		<?php
			menu();
		?>
		
	</body>
</html>