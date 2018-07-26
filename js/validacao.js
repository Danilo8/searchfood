//variaveis para validar o btn1
var proprietario;
var email;
var cpf;
var celular;
var btn1;

//variaveis para validar o btn2
var restaurante;
var cnpj;
var telefone;
var endereco;
var n;
var bairro;
var uf;
var cidade;
var cep;

//função que valida os campos
$(document).ready(function () {

    //valida o nome do proprietario
    $("#proprietario").blur(function () {
        if ($('#proprietario').val() == "") {
            $('#proprietario_valido').html("<span class='text-danger'>Campo Obrigatório!</span>");
            $('#proprietario').css({'border-color': 'red'});
            proprietario = false;
            validaBtn1();
        } else {
            $('#proprietario_valido').html("<span style='color: yellowgreen'>Ok!</span>");
            $('#proprietario').css({'border-color': 'yellowgreen'});
            proprietario = true;
            validaBtn1();
        }
    });
    //valida o email do proprietario
    $("#email_proprietario").blur(function () {
        if ($('#email_proprietario').val() == "") {
            $('#email_proprietario_valido').html("<span class='text-danger'>Campo Obrigatório!</span>");
            $('#email_proprietario').css({'border-color': 'red'});
            email = false;
            validaBtn1();
        } else {
            var sEmail = $("#email_proprietario").val();
            // filtros
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
            // condição
            if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
                $('#email_proprietario_valido').html("<span class='text-danger'>Email Inválido!</span>");
                $('#email_proprietario').css({'border-color': 'red'});
                email = false;
                validaBtn1();
            } else {
                $('#email_proprietario_valido').html("<span style='color: yellowgreen'>Ok!</span>");
                $('#email_proprietario').css({'border-color': 'yellowgreen'});
                email = true;
                validaBtn1();
            }
        }
    });
    //valida o CPF do proprietario
    $("#cpf").blur(function () {
        if ($('#cpf').val() == "") {
            $('#cpf_valido').html("<span class='text-danger'>Campo Obrigatório!</span>");
            $('#cpf').css({'border-color': 'red'});
            cpf = false;
        } else {
            var valido = TesteCPF($("#cpf").val().replace(/\.|\-/g, ''));
            if (valido) {
                $('#cpf_valido').html("<span style='color: yellowgreen'>Ok!</span>");
                $('#cpf').css({'border-color': 'yellowgreen'});
                cpf = true;
            } else {
                $('#cpf_valido').html("<span class='text-danger'>CPF Inválido!</span>");
                $('#cpf').css({'border-color': 'red'});
                cpf = false;
            }
        }
    });
    //valida telefone do proprietario
    $("#telefone_proprietario").blur(function () {
        if ($("#telefone_proprietario").val() == "") {
            $('#telefone_proprietario_valido').html("<span class='text-danger'>Campo Obrigatório!</span>");
            $('#telefone_proprietario').css({'border-color': 'red'});
            celular = false;
            validaBtn1();
        } else {
            if ($("#telefone_proprietario").val().length < 13) {
                $('#telefone_proprietario_valido').html("<span class='text-danger'>Número de Telefone Inválido!</span>");
                $('#telefone_proprietario').css({'border-color': 'red'});
                celular = false;
                validaBtn1();
            } else {
                $('#telefone_proprietario_valido').html("<span style='color: yellowgreen'>Ok!</span>");
                $('#telefone_proprietario').css({'border-color': 'yellowgreen'});
                celular = true;
                validaBtn1();
            }
        }
    });

    //Quando o btn1 for clicado
    $(".btn1").click(function () {
		if (btn1) {
            animation('dados_proprietario', 'restaurante');
            $("#step2").removeClass("progtrckr-todo");
            $("#step2").addClass("progtrckr-done");
		}
    });

    //Quando o vtr1 for clicado
    $(".vtr1").click(function () {
        animation('restaurante','dados_proprietario');
        $("#step2").removeClass("progtrckr-done");
        $("#step2").addClass("progtrckr-todo");
    });

    //valida nome do Restaurante
    $("#nome_restaurante").blur(function () {
        if ($("#nome_restaurante").val() == "") {
            $("#nome_restaurante_valido").html("<span class='text-danger'>Campo Obrigatório!</span>");
            $("#nome_restaurante").css({ 'border-color': 'red' });
            restaurante = false;
            validaBtn2();
        } else {
            $("#nome_restaurante_valido").html("<span style='color:yellowgreen'>Ok!</span>");
            $("#nome_restaurante").css({ 'border-color': 'yellowgreen' });
            restaurante = true;
            validaBtn2();
        }
    });
    //valida CNPJ do Restaurante
    $("#cnpj").blur(function () {
        if ($("#cnpj").val() == "") {
            $("#cnpj_valido").html("<span class='text-danger'>Campo Obrigatório!</span>");
            $("#cnpj").css({'border-color':'red'});
            cnpj = false;
            validaBtn2();
        } else {
            var valido = TesteCNPJ($("#cnpj").val());
            if (valido) {
                $("#cnpj_valido").html("<span style='color:yellowgreen'>Ok!</span>");
                $("#cnpj").css({ 'border-color': 'yellowgreen' });
                cnpj = true;
                validaBtn2();
            } else {
                $("#cnpj_valido").html("<span class='text-danger'>CNPJ Inválido!</span>");
                $("#cnpj").css({ 'border-color': 'red' });
                cnpj = false;
                validaBtn2();
            }
        }
    });
    //valida telefone do Restaurante
    $("#telefone_restaurante").blur(function () {
        if ($("#telefone_restaurante").val() == "") {
            $("#telefone_restaurante_valido").html("<span class='text-danger'>Campo Obrigatório!</span>");
            $("#telefone_restaurante").css({ 'border-color': 'red' });
            telefone = false;
            validaBtn2();
        } else {
            if ($("#telefone_restaurante").val().length < 13) {
                $('#telefone_restaurante_valido').html("<span class='text-danger'>Número de Telefone Inválido!</span>");
                $('#telefone_restaurante').css({ 'border-color': 'red' });
                telefone = false;
                validaBtn2();
            } else {
                $('#telefone_restaurante_valido').html("<span style='color: yellowgreen'>Ok!</span>");
                $('#telefone_restauranteo').css({ 'border-color': 'yellowgreen' });
                telefone = true;
                validaBtn2();
            }
        }
    });
    //valida endereço do Restaurante
});
//função que valida btn1
function validaBtn1() {
    if (proprietario && email && cpf && celular) {
        $(".btn1").removeClass("disabled");
		$(".btn1").css({'cursor': 'pointer'});
		btn1 = true;
    } else {
        $(".btn1").addClass("disabled");
		$(".btn1").css({'cursor': 'not-allowed'});
		btn1 = false;
    }
}

//função de animação entre as divs
function animation(div_hide, div_show) {
    $("#"+div_hide).css({'display':'none'});
    $("#"+div_show).css({'display':'block'});
}
//função que verifica se cpf é valido
function TesteCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
}
//função que verifica se cnpj é valido
function TesteCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj == '') return false;

    if (cnpj.length != 14)
        return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}