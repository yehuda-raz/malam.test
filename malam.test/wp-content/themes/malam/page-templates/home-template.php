<?php
/**
 * Template Name: Home page
 * The template for building landing pages with afc 
 * @package malam
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php if (APT_AFC) {
				?>
					<?php  get_template_part('./template-parts/home', 'section1');?>
					<?php  get_template_part('./template-parts/home', 'section2');?>
					<?php  get_template_part('./template-parts/home', 'section3');?>
					<?php  get_template_part('./template-parts/home', 'section4');?>
				<?php
			}else{
				?>
					<h1>Please add AFC plugin</h1> 
				<?php
			}?>
				
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();
