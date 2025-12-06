<?php
/**
 * Main template file.
 *
 * @package VeronaJobs
 */

get_header();
?>
<main class="section-dark">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="article-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <header class="article-header">
                        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="meta"><?php echo get_the_date(); ?> · <?php the_author(); ?></p>
                    </header>
                    <div class="article-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts found.', 'veronajobs' ); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
