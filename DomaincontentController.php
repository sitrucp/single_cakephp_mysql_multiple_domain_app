
<?php
App::uses('AppController', 'Controller');

class DomaincontentsController extends AppController {

	public function index() {
		$this->Domaincontent->recursive = 0;
		//retrieve data from model for current domain only
		$this->set('domaincontent', $this->paginate(array('domain_id' => Configure::read('domain_id'))));
	}


}

?>
