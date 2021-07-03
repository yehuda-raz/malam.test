<?php
/**
 * Section 4 For home
 *
 * @author  Yehuda raz
 * @package AppsFlyerTest
 * @since   1.0.0
 */

?>

<section id="section3">
					<div class="col">
					
					<h3 class=""><?php echo  get_field('section_3_title') ?></h3>
					<?php
							if ( have_rows( 'section_3_list' ) ) :?>
								<ul class="list-asterisk">
									<?php
										while ( have_rows( 'section_3_list' ) ) :
											the_row();
											?>
												<!-- <li> -->
												<li class=""><?php the_sub_field( 'section_3_list_item' ); ?>
												</li>
										<?php
										endwhile;
									?>
								</ul><?php
							endif;
						?>				
					
				</div>	
</section>