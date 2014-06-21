<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public function beforeFilter() {
		$this-> getDomainSettings(); 	
	}
	
	//function which reads settings from domain table  
	function getDomainSettings(){
		//get current domain from server name as variable
		$domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);
		//Load domain model data
		$this->loadModel('Domain');
		//retrieve only current domain table record
		$domain_settings = $this->Domain->find('all', array('conditions' => 
		array('Domain.domain' => $domain)));  
		foreach($domain_settings as $value){
			//create Configure::Write variables from domain record to use elsewhere in application
			Configure::write('domain', $value['Domain']['domain']);
			Configure::write('domain_id', $value['Domain']['id']);
			Configure::write('ga_code', $value['Domain']['ga_code']);
			Configure::write('meta_title', $value['Domain']['meta_title']);
			Configure::write('meta_keywords', $value['Domain']['meta_keywords']);
			Configure::write('meta_description', $value['Domain']['meta_description']); 
			
			//etc retrieve as many domain specific values as required from database
		}
	}
}

?>
