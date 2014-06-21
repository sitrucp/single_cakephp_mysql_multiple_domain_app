
<?php
App::uses('AppController', 'Controller');

class DomaincontentsController extends AppController {

	public function index() {
		$this->Domaincontent->recursive = 0;
		//retrieve data from model for current domain only
		$this->set('domaincontent', $this->paginate(array('domain_id' => Configure::read('domain_id'))));
		
		//this filter can be used in any controller function that requirees domain specific data
		//note that you must add/maintain domain_id foreign key to your tables where required
		//this controller can be used as normal by View
	}


}

?>
