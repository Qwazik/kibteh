$(function(){
    new WOW({
        offset: 100,
        mobile: false
    }).init();
    $('[type="tel"]').mask('+7(999) 999-99-99');
    $('.fancybox[href="#emptyModal"]').click(function(){
        var $this = $(this).closest('[data-container]'),
            detail = $this.find('[data-detail]').html(),
            $modal = $('#emptyModal'),
            modalDetail = $modal.find('.modal__body');
        modalDetail.html(detail);
        initProductBtn();
    });
    $('.fancybox[href="#modalArticle"]').click(function(){
        var $this = $(this),
            image = $this.find('[data-detail-picture]').clone(),
            text = $this.find('[data-detail-text]').html(),
            $modal = $('#modalArticle'),
            modalImage = $modal.find('.article-modal__image'),
            modalText = $modal.find('.article-modal__text .default-content');
        modalImage.html(image);
        modalText.html(text);
    });
    $('.fancybox[href="#product"]').click(function(){
        var productName = $(this).attr('data-product-name');
        $('#product').find('input[name="product_name"]').val(productName);
    });
    $('.fancybox').fancybox({
        smallBtn: false,
        touch:false,
        afterShow: function(){
            initProductBtn();
        }
    });
    $('.fancybox-reopen').click(function(){
       $.fancybox.close();
       $.fancybox.open({
           src: $(this).attr('href')
       },{
           smallBtn: false,
           touch:false
       })
    });



    $('.main-nav__link, .footer-nav__link').click(function(){
       scrollTo($($(this).attr('href')),0);
       return false;
    });

    tabsSliders=[];

    $(window).on({
        'load':function(){
            $('.mobile-nav__link').each(function(){
                var $this = $(this);
                var href = $this.attr('href');
                var target = ($(href).length)?$(href):false;
                if(href[0] === '#'){
                    $this.click(function(){
                        MOBILE_NAV.close();
                        scrollTo(target, $('.top-panel').outerHeight());
                    });
                }
            });
        },
        resize: function(){

        }
    });

    //feature
    (function(){
        var feature = '.feature';
        var header = '.feature__header';
        var body = '.feature__body';
        $(feature).each(function(){
            var $coreThis = $(this);
            var innerHeader = $(this).find(header);
            var innerBody = $(this).find(body);
            innerHeader.click(function(){
                $(feature).each(function(){
                    if($(this).is($coreThis)){
                        $(this).toggleClass('feature_opened').find(body).slideToggle();
                    }else{
                        $(this).removeClass('feature_opened').find(body).slideUp();
                    }
                });
            });
            if($coreThis.is('[data-open]')){
                innerHeader.click();
            }
        });
    }());

    //lang
    (function(){
        var lang = '.lang';
        var current = '.lang__current';
        var $lang = $(lang);
        var openTimeout = null;
        var closeDelay = 300;
        $lang.find(current).click(function(){
            $lang.toggleClass('lang_active');
        });
        $lang.mouseenter(function(){
            clearTimeout(openTimeout);
        });
        $lang.mouseleave(function(){
            openTimeout = setTimeout(function(){
                $lang.removeClass('lang_active');
            },closeDelay);
        });
    }());

    //faq
    (function(){
        var faq = '.faq';
        var faqItem = '.faq-item';
        $(faqItem).each(function(){
            var $this = $(this);
            var quest =  $this.find('.faq-item__quest');
            var answer = $this.find('.faq-item__answer');
            quest.click(function(){
                $this.stop(true,true).toggleClass('faq-item_active');
                answer.stop(true,true).slideToggle();
            });
        });
    }());

    //validation
    (function(){
        $('.ajax-form').each(function(){
            var $this = $(this),
                tel = $this.find('[type="tel"]');
            inputs($this.find('input'));
            $this.parsley({
                errorsContainer: function(el){
                    return el.$element.closest('.form-control').find('.input__error');
                },
                errorClass: 'input_error',
                classHandler: function(el){
                    return el.$element.closest('.input');
                }
            });
            $this.parsley().on('form:error', function(){
                tel.keyup(function(){
                    $(this).parsley().validate();
                });
            });
            $this.parsley().on('form:submit',function(){
                sendAjax($this);
                return false;
            });
        });
    }());

    //tabs
    (function(){
        $('.js-tabs').each(function(){
            var $tab = $(this),
                $nav = $tab.find('.tab-nav'),
                $navItems = $nav.find('.tab-nav__item');
            $content = $tab.find('.tab-content'),
                $contentItems = $content.find('.tab-content__item'),
                contentActiveClass = 'tab-content__item_active',
                itemOutClass = 'tab-content__item_out',
                navActiveClass = 'tab-nav__item_active',

                $navItems.click(function(){
                    $tabNavItem = $(this);
                    index = $tabNavItem.index();
                    $contentItemActive = $contentItems.eq(index);
                    if(!$tabNavItem.is('.'+navActiveClass)){
                        var $previousItem = $contentItems.filter('.'+contentActiveClass);
                        $tabNavItem.siblings().removeClass(navActiveClass);
                        $tabNavItem.addClass(navActiveClass);
                        $previousItem.removeClass(contentActiveClass).addClass(itemOutClass);
                        if($contentItemActive.is('.'+itemOutClass)) $contentItemActive.removeClass(itemOutClass);
                        $contentItemActive.addClass(contentActiveClass);
                        setTimeout(function(){
                            $previousItem.removeClass(itemOutClass);
                        },1000);
                    }
                    tabsSliders.forEach(function(slider){
                        slider.update();
                    });
                });
        });
    }());
    //sliders

    //main slider
    (function(){
        var $slider = $('.main-slider'),
            $sliderSlides = $slider.find('.main-slider__slide'),
            $sliderContainer = $slider.find('.swiper-container'),
            $navButtons = $slider.find('.slider-btn'),
            $prev = $navButtons.filter('[data-prev]'),
            $next = $navButtons.filter('[data-next]'),
            $pagination = $slider.find('.slider-dots'),
            $header = $slider.find('.main-slider__header'),
            $endText = $slider.find('.main-slider__end'),
            swiper = new Swiper($sliderContainer, {
                autoplay: {
                    delay: 500000
                },
                navigation: {
                    nextEl: $next,
                    prevEl: $prev
                },
                pagination: {
                    el: $pagination,
                    bulletClass: 'slider-dots__dot',
                    bulletActiveClass: 'slider-dots__dot_active',
                    clickable: true
                },
                loop: true,
                speed: 700,
                spaceBetween: 20,
                effect: 'fade',
                on: {
                    slideChangeTransitionStart: function(s,a){
                        $header.html($sliderSlides.eq(this.realIndex).data('title'));
                        $endText.html($sliderSlides.eq(this.realIndex).data('end'));
                    }
                }
            });
        $slider.addClass('initialized');
    }());

    //default sliders
    (function(){
        var sliderClassName = '.js-swiper';
        $(sliderClassName).each(function(){
            var $slider = $(this),
                $sliderContainer = $slider.find('.swiper-container'),
                $sliderNavigation = $slider.find('.slider-navigation'),
                $prev = $sliderNavigation.find('[data-prev]'),
                $next = $sliderNavigation.find('[data-next]'),
                swiper = new Swiper($sliderContainer,{
                    slidesPerView: $slider.data('items') || 1,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: $next,
                        prevEl: $prev,
                        disabledClass: 'slider-btn_disabled'
                    },
                    preloadImages: false,
                    lazy: true,
                    breakpoints: getBreakPoints($slider.data('items'))
                });
            tabsSliders.push(swiper);
            $slider.addClass('initialized');

            function getBreakPoints(items){
                if(items==3){
                    return {
                        991:{
                            slidesPerView: 2,
                        },
                        575:{
                            slidesPerView: 1
                        }
                    }
                }
            }
        });

    }());

    // mobile nav
    var MOBILE_NAV = (function(){
        var mobileNavClass = 'mobile-nav';
        var mobileNavOpenClass = 'mobile-nav_open';
        var menus = [
            '.main-nav'
        ];
        var additionalBlocks = [
            '.horizontal-contacts',
            '.top-panel__auth',
            '.top-panel__social .social'
        ];
        var cnt = $('<div/>');
        for(var i = 0; i<menus.length; i++){
            if($(menus[i]).length){
                var section = $('<div/>').addClass(mobileNavClass+'__section '+mobileNavClass+'__section_'+i);
                section.append(getItems(menus[i]));
                cnt.append(section);
            }
        }
        for(var j=0; j<additionalBlocks.length;j++){
            if($(additionalBlocks[j]).length){
                var section = $('<div/>').addClass(mobileNavClass+'__section '+mobileNavClass+'__section_add'+j);
                section.append($(additionalBlocks[j]).clone());
                cnt.append(section);
            }
        }

        cnt.addClass(mobileNavClass);
        $('.top-panel').append(cnt);
        $('.header-mobile-wrap').click(function(){
            $('.'+mobileNavClass).toggleClass('active');
            $(this).toggleClass('active');
        });
        $('.mobile-nav-btn').click(function(){
            $(this).toggleClass('mobile-nav-btn_active')
            cnt.toggleClass(mobileNavOpenClass);
        });
        function getItems(selector){
            var clone = $(selector).clone();
            return clearClasses(clone);
        }
        function clearClasses(element){
            var depth = 0;
            $(element).removeClass().addClass(mobileNavClass+'__list');
            clear($(element).children());
            function clear(childrens){
                depth++;
                $(childrens).removeClass();
                $(childrens).each(function(){
                    var $this = $(this);
                    if($this.is(':empty')) $(this).remove();
                    if($this.is('li')) $(this).addClass(mobileNavClass+'__item');
                    if($this.is('a')) $(this).addClass(mobileNavClass+'__link');
                    if($this.is('ul') && depth>0) {
                        var dropdownBtn = $('<button/>').addClass(mobileNavClass+'__dropdown-toggler');
                        var parentLi = $(this).closest('li');
                        dropdownBtn.click(function(){
                            $this.toggleClass('active');
                        });
                        parentLi.append(dropdownBtn);
                        $(this).addClass(mobileNavClass+'__dropdown');
                        $(parentLi).addClass(mobileNavClass+'__parent');
                    };
                });
                if($(childrens).children().length) clear($(childrens).children());
            }
            return element;
        }
        function close(){
            $('.'+mobileNavClass).removeClass(mobileNavOpenClass);
            $('.mobile-nav-btn').removeClass('mobile-nav-btn_active');
        }
        return {
            close: close
        }
    }());

    //responsive
    $('.about-features').mobileSwiper(768, {
        autoHeight: true
    },{
        prev: '[data-prev]',
        next: '[data-next]'
    });

});

