<?php
$app = new Module();
$data = new Empresas();
$dados = $data->EditarEmpresa();
?>
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1"><img width="100" height="auto" src="<?=helper::imagem($dados["empresa_logo"]); ?>" alt="logo"></div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Cadastro</span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="<?= $app->controller('cadastro') ?>" class="form-horizontal form-simple" action="index.html" novalidate>
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="text" class="form-control" name="usuario_nome" placeholder="Nome Completo" required>
                                <div class="form-control-position">
                                    <i class="la la-user"></i>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="email" class="form-control" name="usuario_email" placeholder="digite seu e-mail" required>
                                <div class="form-control-position">
                                    <i class="la la-envelope"></i>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" name="usuario_senha" placeholder="Digite sua senha" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" placeholder="Digite sua senha novamente" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>

                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" name="usuario_cpf" placeholder="Digite seu cpf" required>
                                <div class="form-control-position">
                                    <i class="la la-edit"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                            </div>
                            <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i> Cadastrar</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</section>