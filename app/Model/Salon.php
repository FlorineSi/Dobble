<?php
class Salon extends AppModel{
	public $validate = array(
			'nom_salon' => array(
					'rule' => 'notEmpty'
			),
			'nb_users_max' => array(
					'rule' => 'notEmpty'
			),
			'password' => array(
					'rule'    => array('minLength', '8'),
					'message' => '8 caractères minimum'
			),
			
			//'/^[a-z0-9]{3,}$/i',
			'nb_users_max' => array(
					'rule1' => array(
							'rule'    => 'alphaNumeric'
					),
					'rule2' => array(
							'rule'    => '/^[0-9]{1,}$/i',
							'message' => 'Veuillez saisir un nombre'
					)
			)
	);
}