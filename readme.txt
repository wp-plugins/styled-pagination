=== Styled Pagination ===
Created By: Chris Kruse
Contributors: Chris Kruse
URL: http://www.textcs.com
Tags: pagination, page
Requires at least: 2.0
Tested up to: 2.8
Stable tag: 1.0

Add simple pagination to your site with images and display Text (PAGE 1 OF 21)

== Description ==

This plugin allows you to add simple pagination to your site using images for the previous and next links. Allows you the ability to display the current page and the total number of pages. Works with any template page (i.e. index.php, search.php, archvie.php).

Features include:
1. Use images in place of the previous and next links
2. Easily style the pagination display with CSS
3. Customize the display text of the Pages
4. Choose between just displaying Current Page and Total Pages, or having pagination

Style the display using the following tags:

 * #rb-page-prev - Styles the previous link
 * #rb-page-next - Styles the next link
 * #rb-page-pages - Style the Text and Page Numbers

NOTE: Currently the previous and next links must be in the form of images.

== Installation ==

1. Upload the 'styled-pagination' folder to the '/wp-content/plugins/' directory
2. Activate the Styled Pagination plugin through the 'Plugins' menu in WordPress
3. Place <?php echo rb_pages(); ?> in your template to display page text (i.e. PAGE 2 OF 10)

	-OR-

Place <?php echo rb_pagination(); ?> to have pages text with previous and next links.



== Frequently Asked Questions ==

= What parameter can I use? =

The rb_pagination() fucntion accepts 4 parameters. Use as follows: 

	 `<?php echo rb_pagination('PAGE', 'OF', 'images/prev.jpg', 'images/next.jpg'); ?>`

The rb_pages(); function accepts 2 parameters. Use as follows: 

	 `<?php echo rb_pages('PAGE', 'OF'); ?>`

The first 2 parameters in each function supply the text for the display. For example:

	 `<?php echo rb_pages('LOOKING AT', 'OUT OF'); ?>`

This would display Looking AT 2 OUT OF 21

The last 2 parameters are the location of the previous and next image files.

The functions have default value you can use which are:

	 `<?php echo rb_pagination('PAGE', 'OF', 'images/icon-pageprev.jpg', 'images/icon-pagenext.jpg'); ?>`

The images must be located in or in a sub folder of your themes directory.


== Screenshots ==
1. Arrow images and default text

== Changelog ==

v1.0 - Initial Release