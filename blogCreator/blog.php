<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Blog</title>
		<meta http-equiv="content-type"
			content="text/html;charset=UTF-8" />
	</head>
	<body>

		<?php 

			include 'menu.php';
			
			if ($_GET!=null){
				$id = $_GET['nazwa'];
				echo '<h2>'.$id.'</h2>';
				
				if (is_dir(spaces($id))) {
					$info = fopen(spaces($id)."/info.txt", "r");
					$author=fgets($info);
					$tmp2=fgets($info);
					$description=fgets($info);
					
					echo '<h3>'.$description.'</h3>';		
					echo '<h4>'.$author.'</h4>';
					
					$files = scandir(spaces($id).'/');
					foreach($files as $file) {
						if(($file=="info.txt") or ($file==".") or ($file=="..")){
						}
						else{
							$tmp = fopen(spaces($id).'/'.$file, "r");
							$content1=fgets($tmp);
							echo '<p>'.$content1.'</p>';
							$files = scandir('.');
							
							?>
						
							<form action="koment.php" method="post" enctype="multipart/form-data">
							
							<?php		
								echo'<input type="hidden" name="v" value="'.$file.'" />';
							?>				
							
							<input type="submit"  value="Komentuj">						
							</form>					
							<h3>Komentarze:</h3>				
							<hr />
							
							<?php
							
								foreach($files as $comments) {					
									if($file==substr($comments, 0, strpos($comments, ".")).'.txt'){
							

										if(strstr($comments,".k")){
											$files = scandir($comments.'/');
											foreach($files as $numbers){
												if(($comments.'/'.$numbers!=$comments.'/.') and ($comments.'/'.$numbers!=$comments.'/..')){
													$kom = fopen($comments.'/'.$numbers, "r");
													$rate=fgets($kom);
													$time=fgets($kom);
													$author=fgets($kom);
													$cont=fgets($kom);
													echo '<p>'.$rate.'</p>';
													echo '<p>'.$time.'</p>';
													echo '<p>'.$author.'</p>';
													echo '<p>'.$cont.'</p>';
													
													?>
													<hr />
													<?php
													
												}
											}
										}
									}
								}	
						}
					}
					menu();
					}
				else{
					echo "Brak blogu o podanej nazwie";
					menu();		
				}
			}
		else{
			menu();
		}
		?>
	</body>

</html>

