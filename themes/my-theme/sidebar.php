<?php

$posts_for_aside = new WP_Query([
    'posts_per_page' => 4,
    'orderby'  => 'rand',
]); ?>

<div class="side-container">
    
    <ul class="side-list">
        <h3 class="p-3 border-black border-bottom ">Articoli correlati:</h3><?php
        while($posts_for_aside->have_posts()) {
            $posts_for_aside->the_post();
            create_sidebar_cards();
        }
        wp_reset_postdata(); ?>
    </ul>
</div>