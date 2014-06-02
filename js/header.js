(function() {
  var $header, $menuLauncher, $window;

  $window = $(window);

  $header = $('#js-header');

  $menuLauncher = $('#js-menu-launcher');

  $window.on('scroll', function() {
    return $header.toggleClass('is-static', $window.scrollTop() <= 1);
  });

  $menuLauncher.on('click', function() {
    return $header.toggleClass('is-closed');
  });

}).call(this);
