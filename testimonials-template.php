<?php

/*
Template Name: Testimonials Template
 */

get_header();
?>
<!-- body start -->
<section class="wrapper default_body_wrapper clearfix">

	<!-- testimonials title start -->
	<h2><?php the_title(); ?></h2><!-- testimonials title end -->
<?php
$testimonialsPost = new WP_Query('cat=12');

if ($testimonialsPost->have_posts()) :
	while ($testimonialsPost->have_posts()) : $testimonialsPost->the_post();
?>

	<!-- testimonials article start -->
	<article class="testimonials clearfix">

		<!-- portrait start -->
		<div class="portrait"></div><!-- portrait end -->
		<!-- description start -->
		<div class="des">
			<?php the_content(); ?>
		</div><!-- description end -->

	</article><!--  testimonials article end-->

<?php
	endwhile;
else :
	echo '<p>No content found</p>';
endif;
?>

</section><!-- body end -->
<?php get_footer(); ?>