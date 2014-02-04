//FUNÇÃO DO CALENDARIO
$('.data').datepicker({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior',
});

//FUNÇAO DO TIME
$(function() {
    $('.time').datetimepicker({
        pickDate: false,
        pickSeconds: false
    });
});

jQuery(function($) {
    $(".data").mask("99/99/9999");
    $(".masktime").mask("99:99");
    $("#cpf").mask("999.999.999-99");
});

//FUNC PARA MUDAR COR DA TEXTBOX NA VALIDAÇÃO
$('form').validate({
    onBlur: true,
    eachValidField: function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField: function() {

        $(this).closest('div').removeClass('success').addClass('error');
    }
});



//MASC PARA MUDAR COLOR DAS TABLE
$(function() {
    "use strict"; // jshint ;_;
    $(".changeColor").mousemove(function() {
        $(this).find("td").addClass('estiloTabela');
    });

    $(".changeColor").mouseout(function() {
        $(this).find("td").removeClass('estiloTabela');
    });

});


function validaRadio() {
    if (document.form1.p1[0].checked == false
            && document.form1.p1[1].checked == false && document.form1.p1[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 1.');
        return false;
    }
    if (document.form1.p2[0].checked == false
            && document.form1.p2[1].checked == false && document.form1.p2[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 2.');
        return false;
    }
    if (document.form1.p3[0].checked == false
            && document.form1.p3[1].checked == false && document.form1.p3[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 3.');
        return false;
    }
    if (document.form1.p4[0].checked == false
            && document.form1.p4[1].checked == false && document.form1.p4[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 4.');
        return false;
    }
    if (document.form1.p5[0].checked == false
            && document.form1.p5[1].checked == false && document.form1.p5[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 5.');
        return false;
    }
    if (document.form1.p6[0].checked == false
            && document.form1.p6[1].checked == false && document.form1.p6[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 6.');
        return false;
    }
    if (document.form1.p7[0].checked == false
            && document.form1.p7[1].checked == false && document.form1.p7[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 7.');
        return false;
    }
    if (document.form1.p8[0].checked == false
            && document.form1.p8[1].checked == false && document.form1.p8[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 8.');
        return false;
    }
    if (document.form1.p9[0].checked == false
            && document.form1.p9[1].checked == false && document.form1.p9[2].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 9.');
        return false;
    }
    if (document.form1.p10[0].checked == false
            && document.form1.p10[1].checked == false && document.form1.p10[2].checked == false) {
        alert('Por favor, selecione uma respostapara pergunta 10.');
        return false;
    }
    if (document.form1.p11[0].checked == false
            && document.form1.p11[1].checked == false && document.form1.p11[2].checked == false && document.form1.p11[3].checked == false) {
        alert('Por favor, selecione uma resposta para pergunta 11.');
        return false;
    }
    return true;
}

function confirm()
{
    var r = confirm("Confira Suas Respostas!")
    if (r == true)
    {
        alert("Confirmar !");
    }
    else
    {
        alert("Cancelar!");
    }
}