<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public function beforeFilter() {
		$this-> getDomainSettings(); 	
	}
	
	//Function which reads settings from domain table  
	function getDomainSettings(){
		//get current domain from server name as variable
		$domain = preg_replace('/^www\./', '', $_SERVER['SERVER_NAME']);
		//Load model to get domain table data 
		$this->loadModel('Domain');
		//Retrieve only current domain row from domain table for this site visitor
		$domain_settings = $this->Domain->find('all', array('conditions' => 
		array('Domain.domain' => $domain)));  
		foreach($domain_settings as $value){
			//create vars to use in Configure::Write in any subsequent view
			Configure::write('domain', $value['Domain']['domain']);
			Configure::write('domain_id', $value['Domain']['id']);
			Configure::write('ga_code', $value['Domain']['ga_code']);
			Configure::write('meta_title', $value['Domain']['meta_title']);
			Configure::write('meta_keywords', $value['Domain']['meta_keywords']);
			Configure::write('meta_description', $value['Domain']['meta_description']); 
			
			etc retrieve as many domain specific values as required from database
		}
	}
}

?>
