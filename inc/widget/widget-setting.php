<?php

/**
 * ThemeTim Widget Settings
 */

require get_template_directory() . '/inc/widget/recent-blog-news/recent-blog-news.php';
/**
 * ThemeTim SiteOrigin Widgets.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) {
    require get_template_directory() . '/inc/widget/editor/editor.php';
    require get_template_directory() . '/inc/widget/services/services.php';
    require get_template_directory() . '/inc/widget/portfolio/portfolio.php';
    require get_template_directory() . '/inc/widget/testimonial/testimonial.php';
}