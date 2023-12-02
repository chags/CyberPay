<?php
$template = new TEngine();
$app = new Module();
$data = new Produtos();
$lista = $data->EditarProdutos($app->uri(3));
?>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

    </div>
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

                            <form class="form form-horizontal" action="<?= $app->controller('editar_produtos'); ?>" method="POST">
                                <input type="hidden" name="id_produto" value="<?= $lista['id_produto']; ?>">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>Editar informações do produto</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome do produto</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="produto_nome" value="<?= $lista['produto_nome']; ?>" class="form-control round" placeholder="editar nome do produto" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Descrição do produto</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="produto_descricao" value="<?= $lista['produto_descricao']; ?>" class="form-control round" placeholder="descreva o produto" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">Valor Base</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="produto_valor_base" value="<?= $lista['produto_valor_base']; ?>" id="base" class="form-control round" placeholder="valor de base" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">Valor de Venda</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="produto_valor_venda" value="<?= $lista['produto_valor_venda']; ?>" id="venda" class="form-control round" placeholder="valor de venda" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">Unidade de Medida</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="produto_und" value="<?= $lista['produto_und']; ?>" class="form-control round" placeholder="Ex: M, Kg, M" required>
                                        </div>
                                    </div>                                    
                                    <div class="form-actions">
                                        <a href="<?= $app->view('listar-produtos'); ?>" class="btn btn-warning mr-1">
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