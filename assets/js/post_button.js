jQuery(function($) {
    $(document).ready(function(){
        $('#insert-post').click(open_media_window);
    });

    function open_media_window() {
        if (this.window === undefined) {
            this.window = wp.media({
                    title: 'Insert Post Element',
                    library: {type: 'image'},
                    multiple: false,
                    button: {text: 'Insert Post'}
                });
    
            var self = this; // Needed to retrieve our variable in the anonymous function below
            this.window.on('select', function() {
                    var first = self.window.state().get('selection').first().toJSON();
                    console.log(first)
                    wp.media.editor.insert('[myshortcode id="' + first.id + '"]');
                });
        }
    
        this.window.open();
        return false;
    }
});