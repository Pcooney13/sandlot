<?php 
// Custom Column on Admin Posts & Pages
add_filter( 'manage_posts_columns', function ( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Image',
        'title' => 'Title',
        'categories' => 'Categories',
        'date' => 'Date'
    );
    return $columns;
});
// ALL POSTS - Add Image To Custom Column
add_action( 'manage_posts_custom_column' , 'add_thumbnail_column_to_consultants', 10, 2 );
function add_thumbnail_column_to_consultants( $column, $post_id ) {
    switch ( $column ) {
    case 'featured_thumb':
        echo '<a href="' . get_edit_post_link() . '">';?>
		<img style="width:48px; height:48px; border-radius:50%;" src="<?php echo get_the_post_thumbnail_url( $post_id ); ?>">
		<?php echo '</a>';
        break;
    }
}

// CLIENT SERVICES
add_filter( 'manage_client_services_posts_columns', function ( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Title',
        'taxonomy' => 'Service Type',
        'date' => 'Date'
    );
    return $columns;
});

// Client services - Add taxonomies
add_action( 'manage_client_services_posts_custom_column' , 'add_taxonomy_column_to_services', 10, 2 );
function add_taxonomy_column_to_services( $column, $post_id ) {
    switch ( $column ) {
    case 'taxonomy':
        $terms = get_the_terms($post_id, 'services');
        if ($terms !== 0) {
            foreach ($terms as $key => $value) {
                echo '<a href="'. get_admin_url() . '/edit.php?services=' . $value->slug .'&post_type=client_services">' . $value->name . '</a>';
            }
        }
        break;
    }
}

// AUTHORS
add_filter( 'manage_authors_posts_columns', function ( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Image',
        'title' => 'Title',
        'date' => 'Date'
    );
    return $columns;
});

// TESTIMONIALS
add_filter( 'manage_testimonies_posts_columns', function ( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Image',
        'title' => 'Title',
        'date' => 'Date'
    );
    return $columns;
});

// Admin Editor CSS
add_action('admin_head', function() { 
    echo '<style>
        .column-featured_thumb,
        .column-service_graphic,
        .column-service_blob {
            width:58px;
        }
        .column-service_color{
            width:40px;
        }
        .acf-field {
            border:none!important;
        }
        .acf-field-message .acf-label {
            display:none!important;
        }
        .acf-field-message .acf-input h1 {
            margin-bottom: 0!important;
        }
    </style>';
});


// SERVICES CUSTOMS
add_filter("manage_edit-services_columns", 'theme_columns');
 
function theme_columns($theme_columns) {
    $column = array(
        'cb'=> '<input type="checkbox" />',
        'service_color' => 'Color',
        'name'=> __('Name'),
        'service_graphic'=> 'Graphic',
        'service_blob'=> 'Blob',
        // 'header_icon'=> '',
        'slug'=> __('Slug'),
        'posts'=> __('Posts')
    );
    return $column;
}


function add_service_color_column_content($content, $column_name, $term_id){
    $term= get_term($term_id, 'services');
    $color = get_field('color', 'services_' . $term_id);
    $blob = get_field('blob_path', 'services_' . $term_id);
    $graphic = get_field('image', 'services_' . $term_id);
    if ($color === 'red') {
        $color = 'background:linear-gradient( -135deg, #ef4444 20%, #991b1b)';
    } elseif ($color === 'orange') {
        $color = 'background:linear-gradient( -135deg, #f97316 20%, #9a3412)';
    } elseif ($color === 'yellow') {
        $color = 'background:linear-gradient( -135deg, #facc15 20%, #a16207)';
    } elseif ($color === 'lime') {
        $color = 'background:linear-gradient( -135deg, #a3e635 20%, #4d7c0f)';
    } elseif ($color === 'green') {
        $color = 'background:linear-gradient( -135deg, #22c55e 20%, #3f6212)';
    } elseif ($color === 'cyan') {
        $color = 'background:linear-gradient( -135deg, #22d3ee 20%, #155e75)';
    } elseif ($color === 'blue') {
        $color = 'background:linear-gradient( -135deg, #0ea5e9 20%, #075985)';
    } elseif ($color === 'indigo') {
        $color = 'background:linear-gradient( -135deg, #6366f1 20%, #3730a3)';
    } elseif ($color === 'fuchsia') {
        $color = 'background:linear-gradient( -135deg, #d946ef 20%, #86198f)';
    } else {
        $color = 'background:' . get_field('color', 'services_' . $term_id);
    }
    switch ($column_name) {
        case 'service_color': ?>
            <div style="width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; background:white; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.125)">
                <div style="width:26px; height:26px; border-radius:50%; <?php echo $color; ?>"></div>
            </div>
            <?php break;
        case 'service_blob': ?>
            <?php if (isset($blob)) : ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height:20px" fill="none" viewBox="0 0 24 24" stroke="limegreen" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            <?php else: ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height:20px" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            <?php endif; ?>
            <?php break;
        case 'service_graphic': ?>
            <?php if (isset($graphic)) : ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height:20px" fill="none" viewBox="0 0 24 24" stroke="limegreen" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            <?php else: ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height:20px" fill="none" viewBox="0 0 24 24" stroke="red" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            <?php endif; ?>
            <?php break;
    }
}
add_filter('manage_services_custom_column', 'add_service_color_column_content',10,3);