<?php

include_once 'php/autoload.php';

// Wordpress ------

function loadInit() {
    ConfigAdmin::loadInit();
    Config::loadShortcodes();
}

add_action( 'init', 'loadInit' );

function loadAdmin()  {
    ConfigAdmin::loadAdmin();
} 

add_action('admin_menu', 'loadAdmin');

function loadWidget() {
    ConfigAdmin::loadWidget();
}

add_action( 'widgets_init', 'loadWidget' );


// Theme Functions -------

function loadConfig() {
    Config::loadScripts();
}

add_action( 'wp_enqueue_scripts', 'loadConfig');


// silencer script  ----------------
function jquery_migrate_silencer() {
    // create function copy
    $silencer = '<script>window.console.logger = window.console.log; ';
    // modify original function to filter and use function copy
    $silencer .= 'window.console.log = function(tolog) {';
    // bug out if empty to prevent error
    $silencer .= 'if (tolog == null) {return;} ';
    // filter messages containing string
    $silencer .= 'if (tolog.indexOf("Migrate is installed") == -1) {';
    $silencer .= 'console.logger(tolog);} ';
    $silencer .= '}</script>';
    return $silencer;
}

// for the frontend, use script_loader_tag filter
//add_filter('script_loader_tag','jquery_migrate_load_silencer', 10, 2);
function jquery_migrate_load_silencer($tag, $handle) {
    if ($handle == 'jquery-migrate') {
        $silencer = jquery_migrate_silencer();
        // prepend to jquery migrate loading
        $tag = $silencer.$tag;
    }
    return $tag;
}

// for the admin, hook to admin_print_scripts
//add_action('admin_print_scripts','jquery_migrate_echo_silencer');
function jquery_migrate_echo_silencer() {echo jquery_migrate_silencer();}