<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tworzenie komentarza</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	</head>
	<body>

		<?php
					
			include 'menu.php';

			$filename=substr($_POST["filename"], 0, strpos($_POST["filename"], ".")).".k";	
			$files = scandir('.');
			$check=false;
			foreach($files as $file){
				if($filename===$file)
				{
					$check=true;
				}
			}
			if(!$check){
				mkdir($filename);
			}						
			$i=-2;
			$files = scandir($filename.'/');
			foreach($files as $file) {
				$i++;
			}			
			$nowy= fopen($filename.'/'.$i.".txt","w");
			fwrite($nowy, $_POST["rodzaj"]."\r\n");
			fwrite($nowy, date('d-m-Y H:i:s')."\r\n");
			fwrite($nowy, $_POST["pseudonim"]."\r\n");
			fwrite($nowy, $_POST["komentarz"]."\r\n");


		?>
		<p>Komentarz został dodany</p>
		
		<?php
			menu();
		?>
		
	</body>

</html>
