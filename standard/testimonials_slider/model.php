<?php
/*
    Plugin name: Testimonials slider
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/  

namespace Modules\standard\testimonials_slider;

if (!defined('CMS')) exit;

/*
    Communicatin with database
*/
class Model{

    public static function getTestimonials($lang){
        $table = DB_PREF.'m_ipt_testimonials';
        $lang_table = DB_PREF.'m_ipt_testimonials_lang';

        $sql = "
            SELECT * FROM ".$table."
            JOIN ".$lang_table." ON ".$table.".id = ".$lang_table.".record_id
            WHERE
                visibility = 1
            AND
                language_id = ".$lang."
            ORDER BY rand()
        ";

        $response = mysql_query($sql);

        if (!$response){
            throw new \Exception($sql.' '.mysql_error());
        }

        $testimonials = array();
        while($testimonial = mysql_fetch_assoc($response)){
            $testimonials[] = $testimonial;
        }

        return $testimonials;
    }
    
}
