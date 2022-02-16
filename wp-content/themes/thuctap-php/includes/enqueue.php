<?php

if(!function_exists('thuctap_enqueue')){
    function thuctap_enqueue(){
        $ver = time();
        wp_register_style('thuctap_style',THEME_URI.'/accset/css/style.css');
        wp_register_style('thuctap_sukien', THEME_URI.'/accset/css/sukien.css');
        wp_register_style('thuctap_sk-1', THEME_URI.'/accset/css/sk-1.css');
        wp_register_style('thuctap_lienHe', THEME_URI.'/accset/css/lienHe.css');
        wp_register_style('thuctap_thanh-toan', THEME_URI.'/accset/css/thanh-toan.css');


        wp_enqueue_style('thuctap_style');
        wp_enqueue_style('thuctap_sukien');
        wp_enqueue_style('thuctap_sk-1');
        wp_enqueue_style('thuctap_lienHe');
        wp_enqueue_style('thuctap_thanh-toan');
    }
}