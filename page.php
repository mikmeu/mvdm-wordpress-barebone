<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="overline"><?php the_author(); ?> on <?php the_date(); ?> <?php the_time(); ?></div>
<h1><?php the_title(); ?></h1>
<div class="content">
    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail('large',['title'=>get_the_title()]); ?>
    <?php endif; ?>
   <?php the_content(); ?>
</div>
<?php endwhile; else : ?>
	    <p>There is nothing to show.</p>
<?php endif; ?>
<?php get_footer(); ?>