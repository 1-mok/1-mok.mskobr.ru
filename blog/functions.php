<?php
add_theme_support('post-thumbnails');
set_post_thumbnail_size(540, 230, false);
add_theme_support('menus');
add_post_type_support('page', 'excerpt');
add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));

function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /**    Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /**    Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /**    Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="prev">%s</li>' . "\n", get_previous_posts_link());

    /**    Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /**    Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /**    Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /**    Next Post Link */
    if (get_next_posts_link())
        printf('<li class="next">%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";

}
register_sidebar( array(
	'name' =>'3 блока новостей',
	'id' => 'secondary-widget-area',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' =>'Инфо блок в шапке',
	'id' => 'info',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
        <input type="text" class="search-area-input" value="' . get_search_query() . '" placeholder="Что вы ищете?" name="s" id="s" />
		<input type="submit" class="search-area-button" id="searchsubmit" value="" />
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );






?>