<h1>Liste des Salons</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Nom</th>
		<th>Nombre de joueurs</th>
		<th>Rejoindre</th>
    <?php foreach ($salons as $salon): ?>
    	<tr>
			<td><?php echo $salon['Salon']['id_salon']; ?></td>
			<td><?php echo $salon['Salon']['nom_salon']; ?></td>
			<td><?php echo $salon['Salon']['nb_users'].'/'.$salon['Salon']['nb_users_max']; ?></td>
			<td><?php echo $this->Html->link ( 'Rejoindre', array ('action' => 'edit',$salon ['Salon'] ['id_salon'] ) );?></td>
		</tr>
    <?php endforeach; ?>
</table>

<?php

echo $this->Html->link ( 'Ajouter un salon', array (
		'controller' => 'salons',
		'action' => 'add' 
) );
?>