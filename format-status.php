<?php
/**
 * This file is runs as the status post format.
 *
 * @package
 */
?>

<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

	<?php get_template_part('format','post_thumbnail'); ?>
	

	<!-- Wrap the title etc in a header for html5 goodness -->
	<header class="post-header">
		<h1>
            <?php the_title(); ?>
		</h1>
	</header>

	<!-- Get the content for out post -->
	<div class="status-entry entry">
		<!-- themetacular_the_content makes 'read more' default -->
		<?php themetacular_the_content(); ?>
	</div>
	
</article> <!-- .post -->
