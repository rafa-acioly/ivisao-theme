<?php 
	$query = array( 'post_type' => 'perfil_medico' );
	$posts = query_posts( $query ); 
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="column">
		<figure class="has-text-centered">
			<?php the_post_thumbnail(array(200, 200)); ?>
			<figcaption>
				<?php the_title(); ?>
			</figcaption>
		</figure>
	</div>
<?php endwhile; ?>
