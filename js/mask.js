var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00)00000-0000' : '(00)0000-00009';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };

$('#telefone_proprietario').mask(behavior, options);
$('#telefone_restaurante').mask(behavior, options);
$('#cpf').mask('000.000.000-00');
$('#cnpj').mask('00.000.000/0000-00');
$('#cep').mask('00000-000');