<?php
$template = new TEngine();
$app = new Module();
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
                            <form class="form form-horizontal" action="<?=$app->controller('insert_client'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Informações Pessoais</h4>
                                                                   
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Name</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="user_name"  class="form-control round" placeholder="Nome do Resposável" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >e-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="user_email"  class="form-control round" placeholder="Nome do Resposável" required>
                                        </div>
                                    </div>                                                                      
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Senha</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="password" name="user_password"  class="form-control round" placeholder="Nome do Resposável" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Telefone</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="mail" name="user_phone"  class="form-control round" placeholder="Digite o telefone" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >CEP</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_zipcode"  class="form-control round" placeholder="Digite o CEP" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Logradouro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_street"  class="form-control round" placeholder="Digite o logradouro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Numero</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_number" class="form-control round" placeholder="Digite o numero" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >complemento</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_complement"  class="form-control round" placeholder="Digite complemento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Bairro</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_neighborhood"  class="form-control round" placeholder="Digite bairro" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Cidade</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_city" class="form-control round" placeholder="Digite a cidade" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Estado</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_state" class="form-control round" placeholder="Digite se" required>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >país</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="address_country" class="form-control round" placeholder="Digite se" required>
                                        </div>
                                    </div>                                     
                                    <div class="form-actions">
                                        <a href="<?= $app->view('lista-usuario'); ?>" class="btn btn-warning mr-1">
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