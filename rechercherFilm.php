<!DOCTYPE html>
<html lang="fr">
    <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >


	</head>

    <body>
		
		<?php
		
		$recherche = $_POST['recherche']
		
		?>
		
		<?php
		
		$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'root' , 'azerty' ) ;
		
		$sql = 'select titre from Film where titre = :titre' ;
		
		$st = $bd->prepare( $sql ) ;
		
		$st->execute( array( ':titre' => 'recherche') ) ;
		
		$count = $st-> rowCount() ;
		
		var_dump($count) ; 
		
		var_dump($st) ; 
		
		
		?>
		
		
	</body>
</html>
