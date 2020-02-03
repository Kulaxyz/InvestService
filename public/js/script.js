$(document).ready(function() {
    new WOW().init();
    $('#investValue').keyup(function() { $('#investCoinsValue').html($('#investValue').val() * 2);
        calculateInvest($('#investValue').val()); });
    var phoneInput = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    $.getJSON('//ipinfo.io/?token=a67f76a001f3ba', function(data) {
        country_code = data.country;
        // console.log(country_code);
        if (($("#phone").length > 0)) {
            var iti = window.intlTelInput(phoneInput, {
                utilsScript: 'js/utils.js',
                separateDialCode: true,
                nationalMode: true,
                initialCountry: country_code,
                hiddenInput: 'login_phone_full',
                preferredCountries: ['us', 'ca', 'cn', 'id', 'br'],
            });
            var reset = function() {
                phoneInput.classList.remove("error");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hidden");
                validMsg.classList.add("hidden");
            };
            //validate
            var validate = function() {
                fullNumber = iti.getNumber();
                $('input[name="login_phone_full"]').val(fullNumber);
                // console.log(fullNumber);
                reset();
                if (phoneInput.value.trim()) {
                    if (iti.isValidNumber()) {
                        validMsg.classList.remove("hidden");
                    } else {
                        phoneInput.classList.add("error");
                        var errorCode = iti.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];
                        errorMsg.classList.remove("hidden");
                    }
                }
            }
            phoneInput.addEventListener('blur', function() {}); // пустой лиснер?
            $(phoneInput).on('input', function() { validate(); });
            $(phoneInput).on('blur', function() { validate(); });
            $(phoneInput).on('change', function() { validate(); });
        }
    });

    $('[data-toggle="tooltip"]').tooltip({
        trigger: 'click'
    });
    // HEADER
    $('a.scroll-it').click(function() {
        linkHref = $(this).attr('href');

        var headerHeight = $('header').height();
        scrollTarget = $(linkHref).offset().top - headerHeight;

        $('html, body').animate({ scrollTop: scrollTarget }, 300);
    });
    // MAIN FAQ... was here
    // LOGIN
    $('#main-login-form').submit(function() {
        //TODO Добавить проверку мыла и при успехе

        if ($(this).find('input').hasClass('error')) {

        } else {
            $('#submit-phone-button').attr('disabled', true);
            $('#submit-phone-button').css('background-color', '#eee');
            $.ajax({

                type: "POST",
                url: "phone/callback",
                data: $('#main-login-form').serialize(),
                success: function(msg) {
                    $('#submit-phone-button').removeAttr('disabled');
                    $('#submit-phone-button').css('background-color', '#ff703e');
                    $('#modal').modal('show');

                },
                error: function(response) {
                    alert("Error during query execution. Sorry, try later");
                    $('#submit-phone-button').removeAttr('disabled');
                    $('#submit-phone-button').css('background-color', '#ff703e');
                }
            });
        }
        //убрать
        return false;
    });
    $('div.refresh-button').click(function() {
        //TODO добавить создание нового кода
        //анимация
        $(this).addClass('active');
        var activated = $(this);
        setTimeout(function() {
            activated.removeClass('active');
        }, 3000);
    });
    $('#login-code-form').submit(function() {
        //TODO Добавить проверку кода и при успехе
        $.ajax({
            type: "POST",
            url: "phone/code",
            data: $('#login-code-form').serialize(),
            success: function(msg) {
                if (msg == 'true') {
                    var modalBodyHeight = $('#modal .modal-body').height();
                    $('#modal .modal-body').addClass('result').height(modalBodyHeight).addClass('flexed');
                    setTimeout(function() {
                        //TODO Редирект
                        document.location.href = 'https://librawallet.today/wallet';
                    }, 3000);
                    $('#modal').modal('show');
                } else {
                    alert('Wrong code or too late!');
                }
                console.log(msg);

            },
            error: function(response) {
                alert("Code isn`t right");
            }
        });
        // AJAX
        //Убрать
        return false;
    });

    // CABINET
    $('div.refresh-balance').click(function() {
        //TODO добавить проверку и изменение баланса
        //анимация
        $(this).addClass('active');
        var activated = $(this);
        setTimeout(function() {
            activated.removeClass('active');
        }, 3000);
    });

    if (($("#tokens-L").length > 0)) {
        var lNumber = parseInt($("#tokens-L").text());
        var pNumber = parseInt($("#tokens-P").text());
        var secondsLeft = $('.total-info').data('seconds');
        tokenCounter(lNumber, pNumber, secondsLeft);
    }

    $('#invest_button').click(function() {
        let leftTokens_x = document.getElementById('tokens-L').innerText;
        if (leftTokens_x == '0') {
            event.preventDefault();
            $('#invest_button').addClass('disabled');
            alert('We are sorry, but the sale of tokens is over.');
            console.log('Tokens are over');
        } else {
            console.log('There are no tokens left.');
        }
    });

    function tokenCounter(leftTokens, purchasedTokens, secondsLeft) {
        var maxSeconds = 14400;
        //var maxSeconds = secondsLeft + 150; // for testing only
        var haveSeconds = (maxSeconds - secondsLeft);
        var lId = 'tokens-L';
        var pId = 'tokens-P';
        var speed = Math.round(leftTokens / maxSeconds);
        console.log('speed = ' + speed);
        var full = leftTokens + purchasedTokens;
        leftTokens = leftTokens - parseInt((leftTokens / maxSeconds) * secondsLeft);
        purchasedTokens = full - leftTokens;

        // проверка - истекло ли время
        if ((haveSeconds > 0) && (haveSeconds < maxSeconds) && (lNumber > 0) && purchasedTokens != full)
        {
            var minutes = haveSeconds / 60; // определяем количество минут до истечения
            var hours = minutes / 60; // определяем количество часов до истечения
            minutes = (hours - Math.floor(hours)) * 60; // подсчитываем кол-во оставшихся минут в текущем часе
            hours = Math.floor(hours); // целое количество часов до истечения таймера
            seconds = Math.floor((minutes - Math.floor(minutes)) * 60); // подсчитываем кол-во оставшихся секунд в текущей минуте
            minutes = Math.floor(minutes); // округляем до целого кол-во оставшихся минут в текущем часе
            console.log('Осталось ' + hours + ' часов ' + minutes + ' минут ' + seconds + ' секунд'); // осталось
            if (leftTokens < 0) {
                leftTokens = 0;
                purchasedTokens = full;
            }

            document.getElementById(lId).innerText = leftTokens.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            if (leftTokens > 0 && purchasedTokens <= full)
            {
                //document.getElementById('cabinet').addEventListener('mousemove', function() {purchasedTokens = purchasedTokens -1;leftTokens = leftTokens -1;});

                setInterval(function() {
                    if (leftTokens > 0 && purchasedTokens <= full) {
                        purchasedTokens += speed;
                        leftTokens -= speed;
                    } else { hideTotal(); }
                    if (leftTokens < 0) {
                        leftTokens = 0;
                        purchasedTokens = full;
                    }
                    if (purchasedTokens >= full) {
                        leftTokens = 0;
                        purchasedTokens = full;
                    }
                    document.getElementById(pId).innerText = purchasedTokens.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                    document.getElementById(lId).innerText = leftTokens.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                }, 1000);
            } 
            else
            {
                // если счётчик исчезает на виду
                hideTotal();
                document.getElementById('tokens-L').innerText = '0';
            }


        }
        else
        {
            // если счётчик не показывается изначально
            console.log('total-info.hide');
            $('.total-info').hide();
            document.getElementById('tokens-L').innerText = '0';
        }
    }

    function hideTotal() {
        console.log('function hideTotal activated');
        $('.total-info').addClass('animated fadeOut');
        setTimeout(function() {
            $('.total-info').hide();
        }, 1000);
    }
    // INVEST
    function calculateInvest(dollars) {
        var course = 2;
        if (dollars < 50) {
            coins = 0;
        }
        if ((dollars >= 50) && (dollars <= 100000)) {
            coins = dollars * course;
            $('#invest form .disclaimer').removeClass('show');
            $('#invest form .form-button .button-info').removeClass('show');
            $('#invest form .form-button button').removeAttr('disabled');
        } else {
            $('#invest form .disclaimer').addClass('show');
            $('#invest form .form-button .button-info').addClass('show');
            $('#invest form .form-button button').attr('disabled', true);
        }
        $('#invest form .form-info .coins .value').text(coins);
    }
    $('input#investValue').change(function() {
        calculateInvest($(this).val());
    });
    $('input#investValue').focus(function() {
        calculateInvest($(this).val());
    });
    $('input#investValue').on('input', function() {
        calculateInvest($(this).val());
    });
    $('input#investValue').keydown(function() {
        if (!$(this).val() || (parseInt($(this).val()) <= 100000))
            $(this).data("old", $(this).val());
    });
    $('input#investValue').keyup(function() {
        if (!$(this).val() || (parseInt($(this).val()) <= 100000))
        ;
        else
            $(this).val($(this).data("old"));
    });
    // INVITE
    $('div.link-copy').click(function() {
        select_all_and_copy($(this).parent().find('input').attr('id'));
    });

    $('#invite-withdraw-form').submit(function() {
        //TODO Добавить проверку счета и при успехе
        $.ajax({
            type: "POST",
            url: "https://librawallet.com/gets",
            data: $('#invite-withdraw-form').serialize(),
            success: function(msg) {
                $('#modal').modal('show');
                $('#modal .modal-body').addClass('result flexed');
                $('#modal .modal-body .result-block .result-text').html('Your Withdrawal has been successfully created<br> Please Wait 1-3 Days for the money to be deposited.');
            },
            error: function(response) { alert("Error"); }
        });
        setTimeout(function() {
            //TODO Редирект куда-то)
        }, 3000);
        //убрать
        return false;
    });
    // MEDIA
    $(".learn-slider").owlCarousel({
        loop: false,
        margin: 30,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsiveClass: true,
        items: 2,
        dots: false,
        nav: true,
        navText: ['<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>', '<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>'],
        lazyLoad: true,
        responsive: {
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    $(".download-slider").owlCarousel({
        loop: false,
        margin: 30,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsiveClass: true,
        items: 2,
        dots: false,
        nav: true,
        navText: ['<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>', '<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>'],
        lazyLoad: true,
        responsive: {
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    $(".read-more-slider").owlCarousel({
        loop: false,
        margin: 30,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsiveClass: true,
        items: 3,
        dots: false,
        nav: true,
        navText: ['<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>', '<svg viewBox="0 0 22.03 22.83"><path d="M10.05 21.41l10.53-9.79L10.05 1.41M19.72 11.66H1"></path></svg>'],
        lazyLoad: true,
        responsive: {
            320: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    $('a[data-target="#video-modal"]').click(function() {
        var video = $(this).data('video-url');
        $('#video-modal iframe').removeAttr('src').attr('src', 'https://www.youtube.com/embed/' + video + '?autoplay=1&amp;mute=0&amp;controls=1&amp;origin=https%3A%2F%2Flibra.org&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;widgetid=1" id="widget2');
    });
    $('#video-modal .close').click(function() {
        $('#video-modal iframe').removeAttr('src');
    });

    // RESPONSIVE
    $('div.mobile-menu').click(function() {
        $('.mobile-menu-block').show();
        $('body').css('overflow', 'hidden');
    });
    $('div.mobile-menu-close').click(function() {
        $('.mobile-menu-block').hide();
        $('body').css('overflow', 'initial');
    })
}); // наверное, это закрывающая скобка главной функции jQuery $(document).ready(function{...
window.onload = function() // дожидаемся загрузки страницы
{ initializeTimer(); } // вызываем функцию инициализации таймера
function initializeTimer() {
    var seconds = $('#payment .order-info li .info-value .timer').data('seconds');
    if (seconds > 0) { // проверка - истекла ли дата обратного отсчета
        var minutes = seconds / 60; // определяем количество минут до истечения таймера
        var hours = minutes / 60; // определяем количество часов до истечения таймера
        minutes = (hours - Math.floor(hours)) * 60; // подсчитываем кол-во оставшихся минут в текущем часе
        hours = Math.floor(hours); // целое количество часов до истечения таймера
        seconds = Math.floor((minutes - Math.floor(minutes)) * 60); // подсчитываем кол-во оставшихся секунд в текущей минуте
        minutes = Math.floor(minutes); // округляем до целого кол-во оставшихся минут в текущем часе
        setTimePage(hours, minutes, seconds); // выставляем начальные значения таймера
        function secOut() {
            if (seconds == 0) { // если секунду закончились то
                if (minutes == 0) { // если минуты закончились то
                    if (hours == 0) { // если часы закончились то
                        showMessage(timerId); // выводим сообщение об окончании отсчета
                    } else {
                        hours--; // уменьшаем кол-во часов
                        minutes = 59; // обновляем минуты 
                        seconds = 59; // обновляем секунды
                    }
                } else {
                    minutes--; // уменьшаем кол-во минут
                    seconds = 59; // обновляем секунды
                }
            } else {
                seconds--; // уменьшаем кол-во секунд
            }
            setTimePage(hours, minutes, seconds); // обновляем значения таймера на странице
        }
        timerId = setInterval(secOut, 1000) // устанавливаем вызов функции через каждую секунду
    } else {
        if (seconds != undefined) {
            alert("Times out!");
        }
    }
}

function setTimePage(h, m, s) { // функция выставления таймера на странице
    var element = document.getElementById("timer"); // находим элемент с id = timer
    if (h < 10) {
        h = '0' + h;
    }
    if (m < 10) {
        m = '0' + m;
    }
    if (s < 10) {
        s = '0' + s;
    }
    element.innerHTML = h + ":" + m + ":" + s;
} // выставляем новые значения таймеру на странице
function showMessage(timerId) { // функция, вызываемая по истечению времени
    alert("End of time!");
    clearInterval(timerId);
} // останавливаем вызов функции через каждую секунду
function select_all_and_copy(el) {
    var el = document.getElementById(el);
    if (document.body.createTextRange) { // IE 
        var textRange = document.body.createTextRange();
        textRange.moveToElementText(el);
        textRange.select();
        textRange.execCommand("Copy");
        $(el).parent().tooltip('hide').attr('title', '');
        $(el).parent().attr('data-original-title', 'Copied!');
        $(el).parent().tooltip({ trigger: 'manual' }).tooltip('show');
    } else if (window.getSelection && document.createRange) { // non-IE
        var editable = el.contentEditable; // Record contentEditable status of element
        var readOnly = el.readOnly; // Record readOnly status of element
        el.contentEditable = true; // iOS will only select text on non-form elements if contentEditable = true;
        el.readOnly = false; // iOS will not select in a read only form element
        var range = document.createRange();
        range.selectNodeContents(el);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range); // Does not work for Firefox if a textarea or input
        if (el.nodeName == "TEXTAREA" || el.nodeName == "INPUT")
            el.select(); // Firefox will only select a form element with select()
        if (el.setSelectionRange && navigator.userAgent.match(/ipad|ipod|iphone/i))
            el.setSelectionRange(0, 999999); // iOS only selects "form" elements with SelectionRange
        el.contentEditable = editable; // Restore previous contentEditable status
        el.readOnly = readOnly; // Restore previous readOnly status 
        if (document.queryCommandSupported("copy")) {
            var successful = document.execCommand('copy');
            if (successful) {
                $(el).parent().tooltip('hide').attr('title', '');
                $(el).parent().attr('data-original-title', 'Copied!');
                $(el).parent().tooltip({ trigger: 'manual' }).tooltip('show');
            } else { alert('Press Ctrl+C to copy'); }
        } else {
            if (!navigator.userAgent.match(/ipad|ipod|iphone|android|silk/i))
                alert('Press Ctrl+C to copy');
        }
    }
}