<?php
/**
 * Single Job template.
 *
 * @package VeronaJobs
 */

global $post;
get_header();
?>
<main class="section-dark">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?>>
                <header class="article-header">
                    <h1 class="section-title"><?php the_title(); ?></h1>
                    <p class="meta">
                        <?php echo esc_html( get_the_date() ); ?>
                        <?php
                        $locations = get_the_term_list( get_the_ID(), 'job_location', ' · ', ', ', '' );
                        $categories = get_the_term_list( get_the_ID(), 'job_category', ' · ', ', ', '' );
                        if ( $locations ) {
                            echo wp_kses_post( $locations );
                        }
                        if ( $categories ) {
                            echo wp_kses_post( $categories );
                        }
                        ?>
                    </p>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="article-thumb">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>
                </header>
                <div class="article-content entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php
get_footer();
