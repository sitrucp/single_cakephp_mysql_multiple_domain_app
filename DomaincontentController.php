
<?php
App::uses('AppController', 'Controller');

class DomaincontentsController extends AppController {

	public function index() {
		$this->Domaincontent->recursive = 0;
		$this->set('domaincontent', $this->paginate(array('hide is null', 'domain_id' => Configure::read('domain_id'))));
	}


}

?>