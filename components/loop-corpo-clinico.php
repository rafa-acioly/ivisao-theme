<?php 
	$query = array( 'post_type' => 'perfil_medico' );
	$posts = query_posts( $query ); 
?>

<?php while(have_posts()) : the_post(); ?>
	<h1><?= the_title(); ?></h1>
	<p><?= the_content(); ?></p>
<?php endwhile; ?>
