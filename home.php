<?php get_header();  ?>
<section id="content">
    <div class="content-wrap">
        <div class="container">
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