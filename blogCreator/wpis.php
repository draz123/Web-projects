<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tworzenie wpisu</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	</head>
	<body>

		<?php
			
			include 'menu.php';

			$login= $_POST["nazwa"]."\n";
			$haslo= md5($_POST["haslo"])."\n";

			$dir = new DirectoryIterator('../projekt/');
			foreach($dir as $file)
			{
			if($file->isDot()){
				continue;
			}	
			$check=1;
			if($file->isDir() and (!strstr($file,".k"))){
				$info = fopen(spaces($file)."/info.txt", "r");
				$login_src=fgets($info);
				if($login_src==$login){
					$haslo_src= fgets($info);
					if($haslo_src==$haslo){
						$date_format = substr($_POST["data"], 0, 4).substr($_POST["data"], 5, 2).substr($_POST["data"], 8, 2).substr($_POST["godzina"], 0, 2).substr($_POST["godzina"], 3, 2).date('s');	
						$dir2 = new DirectoryIterator("../projekt/$file/");
						$count=1;
						foreach($dir2 as $file2)
						{	
							if(1==preg_match("/$date_format/","$file2")){
								$count=$count+1;
							}
						}
						if($count<10)
							$count="0".$count;
						$nowy= fopen($file."/$date_format".$count.".txt","w");
						fwrite($nowy, $_POST["wpis"]);
						
						
						$attachment1 = basename($_FILES['plik1']['name']);
						$attachment2 = basename($_FILES['plik2']['name']);
						$attachment3 = basename($_FILES['plik3']['name']);
						if ($attachment1 != "") { 
							$ext = pathinfo($attachment1);
							move_uploaded_file($_FILES['plik1']['tmp_name'], $file."/".$date_format.$count."1.".$ext['extension']);
						}
						if ($attachment2 != "") {
							$ext = pathinfo($attachment2);
							move_uploaded_file($_FILES['plik2']['tmp_name'], $file."/".$date_format.$count."2.".$ext['extension']);
						}
						if ($attachment3 != "") {
							$ext = pathinfo($attachment3);
							move_uploaded_file($_FILES['plik3']['tmp_name'], $file."/".$date_format.$count."3.".$ext['extension']);
						}
						echo "Wpis stworzony!";
						menu();
						$check=0;
						break;
					} else{
						echo "Niepoprawne hasło";
						menu();
						break;
					}
					
				}
			}
			}
			if(!$check==0){
				echo "Nie posiadasz żadnego blogu.";
				menu();
			}

		?>

	</body>
</html>
