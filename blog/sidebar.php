<div class="search banner">
    <div class="search-title">поиск</div>
    <div class="search-area">
        <?php get_search_form(); ?>
    </div>
</div>
<div class="categories banner">
    <ul>
    <?php
        $args = array(
            'smallest'                  => 6,
            'largest'                   => 16,
            'unit'                      => 'pt',
            'number'                    => 5,
            'format'                    => 'flat',
            'separator'                 => "\n",
            'orderby'                   => 'name',
            'order'                     => 'ASC',
            'exclude'                   => null,
            'include'                   => null,
            'topic_count_text_callback' => 'default_topic_count_text',
            'link'                      => 'view',
            'taxonomy'                  => 'post_tag',
            'echo'                      => true,
        );

        wp_tag_cloud( $args );
        ?>
    </ul>
</div>
<div class="tags-banner banner">
    <div class="tags-banner-title">Категории</div>
    <ul>
            <?php $args = array(
                'menu' => 'Категории',
                'container' => 'div',
                'container_class' => '',
                'theme_location' => $menu,
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0
            );
            wp_nav_menu($args); ?>
    </ul>
</div>
<div class="metks-banner banner">
    <div class="metks-banner-title">Метки</div>

        <?php
        $args = array(
            'smallest'                  => 6,
            'largest'                   => 16,
            'unit'                      => 'pt',
            'number'                    => 35,
            'format'                    => 'flat',
            'separator'                 => "\n",
            'orderby'                   => 'name',
            'order'                     => 'ASC',
            'exclude'                   => null,
            'include'                   => null,
            'topic_count_text_callback' => 'default_topic_count_text',
            'link'                      => 'view',
            'taxonomy'                  => 'post_tag',
            'echo'                      => true,
        );

        wp_tag_cloud( $args );
        ?>
</div>

<div class="archive-banner banner">
    <div class="title">
        Архив
    </div>
    <div class="list">
        <ul>
        <?php $args = array(
            'type'            => 'monthly',
            'limit'           => '15',
            'format'          => 'html',
            'before'          => '',
            'after'           => '',
            'show_post_count' => false,
            'echo'            => 1,
            'order'           => 'DESC',
            'post_type'     => 'post'
        );
        wp_get_archives( $args ); ?>
        </ul>
    </div>
</div>
<div class="new-post-banner banner">
    <div class="title">
        свежая запись
    </div>
    <div class="list">
        <?php
        $poslednie = new WP_query('posts_per_page=5'); ?>
        <?php if ($poslednie->have_posts()) : $poslednie->the_post(); ?>
            <div class="post"><a href="<?php the_permalink(); ?>">
                    <div class="image"><?php the_post_thumbnail(array(60, 60)); ?></div>
                    <div class="text">
                        <div class="title-post"><?php the_title(); ?></div>
                        
                        <div class="description"><? // = substr(get_the_excerpt(), 0, 50).'[...]'; ?></div>
                        <div class="info-post"><span id="date"><?php the_time('j');?> <?php the_time('M');?> </span> <?php the_time('Y');?>| <span
                                id="category"></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php  endif;
        wp_reset_query(); ?>
    </div>
</div>