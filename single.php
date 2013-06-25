<?php

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


				
					<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
						<br/>
				



<?php endwhile; // end of the loop. ?>

<?php
get_sidebar();
get_footer();
?>
