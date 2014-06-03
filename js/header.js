(function() {
  var $header, $menuLauncher, $window;

  $window = $(window);

  $header = $('#js-header');

  $menuLauncher = $('#js-menu-launcher');

  $window.on('scroll', function() {
    return $header.toggleClass('is-static', $window.scrollTop() <= 1);
  });

  $menuLauncher.on('click', function(e) {
    $header.toggleClass('is-closed');
    return e.stopPropagation();
  });

  $(document).on('click', function() {
    return $header.addClass('is-closed');
  });

}).call(this);
