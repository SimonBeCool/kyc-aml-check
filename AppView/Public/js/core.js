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
        switch (val)
        {
            case "INDI":
                $('.indi').text("YOUR PERSONAL DATA");
                $('.indi-box').empty();
                $.get('http://localhost/Core/Plugins/registerbox.plugin.php?i=' + val, function(data) {
                    $('.indi-box').html(data);
                });
                $('.indi').css({ display: "block" });
                $('.indi-box').css({ display: "block" });
                break;

            case "CORP":
                $('.indi').text("YOUR COMPANY DATA");
                $('.indi').css({ display: "block" });
                break;
        }
    });
});

	