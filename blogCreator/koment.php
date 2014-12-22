<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Dodawanie komentarza</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	</head>
	<body>

		<?php
			include 'menu.php';
		?>

		<form action="dodaj_koment.php" method="post">
		Typ komentarza:
		<select name="rodzaj">
			<option value="pozytywny">Pozytywny</option>
			<option value="negatywny">Negatywny</option>
			<option value="neutralny">Neutralny</option>
		</select><br/><br/>
		Treść komentarza:<br/>
		<textarea name="komentarz" cols="30" rows="5" ></textarea><br/>
		<br/>
		Podpis:<br/> 
		<input type="text" name="pseudonim" required/><br/>
		<br/>
		<?php
			echo'<input type="hidden" name="filename" value="'.$_POST['v'].'" />';
		?>
		<input type="submit" value="Potwierdź">
		<input type="reset" value="Wyczyść">		
		</form>		
	
		<?php
		menu();
		?>
		
	</body>
</html>