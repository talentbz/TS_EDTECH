$(document).ready(function () {
    // select the relevant <input> elements, and using on() to bind a change event-handler:
    $('input[name="person_type"]').on('change', function() {
        $('.busness_add').toggle(+$(this).data("id")  === 2 && this.checked);
    }).change();
})