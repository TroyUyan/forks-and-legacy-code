$(document).ready(function() {
	$('#work').hide();
  $('#reason').change(function(){
    var location = $(this).val(),
    div = $('#' + location);
    $('#work').hide();
      div.show();
  });//end onchange
  // validate plugin
  $("#contactform").validate();
}); //end ready