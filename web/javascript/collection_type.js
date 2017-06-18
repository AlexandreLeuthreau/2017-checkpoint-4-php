/**
 * Created by wilder on 17/06/17.
 */
var ligneCount = $('.ligne').length;

$(document).ready(function() {
    var ligneFacture = $('#ligneFacture');
    var newWidget = ligneFacture.data('prototype');
    var deleteButton = '<div class="deleteButton"><button class="btn btn-danger">Supprimer</button></div>';

    newWidget = newWidget.replace(/__name__/g, ligneCount);

    $('.ligne').append(deleteButton);

    $('.ligne div').each(function () {
      $(this).addClass('form-group col-sm-3');
    });

    $('#addLigneFacture').click(function(e) {
        e.preventDefault();
        ligneFacture.append(newWidget);

        var ligne = $('#facture_lignesFacture_'+ligneCount);
        ligne.append(deleteButton);
        $('#facture_lignesFacture_'+ligneCount+' div').addClass('form-group col-sm-3');
        ligneCount++;
    });
});