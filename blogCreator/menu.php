<?php 

		function spaces($word){
			if(strstr($word," ")){
				$result=str_replace(" ","+",$word);
			}
			else{
				$result=$word;
			}
		return $result;
		}
		
//------------------------------------------------------------------------------------------------------

		function plus($word){
			if(strstr($word,"+")){
				$result=str_replace("+"," ",$word);
			}
			else{
			$result=$word;
			}
		return $result;
		}	
	
	
//menu 
//------------------------------------------------------------------------------------------------------

		function menu(){
			$files = scandir('.');
			?>
			<h3> Nawigacja</h3>
			<ol type="1">
				<li><a href=http://localhost/projekt/stworzBlog.php> Stwórz nowy blog </a></li>
				<li><a href=http://localhost/projekt/stworzWpis.php> Dodaj wpis </a></li>
				<li><a href=http://localhost/projekt/blog.php> Powrót do menu </a></li>
				<ol type="1">
					
					<?php
					
						foreach($files as $file) {		
							if(!strstr($file,".php")and ($file!=".") and ($file!="..")and !strstr($file,".txt")and !strstr($file,".k")){	
							 echo "<li><a href=http://localhost/projekt/blog.php?nazwa=$file>".plus($file)." </a></li>" ;

							}
						}
					?>
					
					</ol>	
				</ol>

				<?php
		}
		
//------------------------------------------------------------------------------------------------------
	

?>
