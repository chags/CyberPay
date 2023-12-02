<?php
$template = new TEngine();
$app = new Module();
?>


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a href="<?=$app->view('listar-orcamentos'); ?>">
                        <i class="la la-cart-arrow-down"></i><span class="menu-title" >Orçamentos</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="<?=$app->view('list-clients'); ?>">
                        <i class="la la-users"></i><span class="menu-title" >Clientes</span>
                    </a>
                </li>  
                <li class=" nav-item">
                    <a href="<?=$app->view('list-packages'); ?>">
                        <i class="la la-barcode"></i><span class="menu-title" >Pacotes</span>
                    </a>
                </li>                
                <li class=" nav-item">
                    <a href="<?=$app->view('list-user'); ?>">
                        <i class="la la-user"></i><span class="menu-title" >Usuários</span>
                    </a>
                </li>                              
                </li>     
            </ul>
        </div>
    </div>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"><?=$template->title(); ?></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=$app->view('app'); ?>">Painel</a>
                                </li>
                                </li>
                                <li class="breadcrumb-item active"><a href=""><?=$template->title(); ?></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
