<?php
/*
Template Name: Portfolio Template
 */

	get_header();
?>

	<!-- body start -->
	<section class="wrapper default_body_wrapper">

		<!-- portfolio title start -->
		<h2><?php the_title(); ?></h2><!-- portfolio title end -->

		<!-- portfolio box start -->
		<div class="portfolio_box clearfix">
		<?php

			$paged = get_query_var('paged');

			$args = array(
				'cat' => 16,
				'posts_per_page' => 6,
				'paged' => $paged,
			);

			$portPost = new WP_Query($args);

			if ($portPost->have_posts()) :
				while ($portPost->have_posts()) : $portPost->the_post();
		?>

			<!-- portfolio items start -->
			<div class="portfolio_items">

				<!-- portfolio thumbnail start -->
				<div class="portfolio_thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('protfolio-thumbnail'); ?></a>
					<div class="cover">
						<div class="item_title"><?php the_title(); ?></div>
						<div class="more"><a href="<?php the_permalink(); ?>">Read More</a></div>
					</div>
				</div><!-- portfolio thumbnial end -->

			</div><!-- portfolio items end -->
		<?php
			endwhile;

			else :
				echo '<p>No content found</p>';
			endif;
			wp_reset_postdata();
		?>
		</div><!-- portfolio box end -->
		<?php wp_pagenavi( array(
			'query' => $portPost,
		) ); ?>
	</section><!-- body end -->
<?php
	get_footer();
?>