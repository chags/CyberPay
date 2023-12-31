<?php
$template = new TEngine();
$app = new Module();
$user = $_SESSION;
$data = new Company();
$dados = $data->EditCompany();
//print_r($dados);
?>

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="<?=$app->view('app'); ?>"><img class="brand-logo" src="<?=helper::logo($dados["company_logo"]); ?>">
                            <h3 class="brand-text"></h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?=$user['user_name']; ?></span><span class="avatar avatar-<?=$x = $user['user_session']  == null ? "off" : "online" ?> "><img src="<?=helper::imagem($user['user_image']); ?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?=$app->view('company'); ?>"><i class="ft-user"></i>Empresa</a>
                                <a class="dropdown-item" href="<?=$app->view('configuration'); ?>"><i class="ft-user"></i>Configuration</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=$app->controller('logout', 'login'); ?>"><i class="ft-power"></i> Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    