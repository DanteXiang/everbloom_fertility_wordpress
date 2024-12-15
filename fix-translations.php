<?php
/*
Plugin Name: Fix Translations Loading
Description: Fixes premature translation loading
Version: 1.0
*/

add_action('init', function() {
    remove_action('plugins_loaded', '_load_textdomain_just_in_time');
    add_action('init', '_load_textdomain_just_in_time');
}); 