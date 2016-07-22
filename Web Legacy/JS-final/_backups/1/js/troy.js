$(function() {

  //// SmartMenus Init
  $('#main-menu').smartmenus({
    subMenusSubOffsetX: 1,
    subMenusSubOffsetY: -8
  });

  //// Font Buttons
  // Collect font sizes
  var zoom = 0;
  $('*').each(function () {
    var el = $(this),
      size = parseInt(el.css('font-size'));
    el.data('font-size', size);
  });//end each
  // Minus button
  $('#fontminus').click(function () {
    if (zoom > -2) {
      zoom--;
      $('*').each(function () {
        var el = $(this),
            size = el.data('font-size');
        el.css('font-size', Math.max(size + zoom, 0) + 'px');
      });
    };//end if
  });//end click
  // Plus button
  $('#fontplus').click(function () {
    if (zoom < 2) {
      zoom++;
      $('*').each(function () {
        var el = $(this),
            size = el.data('font-size');
        el.css('font-size', Math.max(size + zoom, 0) + 'px');
      });
    };//end if
  });//end click

}); // end ready