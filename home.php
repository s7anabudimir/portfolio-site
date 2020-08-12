<?php get_header();  ?>
<section id="content">
    <div class="content-wrap">
        <div class="container">
        <?php
    $args = array(                 
		'cat' => '1',
		'hide_empty' => true
	); 
    $categorylist = get_terms( $args ); 
    ?>
    <div class="container">
    <div class="categories">
        <ul>
            <li class="js-filter">Show All
            </li>
            
    <?php foreach($categorylist as $ctg) :
    ?>
            <li class="js-filter"><a href="<?php get_category_link($ctg->term_id); ?>"><?php echo $ctg->name; ?></a></li>
    <?php endforeach; ?>
        </ul>
    </div>
</div>
            <div id="posts" class="small-thumbs">
                
                <?php get_template_part('includes/section', 'archive'); ?>

                <?php previous_posts_link(); ?>

                <?php next_posts_link(); ?>

                <?php wp_link_pages();  ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer();  ?>