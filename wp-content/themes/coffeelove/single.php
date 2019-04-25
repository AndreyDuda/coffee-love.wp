<?php get_header() ?>

<div class="wrapper">
	<?php get_navigation(); the_post()?>


    <section class="body-section single-product-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 gallery-block">
                    <div class="gallery">
                        <div class="main-image">
	                        <?php the_post_thumbnail('', array()) ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="pull-left catalog-link">
                        <?php  $category = get_the_category(get_the_ID())?>
                        <a href="<?php echo get_category_link($category['0']->term_id)?>">"Посмотреть другой товар"</a>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="col-md-8 col-offset-1 main-block">
                    <div class="row">
                        <h2 class="title"><?php the_title() ?></h2>
                        <div class="product-description">
                            <div data-type="about:price"><strong>Цена</strong>: <?php the_field('price') ?> грн</div>
                            <div data-type="about:type">
                            </div>
                            <div data-type="about:consist" class="col-md-12">
                                <div class="row">
                                    <div class="pull-left description-item-title">
                                        Состав<span>:</span>
                                    </div>
                                    <div class="pull-left">
                                        <?php the_field('composition') ?>
                                    </div>
                                </div>
                            </div>
                            <div data-type="about:strength">
                                <strong>Крепость</strong>:
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                            </div>
                            <div data-type="about:country">
                                <strong>Страна</strong>:
                                <?php the_field('country') ?>
                            </div>
                            <div data-type="about:description">
                                <?php the_content() ?>
                            </div>
                        </div>
                        <hr/>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <h3>Сделать заказ</h3>
                                <p>
                                    <em>
                                        Заполните, пожалуйта, форму и наши менеджеры свяжутся с Вами в ближайшее время.
                                    </em>
                                    </spanp>
                                </p>
                                    <form class="form" id="callback_form" role="form">
                                        <input type="hidden" name="client-order" value="<?php echo get_the_ID(); ?>|coffee"/>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="client-name" placeholder="Ваше имя">
                                <p class="err-msg"></p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="client-phone" placeholder="Ваш контактный телефон" maxlength="13">
                                <p class="err-msg"></p>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-default">Заказать</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="pull-left catalog-link">
                        <a href="<?php echo get_category_link($category['0']->term_id)?>">Посмотреть другой товар</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>