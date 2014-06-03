$window = $(window)
$header = $('#js-header')
$menuLauncher = $('#js-menu-launcher')

$window.on 'scroll', ->
  $header.toggleClass('is-static',($window.scrollTop() <= 1))

$menuLauncher.on 'click', (e)->
  $header.toggleClass 'is-closed'
  e.stopPropagation()

$(document).on 'click', ->
  $header.addClass 'is-closed'
  
