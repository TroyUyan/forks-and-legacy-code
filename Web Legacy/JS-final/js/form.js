//// Form Validation
$("#form").validate({
  errorPlacement: function(error, element) {
    error.appendTo(element.parent());
  } // end function
});// end validate