(function() {
  var $header, $window;

  $window = $(window);

  $header = $('#js-header');

  $window.on('scroll', function() {
    console.log('a');
    return $header.toggleClass('is-static', $window.scrollTop() <= 1);
  });

}).call(this);
