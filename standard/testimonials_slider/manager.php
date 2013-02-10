<?php
/*
    Plugin name: Testimonials slider
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/  

namespace Modules\standard\testimonials_slider;
	
if (!defined('BACKEND')) exit;  
	
// form
require_once(__DIR__.'/items_area.php');
	
class Manager{

	public $standardModule;     

	function __construct() {    
		$itemsArea = new ItemsArea();
		$this->standardModule = new \Modules\developer\std_mod\StandardModule($itemsArea); 
	}    

	function manage() {    
		return $this->standardModule->manage();
	}    

}
