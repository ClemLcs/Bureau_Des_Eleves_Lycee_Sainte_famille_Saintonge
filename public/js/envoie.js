function envoie() {
    const swalWithBootstrapButtons = Swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: true,
    })

    swalWithBootstrapButtons.fire({
        title: 'Etes-vous sûre ?',
        text: "Vous ne pourrez pas revenir en arrière !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui',
        cancelButtonText: 'Non, annuler',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        reverseButtons: true
        }).then((result) => {
        if (result.value) {
            swalWithBootstrapButtons.fire(
            'Envoi Réussi!',
            'Article inséré en base de donnée.',
            'success'
            )
            setTimeout(function() {
                document.getElementById("envoie").submit(); 
            }, 1000);
        }else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Annuler',
              'Aucune donnnée inséré :)',
              'error'
            )
          }
    })
}   