<?php get_header(); ?>
<div class="hero is-fullheight">
	<div class="hero-nav">
		<?php get_template_part( 'components/nav', 'nav' ); ?>
	</div>
	<div class="hero-body">
		<div class="container">
			<?php while(have_posts()) : the_post(); ?>
				<?= the_content(); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'components/loop', 'corpo-clinico' ); ?>
		</div>
	</div>
</div>