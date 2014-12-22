<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Dodaj blog</title>
		<meta http-equiv="content-type"
			content="text/html;charset=UTF-8" />

	</head>
	
	<body>

	<?php 
		include 'menu.php';	

		$path1 =$_POST["tytul"];
		if (!is_dir($path1)) { 
			$path=spaces($path1);
			mkdir($path, 0755, true);
			$info = fopen($path."/info.txt", "w");
			if($info!=false){
				chmod($path."/info.txt", 0755);
				$nazwa =$_POST["nazwa"];
				fwrite($info, $nazwa."\n");
				$passwd = $_POST["haslo"];
				$pass = md5($passwd); 
				fwrite($info, $pass."\n");
				fwrite($info, $_POST["opis"]);
				fclose($info);			
				echo ("Pomyślnie utworzono blog");
				menu();
			} 
			else{
				echo ("utworzono blog, wystąpił błąd podczas tworzenia info.txt");
				menu();
			}
			
		} 
		else{
			echo ("Podany blog istnieje"); 
			menu();
		}

		?>
		
	</body>
</html>
