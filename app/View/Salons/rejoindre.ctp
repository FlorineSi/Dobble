<h1>Vous etes dans le salon : <?php echo $salon[0]['Salon']['id_salon']; ?></h1>
<?php

$nb_users_max = $salon [0] ['Salon'] ['nb_users_max'];
?>
<ul>
<?php
for($i = 0; $i < $nb_users_max; $i ++) {
	?>
	<li></li>
	<?php
// Pour tout les utilisateurs, afficher ceux dont game_id == salon_id
// AJAX!!!!!!
}
?> 


</ul>
<?php
var_dump ( $salon );

?>


