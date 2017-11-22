if($) console.log('jQuery est dispo');

$(document).ready(function(){
  // dom chargé
  var btnHideForm = $('#btnHideForm');
  var isFormVisible = true;

  btnHideForm.click(function() {
    // next() renvoie l'élément suivant dans le dom (form)
    // alternative: donner un id à la balise form
    $(this).next('form').toggle();
    isFormVisible = !isFormVisible;
    (isFormVisible)
      ? $(this).html('Masquer le formulaire')
      : $(this).html('Afficher le formulaire');
  });



});
