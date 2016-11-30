$(function () {
    var wrapper = $(".file_upload"),
        inp = wrapper.find("input"),
        btn = wrapper.find(".button"),
        lbl = wrapper.find("mark");

    // Crutches for the :focus style:
    inp.focus(function () {
        wrapper.addClass("focus");
    }).blur(function () {
        wrapper.removeClass("focus");
    });


    inp.change(function () {
        var file_name;
        console.log(inp.val());
        file_name = inp.val().replace("C:\\fakepath\\", '');
        console.log(file_name);
        if (!file_name.length)
            return;

        if (lbl.is(":visible")) {
            lbl.text(file_name);
            btn.text("Выбрать");
        } else
            btn.text(file_name);
    }).change();

});

$(window).resize(function () {
    $(".file_upload input").triggerHandler("change");
});

