var UINestable = function () {

    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target);
        if (window.JSON) {
            $.ajax({
                url: order_menu_items_link,
                type: 'post',
                data: {
                    items: window.JSON.stringify(list.nestable('serialize'))
                },
                success: function (response) {
                    console.log(response);
                }
            });
        } else {
            console.log('JSON browser support required for this demo.');
        }
    };


    return {
        //main function to initiate the module
        init: function () {

            // activate Nestable for list 1
            $('#nestable_list_1').nestable({
                group: 1,
                maxDepth:2,
            }).on('change', updateOutput);
        }

    };

}();

jQuery(document).ready(function () {
    UINestable.init();
});