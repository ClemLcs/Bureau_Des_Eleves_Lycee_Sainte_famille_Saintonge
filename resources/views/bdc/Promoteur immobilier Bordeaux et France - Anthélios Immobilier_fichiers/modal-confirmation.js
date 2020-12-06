jQuery(function($){
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $('#modalConfForm .modal-body').show();
        $('#modalConfForm .modal-brochure').hide();

        $('#modalFormBrochure').on('hide.bs.modal', function(e){
            $('#modalConfForm .modal-body').hide();
            $('#modalConfForm .modal-brochure').show();
        });

        $('.modal-form').modal('hide');
        $('#modalConfForm').modal('show');
    }, false );
});