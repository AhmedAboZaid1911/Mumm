$(document).ready(function () {
    $(document).on('click', '[delete-url]', function () {
        let deleteUrl = $(this).attr('delete-url');
        let modelName = $(this).attr('model-name');
        let messageTitle = $(this).attr('message-title');
        
        swal({
            title: messageTitle ? messageTitle : 'Are you Sure Want to Delete That Item ?',
            text: "",
            type: 'danger',
            dangerMode: true,
            buttons: {
                cancel: true,
                confirm: true,
            }
        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    method: "POST",
                    url: deleteUrl,
                    data: {
                        '_method': 'delete'
                    },
                    success: function (data) {
                        swal(
                            modelName + ' Deleted successfully',
                            '',
                            'success'
                          ).then(()=>{
                            location.reload();
                          });
                    },
                    error: function (data) {
                        swal("Error!", 'Error while deleting ' + modelName, "error");
                    }
                });
            }
        });
    });
});
