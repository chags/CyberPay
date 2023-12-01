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
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Entrar</span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" method="POST" action="<?=$app->controller('acesso'); ?>" novalidate>
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="mail" class="form-control" name="usuario_email" placeholder="Digite seu E-mail" required>
                                <div class="form-control-position">
                                <i class="la la-envelope"></i>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" maxlength="20" name="usuario_senha"  placeholder="Digite sua Senha" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                    
                                </div>
                                <div class="col-sm-6 col-12 text-center text-sm-right"><a href="<?=$app->view('lembrar-senha'); ?>" class="card-link">Esqueceu a senha?</a></div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><i class="ft-unlock"></i> Entrar</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="">
                        <p class="float-xl-right text-center m-0">Ainda não tem uma conta? <a href="<?=$app->view('cadastro'); ?>" class="card-link">Criar Conta</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>