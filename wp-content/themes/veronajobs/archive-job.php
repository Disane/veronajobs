<?php
/**
 * Job archive template.
 *
 * @package VeronaJobs
 */

global $post;
get_header();
?>
<main class="section-dark">
    <div class="container">
        <header class="article-header">
            <h1 class="section-title"><?php post_type_archive_title(); ?></h1>
            <p class="meta"><?php esc_html_e( 'Aktuális pozícióink a VeronaJobs kínálatából.', 'veronajobs' ); ?></p>
        </header>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?>>
                    <header class="article-header">
                        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="meta">
                            <?php echo esc_html( get_the_date() ); ?>
                            <?php
                            $locations = get_the_term_list( get_the_ID(), 'job_location', ' · ', ', ', '' );
                            if ( $locations ) {
                                echo wp_kses_post( $locations );
                            }
                            ?>
                        </p>
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
            <p><?php esc_html_e( 'Jelenleg nincs megjeleníthető állás.', 'veronajobs' ); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
