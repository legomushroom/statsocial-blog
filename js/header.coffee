$window = $(window)
$header = $('#js-header')
$window.on 'scroll', ->
  console.log 'a'
  $header.toggleClass('is-static',($window.scrollTop() <= 1))