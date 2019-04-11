<?php get_header() ?>
<style>
    .navbar{
        background: white!important;
        box-shadow: 0 0 4px rgba(0, 0, 0, .2)!important;
        color: black!important;
    }
</style>
<div class="wrapper">
	<?php get_navigation(); ?>


	<section class="body-section products-catalog">
		<div class="container">
			<div class="row">
				<?php while (have_posts()): the_post() ?>
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
							<b>Аренда без привязки</b>
							<div class="price" id="<?php get_the_ID(); ?>-price">
								от. <?php the_field('rentfree') ?> кг.
							</div>
						</button>
						<button class="btn btn-default" data-role="order" data-id="<?php get_the_ID(); ?>" data-entity="<?php $category[0]->slug; ?>">
							<b>Арендовать</b>
							<div class="price" id="<?php get_the_ID(); ?>-price">
								от <?php the_field('rent') ?> кг
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

	<!-- Footer start -->
	<footer id="footer" class="body-section">
		<div class="container">

			<div class="row">
				<div class="col-md-8 promo">
					<div class="row">
						<h2>
							Контакты
						</h2>
						<div class="title">
							АРЕНДА КОФЕМАШИН В ОДЕССЕ<br/>

						</div>

						<div class="sub-title">
							Более 50 сортов кофе, 20 моделей кофемашин
						</div>


					</div>
				</div>

				<div class="col-md-4 contacts">
					<div class="row">
						<p class="socials">
							<a href="https://vk.com/coffeeloveyou" title="Наша группа Вконтакте">
								<i class="fa fa-vk"></i>
							</a>
							<a href="https://www.facebook.com/groups/coffeeloveyou/" title="Наша группа в Facebook">
								<i class="fa fa-facebook"></i>
							</a>
						</p>
						<p>
							+38 (063) 85 230 85
						</p>
						<p>
							+38 (067) 29 757 17
						</p>
						<p>
							+38 (093) 069 65 09
						</p>
						<p class="coffee-mail">
							sales@coffee-love.com.ua
						</p>

						<div class="callback">
							<button class="btn btn-default btn-lg wobble-vertical" data-toggle="modal" data-target="#callback-modal">
								Заказать звонок
							</button>
						</div>


					</div>
				</div>
			</div>

		</div>


		<div id="counters">

			<div class="analitika">
				<script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-62204034-1', 'auto');
                    ga('send', 'pageview');

				</script>
			</div>

			<div>
				<!-- I.UA counter --><a href="http://www.i.ua/" target="_blank" onclick="this.href='http://i.ua/r.php?192660';" title="Rated by I.UA">
					<script type="text/javascript"><!--
                        iS='http'+(window.location.protocol=='https:'?'s':'')+
                            '://r.i.ua/s?u192660&p67&n'+Math.random();
                        iD=document;if(!iD.cookie)iD.cookie="b=b; path=/";if(iD.cookie)iS+='&c1';
                        try{iHP=document.body.firstChild;
                            iHP.style.behavior="url('#default#homePage')";
                            iHP.addBehavior('#default#homePage');
                            if (iHP.isHomePage(window.location.href))iS+='&o1';
                        } catch (e) { }
                        iS+='&d'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)
                            +"&w"+screen.width+'&h'+screen.height;
                        iT=iR=iD.referrer.replace(iP=/^[a-z]*:\/\//,'');iH=window.location.href.replace(iP,'');
                        ((iI=iT.indexOf('/'))!=-1)?(iT=iT.substring(0,iI)):(iI=iT.length);
                        if(iT!=iH.substring(0,iI))iS+='&f'+escape(iR);
                        iS+='&r'+escape(iH);
                        iD.write('<img src="'+iS+'" border="0" width="88" height="31" />');
                        //--></script></a>
				<!-- End of I.UA counter -->
			</div>

		</div>

	</footer>
</div>
<div class="modal fade" id="callback-modal" tabindex="-1" role="dialog" aria-labelledby="modalCallback" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title text-center" id="modalCallback">Оформить обратный звонок</h4>
			</div>
			<div class="modal-body">
				<p>Заполните, пожалуйта, форму и наши менеджеры свяжутся с Вами в ближайшее время.</p>
				<form class="form" id="callback_form" role="form">
					<input type="hidden" name="client-order"/>
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
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- Background slider -->
<script src="./assets/js/jquery.backstretch.min.js"></script>
<!-- Text rotator -->
<script src="./assets/js/jquery.simple-text-rotator.min.js"></script>
<!-- Waypoints -->
<script src="./assets/js/jquery.waypoints.js"></script>
<!-- CountTo  -->
<script src="./assets/js/jquery.countTo.js"></script>
<!-- WOW - Reveal Animations When You Scroll -->
<script src="./assets/js/wow.min.js"></script>
<!-- Smooth scroll -->
<script src="./assets/js/smoothscroll.js"></script>
<!-- Custom scripts -->
<script src="./assets/js/custom.js"></script>

</body>
<html>