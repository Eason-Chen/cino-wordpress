<?php

/*
Template Name: Price Template
 */

get_header();
?>
<!-- body start -->
<section class="wrapper default_body_wrapper clearfix">

	<!-- price title start -->
	<h2><?php the_title(); ?></h2><!-- price title end -->
	<?php
	$testimonialsPost = new WP_Query('cat=13');

	if ($testimonialsPost->have_posts()) :
		while ($testimonialsPost->have_posts()) : $testimonialsPost->the_post();
	?>

	<!-- price article start -->
	<article class="price_box">

		<!-- price label start -->
		<div class="price_label">
			<!-- room des start -->
			<div class="room"><?php the_content(); ?></div><!-- room des end -->

			<!-- room price start -->
			<div class="room_price"><span class="price"><?php the_title(); ?></span> Incl.GST</div><!-- room price end -->
		</div>
		<!-- price label end -->

	</article><!-- price article end -->

<?php
	endwhile;
else :
	echo '<p>No content found</p>';
endif;
?>

</section><!-- body end -->
<?php get_footer(); ?>