<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('config')) {

    function config_pagination($url, $rows) {
        return array(
            'base_url' => $url,
            'per_page' => 8,
            'num_links' => 3,
            'uri_segment' => 3,
            'total_rows' => $rows,
            'full_tag_open' => "<ul class = 'pagination'>",
            'full_tag_close' => "</ul>",
            'first_link' => FALSE,
            'last_link' => FALSE,
            'first_tag_open' => "<li>",
            'first_tag_close' => "</li>",
            'prev_link' => "Anterior",
            'prev_tag_open' => "<li class = 'prev'>",
            'prev_tag_close' => "</li>",
            'next_link' => "Próximo",
            'next_tag_open' => "<li class = 'next'>",
            'next_tag_close' => "</li>",
            'last_tag_open' => '<li>',
            'last_tag_close' => '</li>',
            'cur_tag_open' => "<li class = 'active'><a href = '#'>",
            'cur_tag_close' => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
    }

}
