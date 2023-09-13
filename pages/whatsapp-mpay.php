<?php

/**
 *
 * Template Name: whatsapp-mpay
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
 get_template_part( 'components/whatsapp-mpay/banner');
 get_template_part( 'components/whatsapp-mpay/whatsapp-mpay');
 get_template_part( 'components/contacts');
 get_template_part( 'components/footer-s');
 ?>

<?php get_footer(); ?>