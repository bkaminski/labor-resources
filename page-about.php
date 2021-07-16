<?php 
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Delaware Labor Resources
 * 
 */
get_header() ;?>

<?php echo get_template_part('parts/page', 'about-hero'); ?>

<?php echo get_template_part('parts/page', 'about-img-strip'); ?>

<?php echo get_template_part('parts/page', 'the-team'); ?>

<?php get_footer(); ?>