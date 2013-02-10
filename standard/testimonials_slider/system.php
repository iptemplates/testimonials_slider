<?php
/*
    Plugin name: Testimonials slider
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/  

namespace Modules\standard\testimonials_slider;

if (!defined('CMS')) exit;

class System{

	function init(){
		global $site;

		$public_dir = BASE_URL.PLUGIN_DIR.'standard/testimonials_slider/public/';
		$css_dir = $public_dir.'css/';
		$img_dir = $public_dir.'img/';
		$js_dir  = $public_dir.'js/';

		$site->addCss($css_dir.'testimonials.css');
		$site->addJavascript($js_dir.'testimonials.js');
	}

}