function inputs(inputs){
    $(inputs).each(function(){
        $(this).focus(function(){
            $(this).closest('.input').addClass('input_focus');
        });
        $(this).blur(function(){
            if($(this).val().length < 1) $(this).closest('.input').removeClass('input_focus');
        });
    });
}

function sendAjax(form){
    var $form = $(form);
    $.ajax({
        method: 'post',
        data: $form.serialize(),
        url: '/local/templates/kibteh/send.php',
        success: function (data) {
            sendSuccess(data);
        },
        error: function (data) {
            errorSuccess(data);
        }
    });
}

function sendSuccess(data){
    console.log('success');
    console.log(JSON.parse(data));
}
function errorSuccess(data){
    console.log('error');
    console.log(JSON.parse(data));
}

// data-swiper-container
// data-swiper-slide
$.fn.mobileSwiper = function(size, swiperProps, nav){
    this.each(function(){
        var $this = $(this),
            $targetContainer = $('<div class="js-swiper"></div>'),
            $target = $this.find('[data-swiper-container]'),
            $targetContainerLink = containerWrapper($targetContainer, $target),
            $thisSwiper = $target.clone(),
            sliderInserted = false,
            prev = $thisSwiper.find(nav.prev),
            next = $thisSwiper.find(nav.next),
            swiper;
        $thisSwiper.removeClass().addClass('swiper-container');
        $thisSwiper.find('[data-swiper-slide]').each(function(){
            $(this).removeClass().addClass('swiper-slide');
        });
        $thisSwiper.find('.swiper-slide').wrapAll('<div class="swiper-wrapper"></div>');
        $(window).on({
            load: function(){
                checkAction();
                $(window).resize();
            },
            resize: function(){
                checkAction();
            }
        });
        function containerWrapper(container, element){
            element.wrap(container);
            return element.parent();
        }
        function checkAction(){
            if($(window).outerWidth() < size){
                if(!sliderInserted){
                    //console.log('insertSlider');
                    sliderInserted = true;
                    $targetContainerLink.html($thisSwiper);
                    if(typeof swiper === 'object'){
                        swiper.update();
                        //console.log('update');
                    }else{
                        swiper = new Swiper($thisSwiper, $.extend(swiperProps, {navigation: {
                                nextEl: next,
                                prevEl: prev,
                                disabledClass: 'slider-btn_disabled'
                            }}));
                        //console.log('init');
                        console.log(prev, next);
                    }
                }

            }else{
                if(sliderInserted){
                    //console.log('removeSlider');
                    sliderInserted = false;
                    $targetContainerLink.html($target);
                }
            }

            $('.fancybox[href="#emptyModal"]').click(function(){
                var $this = $(this).closest('[data-container]'),
                    detail = $this.find('[data-detail]').html(),
                    $modal = $('#emptyModal'),
                    modalDetail = $modal.find('.modal__body');
                modalDetail.html(detail);
                initProductBtn();
            });
            $('.fancybox').fancybox({
                smallBtn: false,
                touch:false,
                afterShow: function(){
                    initProductBtn();
                }
            });
        }
    });
};

if(typeof BX === 'function'){
    BX.addCustomEvent('onAjaxSuccess', function(){
        $('.fancybox').fancybox({
            smallBtn: false,
            touch:false
        });
    });
}else{
    console.warn('BX не подключен');
}

function scrollTo(target, offset){
    if(target){
        $('html, body').stop(true,true).animate({
            scrollTop: target.offset().top - offset
        },1000);
    }else{
        console.warn('Отсутствует элемент');
    }
}

function initProductBtn(){
    $('.fancybox[href="#product"]').click(function(){
        var productName = $(this).attr('data-product-name');
        $('#product').find('input[name="product_name"]').val(productName);
        console.log(productName);
    });
    $('.fancybox').fancybox({
        smallBtn: false,
        touch:false,
    });
}