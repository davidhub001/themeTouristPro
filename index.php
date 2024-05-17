<?php
get_header();
$url_image =get_template_directory_uri().'/';

$background = get_option('header_background');
$content = get_option('header_content');
include 'view/content_head.php';
include 'view/section1.php';
include 'view/section9.php';

get_footer();
?>
