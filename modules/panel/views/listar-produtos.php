<?php
$template = new TEngine();
$app = new Module();
$data = new Produtos();
$lista = $data->ListaProdutos();
//print_r($lista);

?>

                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-warning round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1"  href="<?=$app->view('inserir-produtos'); ?>" type="button"  aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i>Inserir produtos</a>

                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row">
                    <div class="col-12">
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
                            <div class="card-content collapse show">
                                <div class="card-body">
                                <?php  if($lista):   ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered" style="width:100%" id="myTable" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Valor</th>
                                                    <th>Controles</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($lista as $c): ?>
                                                <tr>
                                                
                                                    <td><?=$c['produto_nome']; ?></td>
                                                    <td><?=helper::money($c['produto_valor_venda']); ?></td>
                                                    <td> <a class="btn btn-success" data-toggle="tooltip"  data-original-title="editar" data-placement="top" href="<?=$app->view('editar-produtos/'.$c['id_produto']); ?>"> <i class="la la-edit" ></i> </a> </td>
                                                </tr>
                                                <?php endforeach; ?>                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php else: ?>                               
                                <p class="px-1"><span class="text-bold-600"></span>Ainda não há produtos cadastrado</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->