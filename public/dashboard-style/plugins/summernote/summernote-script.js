$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':window.laravel.csrf
        },
        beforeSend: function () {
            App.blockUI({
                boxed: true
            });
        },
        complete: function () {
            App.unblockUI();
        }
    });
    $('.summernote').summernote({
        minHeight: 200,
        callbacks: {
            onMediaDelete: function (image) {
                deleteImage(image[0], $(this));
            },
            onImageUpload: function (image) {
                console.log('123', $(this));
                uploadImage(image[0], $(this));
            }
        }
    });

    function uploadImage(image, $summernote) {
        var data = new FormData();
        data.append("uploadedFile", image);
        data.append("_token",window.laravel.csrf);
        $.ajax({
            url: window.laravel.url+ '/api/files/upload',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "post",
            success: function (data) {
                var image = $('<img>').attr('src', data.url);
                image.attr('image-id', data.id);
                console.log(data);
                $summernote.summernote("insertNode", image[0]);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function deleteImage(image, $summernote) {
        if (!image.getAttribute('image-id')) {
            return;
        }
        var data = new FormData();
        data.append("id", image.getAttribute('image-id'));
        data.append("_token",window.laravel.csrf);
        $.ajax({
            url: window.laravel.url + '/api/files/delete',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "post",
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }