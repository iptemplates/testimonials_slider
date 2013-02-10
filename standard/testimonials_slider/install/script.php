<?php
/*
	Plugin name: Testimonials slider
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/

namespace Modules\standard\testimonials_slider;
				  
if (!defined('CMS')) exit;              
				  
class Install{                  

	public function execute(){                  

        $sql="
			CREATE TABLE IF NOT EXISTS `".DB_PREF."m_ipt_testimonials` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`row_number` int(11) NOT NULL,
				`url` varchar(255) NOT NULL,
				`visibility` tinyint(1) DEFAULT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
        ";

        $response = mysql_query($sql);

        if(!$response){
			trigger_error($sql." ".mysql_error());
        }

        $sql="                  
			CREATE TABLE IF NOT EXISTS `".DB_PREF."m_ipt_testimonials_lang` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`record_id` int(11) NOT NULL,
				`language_id` int(11) NOT NULL,
				`author` varchar(255) NOT NULL,
				`position` varchar(255) NOT NULL,
				`testimonial` varchar(255) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8;               
        ";               

        $response = mysql_query($sql);                  
                          
        if(!$response){                   
       		trigger_error($sql." ".mysql_error());                  
        }                 

	}   
	              
}
