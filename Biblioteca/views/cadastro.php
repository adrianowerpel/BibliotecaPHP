<?php
require "Template.php";
$template = new Template();
$template->header();
?>

<div style="width: 500px;margin-left: auto;margin-right: auto;margin-top: 20px">
    <form action="../DAO/UserPOST.php?act=save" method="POST">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome"/>
        </div>

        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" name="dt_nasc" class="form-control" id="dt_nasc"/>
        </div>

        <div class="form-group">
            <label>CPF:</label>
            <input type="text" name="cpf" class="form-control" id="cpf" maxlength="11" placeholder="Somente Números" onchange="pegarCpf()"/>
        </div>

        <div class="form-group">
            <label>Logradouro:</label>
            <input type="text" name="logradouro" class="form-control" id="logradouro"/>
        </div>

        <div class="form-group">
            <label>Numero:</label>
            <input type="number" name="numero" class="form-control" id="numero"/>
        </div>

        <div class="form-group">
            <label>Bairro:</label>
            <input type="text" name="bairro" class="form-control" id="bairro"/>
        </div>

        <div class="form-group">
            <label>Complemento:</label>
            <input type="text" name="complemento" class="form-control" id="complemento"/>
        </div>

        <div class="form-group">
            <label>Cidade:</label>
            <input type="text" name="cidade" class="form-control" id="cidade"/>
        </div>

        <div class="form-group">
            <label>Estado:</label>
            <select class="form-control" name="estado" id="estado">
                <option value="1">Selecione um estado</option>>
                <option value="AC"> AC </option>
                <option value="AL"> AL </option>
                <option value="AP"> AP </option>
                <option value="AM"> AM </option>
                <option value="BA"> BA </option>
                <option value="CE"> CE </option>
                <option value="DE"> DF </option>
                <option value="ES"> ES </option>
                <option value="GO"> GO </option>
                <option value="MA"> MA </option>
                <option value="MT"> MT </option>
                <option value="MS"> MS </option>
                <option value="MG"> MG </option>
                <option value="PA"> PA </option>
                <option value="PB"> PB </option>
                <option value="PR"> PR </option>
                <option value="PE"> PE </option>
                <option value="PI"> PI </option>
                <option value="RJ"> RJ </option>
                <option value="RN"> RN </option>
                <option value="RS"> RS </option>
                <option value="RO"> RO </option>
                <option value="RR"> RR </option>
                <option value="SC"> SC </option>
                <option value="SP"> SP </option>
                <option value="SE"> SE </option>
                <option value="TO"> TO </option>
            </select>
        </div>

        <div class="form-group">
            <label>Tipo:</label>
            <input type="text" name="tipo" class="form-control" id="tipo" value="usuario"/>
        </div>

        <div>
            <button class="btn btn-primary" type="submit"> Salvar</button>
        </div>
    </form>
</div>

<?php
$template->footer();
?>

<script>
    function pegarCpf(){
        var cpf = document.getElementById("cpf").value;
        validarCPF(cpf);
    }

    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g,'');
        if(cpf == ''){
            document.getElementById("cpf").value = '';
            return alert("CPF inválido!");
        }
        // Elimina CPFs invalidos conhecidos
        if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999"){
            document.getElementById("cpf").value = '';
            return alert("CPF inválido!");
        }
        // Valida 1o digito
        add = 0;
        for (i=0; i < 9; i ++)
            add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(9))){
            document.getElementById("cpf").value = '';
            return alert("CPF inválido!");
        }
        // Valida 2o digito
        add = 0;
        for (i = 0; i < 10; i ++)
            add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(10))){
            document.getElementById("cpf").value = '';
            return alert("CPF inválido!");
        }
        return true;
    }
</script>
