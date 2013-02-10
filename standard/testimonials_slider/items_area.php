<?php
/*
	Plugin name: Testimonials slider
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/  

namespace Modules\standard\testimonials_slider;

if (!defined('BACKEND')) exit;            

require_once(BASE_DIR.MODULE_DIR.'developer/std_mod/std_mod.php');            

class ItemsArea extends \Modules\developer\std_mod\Area{
	
	private $plugin_table = 'm_ipt_testimonials';
	private $translations_table = 'm_ipt_testimonials_lang';

	function __construct(){
		global $parametersMod;
								
		parent::__construct(
			array(
				'dbTable' => $this->plugin_table, 
				'title' => 'Testimonials', 
				'dbPrimaryKey' => 'id',  
				'searchable' => true,  
				'orderBy' => 'row_number',  
				'sortable' => true, 
				'sortField' => 'row_number' 
			)
		);

		// Author
		$element = new \Modules\developer\std_mod\ElementTextLang(                  
			array(                     
				'title' => $this->translate('author_field_name'),                  
				'showOnList' => true,                  
				'required' => true,             
				'searchable' => true,                  
				'translationTable' => $this->translations_table, 
				'translationField' => 'author' 
			)                
		);                
		$this->addElement($element);   

		// Position
		$element = new \Modules\developer\std_mod\ElementTextLang(                  
			array(                     
				'title' => $this->translate('position_field_name'),                  
				'showOnList' => true,                  
				'required' => false,             
				'searchable' => true,                  
				'translationTable' => $this->translations_table, 
				'translationField' => 'position' 
			)                
		);                
		$this->addElement($element);

		// Url               
		$element = new \Modules\developer\std_mod\ElementText(             
			array(                     
				'title' => $this->translate('website_field_name'),              
				'showOnList' => true,                 
				'dbField' => 'url',               
				'searchable' => true, 
				'required' => false              
			)                
		);                
		$this->addElement($element);    

		// Testimonial
		$element = new \Modules\developer\std_mod\ElementTextareaLang(                  
			array(                     
				'title' => $this->translate('testimonial_field_name'),                  
				'showOnList' => true,                  
				'required' => true,             
				'searchable' => true,                  
				'translationTable' => $this->translations_table, 
				'translationField' => 'testimonial' 
			)                
		);                
		$this->addElement($element);  

		// Visible
		$element = new \Modules\developer\std_mod\ElementBool(  
			array(
				'title' => $this->translate('visibility_field_name'),  
				'showOnList' => true,  
				'dbField' => 'visibility',  
				'required' => false, 
				'searchable' => false,  
				'defaultValue' => 1
			)
		);
		$this->addElement($element);
	}

	/*
		Return translation
	*/
	private function translate($key){
		global $parametersMod;

		return $parametersMod->getValue('standard', 'testimonials_slider', 'translations', $key);
	}

}
