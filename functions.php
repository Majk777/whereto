<?php

add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');

function mike_styles_setup(){
    $version = wp_get_theme()-> get('Version');
    wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array('asset-css'),$version );
    wp_enqueue_style( 'asset-css', get_template_directory_uri() . '/assets/css/style.css', array(),$version );
    
}

add_action('wp_enqueue_scripts','mike_styles_setup');



function mike_scripts(){
wp_enqueue_script('main-script',get_template_directory_uri() . '/assets/js/index.js',array(),'1.0',true);

wp_script_add_data('main-script', 'type', 'module');

}
add_action('wp_enqueue_scripts','mike_scripts');


function custom_comment_form_comment($comment_field) {
  
    
    $comment_field = '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Treść wiadomości" aria-required="true"></textarea> <br>';
   
    return $comment_field;
}
add_filter('comment_form_field_comment', 'custom_comment_form_comment');


function custom_comment_form_fields($fields) {
    
    unset($fields['url']);

    // Modyfikuj pole e-mail
    $fields['email'] = '<input id="email" name="email" type="email" placeholder="Email" value="" aria-required="true" />';

    // Modyfikuj pole autora
    $fields['author'] = '<input id="author" name="author" type="text" placeholder="Imię" value="" aria-required="true" />';

    return $fields;
}

add_filter('comment_form_default_fields', 'custom_comment_form_fields');

function custom_comment_reply_link($link) {
    // Twoja własna etykieta
    $reply_text = 'Odpowiedz';

    // Zamień oryginalną etykietę na dostosowaną
    $link = str_replace('Reply', $reply_text, $link);

    // Zwróć zmodyfikowany link
    return $link;
}


add_filter('comment_reply_link', 'custom_comment_reply_link');

