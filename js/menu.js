$(function() {
  if ($(window).width() < 1023) {
    var pull = $('.pull');
    menu = $('.menu__list');
    menuHeight = menu.height();
    menuLink = $('.menu-scroll');

    $(pull).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
    });

    $(menuLink).on('click', function (e) {
      e.preventDefault();
      menu.slideToggle();
    });
  }
});