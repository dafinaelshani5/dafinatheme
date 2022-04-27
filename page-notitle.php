<?php
/* 
Template Name:Page No Title
*/

get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

<h1>This is my static title</h1>

<small
  >Posted on:<?php the_time("F j, Y"); ?>, in
  <?php the_category(); ?></small
>
<p><?php the_content(); ?></p>
<hr />

<?php
  endwhile;
endif; ?>

<?php get_footer(); ?>
