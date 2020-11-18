$(function() {
  $('.btn-group-fab').on('click', '.btn', function() {
    $('.btn-group-fab').toggleClass('active');
  });
  $('has-tooltip').tooltip();
});

$('.contact').click(function(e){
    e.preventDefault();
     $.get('create',function(data){
    $('#contact').modal('show')
      .find('#contactContent')
      .html(data);
      });
});
