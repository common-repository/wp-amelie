<?php
/***
Plugin Name: wp-amelie
Plugin URI: http://codenerd.ca/code/wp-amelie/
Description: This plugin helps migrate your users away form IE6 using subversive techniques. See <a href='http://icant.co.uk/ie6-amelie/'>icant.co.uk</a> for more information.
Version: 1.0
Author: theCodeNerd
Author URI: http://codenerd.ca
License: GPL2
*/
/*  Copyright 2010  theCodeNerd  (email : thenerd@codenerd.ca)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
wp_enqueue_script('amelie', WP_PLUGIN_URL . '/amelie-small.js');
