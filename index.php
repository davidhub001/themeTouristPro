<?php
get_header();
$url_image =get_template_directory_uri().'/';

$background = get_option('header_background');
$content = get_option('header_content');
include 'view/content_head.php';

if(get_option("affiche_sect1")) include 'view/section1.php';
if(get_option("affiche_sect2")) include 'view/section2.php';
if(get_option("affiche_sect3")) include 'view/section3.php';
if(get_option("affiche_sect4")) include 'view/section4.php';
if(get_option("affiche_sect5")) include 'view/section5.php';
if(get_option("affiche_sect6")) include 'view/section6.php';
if(get_option("affiche_sect7")) include 'view/section7.php';
if(get_option("affiche_sect8")) include 'view/section8.php';
if(get_option("affiche_sect9")) include 'view/section9.php';

get_footer();
?>
