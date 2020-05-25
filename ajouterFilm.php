<!DOCTYPE html>
<html lang="fr">
    <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<link rel="stylesheet" href="style/vod.css" />

	</head>

    <body>
		
		<table>
			<td>
		<?php
		
		
		$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'root' , 'azerty' ) ;
		
		$sql = 'select max(numFilm) as numMax from film' ;
		
		$resultat = $bd->query($sql) ;
		
		$numMax = 'numMax' + 1 ;
		
		$st = $bd->prepare( $sql ) ;
		
		$sql1 = 'select numFilm, titre , annee , realisateur from Film' ;
		
		$st->execute( array( ':pays' => 'Italie' ) ) ;
		
		
		?>
			</td>
		</table>
		
	</body	
</html>	
