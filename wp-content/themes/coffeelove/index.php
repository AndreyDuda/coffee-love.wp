<?php get_header() ?>
    <style>
        .navbar a{
            color: white;
        }
    </style>
<div class="wrapper">

    <!-- Preloader -->
<?php if(get_theme_mod('preloader_show')): ?>
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
<?php endif; ?>
    <!-- Navigation start -->

<?php get_navigation();?>


    <!-- =========== Intro section start ========== -->

    <section id="intro" class="section center-block">
        <div class="container">
            <div class="row">
                <div id="logo-container" class="text-center">
                    <div class="text-center">
                        <a id="logo" href="#" title="Coffee-Love | Для влюбленных в кофе"></a>

                        <div class="clearfix"></div>
                        Для влюбленных в кофе
                    </div>
                </div>
                <div class="main">
                    <div class="col-md-8 light-font promo">
                        <div class="clearfix header-margin-block"></div>
                        <div id="phone-numbers" class="contacts">
                            <div class="row">
                                <div><a style="color:white; text-decoration: none;" href="tel:0638523085">
                                    +
                                    <span class="timer" data-to="38"></span>
                                    (0<span class="timer" data-to="63"></span>)
                                    <span class="timer" data-to="85"></span>
                                    <span class="timer" data-to="230"></span>
                                    <span class="timer" data-to="85"></span>
                                    </a>
                                </div>
                                <div><a style="color:white; text-decoration: none;" href="tel:0677275717">
                                    +
                                    <span class="timer" data-to="38"></span>
                                    (0<span class="timer" data-to="67"></span>)
                                    <span class="timer" data-to="72"></span>
                                    <span class="timer" data-to="757"></span>
                                    <span class="timer" data-to="17"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <h1 class="title">
                                    АРЕНДА КОФЕМАШИН В ОДЕССЕ<br/>

                                </h1>
                            </div>
                        </div>
                        <div class="col-md-12 sub-title">
                            <div class="row">
                                Более 50 сортов кофе, 20 моделей кофемашин
                            </div>
                        </div>
                    </div>
                    <?php if(get_theme_mod('sale_show')): ?>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="action text-center wow tada" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="1">
                                <div class="action-title">
                                    Акция
                                </div>
                                <p class="action-text">
	                                <?php echo get_theme_mod('sale'); ?>
                                </p>

                                <div class="action-image"></div>
                                <button class="btn btn-default btn-lg wobble-vertical" data-toggle="modal" data-target="#callback-modal">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="body-section">
        <div class="container">
            <div class="row">
                <h2>Как мы работаем</h2>

                <div class="how-it-works-items">
                    <div class="col-md-2 step-1 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                        <p>
                            Вы оставляете заявку
                            <button class="btn btn-default btn-lg wobble-vertical" data-toggle="modal" data-target="#callback-modal">
                                Заказать
                            </button>
                        </p>
                    </div>
                    <div class="col-md-2 step-2 wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.7s">
                        <p>
                            Наш менеджер перезванивает
                            Вам в течение 5 мин и оформляет
                            заказ
                        </p>
                    </div>
                    <div class="col-md-2 step-3 wow bounceInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                        <p>
                            Мы оговариваем условия
                            и время установки кофемашины
                        </p>
                    </div>
                    <div class="col-md-2 step-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1.9s">
                        <p>
                            Наш менеджер бесплатно доставляет
                            кофемашину и проводит обучение
                        </p>
                    </div>
                    <div class="col-md-2 step-5 wow bounceInRight" data-wow-duration="1s" data-wow-delay="2.3s">
                        <p>
                            Вы наслаждаетесь настоящим
                            натуральным кофе
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <hr/>
        </div>
    </div>

    <section id="stats" class="body-section">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-12 stat-title wow bounceInLeft">
                    <div class="row">
                        <h2>Немного цифр</h2>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 stat-item wow bounceInDown">
                    <div class="row">
                        <i class="fa fa-coffee" style="font-size: 60px"></i>

                        <div class="timer" data-to="<?php echo get_theme_mod('cap') ?>"></div>
                        <p>Выпитых чашек</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 stat-item wow bounceInUp">
                    <div class="row">
                        <i class="fa cl-coffee-machine" style="font-size: 60px"></i>

                        <div class="timer" data-to="<?php echo get_theme_mod('coffeemachine') ?>"></div>
                        <p>Установленных кофемашин</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 stat-item wow bounceInRight">
                    <div class="row">
                        <i class="fa cl-smile" style="font-size: 60px"></i>

                        <div class="timer" data-to="<?php echo get_theme_mod('joy') ?>"></div>
                        <p>Счастливых покупателей</p>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <hr/>
        </div>
    </div>

    <section id="about_us" class="body-section">
        <div class="container">
            <div class="row">
                <h2>О нас</h2>

                <div>
                    <div class="clearfix">
                        <div class="col-md-6 step-1 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-line-chart"></i>
                                    Компания Coffee-Love представлена на рынке с 2013 года и стремительно развивается в кофейной индустрии.&nbsp;
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-2 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-coffee"></i>
                                    Вы всегда будете наслаждаться ароматным натуральным кофе. В случаях поломки машины мы заменяем ее на время ремонта.&nbsp;Вы платите только за кофе!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-6 step-2 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-thumbs-o-up"></i>
                                    Для Вашего комфортного пользования мы предоставляем кофемашины итальянского производства &ndash; <em>Saeco Royal</em>, <em>Magic</em>, <em>Vienna</em> и берем на себя затраты по обслуживанию.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-1 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon-coffeemacine-stats.png.pagespeed.ce.BRsRXnjLJN.png" style="height: 26px;"/>
                                    Мы предоставляем в бесплатное пользование кофемашину при заказе от 3 кг кофе в месяц. Возможна аренда кофемашин без привязки и обязательного приобретения кофе.&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-6 step-3 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-truck"></i>
                                    Мы гарантируем своевременную доставку кофе в оговоренный срок.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-3 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/coffee-bean.png.pagespeed.ce.PAfQc5zKQo.png" style="height: 26px;"/>
                                    Сотрудничая с нами, Вы получаете широкий ассортимент лучших сортов натурального кофе в Одессе.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-6 step-4 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-shopping-cart"></i>
                                    Мы предоставляем индивидуальный подход каждому клиенту.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-4 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/timemachine.png.pagespeed.ce.1YAnhn1FRb.png" style="height: 34px;"/>
                                    Вы сами выбираете сроки аренды кофемашины.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-6 step-5 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <p>
                                    <i class="fa fa-users"></i>
                                    Работая с компанией <strong>Coffee-Love</strong>, Вы обретете надежного партнера для Вашего бизнеса.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 step-5 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="row padding-10">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-money"></i> &ndash; Мы принесем дополнительный доход Вашей торговой точке.</li>
                                    <li> &ndash;Поднимем уровень сервиса Вашего салона.</li>
                                    <li> &ndash;Станем незаменимым атрибутом Вашего офиса.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products section start -->
    <div id="products">
        <section>
            <div class="container">
                <div class="row">
                    <div id="coffee" class="body-section carousel slide" data-ride="carousel">
                        <div class="col-md-12">
                            <div class="row">
                                <h2 class="light-font">
                                    Кофе
                                    <span class="pull-right">
								<a href="/coffee">
									<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
										<div class="flipper">
											<div class="front">
												КАТАЛОГ КОФЕ
											</div>
											<div class="back">
												<?php
												wp_nav_menu([
													'theme_location' => 'coffee',
													'container'      => null, //удаляем wp теги
													'item_wrap'      => '%3$s',
													'walker' => new Custom_Walker_Nav_Menu()
												]);

												?>
											</div>
										</div>
									</div>
								</a>
							</span>
                                </h2>
                            </div>
                        </div>
                        <?php


                        ?>
                        <!-- Wrapper for slides -->
                        <div id="coffee-slides" class="carousel-inner" role="listbox">
                            <div class="item active">
                                <?php

                                $coffee = new WP_Query(array(
                                    'post_type' => 'coffee',
                                    'posts_per_page' => 18
                                ));
                                $next  = 6;
                                $index = 0;
                                while($coffee->have_posts()): $coffee->the_post();

                                if($index == $next){
                                    echo '</div><div class="item">';
                                    $index = 1;
                                }else{
                                    ++$index;
                                }
                                ?>
                                <div class="col-md-4">
                                    <div class="clearfix product">
                                        <div class="col-xs-4 col-sm-4 text-center product-image" id="<?php echo get_the_ID();?>-photo">
                                            <?php the_post_thumbnail('', array('class' => 'item-about')) ?>
                                        </div>
                                        <div class="col-sm-8 specs text-left">
                                            <div class="row">
                                                <div class="title" id="<?php echo get_the_ID();?>-title">
                                                    <?php echo the_title() ?>
                                                </div>
                                                <div id="<?php echo get_the_ID();?>-price">
                                                    <strong>Цена</strong>:
                                                    <?php the_field('price')?> грн.
                                                </div>
                                                <div id="<?php echo get_the_ID();?>-consist">
                                                    <strong>Состав</strong>:
                                                    <?php the_field('composition')?>
                                                </div>
                                                <div id="<?php echo get_the_ID();?>-strength">
                                                    <strong>Крепость</strong>:
                                                    <?php
                                                        $count = (get_field('power'))? (int)get_field('power'):0;
                                                    ?>
                                                    <?php
                                                        for($i=0;$i<5;$i++) {
                                                            echo ($i < $count)? '<i class="fa fa-star"></i>':'<i class="fa fa-star-o"></i>';
                                                        }
                                                    ?>
                                                </div>

                                                <div class="hide" id="<?php echo get_the_ID();?>-country">
                                                    <strong>Страна</strong>:
                                                    <?php the_category('country')?>
                                                </div>
                                                <div class="hide" id="<?php echo get_the_ID();?>-type">
                                                    <strong>Тип</strong>:
                                                    "<?php the_category('coffee-type')?>"
                                                </div>
                                                <div class="hide" id="<?php echo get_the_ID();?>-description">
                                                   <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-12 buttons text-center">
                                            <div class="row">
                                                <button class="btn btn-default" data-role="about" data-id="<?php echo get_the_ID();?>" data-entity="coffee">
                                                    Подробнее
                                                </button>
                                                <button class="btn btn-default" data-role="order" data-id="<?php echo get_the_ID();?>" data-entity="coffee">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata();?>


                            </div>
                        </div>

                        <div class="clearfix"></div>


                        <!-- Indicators -->
                        <ol class="carousel-indicators" id="coffee-indicators">
                            <li data-target="#coffee" data-slide-to="0" class="active"></li>
                        </ol>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#coffee" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Назад</span>
                        </a>
                        <a class="right carousel-control" href="#coffee" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Вперед</span>
                        </a>
                    </div>

                    <!-- <div class="text-left notation">
                        * Спешите, цены действительны до <strong>01.04.16</strong>
                    </div> -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div id="coffee-machines" class="body-section carousel slide" data-ride="carousel">
                        <div class="col-md-12">
                            <div class="row">
                                <h2 class="light-font">
                                    Аренда Кофемашин
                                    <span class="pull-right">
								<a href="/coffeemachines">
									<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
										<div class="flipper">
											<div class="front">
												КАТАЛОГ КОФЕМАШИН
											</div>
											<div class="back">
												<?php
												wp_nav_menu([
													'theme_location' => 'coffeemachine',
													'container'      => null, //удаляем wp теги
													'item_wrap'      => '%3$s',
													'walker' => new Custom_Walker_Nav_Menu()
												]);

												?>
											</div>
										</div>
									</div>
								</a></span>
                                </h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- Wrapper for slides -->
                        <div id="coffee-machines-slides" class="carousel-inner" role="listbox">
                            <div class="item active">
                                <?php
                                $coffeemachine = new WP_Query(array(
                                    'post_type' => 'coffee_machine',
                                    'posts_per_page' => 15
                                ));
                                $next_m = 3;
                                $index_m = 0;
                                $i = 1;
                                $finish  = $coffeemachine->post_count;

                                while($coffeemachine->have_posts()): $coffeemachine->the_post();
                                if ($index_m == $next_m){
                                    echo '</div><div class="item even">';
                                    $index_m = 1;
                                } else {
                                    $index_m++;
                                }
                                ?>
                                <div class="col-md-4 coffee-machine">
                                    <div class="row">
                                        <div class="coffee-machine-title font-22"><?php the_title(); ?></div>
                                        <div class="coffee-machine-pic">
			                                <span id="<?php echo get_the_ID();?>-photo">
				                                <?php the_post_thumbnail('', array('class' => 'item-about')) ?>
			                                </span>

                                            <div class="hide" id="<?php echo get_the_ID();?>-title">
                                                <?php echo the_title() ?>
                                            </div>
                                            <div class="hide" id="<?php echo get_the_ID();?>-description">
                                               <?php echo the_content() ?>
                                                <p><strong style="line-height: 1.5;">Страна производитель</strong><span style="line-height: 1.5;">: <?php the_field('country_m') ?></span></p>
                                            </div>
                                        </div>
                                        <div class="coffee-machine-price text-center">
                                            <button class="btn btn-default" data-role="about" data-id="<?php echo get_the_ID();?>" data-entity="coffeemachine">
                                                <b>Купить</b>
                                                <div class="price" id="<?php echo get_the_ID();?>-price">
                                                    <?php the_field('price_m')?> грн.
                                                </div>
                                            </button>
                                            <button class="btn btn-default" data-role="order" data-id="<?php echo get_the_ID();?>" data-entity="coffeemachine">
                                                <b>Арендовать</b>
                                                <div class="price" id="<?php echo get_the_ID();?>-price">
                                                    <?php the_field('rent')?> кг.
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata();?>






                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators" id="coffee-machines-indicators">
                            <li data-target="#coffee-machines" data-slide-to="0" class="active"></li>
                        </ol>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#coffee-machines" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Назад</span>
                        </a>
                        <a class="right carousel-control" href="#coffee-machines" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Вперед</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section id="clients" class="body-section">
        <div class="container">
            <div class="row">
                <div id="our-clients">
                    <div class="our-clients-title col-md-12">
                        <div class="row">
                            <h2>
                                Наши клиенты
                            </h2>
                        </div>
                    </div>
                    <div class="our-clients-list col-md-9">
                        <div class="row text-center">
                            <div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/photo.jpg.pagespeed.ce.dpLHeY86tD.jpg" title="ctb.centr"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/artbilet.png.pagespeed.ce.uYS3Yiowe_.png" title="Artbilet"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/alfabank2.png.pagespeed.ce._GRJ8fShGa.png" title="Alfabank"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/novatek.png.pagespeed.ce.ICIjqPvsSU.png" title="Novatek"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/Pivasov_logo_250.png.pagespeed.ce.6ra9DXxI0A.png" title="Pivasov"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/fornetti_250_250.png.pagespeed.ce.j9T9cLBfGd.png" title="Fornetti"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/83452.gif.pagespeed.ce.0WziDMSsV9.gif" title="Citrus"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/life.png.pagespeed.ce.cSjx7uzXh5.png" title="Life"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/Privatbank-340x286-d925.jpg.pagespeed.ce.jItxDnZhwo.jpg" title="ПриватБанк"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/pdomSdpXiKk.jpg.pagespeed.ce.MzU7MV2WAx.jpg" title="СБ Агент"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/cibercar.jpg.pagespeed.ce.CSwo9bfg2F.jpg" title="Cibercar"/>
                                    </div>
                                </div>
                            </div><div class="col-md-3 col-xs-6">
                                <div class="row">
                                    <div class="client-logo-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/clients/Gerb_onpu.gif.pagespeed.ce.GvIX-s5vad.gif" title="ОНПУ"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if(get_theme_mod('sale_show')): ?>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="action text-center wow tada" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="1">
                                <div class="action-title">
                                    Акция
                                </div>
                                <p class="action-text">
		                            <?php echo get_theme_mod('sale'); ?>
                                </p>

                                <div class="action-image"></div>
                                <button class="btn btn-default btn-lg wobble-vertical" data-toggle="modal" data-target="#callback-modal">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>