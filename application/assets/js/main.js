$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
 
$(".button-collapse").sideNav();

$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function(){
   $('.slider').slider();
});

$('ul.tabs').tabs();
$('.modal-trigger').leanModal({
    ready: function () {
        $('.modal').click();
    }
});
