<?php get_header(); ?>
<div class="hero is-fullheight" id="page-historia">
	<div class="hero-nav">
		<?php get_template_part('components/nav', 'nav'); ?>
	</div>

	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="column is-5 is-offset-1 content">
					<?php while(have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<div class="column color-group is-5 is-offset-1">
					<div class="color-1"></div>
					<div class="color-2"></div>
					<div class="color-3"></div>
					<div class="color-4"></div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('components/hero', 'footer'); ?>
</div>
