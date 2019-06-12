$(document).on('click', '.rfm-select', function(){
    var $selectElement = $(this);
    $('#rfm-modal').modal('toggle');
    var $selectedImage = $('#rfm-return-value');
    window.responsive_filemanager_callback = function(){
        var $parentDiv = $selectElement.parents('.rfm-group');
        $parentDiv.find('.rfm-img').attr('src',$selectedImage.val());
        $parentDiv.find('.rfm-input').val($selectedImage.val());
    };
});
