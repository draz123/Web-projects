<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Gallery</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<script type="text/javascript" src="gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="gallery.css">
	</head>
	<body>
		<h1>Gallery</h1>
		<div class="index" align="center">		
			<ul>
			
			<?php 
				$dir = "photos/"; 
				$files = scandir($dir);
				$counter=1;
				foreach($files as $ind_file){
					$tmp="photos/".$ind_file."/";
					$images = glob($tmp."*.jpg");
					if($images!=null){						//tutaj w zależności od serwera trzeba hrefa zmienić
						echo '<li><a href="http://localhost/IAESTE/gallery.php?name='.$ind_file.'"><img src="'.$images[0].'" alt="Image Not Loaded" /></a></br>';
						echo $ind_file.'</li>';
						$counter++;
					}
				} 
			?>
			
			</ul>										
		</div>
	</body>
</html>