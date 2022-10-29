<?php get_header(); ?>
<h1>Latest posts</h1>
<div class="items-container grid grid-three">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('item'); ?>>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <div class="item-inner">
                    <h2 class="item-title"><?php the_title(); ?></h2>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('medium',['class'=>'item-thumbnail','title'=>get_the_title()]); ?>
                    <?php endif; ?>
                    <div class="item-body"><?php the_exerpt(); ?></div>
                    <div class="item-meta"><?php the_author(); ?> on <?php the_date(); ?> <?php the_time(); ?></div>
                </div>
            </a>
        </div>
    <?php endwhile; ?> 
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    <?php else : ?>
	    <p>There are no posts to show.</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>