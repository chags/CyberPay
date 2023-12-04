<?php
$template = new TEngine();
$app = new Module();
$data = new Client();
$c = $data->EditClient($app->uri(3));
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
                            <form class="form form-horizontal" action="<?=$app->controller('update_client'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                    <input type="hidden" name="id_user"  value="<?=$c['id_user']; ?>" required>                        
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Name</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="user_name"  class="form-control round" value="<?=$c['user_name']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >e-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="user_email"  class="form-control round" value="<?=$c['user_email']; ?>"  required>
                                        </div>
                                    </div>                                                                      
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Senha</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="password" name="user_password"  class="form-control round">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Telefone</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="user_phone"  class="form-control round" value="<?=$c['user_phone']; ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >CEP</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_zipcode"  class="form-control round" value="<?=$c['address_zipcode']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Logradouro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_street"  class="form-control round" value="<?=$c['address_street']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Numero</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_number" class="form-control round" value="<?=$c['address_number']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >complemento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_complement"  class="form-control round" value="<?=$c['address_complement']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Bairro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_neighborhood"  class="form-control round" value="<?=$c['address_neighborhood']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Cidade</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_city" class="form-control round" value="<?=$c['address_city']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Estado</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_state" class="form-control round" value="<?=$c['address_state']; ?>" required>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >país</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_country" class="form-control round" value="<?=$c['address_country']; ?>" required>
                                        </div>
                                    </div>                                     
                                    <div class="form-actions">
                                        <a href="<?= $app->view('list-client'); ?>" class="btn btn-warning mr-1">
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