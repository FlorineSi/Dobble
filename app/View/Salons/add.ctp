<h1>Ajouter un salon</h1>
<?php
echo $this->Form->create('Salon');
echo $this->Form->input('nom_salon', array('label' => 'Nom du salon'));
echo $this->Form->input('nb_users_max', array('label' => 'Nombre de joueurs'));
echo $this->Form->end('Sauvegarder le salon');


?>