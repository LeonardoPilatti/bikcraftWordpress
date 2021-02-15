<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- if (se tiver post), while (enquanto tiver post) -->

    <h1><?php the_title(); ?></h1>
	<?php the_content(); ?>

<?php endwhile; else: ?>    
<p><?php _e('Desculpe, mas a página que estava procurando foi removida ou não existe.'); ?></p>
<?php endif; ?>     

<?php get_footer(); ?>
