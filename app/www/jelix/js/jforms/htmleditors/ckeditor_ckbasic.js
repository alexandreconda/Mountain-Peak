function jelix_ckeditor_ckbasic(textarea_id, form_id, skin, config){

    var ckConfig = {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraphe', class: 'ck-heading_paragraph' },
                { model: 'heading2', view: 'h2', title: 'Titre 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Titre 3 ', class: 'ck-heading_heading3' }
            ]
        },
        language: config.locale.substr(0,2).toLowerCase()
    };

    ClassicEditor
        .create( document.querySelector( '#'+textarea_id ), ckConfig )
        .then( function(editor) {
                jQuery('#'+form_id).bind('jFormsUpdateFields', function(event){
                    editor.updateSourceElement();
                });
            } )
        .catch( function(error) {
            console.error( error );
        });
}