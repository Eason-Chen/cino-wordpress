<?php get_header(); ?>
<!-- body start -->
	<section class="wrapper default_body_wrapper gallery_wrapper">

		<!-- image show title start -->
		<h2><?php the_title(); ?></h2><!-- image show title end -->

		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>

			<article class="image_show">
				<?php the_content(); ?>
			</article>

		<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</section>

<?php get_footer(); ?>