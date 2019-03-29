function copiarTexto() {
    var textoCopiado = document.getElementById("nome");
    textoCopiado.select();
    document.execCommand("Copy");
}

function copiarTexto1() {
    var textoCopiado1 = document.getElementById("nomeM");
    textoCopiado1.select();
    document.execCommand("Copy");
}

function copiarTexto2() {
    var textoCopiado2 = document.getElementById("nascimento");
    textoCopiado2.select();
    document.execCommand("Copy");
}

function copiarTexto3() {
    var textoCopiado3 = document.getElementById("nascimentoE");
    textoCopiado3.select();
    document.execCommand("Copy");
}

function copiarTexto4() {
    var textoCopiado4 = document.getElementById("naturalidade");
    textoCopiado4.select();
    document.execCommand("Copy");
}

function copiarTexto5() {
    var textoCopiado5 = document.getElementById("filiacao");
    textoCopiado5.select();
    document.execCommand("Copy");
}

function copiarTexto6() {
    var textoCopiado6 = document.getElementById("RG");
    textoCopiado6.select();
    document.execCommand("Copy");
}

function copiarTexto7() {
    var textoCopiado7 = document.getElementById("orgao");
    textoCopiado7.select();
    document.execCommand("Copy");
}

function copiarTexto8() {
    var textoCopiado8 = document.getElementById("CPF");
    textoCopiado8.select();
    document.execCommand("Copy");
}

function copiarTexto10() {
    var textoCopiado10 = document.getElementById("conclusao");
    textoCopiado10.select();
    document.execCommand("Copy");
}

function copiarTexto11() {
    var textoCopiado11 = document.getElementById("colacao");
    textoCopiado11.select();
    document.execCommand("Copy");
}

function copiarTexto12() {
    var textoCopiado12 = document.getElementById("conclusaoE");
    textoCopiado12.select();
    document.execCommand("Copy");
}

function copiarTexto13() {
    var textoCopiado13 = document.getElementById("colacaoE");
    textoCopiado13.select();
    document.execCommand("Copy");
}

function copiarTexto14() {
    var textoCopiado14 = document.getElementById("datahoje");
    textoCopiado14.select();
    document.execCommand("Copy");
}

function copiarTexto15() {
    var textoCopiado15 = document.getElementById("datahojeE");
    textoCopiado15.select();
    document.execCommand("Copy");
}

function copiarTexto16() {
    var textoCopiado16 = document.getElementById("periodo");
    textoCopiado16.select();
    document.execCommand("Copy");
}

function copiarTexto17() {
    var textoCopiado17 = document.getElementById("graduacao");
    textoCopiado17.select();
    document.execCommand("Copy");
}

//---------------------------
		var arrayMes = new Array();
		   arrayMes[0] = "janeiro";
		   arrayMes[1] = "fevereiro";
		   arrayMes[2] = "março";      
		   arrayMes[3] = "abril";
		   arrayMes[4] = "maio";
		   arrayMes[5] = "junho";
		   arrayMes[6] = "julho";
		   arrayMes[7] = "agosto";
		   arrayMes[8] = "setembro";
		   arrayMes[9] = "outubro";
		   arrayMes[10] = "novembro";
		   arrayMes[11] = "dezembro";

		var now = new Date();

		var dia = now.getDate();
		var mes = now.getMonth()+1;
		var mesE = now.getMonth();
		var ano = now.getFullYear();

		 var data = dia + '/' + mes + '/' + ano;

		 var extenso = dia + ' de ' + arrayMes[mesE] + ' de ' + ano;

		document.getElementById("datahoje").value = data;
		document.getElementById("datahojeE").value = extenso;

// limpar campos do formulario

    function limparGraduacao() {

        document.getElementById('nome').value = "";
        document.getElementById('nomeM').value = "";
        document.getElementById('nascimento').value = "";
        document.getElementById('nascimentoE').value = "";
        document.getElementById('naturalidade').value = "";
        document.getElementById('filiacao').value = "";
        document.getElementById('RG').value = "";
        document.getElementById('orgao').value = "";
        document.getElementById('CPF').value = "";
        document.getElementById('conclusao').value = "";
        document.getElementById('colacao').value = "";
        document.getElementById('conclusaoE').value = "";
        document.getElementById('colacaoE').value = "";
        document.getElementById('datahoje').value = "";
        document.getElementById('datahojeE').value = "";

    }

    // validar campos do formulario


    // PÓS-GRADUAÇÃO

// limpar campos do formulario de pos graduação

    function limparPos() {
        
        document.getElementById('nome').value = "";
        document.getElementById('nomeM').value = "";
        document.getElementById('nascimento').value = "";
        document.getElementById('naturalidade').value = "";
        document.getElementById('filiacao').value = "";
        document.getElementById('RG').value = "";
        document.getElementById('orgao').value = "";
        document.getElementById('periodo').value = "";
        document.getElementById('graduacao').value = "";
        document.getElementById('datahojeE').value = "";

    }

// validar campos do formulario    

// esconder div de alert Graduacao

 $(document).ready(function () {
        setTimeout(function () {
            $('#divdesaparecer').fadeOut(1500);
        }, 1000);
});

 

 // esconder div de alert de pos graduacao

