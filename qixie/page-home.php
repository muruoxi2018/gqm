<?php 
/**
 * Template Name: 首页
 * 作者：慕若曦
 */
get_header(); ?>
<?php get_template_part( 'template/slider' ); ?>
<div class="main"> 
<?php get_template_part( 'template/section1' ); ?>
<?php get_template_part( 'template/section2' ); ?>
<?php get_template_part( 'template/section4' ); ?>
</div>
<?php get_footer();?>