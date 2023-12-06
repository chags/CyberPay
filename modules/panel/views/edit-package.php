<?php
$template = new TEngine();
$app = new Module();
$dado = new Package();
$p = $dado->EditPackage($app->uri(3));
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
                            <form class="form form-horizontal" action="<?=$app->controller('update_package'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                    <input type="hidden" name="id_package" value="<?=$p['id_package']; ?>" required>                          
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Nome do pacote</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="packageName" value="<?=$p['packageName']; ?>"  class="form-control round" placeholder="Nome do Pacote" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Descrição</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="package_description" value="<?=$p['package_description']; ?>"  class="form-control round" placeholder="Descrição do pacote" required>
                                        </div>
                                    </div>                                                                      
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Espaço em disco</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="diskSpace" value="<?=$p['diskSpace']; ?>"  min="0" max="999999"   class="form-control round" placeholder="MG(0 = Unlimited)" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Largura de banda</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="bandwidth"  value="<?=$p['bandwidth']; ?>" min="0" max="999999"   class="form-control round" placeholder="MG(0 = Unlimited)" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Banco de dados</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="data_Bases"  value="<?=$p['data_Bases']; ?>" min="0" max="999999"   class="form-control round" placeholder="MG(0 = Unlimited)" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Contas de FTP</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="ftpAccounts" value="<?=$p['ftpAccounts']; ?>"  min="0" max="999999"  class="form-control round" placeholder="MG(0 = Unlimited)" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Contas de e-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="emails" value="<?=$p['emails']; ?>"  min="0" max="999999"   class="form-control round" placeholder="MG(0 = Unlimited)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Dominios</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="number" name="allowedDomains" value="<?=$p['allowedDomains']; ?>"  min="0"  max="999999"   class="form-control round" placeholder="MG(0 = Unlimited)" required>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <a href="<?= $app->view('list-packages'); ?>" class="btn btn-warning mr-1">
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