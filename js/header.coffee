$window = $(window)
$header = $('#js-header')
$menuLauncher = $('#js-menu-launcher')

$window.on 'scroll', ->
  $header.toggleClass('is-static',($window.scrollTop() <= 1))

$menuLauncher.on 'click', ->
  $header.toggleClass 'is-closed'