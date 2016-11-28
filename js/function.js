$(function(){
    var provaId = 0;
   $('.open-prova').on('click', function(e){
      e.preventDefault();
      provaId = $(this).attr('data-id');
      alert(provaId);
      return false;
   });
});


