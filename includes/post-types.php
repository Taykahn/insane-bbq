<?php
/**
 * Custom post types
 */

//Instantiate new class object
$the_menu = new MBC_Theme( 'the_menu' );

$the_menu->mbc_build_cpt( 'the-menu', 'The Menu', 'The Menu', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

