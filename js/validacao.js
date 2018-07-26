//variaveis para validar o btn1
var proprietario;
var email;
var cpf;
var celular;
var btn1;

//variaveis para validar o btn2

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
            //cpf = false;
        } else {
            /*
            *   if (valido) {
            *        $('#cpf_valido').html("<span style='color: yellowgreen'>Ok!</span>");
            *        $('#cpf').css({
            *            'border-color': 'yellowgreen'
            *        });
            *    } else {
            *        $('#cpf_valido').html("<span class='text-danger'>CPF Inválido!</span>");
            *        $('#cpf').css({
            *            'border-color': 'red'
            *        });
            *    }
            */
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
    
    cpf = true;
    
    /*função
    $("#dados_proprietario").(function () {
        
    });*/

    //Quando o btn1 for clicado
    $(".btn1").click(function () {
		if (btn1) {
			animation('dados_proprietario', 'restaurante');
		}
    });

    //Quando o vtr1 for clicado
    $(".vtr1").click(function () {
        animation('restaurante','dados_proprietario');
    });
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