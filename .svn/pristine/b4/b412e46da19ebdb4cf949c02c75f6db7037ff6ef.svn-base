$(document).ready(function () {
    $('#accordion').on('shown.bs.collapse', function () {
        var active = $('#accordion .in').attr('id');
        Cookies.set('activeAccordionGroup', active, { expires: 7 });
        //alert(active);
    });
    $('#accordion').on('hidden.bs.collapse', function () {
        Cookies.remove('activeAccordionGroup');
    });
    var last = Cookies.get('activeAccordionGroup');
    if (last != null) {
        $('#accordion .collapse').removeClass('in');
        $('#' + last).addClass('in');
    }
});
