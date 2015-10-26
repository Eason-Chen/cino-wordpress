<?php

/*
Template Name: About Us Template
 */

get_header();
?>

<section class="wrapper default_body_wrapper">

	<!-- title start -->
	<?php
	// $contactPost = new WP_Query('cat=17&posts_per_page=1');

	// if ($contactPost->have_posts()) :
	// 	while ($contactPost->have_posts()) : $contactPost->the_post();
	if (have_posts()) :
		while (have_posts()) : the_post();
	?>
	<h2><?php the_title(); ?></h2><!-- title end -->

	<!-- about us article start -->
	<article class="about_us">
		<?php the_content(); ?>
	</article><!-- about us article end -->

</section><!-- body end -->

<?php
		endwhile;
	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>