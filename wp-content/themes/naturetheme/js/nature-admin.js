jQuery(document).ready(function($){
    var mediaUpLoader;
    $('#upload-button').on('click',function(e){
        e.preventDefault();
        if(mediaUpLoader){
            mediaUpLoader.open();
            return;
        }
        mediaUpLoader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button:{
                 text:'Choose picture'
            },
            multiple:false
        });
        mediaUpLoader.on('select',function(){
            attachment = mediaUpLoader.state().get('selection').first().toJSON();
            $('#profile-picture').val(attachment.url);
            $('#profile-picture-preview').css('background-image','url('+ attachment.url +')');n
        });
        mediaUpLoader.open();
    });
});