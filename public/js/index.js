var $cont = document.querySelector('.cont');
var $body = document.querySelector('body');
var $elsArr = [].slice.call(document.querySelectorAll('.el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.el__close-btn'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    $body.classList.add('no-scroll');
    this.classList.add('s--active');
    setTimeout(function() {
      initSlider($el);
      }, 1600);// Инициализация строго после полного разворота окна
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    $body.classList.remove('no-scroll');
    document.querySelector('.el.s--active').classList.remove('s--active');
  });
});

function initSlider($context){
    var $slider = $('.el__photo-slider', $context);
    var $paginSlider = $('.el__photo-thumb', $context);

    // TODO вызвать 'unslick', если слайдеры уже инициализированы, или делать это при закрытии окна

    $slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: $paginSlider,
        dots: false,
        infinite: true,
        adaptiveHeight: false,
        fade: true,
        arrows: false,
        lazyLoad: 'progressive',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    nextArrow: '<div class="el__arrow is-right"></div>',
                    prevArrow: '<div class="el__arrow is-left"></div>'
                }
            }
        ]
    });
    $paginSlider.slick({
        asNavFor: $slider,
        focusOnSelect: true,
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: false,
        lazyLoad: 'progressive',
        nextArrow: '<div class="el__arrow is-right"></div>',
        prevArrow: '<div class="el__arrow is-left"></div>'

    });
}

$(function(){

  $('.el').each(function(){
      var $context = $(this),
          $tabNav = $('.el__tab-nav', $context),
          $tab = $('.el__order-tab', $context);
      $tabNav.on('click', function(){
          var tabIndex = $(this).attr('data-index');
          $tabNav.removeClass('is-active');
          $tab.removeClass('is-active');
          $('[data-index="' + tabIndex + '"]', $context).addClass('is-active');
      });
  });

});