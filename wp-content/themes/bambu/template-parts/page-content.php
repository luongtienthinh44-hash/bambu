<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<main id="primary" class="site-main bambu-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'bambu-page-article' ); ?>>
            <div class="bambu-page-entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>
