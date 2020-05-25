<!DOCTYPE html>
<html lang="fr">
    <head>
		
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 
	 <link rel="stylesheet" href="style/vod.css" />
	 
    </head>
    
    <body>
		
		<strong>Liste des films </strong>  
		
		<table>
			
			<td>
				
			
		<?php
		$bd = new PDO ('mysql:host=localhost;dbname=vod', 'root' , 'azerty') ;
		
		$sql = 'select * from Film' ;
		
		$resultat = $bd->query($sql) ;
		
		while ($uneLigne = $resultat->fetch() ) { 
			echo $uneLigne['titre'] ;
			echo '<br>' ;
		}
		
		$resultat -> closeCursor();
		
		
		?>
				
			</td>
			
		</table>
    
    
    </body>
</html>
