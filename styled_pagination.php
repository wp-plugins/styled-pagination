<?php
/*
Plugin Name: Styled Pagination
Plugin URI: http://www.rustybeard.com
Description: Add pagination to your blog
Version: 1.0
Author: Chris Kruse
Author URI: http://www.textcs.com


	Copyright 2009  Chris Kruse  (email : ckruse@textcs.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	
	
*/

function rb_getDirectory() {
	return get_bloginfo('template_directory');
}

function rb_getMaxPages() {
	global $wp_query, $posts_per_page;
	$max_pages = ceil(($wp_query->found_posts)/$posts_per_page);
	
	return $max_pages;
}

function rb_pagination($pageText = 'PAGE', $hypenText = 'OF', $prevImage = 'images/icon-prev.jpg', $nextImage = 'images/icon-next.jpg') {
	global $paged;
	
	//clean paged
	if($paged == 0 || $paged == "") { $paged = 1; }
	
	$max_pages = rb_getMaxPages();
	
	//build displayText
	$displayText = "";
	
	//previous link
	if($paged > 1)
		$displayText .= "<span id='rb-page-prev'><a href='" . clean_url(get_pagenum_link($paged-1)) . "'><img border='0' src='" . rb_getDirectory() . "/" . rb_cleanImageURL($prevImage) . "'></img></a></span>";
	
	//pages
	$displayText .= rb_pages($pageText, $hypenText);
	
	//next link
	if($paged < $max_pages)
		$displayText .= "<span id='rb-page-next'><a href='" . clean_url(get_pagenum_link($paged+1)) . "'><img border='0' src='" . rb_getDirectory() . "/" . rb_cleanImageURL($nextImage) . "'></img></a></span>";
	
	
	return $displayText;
}

function rb_pages($pageText = 'PAGE', $hypenText = 'OF') {
	return "<span id='rb-page-pages'>" . $pageText . " " . rb_cleanPaged() . " " . $hypenText . " " . rb_getMaxPages() . "</span>";
}

function rb_cleanPaged() {
	global $paged;
	if($paged == 0 || $paged == "") { $paged = 1; }
	return $paged;
}

function rb_cleanImageURL($imageURL) {
	//make sure user did not add a '/' to the begining of the url
	if(substr($imageURL, 0, 1) == "/")
		substr_replace($imageURL, "", 0, 1);
	return $imageURL;
}


?>