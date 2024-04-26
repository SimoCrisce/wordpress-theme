<?php
get_header();
the_post(); ?>
<div class="row">
    
   <div class="col-8">
        <h1><?php the_title(); ?></h1>
        
         
        <div class="py-3"><img style="height: 300px;" src="<?php the_post_thumbnail(); ?>"></div>
        <?php the_content(); ?>
   </div>
    <div class="col-4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();