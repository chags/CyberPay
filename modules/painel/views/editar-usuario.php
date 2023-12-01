<?php
$template = new TEngine();
$app = new Module();
$data = new Usuarios();
$lista = $data->EditarUsuario($app->uri(3));
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
                            <form class="form form-horizontal" action="<?=$app->controller('editar_usuario'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_usuario" value="<?=$lista['id_usuario']; ?>">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control"></label>
                                        <div class="col-md-9 mx-auto">
                                            <label id="projectinput8" class="file center-block">
                                            <img height="auto" width="50" src="<?=Helper::avatar($lista['usuario_imagem']); ?>" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Selecione sua foto</label>
                                        <div class="col-md-9 mx-auto">
                                            <label id="projectinput8" class="file center-block">
                                                <input type="file" name="imagem" id="file">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Nome Completo</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" value="<?=$lista['usuario_nome']; ?>" name="usuario_nome"  id="projectinput1" class="form-control round" placeholder="Digite seu nome completo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">CPF</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="usuario_cpf" value="<?=$lista['usuario_cpf']; ?>" class="form-control round" placeholder="Digite seu cpf" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >E-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="usuario_email" value="<?=$lista['usuario_email']; ?>" class="form-control round" placeholder="Digite seu e-mail" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Senha</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="usuario_senha" class="form-control round" placeholder="Digite se for alterar a senha" >
                                        </div>
                                    </div>           
                                <div class="form-actions">
                                <a href="<?=$app->view('lista-usuarios'); ?>" class="btn btn-warning mr-1">
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