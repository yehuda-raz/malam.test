<?php
/**
 * Section 4 For home
 *
 * @author  Yehuda raz
 * @package AppsFlyerTest
 * @since   1.0.0
 */

?>

<section id="section4">
	<div class="container">
				<div class="row">
					<div class="col">
					


					<h3 class="text-center blue"><?php echo  get_field('section_4_title') ?></h3>
					<?php
							if ( have_rows( 'customers_list' ) ) :?>
								<ul class="list-none">
									<?php
										while ( have_rows( 'customers_list' ) ) :
											the_row();
											?>
												<!-- <li> -->
												<li class="">
													<div>
														<img src="<?php the_sub_field( 'customer_img' ); ?>" />
													</div>
												</li>
										<?php
										endwhile;
									?>
								</ul><?php
							endif;
						?>			



						
					
				</div>	
			</div><!-- .row -->
	</div><!-- .container -->		
</section>