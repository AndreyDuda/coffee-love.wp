<?php get_header() ?>

<div class="wrapper">
	<?php get_navigation(); ?>


	<section class="body-section products-catalog">
		<div class="container">
			<div class="row">
                <?php
                $coffee = new WP_Query(array(
	                'post_type' => 'coffee_machine',
                    'meta_key'  => 'queue', // name of custom field
                    'orderby'   => 'meta_value_num',
                    'order'     => 'ASC'
                ));
                ?>
				<?php while ($coffee->have_posts()): $coffee->the_post() ?>
				<div class="col-md-3 catalog-item">
					<div class="row">
						<a href="<?php echo the_permalink()?>" title="<?php the_title() ?>">
							<div class="coffee-machine-title font-22 text-center" style="text-transform: uppercase"><?php the_title() ?></div>
							<span class="text-center catalog-item-image" style="padding: 20px 0">
                                <?php $category = get_the_category(get_the_ID()) ?>
					 <?php the_post_thumbnail('', array('class' => 'item-about'  ,'data-id' => get_the_ID(), 'data-role' => 'about', 'data-entity' => $category[0]->slug)) ?>
				</span>
							<span class="text-center">
					<div class="coffee-machine-price text-center">
						<button class="btn btn-default" data-role="about" data-id="<?php get_the_ID(); ?>" data-entity="<?php $category[0]->slug; ?>">
							<b><?php echo get_theme_mod('spicial-sale') ?></b>
							<div class="price" id="<?php get_the_ID(); ?>-price">
								<?php the_field('rentfree') ?>
							</div>
						</button>
						<button class="btn btn-default" data-role="order" data-id="<?php get_the_ID(); ?>" data-entity="<?php $category[0]->slug; ?>">
							<b><?php echo get_theme_mod('simple-sale') ?></b>
							<div class="price" id="<?php get_the_ID(); ?>-price">
								<?php the_field('rent') ?>
							</div>
						</button>
					</div>
				</span>
						</a>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>