<?php
/**
 * Required fallback template for WordPress.
 * The Home interface is rendered by front-page.php.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<main id="primary" class="site-main bambu-page-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'bambu-page-article' ); ?>>
                <div class="bambu-page-entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer();
