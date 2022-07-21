/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$(document).ready(function(){

    /* SIDEBAR ROUTING */
    $(document).on('click', '[data-action="umenu"]', function(e) {
        var t = $(this);
        var getData = t.data('json');
        var link = getData[0].type;
        window.location.replace("./"+ link);
    });

    /* ACTION TABS */
    $(document).on('click', '[data-action="test-switch"]', function(e) {
        console.log('activated/deactivated');
    });


    /* REGISTER SWITCH */
    $('[data-action="reg-box"]').on("change", function(e) {
        var val = $(this).val();
        var protocol = window.location.protocol;
        var domain = window.location.hostname;
        switch (val)
        {
            case "INDI":
                $('.indi').text("YOUR PERSONAL DATA");
                $('.indi-box').empty();
                $.get(protocol + '//'+ domain +'/Core/Plugins/registerbox.plugin.php?i=' + val, function(data) {
                    $('.indi-box').html(data);
                });
                $('.indi').css({ display: "block" });
                $('.indi-box').css({ display: "block" });
                $('.corp-box').css({ display: "none" });
                break;

            case "CORP":
                $('.indi').text("YOUR COMPANY DATA");
                $('.indi').css({ display: "block" });
                $('.corp-box').empty();
                $.get(protocol + '//'+ domain +'/Core/Plugins/registerbox.plugin.php?i=' + val, function(data) {
                    $('.corp-box').html(data);
                });
                $('.corp-box').css({ display: "block" });
                $('.indi-box').css({ display: "none" });
                break;
        }
    });

    $('[data-action="corp-investment-value"]').on("change", function(e) {
        var val = $(this).val();
        switch (val)
        {
            case "< 1000":
                $('.invest-title').css({ display: "block" });
                $('.invest-box').css({ display: "block" });
                console.log('test 1');
            break;

            case "< 10000":
                $('.invest-title').css({ display: "block" });
                $('.invest-box').css({ display: "block" });
            break;

            case "< == 50000":
                $('.invest-title').css({ display: "block" });
                $('.invest-box').css({ display: "block" });
            break;
        }
    });

    $('[data-action="indi-investment-value"]').on("change", function(e) {
        var val = $(this).val();
        var protocol = window.location.protocol;
        var domain = window.location.hostname;
        switch (val)
        {
            case "< 1000":
                $('.invest-title').css({ display: "none" });
                $('.invest-box').css({ display: "none" });
                $('.invest-box').empty();
            break;

            case "< 50000":
                $('.invest-title').css({ display: "block" });
                $('.invest-box').css({ display: "block" });
                $('.invest-box').empty();
                $.get(protocol + '//'+ domain +'/Core/Plugins/registerbox.plugin.php?i=' + val, function(data) {
                    $('.invest-box').html(data);
                });
            break;

            case "> == 50000":
                $('.invest-title').css({ display: "block" });
                $('.invest-box').css({ display: "block" });
                $('.invest-box').empty();
                $.get(protocol + '//'+ domain +'/Core/Plugins/registerbox.plugin.php?i=' + val, function(data) {
                    $('.invest-box').html(data);
                });
            break;
        }
    });

    $('#file-upload').on('change', function(e) {
        /* TODO : CHANGE ONLY THE INPUT NOT ALL FILE INPUTS
        var obj = $('.custom-file-upload');
        obj.css('background-color', '#fff');
        */
    });
});

	