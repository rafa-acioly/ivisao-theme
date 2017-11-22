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
						<?= the_content(); ?>
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
	<footer class="hero-foot">
		<div class="hero-content-header">
			<div class="has-text-centered">
			<div class="hero-content-item">
			<i class="fa fa-phone fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
			</div>
			<div class="hero-content-item">
			<i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997507888">12 99750.7888</a>
			</div>
			<div class="hero-content-item">
			<i class="fa fa-whatsapp fa-fw"></i><a href="tel:12997677888">12 99767.7888</a>
			</div>
			<span class="pipe-separator is-hidden-mobile">|</span>
			<address>Av. Tivoli, 279 JD. Bethania São José dos Campos / SP</address>
			</div>
		</div>
		</footer>
	<?php get_footer(); ?>
</div>
