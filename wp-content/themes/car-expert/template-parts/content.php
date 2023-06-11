<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Car Expert
 */
global $car_expert_bcount;

$car_expert_blog_style = get_theme_mod('car_expert_blog_style', 'list');
if ($car_expert_blog_style == 'grid' && !is_single()) :
	get_template_part('template-parts/content', 'grid');
elseif ($car_expert_blog_style == 'list' && !is_single() && $car_expert_bcount != 1) :
	get_template_part('template-parts/content', 'list');
else :
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="xpost-item shadow pb-5 mb-5">
			<div class="xpost-text p-3">
				<?php car_expert_post_thumbnail();

				if ('post' === get_post_type()) :
				?>
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
				<header class="entry-header pb-4">
					<?php
					if (is_singular()) :
						the_title('<h1 class="entry-title">', '</h1>');
					else :
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

					?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					if (is_single()) {
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'car-expert'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'car-expert'),
								'after'  => '</div>',
							)
						);
					} else {
						the_excerpt();
					?>
						<a class="car-expert-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More ', 'car-expert'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
					<?php
					}

					?>
				</div><!-- .entry-content -->
				<?php if (is_single()) : ?>
					<footer class="entry-footer">
						<?php car_expert_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>