<?php
$user = $_SESSION;
$template = new TEngine();
$app = new Module();
$data = new Empresas();
$lista = $data->EditarEmpresa();
//print_r($lista);
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
                            <form class="form form-horizontal" action="<?= $app->controller('editar_empresa'); ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_empresa" value="1">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>Complete suas informações</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control"></label>
                                        <div class="col-md-9 mx-auto">
                                            <label id="projectinput8" class="file center-block">
                                                <img height="auto" width="50" src="<?=helper::imagem($lista["empresa_logo"]); ?>" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Selecione sua Logo</label>
                                        <div class="col-md-9 mx-auto">
                                            <label id="projectinput8" class="file center-block">
                                                <input type="file" name="imagem" id="file">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">CNPJ</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_cnpj" class="form-control round" value="<?= $lista['empresa_cnpj']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">RAZÃO SOCIAL</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_razao_social" class="form-control round" value="<?= $lista['empresa_razao_social']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">NOME FANTASIA</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_nome_fantasia" class="form-control round" value="<?= $lista['empresa_nome_fantasia']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">E-mail</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_email" class="form-control" value="<?= $lista['empresa_email']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-envelope-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">INCRIÇÃO ESTADUAL</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_inscricao"class="form-control" maxlength="20" value="<?= $lista['empresa_inscricao']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">INCRIÇÃO MUNICIPAL</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_inscricao_municipal"class="form-control" maxlength="30" value="<?= $lista['empresa_inscricao_municipal']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Telefone</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_telefone"class="form-control" maxlength="30" value="<?= $lista['empresa_telefone']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Whatsapp</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_whatsapp"class="form-control" maxlength="30" value="<?= $lista['empresa_whatsapp']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-file-text"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                                                      
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">CEP</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_cep" maxlength="9" class="form-control" value="<?= $lista['empresa_cep']; ?>">
                                                <div class="form-control-position">
                                                    <i class="la la-map"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Logradouro</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_logradouro" class="form-control" value="<?= $lista['empresa_logradouro']; ?>">
                                                <div class="form-control-position">
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Número</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_numero" class="form-control" value="<?= $lista['empresa_numero']; ?>">
                                                <div class="form-control-position">
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Complemento</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_complemento" class="form-control" value="<?= $lista['empresa_complemento']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-commenting-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Bairro</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_bairro" class="form-control" value="<?= $lista['empresa_bairro']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-map"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Cidade</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_cidade"class="form-control" value="<?= $lista['empresa_cidade']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-building-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="form-group row mx-auto">
                                        <label class="col-md-3 label-control" for="timesheetinput1">Estado</label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" name="empresa_uf" class="form-control" maxlength="2" value="<?= $lista['empresa_uf']; ?>" >
                                                <div class="form-control-position">
                                                    <i class="la la-map-pin"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                    <a href="<?=$app->view('perfil'); ?>" class="btn btn-warning mr-1">
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