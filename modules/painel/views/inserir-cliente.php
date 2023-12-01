<?php
$template = new TEngine();
$app = new Module();
?>

<div class="content-header-right col-md-6 col-12">

</div>
</div>
<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text">
                            </div>
                            <form class="form form-horizontal" action="<?=$app->controller('inserir_cliente'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">CNPJ</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_cnpj" id="cnpj" class="form-control round" placeholder="Digite o CNPJ" required>
                                        </div>
                                    </div>                                                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome Responsável</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_nome" id="projectinput1" class="form-control round" placeholder="Nome do Resposável" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome da Empresa</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_razao_social" id="projectinput1" class="form-control round" placeholder="Digite o nome da Empresa" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Inscreição estadual</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_inscricao" id="projectinput1" class="form-control round" placeholder="Digite Inscrição estadual">
                                        </div>
                                    </div>                                                                        
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Nome Fantasia</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_nome_fantasia" id="projectinput2" class="form-control round" placeholder="Digite o nome fantasia" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Telefone</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="cliente_telefone" id="projectinput3" class="form-control round" placeholder="Digite o telefone" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="cliente_email" id="projectinput3" class="form-control round" placeholder="Digite seu e-mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">CEP</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_CEP" id="projectinput3" class="form-control round" placeholder="Digite o CEP" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Logradouro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_logradouro" id="projectinput3" class="form-control round" placeholder="Digite o logradouro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Numero</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_numero" id="projectinput3" class="form-control round" placeholder="Digite o numero" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">complemento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_complemento" id="projectinput3" class="form-control round" placeholder="Digite complemento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Bairro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_bairro" id="projectinput3" class="form-control round" placeholder="Digite bairro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Cidade</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_municipio" id="projectinput3" class="form-control round" placeholder="Digite a cidade" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">Estado</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_uf" id="projectinput3" class="form-control round" placeholder="Digite se">
                                        </div>
                                    </div>                                                                       
                                    <div class="form-actions">
                                        <a href="<?= $app->view('lista-usuario'); ?>" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancelar
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Salvar
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- // Basic form layout section end -->
</div>
</div>
</div>