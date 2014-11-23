<h1>Liste des Utilisateurs</h1>
<table>
<tr><th>Id</th><th>Nom</th><th>Mot de Passe </th>	
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['password']; ?></td>
	 </tr>
    <?php endforeach; ?>
</table>