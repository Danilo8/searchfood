$(document).ready(function () {

    $.getJSON('../js/estados_cidades.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';
        $.each(data, function (key, val) {
            options += '<option value="' + val.sigla + '">' + val.sigla + '</option>';
        });
        $("#estado").html(options);

        $("#estado").change(function () {

            var options_cidades = '';
            var str = "";

            $("#estado option:selected").each(function () {
                str += $(this).text();
            });

            $.each(data, function (key, val) {
                if (val.sigla == str) {
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });
                }
            });
            $("#cidade").html(options_cidades);

        }).change();

    });

});