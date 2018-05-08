<?php

/* 
 * @descript: Formulário de cadastro de usuário
 * @author:   David Jeiel - <email: davidjeiel@gmail.com>
 */
?>

        <div class="panel-heading">
            <h4 align="center">Preencha seus dados</h4>
        </div>
        <div class="panel-body">
            <div class="col-sm-12">
                <div class="col-sm-5" style="padding-top: 17px;">
                    <img class="thumbnail" src="./mdl/img/user.png">
                </div>
                <div class="col-md-1"></div>
                <div class="col-sm-6">
                    <label>Nome do Usuário:</label>
                    <input class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Escreva aqui">
                    <label>Email do Usuário:</label>
                    <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Escreva aqui">
                    <label>Senha do Usuário:</label>
                    <input type="password" class="form-control" id="senha_usuario" name="senha_usuario" placeholder="Escreva aqui">
                    <label>Telefone do Usuário:</label>
                    <input type="tel"  class="form-control" id="tel_usuario" name="tel_usuario" placeholder="Escreva aqui">
                </div>
            </div>
            <div class="col-md-12">
                <div class="page-header">
                    <h4 align="center">Dados Financeiros</h4>
                </div>
                <div class="col-md-3">
                    Banco:
                    <select class="form-control" id="banco" name="banco">
                        <option></option>
                        <option value="1">Banco do Brasil</option>
                        <option value="104">Caixa</option>
                    </select>
                </div>
                <div class="col-md-3">
                    Agência:
                    <input type="number" class="form-control" id="agencia" name="agencia">
                </div>
                <div class="col-md-3" id="operacao">
                    Operação:
                    <input type="number" class="form-control" id="op" name="op">
                </div>
                <div class="col-md-2">
                    Conta:
                    <input type="number" class="form-control" id="conta" name="conta">
                </div>
                <div class="col-md-1">
                    DV:
                    <input type="text" class="form-control" id="dv" name="dv">
                </div>
            </div>
        </div>
<script type="text/javascript">
    //Exibe o campo operação quando selecionamos o banco Caixa
    $('#operacao').hide();
    $("#banco").on('change', function(){
        banco = $("#banco").val();
        if( banco == 104 ){
            $('#operacao').show();
        }else{
            $('#operacao').hide();
        }
    })
</script>
    