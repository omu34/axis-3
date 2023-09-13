<?php

/**
 *
 * Template Name: cover
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package axis
 */
get_header(); 
 get_template_part( 'components/header-s');
 get_template_part( 'components/cover/banner');

?>

<?php get_footer(); ?>