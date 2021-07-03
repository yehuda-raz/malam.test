<?php
/**
 * Section 4 For home
 *
 * @author  Yehuda raz
 * @package AppsFlyerTest
 * @since   1.0.0
 */

?>

<section id="section2">
	<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="text-center blue"><?php echo  get_field('section_2_title') ?></h3>
					
						<div class="slider">
						<?php 
						
							$args = array(
								'post_type' => 'post'
							);

							$post_query = new WP_Query($args);
							if($post_query->have_posts() ) {
								while($post_query->have_posts() ) {
									$post_query->the_post();
									slideItem();
									}
									slideItem();
								}
								wp_reset_postdata();
						?>

					</div><!-- .slider -->
					
				</div>	
			</div><!-- .row -->
	</div><!-- .container -->		
</section>


<?php
function slideItem(){
	?>
	<div class="slide-item">
		<div>	
		<div class="img_course"><?php the_post_thumbnail(); ?></div>
		<h4><?php the_title(); ?></h4>
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink(); ?>" class=""> <span><?php _e('פרטים נוספים','malam' )?> &#47; &#62;</span></a> 
		</div>	
	</div>
	<?php	
}