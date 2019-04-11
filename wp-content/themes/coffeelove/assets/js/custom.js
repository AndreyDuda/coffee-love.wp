(function ($) {

    $(document).ready(function () {
        var validation = {
            'phone': true,
            'name': true
        };
        var Scrobler = function (id, type) {
            var getParam = function (name) {
                    var $el = $(name);

                    return $el
                        ? $el.html().trim()
                        : null;
                },
                modals = {
                    coffee: $('#modalAboutCoffee'),
                    coffeemachine: $('#modalAboutCoffeeMachine')
                }
            ;

            var opts = {},
                params = {
                    coffee: ['title', 'description', 'photo', 'price', 'consist', 'strength', 'country', 'type'],
                    coffeemachine: ['title', 'description', 'photo', 'price']
                };

            for (var i = 0; i < params[type].length; i++) {
                opts[params[type][i]] = getParam('#' + id + '-' + params[type][i]);
                modals[type].find('[data-type="about:' + params[type][i] + '"]').html(opts[params[type][i]]);
            }
            modals[type].find('[data-type="about:id"]').data('id', id);

            modals[type].modal('show');
        };

        $('.item.odd.last').remove();

        $('#callback_form')
            .on('update input change', 'input[name=client-name]', function (e) {
                validation.name = true;
                var val = e.target.value;
                val = val.replace(/[^a-z,A-Z,а-я,А-Я\s]+/ig, '');
                e.target.value = val.length > 50
                    ? val.substr(0, 50)
                    : val;
            })
            .on('update input change', 'input[name=client-phone]', function (e) {
                validation.phone = true;
                var val = e.target.value;
                val = val.replace(/[^\d\+]+/ig, '');
                if (val.length > 13) {
                    val = val.substr(0, 13);data.order_title = $('#' + params[0] + '-title').html() || $('.title', $('.single-product-block')).html().trim();
                } else if (val.length == 13) {
                    validation.phone = /^\+380\d{9}$/.test(val);
                } else if (val.length == 10) {
                    validation.phone = /^0\d{9}$/.test(val);
                } else if (val.length == 7) {
                    validation.phone = /^7\d{6}$/.test(val);
                } else if (val.length < 6 || (val.length < 13 && val.length > 10) || (val.length < 10 && val.length > 7)) {
                    validation.phone = false;
                }
                e.target.value = val;
            })
            .submit(function (e) {
                e.preventDefault();
                var $order = $('input[name=client-order]'),
                    $name = $('input[name=client-name]'),
                    $phone = $('input[name=client-phone]');

                if (!validation.name || !validation.phone || $name.val().length < 3 || $phone.val().length < 3) {
                    alert('Неправельный формат номера…');
                    return;
                }

                var data = {
                    action: 'sendmail',
                    name: $name.val(),
                    phone: $phone.val(),
                    order_id: null,
                    order_type: null,
                    order_title: null,
                    title: null
                };

                if ($order.val()) {
                    var params = $order.val().split('|');
                    data.order_id = params[0];
                    data.order_type = params[1];
                    data.order_title = $('#' + params[0] + '-title').html().trim() || $('.title', $('.single-product-block')).html().trim();
                }

                $.ajax({
                    url: window.wp.ajax_url,
                    data: data,
                    type: 'post',
                    success: function (response) {
                        if (response.error) {
                            alert('Ошибка сервера, попробуйте еще раз.');
                            return;
                        }
                        alert('Заказ отправлен.');
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Ошибка сервера, попробуйте еще раз.');
                    }
                });

                $('#callback-modal').modal('hide');
            });

        $('#callback-modal').on('hidden.bs.modal', function (e) {
            $('#callback_form input').val('');
        });

        $('.btn[data-role=about], .item-about').click(function (e) {
            var $el = $(this),
                id = $el.data('id'),
                type = $el.data('entity');

            Scrobler(id, type);
        });

        $('.btn[data-role=order]').click(function (e) {
            var $el = $(this),
                id = $el.data('id'),
                type = $el.data('entity');

            $('[name="client-order"]').val(id + '|' + type);
            $('#modalAboutCoffeeMachine, #modalAboutCoffee').modal('hide');
            $('#callback-modal').modal('show');
        });


        /* ---------------------------------------------- /*
         * Navbar
         /* ---------------------------------------------- */
        var navbar = $('.navbar');

        var navBarLogo = $('.navbar-logo');
        var navHeight = navbar.height();

        $('body').scrollspy({
            target: '.navbar-custom',
            offset: 50
        });


        $(window).scroll(function () {
            if ($(this).scrollTop() >= navHeight) {
                navBarLogo.show();
                navbar.addClass('navbar-color');
                navbar.removeClass('white-color');
            } else {
                if (document.location.pathname === "/") {
                    navBarLogo.hide();
                    navbar.removeClass('navbar-color');
                    navbar.addClass('white-color');
                }
            }
        });

        if ($(window).width() <= 767) {
            navbar.addClass('custom-collapse');
        }

        $(window).resize(function () {
            if ($(this).width() <= 767) {
                navbar.addClass('custom-collapse');
            }
            else {
                navbar.removeClass('custom-collapse');
            }
        });
    });

})(jQuery);
