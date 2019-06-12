$(".lang_translate").change(function () {
    var lang_code = $(this).val();
    var url = $(this).attr("trans_url");
    if (lang_code == 'ar')
        return;
    location.href = url + (url.includes("?")?"&":"?")+'lang_code=' + lang_code;
});