<?php
    include(locate_template('templates/header.php')); 

    $menu = nav_walker('main-menu');

    var_dump($menu[1]);
    foreach ($menu as $key => $link) {
        echo '<a href=" ' . $link->url . ' " class="text-white tracking-wider transition-all duration-300 hover:text-bright-orange pl-4 inline md:hidden lg:inline">' . $link->title . '</a>';
    }    

    include(locate_template('templates/footer.php')); 
?>