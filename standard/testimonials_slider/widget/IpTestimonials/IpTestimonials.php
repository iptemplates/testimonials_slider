<?php
/*
    Plugin name: Testimonials slider
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/

namespace Modules\standard\testimonials_slider\widget;

if (!defined('CMS')) exit;


class IpTestimonials extends \Modules\standard\content_management\Widget {

    public function __construct($name, $moduleGroup, $moduleName, $core = false) {
        parent::__construct($name, $moduleGroup, $moduleName, $core);

        $this->moduleDir = BASE_DIR.PLUGIN_DIR.$this->moduleGroup.'/'.$this->moduleName;
        $this->widgetDir = $this->moduleDir.'/widget/'.$this->name.'/';
        $this->managementDir = $this->widgetDir.self::MANAGEMENT_DIR;
        $this->previewDir = $this->widgetDir.self::PREVIEW_DIR;
    }

    public function getTitle() {
        global $parametersMod;

        return $parametersMod->getValue('standard', 'testimonials_slider', 'translations', 'plugin_title');
    }
    
    public function managementHtml($instanceId, $data, $layout) {
        $data = array(
        	'testimonials' => $this->getTestimonials()
        );
        
        $response = \Ip\View::create($this->managementDir.'/default.php', $data)->render();

        return $response; 
    }

    public function previewHtml($instanceId, $data, $layout) {
        $data = array(
            'testimonials' => $this->getTestimonials()
        );

        $response = \Ip\View::create($this->previewDir.'/'.$layout.'.php', $data)->render();

        return $response;
    }

    private function getTestimonials(){
        global $site;

        require_once($this->moduleDir.'/model.php');

        $lang = $site->currentLanguage['id'];
        $testimonials = \Modules\standard\testimonials_slider\Model::getTestimonials($lang);

        return $testimonials;
    }
    
}
