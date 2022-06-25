<?php include(locate_template('templates/header.php')); 
$the_args = array(
    "posts_per_page" => -1,
    "post_type" => 'events',
);
$the_query = new WP_Query($the_args);
    if ($the_query->have_posts()) : 
        while ($the_query->have_posts()) : $the_query->the_post();
            echo 'true';
        endwhile;
    endif;
include(locate_template('templates/footer.php')); ?>
