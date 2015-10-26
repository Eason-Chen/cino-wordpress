<?php
	get_header();
?>

	<!-- slider start -->
	<section class="wrapper">
		<div class="slider">
			<?php masterslider(1); ?>
		</div>
	</section><!-- slider end -->

	<!-- body start -->
	<section class="wrapper home_body_wrapper clearfix">

	<?php
		$homePost = new WP_Query('cat=1');

		if ($homePost->have_posts()) :
			while ($homePost->have_posts()) : $homePost->the_post();
		?>
		<!-- body items start -->
		<div class="body_items">
			<div class="item_thumbnail">
					<?php the_post_thumbnail('home-thumbnail'); ?>
			</div>
			<div class="item_box">
				<div class="item_title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="item_content">
					<?php the_content(); ?>
				</div>
				<div class="item_more">
					<a href="<?php the_permalink(); ?>">READ MORE</a>
				</div>
			</div>
		</div><!-- body items ene -->
		<?php
			endwhile;

			else :
				echo '<p>No content found</p>';
			endif;

			wp_reset_postdata();
		?>
	</section><!-- body end -->
<?php
	get_footer();
?>