<?php 
	$query = array( 'post_type' => 'perfil_medico' );
	$posts = query_posts( $query ); 
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="column">
		<figure class="has-text-centered">
			<?php the_post_thumbnail(array(250, 250)); ?>
			<a href="<?= get_permalink(); ?>">
				<figcaption>
					<?php the_title(); ?>
					<small><?= the_content(); ?></small>
				</figcaption>
			</a>
		</figure>
	</div>
<?php endwhile; ?>
