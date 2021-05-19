$(document).ready(function () {
    $('.delete-btn').click(function () {
        var res = confirm('Вы действительно хотите удалить?');
        if(!res){
            return false;
        }
    });
})

// tinymce.init({
//     selector: '#text',
//     plugins: 'autolink lists  media table',
//     toolbar: 'a11ycheck  casechange checklist code formatpainter permanentpen table bold italic alignleft aligncenter alignright alignjustify forecolor backcolor emoticons',
//     toolbar_mode: 'floating',
//     tinycomments_mode: 'embedded',
//     tinycomments_author: 'Author name',
//     file_picker_callback : elFinderBrowser,
//     height : "480"
//  });

 function elFinderBrowser (callback, value, meta) {
    tinymce.activeEditor.windowManager.openUrl({
        title: 'File Manager',
        url: '/elfinder/tinymce5',
        /**
         * On message will be triggered by the child window
         * 
         * @param dialogApi
         * @param details
         * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
         */
        onMessage: function (dialogApi, details) {
            if (details.mceAction === 'fileSelected') {
                const file = details.data.file;
                
                // Make file info
                const info = file.name;
                
                // Provide file and text for the link dialog
                if (meta.filetype === 'file') {
                    callback(file.url, {text: info, title: info});
                }
                
                // Provide image and alt text for the image dialog
                if (meta.filetype === 'image') {
                    callback(file.url, {alt: info});
                }
                
                // Provide alternative source and posted for the media dialog
                if (meta.filetype === 'media') {
                    callback(file.url);
                }
                
                dialogApi.close();
            }
        }
    });
}