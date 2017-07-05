<?php 
	$query = array( 'post_type' => 'perfil_medico' );
	$posts = query_posts( $query ); 
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="column has-text-centered">
		<figure>
			<?php the_post_thumbnail('thumbnail'); ?>
		</figure>
	</div>
<?php endwhile; ?>
