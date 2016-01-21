<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/Template.php';

// Create a new Template Object
$one                               = new Template('DropZone', '1.0', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = 'HiveLabs Solutions';
$one->robots                       = '';
$one->title                        = 'DropZone : Character Repository, Database and Blog for XCOM 2';
$one->description                  = '';

// Global Included Files (eg useful for adding different sidebars or headers per page)
$one->inc_side_overlay             = 'base_side_overlay.php';
$one->inc_sidebar                  = 'base_sidebar.php';
$one->inc_header                   = 'base_header.php';

// Global Color Theme
$one->theme                        = '';       // '' for default theme or 'amethyst', 'city', 'flat', 'modern', 'smooth'

// Global Cookies
$one->cookies                      = false;    // True: Remembers active color theme between pages (when set through color theme list), False: Disables cookies

// Global Body Background Image
$one->body_bg                      = '';       // eg 'assets/img/photos/photo10@2x.jpg' Useful for login/lockscreen pages

// Global Header Options
$one->l_header_fixed               = true;     // True: Fixed Header, False: Static Header

// Global Sidebar Options
$one->l_sidebar_position           = 'left';   // 'left': Left Sidebar and right Side Overlay, 'right;: Flipped position
$one->l_sidebar_mini               = false;    // True: Mini Sidebar Mode (> 991px), False: Disable mini mode
$one->l_sidebar_visible_desktop    = true;     // True: Visible Sidebar (> 991px), False: Hidden Sidebar (> 991px)
$one->l_sidebar_visible_mobile     = false;    // True: Visible Sidebar (< 992px), False: Hidden Sidebar (< 992px)

// Global Side Overlay Options
$one->l_side_overlay_hoverable     = false;    // True: Side Overlay hover mode (> 991px), False: Disable hover mode
$one->l_side_overlay_visible       = false;    // True: Visible Side Overlay, False: Hidden Side Overlay

// Global Sidebar and Side Overlay Custom Scrolling
$one->l_side_scroll                = true;     // True: Enable custom scrolling (> 991px), False: Disable it (native scrolling)

// Global Active Page (it will get compared with the url of each menu link to make the link active and set up main menu accordingly)
$one->main_nav_active              = basename($_SERVER['PHP_SELF']);

// Global Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Overview</span>',
        'icon'  => 'si si-bulb',
        'url'   => 'index.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Changelog</span>',
        'icon'  => 'si si-layers',
        'url'   => 'changelog.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Character Pool</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Pools</span>',
        'icon'  => 'si si-users',
        'url'   => '#'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Add Character</span>',
        'icon'  => 'si si-user-follow',
        'url'   => 'add_character.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Databases</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Classes</span>',
        'icon'  => 'si si-globe',
        'url'   => 'database_classes.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Weapons</span>',
        'icon'  => 'si si-target',
        'url'   => '#'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Equipment</span>',
        'icon'  => 'si si-wrench',
        'url'   => '#'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Aliens</span>',
        'icon'  => 'si si-fire',
        'url'   => '#'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Buildings</span>',
        'icon'  => 'si si-grid',
        'url'   => '#'
    )
);