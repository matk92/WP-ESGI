<?php get_header(); ?>

<main id="site-main-wp" class="site-main-wp">
    <div class="container-search">
        <h1>Search results for: <?php echo get_search_query(); ?></h1>
        <?php
        $types = ['page' => 'Page(s)', 'post' => 'Article(s)'];
        foreach ($types as $type => $label) {
            $args = [
                'post_type' => $type,
                's' => get_search_query(),
                'posts_per_page' => -1
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                echo '<div class="search-results">';
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="search-item">';
                    echo '<h2>' . get_the_title() . '</h2>';
                    echo '<div class="search-meta">';
                    echo '<span class="category">' . get_the_category_list(', ') . '</span>';
                    echo '<span class="date">' . get_the_date() . '</span>';
                    echo '</div>';
                    echo '<div class="search-excerpt">' . get_the_excerpt() . '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
            wp_reset_postdata();
        }
        ?>
    </div>
</main>
<?php get_footer(); ?>