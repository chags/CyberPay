<?php
$user = $_SESSION;
//print_r($user);
$app = new Module();
$data = new Usuarios();
$lista = $data->perfil($user['id_usuario']);
?>

<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
    </div>
    </div>
</div>
<div class="content-body">
    <!-- Doctor's Profile -->

    <section id="doctor-profile">
        <div class="row match-height">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="<?= Helper::avatar($user['usuario_imagem']); ?>" alt="" class="card-img-top mb-1 img-fluid w-25 rounded-circle">
                        <h1 class="card-title mb-1"><?= $user['usuario_apelido']; ?></h1>
                        <h6 class="text-light"><?= $user['cargo_nome']; ?></h6>
                    </div>
                    <div class="card-body">
                        <h6 class="text-bold-500">União:</h6>
                        <p><?= $lista[0]['uniao_sigla']; ?></p>

                        <h6 class="text-bold-500">Campo:</h6>
                        <p><?= $lista[0]['campo_sigla']; ?></p>


                        <h6 class="text-bold-500">Região:</h6>
                        <p><?= $lista[0]['regiao_nome']; ?></p>

                        <h6 class="text-bold-500">Distrito:</h6>
                        <p>
                        <p><?= $lista[0]['distrito_nome']; ?></p>
                        </p>

                        <h6 class="text-bold-500">Diretor:</h6>
                        <p>$100.00</p>

                        <h6 class="text-bold-500">Localização:</h6>
                        <p>Manhattan</p>
                        <hr class="my-2">
                        <div id="maps-leaflet-user-location" class="height-250"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DADOS DE PERFIL</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <form class="form form-horizontal form-bordered">
                                            <div class="form-body">
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Nome completo</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_nome']; ?>" disabled>
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
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_email']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-envelope-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">CPF</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_cpf']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-file-text"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Data de Nascimento</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_nascimento']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-briefcase"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">CEP</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_cep']; ?>" disabled>
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
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_logradouro']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-map-marker"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Bairro</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_bairro']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-map"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Complemento</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_complemento']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-commenting-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Estado</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_estado']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-map-pin"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-md-3 label-control" for="timesheetinput1">Cidade</label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="timesheetinput1" class="form-control" value="<?= $user['usuario_cidade']; ?>" disabled>
                                                            <div class="form-control-position">
                                                                <i class="la la-building-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <a href="<?= $app->view('editar-perfil'); ?>" class="btn btn-primary mr-1">
                                                        <i class="ft-edit"></i> editar
                                                    </a>
                                                </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    </div>
</div>