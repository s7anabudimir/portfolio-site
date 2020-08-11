<?php
if( have_posts() ):while( have_posts() ):the_post();
?>
<div class="col_two_third portfolio-single-image nobottommargin">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>"/>
		</a>
	<?php endif; ?>
</div><!-- .portfolio-single-image end -->
<!-- Portfolio Single Content -->
	<div class="col_one_third portfolio-single-content col_last nobottommargin">
		<!-- Portfolio Single - Description-->
		<div class="fancy-title title-bottom-border">
			<h2>Project Info:</h2>
		</div>
			<?php the_content(); ?>
			<!-- Portfolio Single - Description End -->
				<div class="line"></div>

				<!-- Portfolio Single - Meta-->
					<ul class="portfolio-meta bottommargin">
						<li><span><i class="icon-user"></i>Created by: <?php the_author(); ?></li>
						<li><span><i class="icon-calendar3"></i>Completed: <?php the_field('date'); ?></li>
						<li><span><i class="icon-lightbulb"></i>Skills: <?php $terms = get_the_terms( $post->ID , 'skills' ); 
                    			foreach ( $terms as $term ) {
								echo '<a href="' . $term_link . '">' . $term->name . '</a>' . ' ';
                    			} 
                			?></li>
						<li><span><i class="icon-link"></i>Client:<?php the_field('client'); ?></li>
					</ul>
				<!-- Portfolio Single - Meta End -->
				<!-- Portfolio Single - Share-->
					<div class="si-share clearfix">
						<span>Follow For More:</span>
							<div>
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-behance">
									<i class="icon-behance"></i>
									<i class="icon-behance"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
						    </div>
					    </div>
					<!-- Portfolio Single - Share End -->
				</div><!-- .portfolio-single-content end -->
		</div>
	</div>
<?php
endwhile; else: endif;
?>