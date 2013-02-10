<?php
/*
    Plugin name: Testimonials slider
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/

namespace Modules\standard\testimonials_slider\widget;

if (!defined('CMS')) exit;

class IpTestimonial extends \Modules\standard\content_management\Widget{

    public function getTitle(){
        global $parametersMod;
        return $parametersMod->getValue('standard', 'testimonials_slider', 'translations', 'plugin_title');
    }
    
    public function managementHtml($instanceId, $data, $layout){}

    public function previewHtml($instanceId, $data, $layout){}
    
}
