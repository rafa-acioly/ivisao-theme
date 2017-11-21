<?php get_header(); ?>
<div class="hero is-fullheight" id="page-missao">
	<div class="hero-nav">
		<?php get_template_part('components/nav', 'nav'); ?>
	</div>

	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="column is-6 is-offset-1 content">
					<?php while(have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<div class="column is-6 is-offset-1 color-group">
					<div class="color-1"></div>
					<div class="color-2"></div>
					<div class="color-4"></div>
					<div class="color-3"></div>
				</div>
			</div>
		</div>
	</div>''

	<?php get_template_part('components/hero', 'footer'); ?>
</div>
