<?php 

function filter_ajax() {

    
    $category = $_POST['category'];
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    if(isset($category)) {
        $args['category__in'] = array($category);
    }

    $query = new WP_Query($args);
    
    if( $query->have_posts() ):while( $query->have_posts() ):$query->the_post();
    ?>
    <div class="entry clearfix"> 
    <div class="entry-image">
        <?php if(has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </a>
        <?php endif; ?>
    </div>
    <div class="entry-c">
        <div class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
        </div>
        <ul class="entry-meta clearfix">
            <li><i class="icon-calendar3"></i><?php  echo get_the_date('j/n/Y'); ?></li>
        </ul>
        <div class="entry-content">
            <?php the_excerpt();?>
            <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        </div>
    </div>     
</div> 
 <?php endwhile;endif; wp_reset_query(); 
 
die();
}
add_action('wp_ajax_filter', 'filter_ajax');
add_action('wp_ajax_nopriv_filter', 'filter_ajax');
?>