<?php

// Wordpress ------

require 'php/ConfigAdmin.php';
require 'php/Shortcode.php';
require 'php/Shortcodes.php';


function loadInit() {
    ConfigAdmin::loadInit();
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

// Theme Functions -------

require 'php/Config.php';
require 'php/Menu.php';


function loadConfig() {
    Config::loadScripts();
}

add_action( 'wp_enqueue_scripts', 'loadConfig');

function subMenu($withImage) {
    global $post;
    
    $mypages = get_pages('parent='.$post->ID.'&sort_column=menu_order');
    
    if ($withImage){
        echo Menu::getMenuImg($mypages);
    }
    else {
        echo Menu::getMenuSenzaImg($mypages);
    }
}


function menuImage() {
    global $showMenu;
    if (isset($showMenu)){ subMenu(true); }
}

function menuSenzaImage() {
    global $showMenu;
    if (isset($showMenu)){ subMenu(false); }
}

function backMenuInterno() {
    global $post;
    echo Menu::getMenuBack($post);

}

function salta( $atts ){
    return "hello";
}

function addShort() {
    add_shortcode('menu_image','menuImage');
    add_shortcode('menu_senza_image', 'menuSenzaImage');
    add_shortcode('back_menu_interno', 'backMenuInterno');
}

add_action( 'init', 'addShort' );


//$shortcodes = new Shortcodes($post);