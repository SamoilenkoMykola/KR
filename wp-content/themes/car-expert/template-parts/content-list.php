<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Car Expert
 */
$car_expert_categories = get_the_category();
if ($car_expert_categories) {
	$car_expert_category = $car_expert_categories[mt_rand(0, count($car_expert_categories) - 1)];
} else {
	$car_expert_category = '';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('car-expert-list-item'); ?>>
	<div class="car-expert-item car-expert-text-list shadow mb-5 <?php if (has_post_thumbnail()) : ?>has-thumbnail<?php endif; ?>">
		<div class="row">
			<?php if (has_post_thumbnail()) : ?>
				<div class="col-lg-5">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_large'); ?>
					</a>
				</div>
				<div class="col-lg-7">
				<?php else : ?>
					<div class="col-lg-12 pb-3 pt-3">
					<?php endif; ?>
					<div class="car-expert-text p-3">
						<div class="car-expert-text-inner">
							<div class="grid-head">
								<span class="ghead-meta list-meta">
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
								<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
							</div>
							<div class="list-content">
								<?php the_excerpt(); ?>
							</div>
							<a class="car-expert-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ', 'car-expert'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
					</div>
					</div>
				</div>

		</div>
</article><!-- #post-<?php the_ID(); ?> -->