<?php
$app = new Module();
$company = new Company();
$data = $company->EditCompany();

?>
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1"><img width="100" height="auto" src="<?=Helper::logo($data["company_logo"]); ?>" alt="logo"></div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span><?=Translator::translate('LOGIN'); ?></span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" method="POST" action="<?=$app->controller('access'); ?>" novalidate>
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="mail" class="form-control" name="user_email" placeholder="Digite seu E-mail" required>
                                <div class="form-control-position">
                                <i class="la la-envelope"></i>
                                </div>
                            </fieldset>
                            <br>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" maxlength="20" name="user_password"  placeholder="Digite sua Senha" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-6 col-12 text-center text-sm-left">
                                    
                                </div>
                                <div class="col-sm-6 col-12 text-center text-sm-right"><a href="<?=$app->view('remember-password'); ?>" class="card-link">Forgot password?</a></div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><i class="ft-unlock"></i> Login</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="">
                        <p class="float-xl-right text-center m-0">Not have an account yet?<a href="<?=$app->view('register'); ?>" class="card-link">Create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>