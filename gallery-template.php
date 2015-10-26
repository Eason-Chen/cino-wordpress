<?php
/*
Template Name: Gallery Template
 */

	get_header();
?>

	<!-- body start -->
	<section class="wrapper default_body_wrapper gallery_wrapper">

		<!-- gallery title start -->
		<h2><?php the_title(); ?></h2><!-- gallery title end -->

		<!-- gallery box start -->
		<div class="gallery_box clearfix">
		<?php
			$galleryPost = new WP_Query('cat=15');

			if ($galleryPost->have_posts()) :
				while ($galleryPost->have_posts()) : $galleryPost->the_post();
		?>

			<!-- gallery items start -->
			<div class="gallery_items">

				<!-- gallery thumbnail start -->
				<div class="gallery_thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('gallery-thumbnail'); ?></a>
				</div><!-- gallery thumbnial end -->

				<!-- item title start -->
				<div class="item_title">
					<?php the_title(); ?>
				</div><!-- item title end -->

				<!-- item more start -->
				<div class="more"><a href="<?php the_permalink(); ?>">Read More</a></div>
				<!-- item more end -->
			</div><!-- gallery items end -->
		<?php
			endwhile;

			else :
				echo '<p>No content found</p>';
			endif;

			wp_reset_postdata();
		?>

		</div><!-- gallery box end -->

	</section><!-- body end -->
<?php
	get_footer();
?>