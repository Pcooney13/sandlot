<?php 
    include(locate_template('templates/header.php')); 
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();
            the_content();
        }
    }
    include(locate_template('templates/footer.php')); 
?>