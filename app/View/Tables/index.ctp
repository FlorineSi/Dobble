<?php echo $this->Html->css('forms');?>
<h1>Liste des Cartes</h1>
<?php
$nb_fichier = 1;
$tab_images = array();
if ($dossier = opendir ( './img/img' )) {
	while ( false !== ($fichier = readdir ( $dossier )) )
		if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
			$tab_images[$nb_fichier] = $fichier;
			$nb_fichier ++;
		}
}

function cards() {
	function c($i, $j) {
		return $i + 7*$j + 9;
	}
	$A = array();
	$B = array();
	$C = array();
	for ($i=0; $i<8; $i++) {
		$A[0][] = 1 + $i;
	}
	for ($i=0; $i<7; $i++) {
		$B[$i][] = 1;
		for ($j=0; $j<7; $j++) {
			$B[$i][] = c($i, $j);
		}
	}
	for ($i=0; $i<7; $i++) {
		for ($j=0; $j<7; $j++) {
			$C[$i+7*$j][] = $i+2;
			for ($k=0; $k<7; $k++) {
				$C[$i+7*$j][] = c($k, ($k*$i+$j)%7);
			}
		}
	}
	shuffle($A);
	shuffle($B);
	shuffle($C);
	$tab = array_merge($A, $B, $C);
	shuffle($tab);
	return $tab	;
}

$a = cards();

foreach($a as $carte){?>
	<div class = "carte" style = "border: solid blue;
border-radius: 50%;
height: 350px;
width: 350px;">
	<?php 
	$nb=0;
	foreach($carte as $symbole){
		// symbole : id de l'image
		echo "<div class = symb".$nb." id =".$symbole.">";
		echo $this->Html->image ( "img/".$tab_images[$symbole], array ('fullBase' => true ) );
		echo "</div>";
		$nb++;
	}
	echo "</div>";

}

?>