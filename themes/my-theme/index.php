<?php get_header(); ?>
    <h2>Benvenuti nel mio sito</h2>
    <h1><?php the_archive_title(); ?></h1>
    <div class="row">
        <div class="col-8">
            <div class="row g-4"><?php
                while (have_posts()) {
                    the_post(); ?>
                    <div class="col-12 p-3 border border-black">
                        <div class="d-flex gap-4 align-items-center">
                            <img
                                src="<?= get_the_post_thumbnail_url() ?: get_theme_file_uri("/img/not-available.png") ?>"
                                class="card-img-top"
                                alt="<?php the_title(); ?>"
                                style="width: 300px; height: 300px; object-fit:cover;"
                            >
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div><?php
                } ?>
            </div>
        </div>
        <div class="col-4"><?php get_sidebar() ?></div>
    </div><?php
echo paginate_links();
get_footer();
