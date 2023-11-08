$(document).ready(function(){
  var cookie = $.cookie('pop');
  if(typeof cookie == 'undefined')
    $("#myModal").modal('show');
  $('#remember').click(function() {
        if ($(this).is(':checked')) {
            $.cookie('pop', 'hidden', { expires: 1 });
           // $("#myModal").modal('hide');
        }
    });
});
