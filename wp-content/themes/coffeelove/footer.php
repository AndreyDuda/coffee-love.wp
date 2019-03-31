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

<div class="hide">
    <!-- Yandex.Metrika informer -->
    <a href="https://metrika.yandex.ru/stat/?id=27921684&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/27921684/3_0_9FFFF4FF_7FFFD4FF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:27921684,lang:'ru'});return false}catch(e){}"/></a>
    <!-- /Yandex.Metrika informer -->
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter27921684 = new Ya.Metrika({id:27921684});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27921684" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter -->




</body>
<?php wp_footer();?>
</html>
