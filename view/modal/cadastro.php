<div id="modal_cadastro" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h3 align="center">Cadastre-se</h3>
            </div>
               
            <div class="modal-body">
                <!--
                <div class="btn-group btn-group-justified" role="group" style="padding-bottom: 13px;">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-success"  id="user-btn" href="#dados-registro" data-toggle="pill" aria-expanded="true">
                            <span class="glyphicon glyphicon-user"> </span> Dados Pessoais 
                        </button>
                    </div>                    
                    <div class="btn-group" role="group" id="inv_btn">
                        <button type="button" class="btn btn-warning">
                            <span class="glyphicon glyphicon-th"> </span> Cotas
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-xbt"> </span> Dados Financeiros
                        </button>
                    </div>
                </div>
                <hr>
                -->
                <div class="panel panel-default">
                    <!--
                    <div class="tab-pane fade" id="dados-registro" data-toggle="pill">
                    -->
                    <?php include_once '/../form/cadastro-usuario.php'; ?>
                    <!--
                    </div>
                    -->
                </div>
                    
            </div>
            
            <div class="modal-footer">
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <button class="btn btn-next">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>