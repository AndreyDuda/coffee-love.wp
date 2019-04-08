<footer id="footer" class="body-section">
    <div class="container">

        <div class="row">
            <div class="col-md-8 promo">
                <div class="row">
                    <h2 style="padding: 0; margin: 0;">
                        Контакты
                    </h2>

                    <div class="title" style="padding: 0; margin: 0;">
                        АРЕНДА КОФЕМАШИН В ОДЕССЕ<br/>

                    </div>

                    <div class="sub-title" style="padding: 0; margin: 0;">
                        Более 50 сортов кофе, 20 моделей кофемашин
                    </div>
                    <?php if (get_theme_mod( 'map_show' )) : ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.7395397584464!2d30.746017115591673!3d46.47366687912588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63177af4ba3bd%3A0x6e0bee6adb14268c!2z0YPQuy4g0JHQsNC30LDRgNC90LDRjywgMjgsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1554668449624!5m2!1sru!2sua" width="<?php echo get_theme_mod('map-width') ?>%;" height="<?php echo get_theme_mod('map-height') ?>px;" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <?php endif; ?>
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
                        <a style="color:black; text-decoration: none;" href="tel:0638523085">+38 (063) 85 230 85</a>
                    </p>
                    <p>
                        <a style="color:black; text-decoration: none;" href="tel:0672975717">+38 (067) 29 757 17</a>
                    </p>
                    <p>
                        <a style="color:black; text-decoration: none;" href="tel:0930696509">+38 (093) 069 65 09</a>
                    </p>
                    <p class="coffee-mail">
                        <a style="color: black; text-decoration: none; " href="mailto:sales@coffee-love.com.ua">sales@coffee-love.com.ua</a>
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
<!-- .wrapper -->

<!-- Modal -->
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
<div class="modal fade" id="modalAboutCoffee" tabindex="-1" role="dialog" aria-labelledby="modalAboutCoffeeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title text-center" id="modalAboutCoffeeLabel" data-type="about:title"></h4>
            </div>
            <div class="modal-body">
                <div class="col-md-5 text-center" data-type="about:photo"></div>
                <div class="col-md-7">
                    <div class="row">
                        <div data-type="about:price"></div>
                        <div data-type="about:type"></div>
                        <div data-type="about:consist"></div>
                        <div data-type="about:strength"></div>
                        <div data-type="about:country"></div>
                        <div data-type="about:description"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-role="order" data-entity="coffee" data-type="about:id">
                    Заказать
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalAboutCoffeeMachine" tabindex="-1" role="dialog" aria-labelledby="modalAboutCoffeeMachineLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title text-center" id="modalAboutCoffeeMachineLabel" data-type="about:title"></h4>
            </div>
            <div class="modal-body">

                <div class="col-md-5 text-center" data-type="about:photo"></div>
                <div class="col-md-7">
                    <div class="row">
                        <div data-type="about:price"></div>
                        <div data-type="about:description"></div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-role="order" data-entity="coffeemachine" data-type="about:id">
                    Заказать
                </button>
            </div>
        </div>
    </div>
</div>

</body>
<?php wp_footer();?>
</html>
