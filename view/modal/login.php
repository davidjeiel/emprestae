<?php

/* 
 * @description: Modal de acesso ao usuário
 * @author: David Jeiel <davidjeiel@gmail.com>
 */
?>
<div id="modal_login" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h3 align="center">Login</h3>
            </div>
            <form name="form-login" action="ctrl/prc/valida_acesso.php">
                <div class="modal-body">
                    <div style="padding-left: 15px; padding-right: 15px;">                        
                        <div class="row">                
                            email:
                            <input type="email" class="form-control" name="login" id="login">                
                        </div>
                        <div class="row">                
                            Senha:
                            <input type="password" class="form-control" id="pass">                
                        </div>
                    </div>
                </div>
                <div class="modal-footer">                    
                    <div style="padding-left: 15px; padding-right: 15px; padding-bottom: 10px;">                        
                        <center>
                            <button class="btn btn-success" id="btn-login">
                                Login
                            </button>
                        </center>
                    </div>                    
                    <div style="padding-left: 15px; padding-right: 15px;">
                        <div class="col-md-6">
                            <button class="btn btn-previous btn-xs" type="button" data-toggle="modal" data-target="#modal_cadastro" data-dismiss="modal">
                                Cadastre-se
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-next btn-xs" type="button">
                                Esqueci a senha
                            </button>
                        </div>
                    </div>
                </div>                
            </form>   
        </div>
    </div>
</div>