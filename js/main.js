$( document ).ready(function() {
  $('.site-nav').prepend('<div id="menu-button">Menu</div>');
  $('.site-nav #menu-button').on('click', function(){
    var menu = $(this).next('ul');
    if (menu.hasClass('open')) {
      menu.removeClass('open');
    } else {
      menu.addClass('open');
    }
  });
});