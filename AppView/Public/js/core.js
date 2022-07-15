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

    $(document).on('click', '[data-action="test-switch"]', function(e) {
        console.log('activated/deactivated');
    });

});

	