<?php
/**
 * Default single post template.
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
                    <p class="meta"><?php echo get_the_date(); ?> · <?php the_author(); ?></p>
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
