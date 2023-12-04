<?php
$user = $_SESSION;
$app = new Module();

$web = new Site();
$list = $web->ListWebsites($user['id_user']);
print_r($list);
?>

        <div class="content-body">
            <!-- Hospital Info cards -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <a href="<?=$app->view('list-orders'); ?>">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                        <i class="la la-cart-plus font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Pedidos&nbsp;&nbsp;</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-package'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-barcode font-large-2 warning"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">Packages</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-clients'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-users font-large-2 info"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">Clientes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-users'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-user font-large-2 danger"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">Usuarios</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <a href="<?=$app->view('list-domains'); ?>">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                        <i class="la la-chrome font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">dominios&nbsp;&nbsp;</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-sites'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-sitemap font-large-2 warning"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">Site</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-finance'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-money font-large-2 info"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">Finance</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <a href="<?=$app->view('list-config'); ?>">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="la la-gears font-large-2 danger"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500">configuration</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <section id="basic-badges">


                    <div class="row match-height">
                    <?php if($list): ?>
                        <?php foreach($list as $w): ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">th7.com.br</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class within element to create secondary badge.</p>
                                        <div class="badge badge-secondary">Secondary Badge</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>       
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Criar Hospedagem</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Click no botão abaixo para criar uma nova hospedagem, cada hospedagem possui um usuario e senha para você gerenciar</p>
                                        <a href="<?=$app->view('packages'); ?>" class="badge badge-primary">Criar Painel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>            
        </div>
    </div>
</div>
