<?php
/**
 * Parks & Parkers Post Formats
 * 
 * Adds extra fields & options for post formats
 */

/**
 * TODO
 * Use postbox id as base for field ID and field NAME !important!
 * Find out why postbox all using same (last) fields
 */

/**
Plugin Name: Parks & Parker Post Formats
Description: Adds extra fields to post formats
Plugin URI:  http://parksandparker.com
Author:      SyamilMJ
Author URI:  http://parksandparker.com
Version:     0.1
License:     GPL2
Text Domain: p12r
Domain Path: lang
*/

/**
 * Copyright (c) January 2014 Syamil MJ. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


define('PNPPF_DIR_URL', plugin_dir_url(__FILE__));

require 'post-formats/post-formats.php';
require 'custom-gallery/custom-gallery.php';
