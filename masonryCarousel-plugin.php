<?php
/**
 * @package masonryCarouselPlugin
 */
    /*
        Plugin Name: Masonry Carousel
        Plugin URI: http://thevapereview.ca
        Description: A carousel that incorporates a masonry design.
        Version: 1.0.0
        Author: Brian Kan
        Author URI: www.Brian-Kan.ca
        License: GPLv2 or later
        Text Domain: masonryCarousel-plugin
    */
/*
Copyright (C) 2020  Brian Kan

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/* Security Type 1 */
/*
if (!definted('ABSPATH')) {
    die;
}
*/

/* Security Type 2 */
defined('ABSPATH') or die(`Hey, do you like Disney?  I love Disney.  It's so magical.`)

/* Security Type 3 */
/*
if( !function_exists('add_action')){
    echo `Hey, do you like Disney?  I love Disney.  It's so magical.`;
    exit;
}
*/

class MasonryCarouselPlugin {

    function __construct() {
        add_action('init', array( $this, 'custom_post_type'));
    }
    function activate() {
        // generated a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function deactivate() {
        // flush rewrite rules
    }

    function uninstall() {
        // delete CPT
        // delete all the plugin data from the DB
        // Create uninstall.php
    }

    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
    
}

if (class_exists('MasonryCarouselPlugin')) {
    $masonryCarouselPlugin = new MasonryCarouselPlugin();
}

function customFunction($arg) {
    echo $arg;
}

// activation
register_activation_hook( __FILE__, array($masonryCarouselPlugin, 'activate') );

// deactivation
register_deactivation_hook( __FILE__, array($masonryCarouselPlugin, 'deactivate') );

// uninstall
// Create uninstall.php
