<?php
$template = new TEngine();
$app = new Module();
$data = new Orcamento();
$c = $data->EditarConfig($app->uri(3));
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
                            <form class="form form-horizontal" action="<?=$app->controller('editar_configuracao'); ?>" method="POST">
                                <input type="hidden" name="config_orcamento_id"   value="<?=$app->uri(3); ?>" required>
                            <div class="form-body"> 
                                    <h4 class="form-section"><i class="ft-user"></i> configurações do orçamento</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Prazo de entrega</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_prazo_entrega"   value="<?=$c['config_prazo_entrega']; ?>"  class="form-control round" required>
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Validade da Cotação</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_cotacao"   value="<?=$c['config_cotacao']; ?>"  class="form-control round" required>
                                        </div>
                                    </div>                                                                                                   
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Frete</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_frete" value="<?=$c['config_frete']; ?>"   class="form-control round"" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Forma de pagamento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_forma_pagamento" value="<?=$c['config_forma_pagamento']; ?>"   class="form-control round"  required>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Prazo de pagamento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_prazo_pagamento" value="<?=$c['config_prazo_pagamento']; ?>"   class="form-control round" required>
                                        </div>
                                    </div>                                                                        
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Natureza da nota Fiscal</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_natureza_nota" value="<?=$c['config_natureza_nota']; ?>"   class="form-control round" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Garantia</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_garantia"  value="<?=$c['config_garantia']; ?>"   class="form-control round"  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Técnico Responsável</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="config_tecnico" value="<?=$c['config_tecnico']; ?>"   class="form-control round"  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Observação</label>
                                        <div class="col-md-9 mx-auto">
                                            <textarea rows="5" name="config_observacao" class="form-control round"  >
                                            <?=$c['config_observacao']; ?>
                                            </textarea>
                                          
                                        </div>
                                    </div>                                                                                                        
                                    <div class="form-actions">
                                        <a href="<?= $app->view('lista-clientes'); ?>"   class="btn btn-warning mr-1">
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