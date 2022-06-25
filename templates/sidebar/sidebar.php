<div class="flex-1 max-w-full md:max-w-xs ml-auto">
    <?php if (true) : ?>
        <?php if (false) include(locate_template('templates/sidebar/content/events/events-details.php')); ?>
        <?php if (!is_archive() && !is_home()) include(locate_template('templates/sidebar/content/authors.php')); ?>
        <?php if (!is_archive() && !is_home()) include(locate_template('templates/sidebar/content/posts/posts-category.php')); ?>
        <?php if (!is_archive() && !is_home()) include(locate_template('templates/sidebar/content/posts/posts-recent.php')); ?>
        <?php if (false) include(locate_template('templates/sidebar/content/events/events-recent.php')); ?>
    <?php else: ?>

    <?php endif; ?>
</div>