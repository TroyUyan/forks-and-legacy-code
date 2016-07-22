$(document).ready(function () {


  var $container = $('#container').packery({
    columnWidth: 160,
    rowHeight: 160
  });

  $container.find('.item').each( function( i, itemElem ) {
    // make element draggable with Draggabilly
    var draggie = new Draggabilly( itemElem );
    // bind Draggabilly events to Packery
    $container.packery( 'bindDraggabillyEvents', draggie );
  });

  $(function(){
     $('#trigger').click();
  });
// End doc   
});