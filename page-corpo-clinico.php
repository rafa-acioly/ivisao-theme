<?php get_header(); ?>
<div class="hero is-fullheight" id="corpo-clinico">
	<div class="hero-nav">
		<?php get_template_part( 'components/nav', 'nav' ); ?>
	</div>
	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<article class="column is-half is-offset-one-quarter content has-text-centered">
					<?php while(have_posts()) : the_post(); ?>
						<h1 class="title"><?php the_title(); ?></h1>
						<p><?= the_content(); ?></p>
					<?php endwhile; ?>
				</article>
			</div>
			<div class="columns slick-item">
				<?php
				/**
				 * Inclui o loop para realizar a capturando todos os
				 * posts do tipo 'perfil_medico'
				 */
				get_template_part( 'components/loop', 'corpo-clinico' ); 
				?>
			</div>
		</div>
	</div>
	<div class="slick-background"></div>
	<?php get_template_part( 'components/hero', 'footer' ); ?>
</div>
