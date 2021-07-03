<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malam
 */

?>
	</div> <!-- #content -->

		<footer id="colophon" class="site-footer">



			<div class="container">
				
				<div class="row space-between">
						<div class='col malam-logo'>
							<span>מקבוצת</span>
							<?php echo  wp_get_attachment_image(47, 'malam-logo')?>
						
						</div>

						<div class='col'>
							
							<span>© all rights reserved</span>
						</div>

				</div>

				
				
			</div>
			
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
