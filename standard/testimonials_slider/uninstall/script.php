<?php
/*
	Plugin name: Testimonials slider
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/         
   
namespace Modules\standard\testimonials_slider;    
		
if (!defined('CMS')) exit;   

class Uninstall{             

	public function execute(){             

		$sql = "DROP TABLE `".DB_PREF."m_ipt_testimonials` ";             
		$rs = mysql_query($sql);             
		if(!$rs){              
			trigger_error($sql." ".mysql_error());             
		}      

		$sql = "DROP TABLE `".DB_PREF."m_ipt_testimonials_lang` ";             
		$rs = mysql_query($sql);             
		if(!$rs){              
			trigger_error($sql." ".mysql_error());             
		}             

	}

}     
