<?php
/**
 * Front page template.
 *
 * @package VeronaJobs
 */

get_header();

get_template_part( 'template-parts/sections/hero' );
get_template_part( 'template-parts/sections/about' );
get_template_part( 'template-parts/sections/services' );
get_template_part( 'template-parts/sections/candidates' );
get_template_part( 'template-parts/sections/contact' );

get_footer();
