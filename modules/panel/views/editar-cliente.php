<?php
$template = new TEngine();
$app = new Module();
$data = new Clientes();
$c = $data->EditarCliente($app->uri(3));
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
                            <form class="form form-horizontal" action="<?=$app->controller('editar_cliente'); ?>" method="POST">
                                <input type="hidden" name="id_cliente"   value="<?=$app->uri(3); ?>" required>
                            <div class="form-body"> 
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">CNPJ</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_cnpj"  id="cnpj" value="<?=$c['cliente_cnpj']; ?>"  class="form-control round" placeholder="Digite o CNPJ" required>
                                        </div>
                                    </div>                                                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome Responsável</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_nome" value="<?=$c['cliente_nome']; ?>"   class="form-control round" placeholder="Nome do Resposável" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome da Empresa</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_razao_social" value="<?=$c['cliente_razao_social']; ?>"   class="form-control round" placeholder="Digite o nome da Empresa" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Inscreição estadual</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_inscricao" value="<?=$c['cliente_inscricao']; ?>"   class="form-control round" placeholder="Digite Inscrição estadual">
                                        </div>
                                    </div>                                                                        
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Nome Fantasia</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_nome_fantasia" value="<?=$c['cliente_nome_fantasia']; ?>"   class="form-control round" placeholder="Digite o nome fantasia" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Telefone</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_telefone" id="telefone" value="<?=$c['cliente_telefone']; ?>"   class="form-control round" placeholder="Digite o telefone" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >E-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="cliente_email" value="<?=$c['cliente_email']; ?>"   class="form-control round" placeholder="Digite seu e-mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >CEP</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_CEP" id="CEP" value="<?=$c['cliente_CEP']; ?>" class="form-control round" placeholder="Digite o CEP" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Logradouro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_logradouro" value="<?=$c['cliente_logradouro']; ?>"  class="form-control round" placeholder="Digite o logradouro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Numero</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_numero" value="<?=$c['cliente_numero']; ?>"  class="form-control round" placeholder="Digite o numero" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >complemento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_complemento" value="<?=$c['cliente_complemento']; ?>"  class="form-control round" placeholder="Digite complemento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Bairro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_bairro" value="<?=$c['cliente_bairro']; ?>" class="form-control round" placeholder="Digite bairro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Cidade</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_municipio" value="<?=$c['cliente_municipio']; ?>"  class="form-control round" placeholder="Digite a cidade" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Estado</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="cliente_uf" value="<?=$c['cliente_uf']; ?>"  class="form-control round" placeholder="Digite se">
                                        </div>
                                    </div>                                                                       
                                    <div class="form-actions">
                                        <a href="<?= $app->view('lista-clientes'); ?>" class="btn btn-warning mr-1">
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