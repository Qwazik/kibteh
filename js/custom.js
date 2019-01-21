$(function(){
    $('[type="tel"]').mask('+7(999) 999-99-99');
    
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

    //sliders
    //new Swiper('.swiper-container')
    
    $('.carousel').each(function(){
        var navigation = $(this).find('.slider-navigation');
        var swiper = new Swiper($(this).find('.swiper-container'),{
            slidesPerView: 3,
            spaceBetween: 20
        })
    });

    //faq
    (function(){
        var faq = '.faq';
        var faqItem = '.faq-item';
        $(faqItem).each(function(){
            var $this = $(this);
            var quest =  $this.find('.faq-item__quest');
            var answer = $this.find('.faq-item__answer');
            quest.click(function(){
                $this.toggleClass('faq-item_active');
                answer.slideToggle();
            });
        });
    }());
});