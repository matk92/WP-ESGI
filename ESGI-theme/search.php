<?php get_header(); ?>

<main id="site-main-wp" class="site-main-wp">
    <div class="container">
        <h1>Résultats de la recherche pour <?php echo get_search_query(); ?></h1>
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
                echo '<h2>' . $query->found_posts . ' ' . $label . ' trouvé(s)</h2>';
                echo '<ul>';
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                echo '</ul>';
            }
            wp_reset_postdata();
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>