<?php get_header( ); ?>


<div class="posts-container">
<div class="posts-container-the-posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_content( ); ?>

    </div>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>
</div>

<div class="posts-container-pagination">
<?php wp_link_pages(); ?>
</div>
</div>




<?php get_footer( ); ?>
