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
			var_dump($this->request->data);
			if ($this->Salon->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'Votre salon a bien ete cree' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			}
			$this->Session->setFlash ( __ ( 'Impossible de creer votre salon' ) );
		}
	}
}
?>