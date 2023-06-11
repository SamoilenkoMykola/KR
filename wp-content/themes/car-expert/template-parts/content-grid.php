<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Car Expert
 */
$car_expert_categories = get_the_category();
$car_expert_blog_layout = get_theme_mod('car_expert_blog_layout', 'rightside');

if ($car_expert_categories) {
	$car_expert_category = $car_expert_categories[mt_rand(0, count($car_expert_categories) - 1)];
} else {
	$car_expert_category = '';
}

if ($car_expert_blog_layout != 'fullwidth') :
	$car_expert_grid_items = 6;
else :
	$car_expert_grid_items = 4;
endif;

?>
<div class="col-lg-<?php echo esc_attr($car_expert_grid_items); ?> mb-4 js-scroll fade-in-bottom">
	<article id="post-<?php the_ID(); ?>" <?php post_class('car-expert-list-item'); ?>>
		<div class="ax-single-blog-post">

			<?php if (has_post_thumbnail()) : ?>
				<div class="ax-single-blog-post-img">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php endif; ?>
			<div class="ax-single-blog-post-details">
				<span class="ghead-meta grid-meta">
					<?php if ('post' === get_post_type() && !empty($car_expert_category)) : ?>
						<div class="ax-single-blog-post-author-section">
							<div class="ax-blog-post-author-detalis">
								<div class="ax-single-blog-post-pub-date">
									<p><?php echo esc_html(get_the_date(get_option('date_format'))); ?></p>
								</div>

								<div class="ax-blog-post-author">
									<?php car_expert_posted_by(); ?>
								</div>

							</div>
						</div>
					<?php endif; ?>
				</span>
				<h2 class="ax-single-blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="ax-single-blog-post-dres">
					<?php the_excerpt(); ?>
				</div>
				<a class="car-expert-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ', 'car-expert'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>


			</div>
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>