<?php 
$post = get_post();
$categories = get_the_category();
if ( ! empty( $categories ) ) : ?>
    <div class="flex px-4 mb-1 text-slate-500 items-center text-blue">
	    <?php foreach( $categories as $category ) : ?>
		    <?php if ($category->name !== 'Uncategorized') :  ?>   
                <?php $color = 'text-' . get_field('color',  'category_' . $category->term_id) . '-600'; ?>         
                <a class="text-sm <?php echo $color; ?> mr-2" href="/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

