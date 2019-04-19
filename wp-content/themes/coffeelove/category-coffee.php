<?php get_header(); ?>

<div class="wrapper">
	<?php get_navigation();?>

    <section class="body-section products-catalog">
        <div class="container">
            <div class="row">
	            <?php
	            $coffee = new WP_Query(array(
		            'post_type' => 'coffee',
                    'meta_key'  => 'queue', // name of custom field
                    'orderby'   => 'meta_value_num',
                    'order'     => 'ASC'
	            ));
	            ?>
	            <?php while ($coffee->have_posts()): $coffee->the_post() ?>
                    <div class="col-md-3 catalog-item">
                        <div class="row">
                            <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
			                <span class="text-center catalog-item-image">
                                <?php the_post_thumbnail('', array('alt' => get_the_title())) ?>
			                </span>
                                <span class="text-center">
				                <span class="title">
					                <?php the_title(); ?>
				                </span>
				                <span>
					            <strong>Цена</strong>:
					                <?php the_field( 'price' ) ?> грн.
				             </span>
				             <span>
					            <strong>Состав</strong>:
					            <?php the_field('composition') ?>
				            </span>
				            <span>
					            <strong>Крепость</strong>:
					           <?php
					           $count = (get_field('power'))? (int)get_field('power'):0;
					           ?>
					            <?php
					            for($i=0;$i<5;$i++) {
						            echo ($i < $count)? '<i class="fa fa-star"></i>':'<i class="fa fa-star-o"></i>';
					            }
					            ?>
				            </span>
			            </span>
                            </a></div>
                    </div>
	            <?php endwhile; wp_reset_postdata();?>


            </div>
        </div>
    </section>



<?php get_footer(); ?>