<?php

/**
 * Plugin Name:       Sosta plugin
 * Plugin URI:        https://github.com/mostaphaelarfaoui
 * Description:       simple plugin for brief N 3.
 * Version:           1.10.3
 * Requires PHP:      7.2
 * Author:            mostapha ela
 */

add_filter('the_content', function ($con) {
    return $con . "<br> BY: " . get_the_author();
});

add_filter('the_title', function ($title) {
    if (is_single()) {
        $title =get_the_author() . " " . $title;
    }
    return $title;
});

add_filter('preprocess_comment', function ($comm) {
    $comm['comment_content'] = "<b>{$comm['comment_content']}</b>";
    return $comm;
});

// add_filter('the_content', function($cont){
//     if(is_single())
//     {
//         $posts = new WP_Query(
//             array(
//                 'author' => get_the_author_meta('ID')
//             )
//             );
//     if($posts->have_posts())
//     {
//         while ($posts->have_posts())
//         {
//             $posts->the_post();
//             $cont .= "<br><a href='".get_the_permalink(). "'>".get_the_title()."</a>";
//         }
//     }
//     }
//     return $cont;
// });