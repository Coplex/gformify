jQuery(document).ready( function($) {

  $('li.gfield').each( function() {

    $(this).addClass('form-group');

    //  Store inputs, textarea, etc and add .form-control class
    var inputArray = [];
    var childInput = $(this).find('input').not('[type=checkbox], [type=radio]');
    var childTextarea = $(this).find('textarea');
    var childSelect = $(this).find('select');

    inputArray.push(childTextarea);
    inputArray.push(childInput);
    inputArray.push(childSelect);

    for (var i = 0; i < inputArray.length; i++) {
      $(inputArray[i]).addClass('form-control');
    }

  })

});