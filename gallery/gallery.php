<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Gallery</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<script type="text/javascript" src="gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="gallery.css">
	</head>
	<body>
		
		<?php
			if ($_GET!=null){
				$name = $_GET['name'];
			}
			else{
				echo "Somewhere is the trap";
			}
		?>


		<div class="gallery" align="center">
			<div class="thumbnails">
			<?php
				echo '<h1>'.$name.'</h1><br/>';
				$counter=1;					
				$dirname = "photos/".$name."/";
				$images = glob($dirname."*.jpg");
				foreach($images as $image) {											
						echo '<img onclick="reload(id)"   id="img'.$counter.'" src="'.$image.'" alt="Image Not Loaded" />';
						$counter++;
				}
			?>

			</div><br/>
			<div class="preview" align="center">						
			
				<?php
					
					echo '<img id="preview"  alt="img1"/>';
				?>	
				
			</div>
		</div>
		<script>
			defaultReload();
		</script>
	</body
	>
</html>
