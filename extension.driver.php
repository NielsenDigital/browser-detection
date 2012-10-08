<?php
	
	
	Class extension_browser_detection extends Extension{
	
		public function about(){
			return array(
				'name' => 'Browser Detection',
				'version' => '1.1',
				'release-date' => '2012-10-08',
				'author' => array(
				 		'name' => 'Will Nielsen, Phill Gray'
					),
				'description' => 'Detects the users browser and OS, and outputs as params in the param pool.'
		 		);
		}
		
	}
?>