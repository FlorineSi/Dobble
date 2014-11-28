<?php
class SalonsController extends AppController {
	public $helpers = array (
			'Html',
			'Form' 
	);
	public function index() {
		$this->set ( 'salons', $this->Salon->find ( 'all' ) );
	}
	public function add() {
		if ($this->request->is ( 'post' )) {
			$this->Salon->create ();
			if ($this->Salon->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'Votre salon a bien ete cree' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'Impossible de creer votre salon' ) );
		}
	}
	public function rejoindre(){
		$this->set ( 'id_salon', $this->params['pass'][0]);		
		$this->set ( 'salon', $this->Salon->find ( 'all' ) );
	}
}
?>