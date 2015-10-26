<?php

/*
Template Name: Contact Us Template
 */

get_header();
?>

	<!-- body start -->
	<section class="wrapper default_body_wrapper clearfix">

		<!-- contact us title start -->
		<h2><?php  the_title(); ?></h2><!-- contacg us title end -->

		<!-- address start -->
		<?php
		$contactPost = new WP_Query('cat=14&posts_per_page=1');

		if ($contactPost->have_posts()) :
			while ($contactPost->have_posts()) : $contactPost->the_post();
		?>
		<address>
			<?php the_content(); ?>
		</address><!-- address end -->
		<?php
			endwhile;

			else :
				echo '<p>No content found</p>';
			endif;

			wp_reset_postdata();
		?>

		<!-- contact us form start -->
		<div class="contact_form">
			<?php the_content(); ?>
		</div><!-- contact us form end -->

	</section><!-- body end -->

<?php get_footer(); ?>