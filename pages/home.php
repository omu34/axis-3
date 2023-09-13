<?php
/**
 *
 * Template Name: home
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

get_template_part( 'components/home/banner');
get_template_part( 'components/home/features');
get_template_part( 'components/home/partners-logo');
get_template_part( 'components/home/blogs');
get_template_part( 'components/contacts');
get_template_part( 'components/home/foot');

 ?>



<?php get_footer(); ?>