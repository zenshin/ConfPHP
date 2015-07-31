$(function () {
    $('#datetimepicker6').datetimepicker({
        locale: 'fr', format: 'DD-MM-YYYY LTS'
    });
    $('#datetimepicker7').datetimepicker({
        locale: 'fr', format: 'DD-MM-YYYY LTS'
    });
    $("#datetimepicker6").on("dp.change", function (e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker7").on("dp.change", function (e) {
        $('#datetimepicker6').data("DateTimePicker");
    });
});