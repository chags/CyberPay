<?php
$template = new TEngine();
$app = new Module();
$data = new package();
$list = $data->EditPrice($app->uri(3));
print_r($list);
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
                            <form class="form form-horizontal" action="<?=$app->controller('update_price'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Inserir preços</h4>
                                    <input type="hidden" name="id_price" value="<?=$list['id_price']; ?>"  required>                 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Mesal</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_monthly" value="<?=$list['price_monthly']; ?>"  class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Bimestral</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_bimonthly" value="<?=$list['price_bimonthly']; ?>"  class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>                                                                      
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Trimestral</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_quarterly"  value="<?=$list['price_quarterly']; ?>"   class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Semestral</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_semiannual" value="<?=$list['price_semiannual']; ?>"    class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Anual</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_yearly" value="<?=$list['price_yearly']; ?>"    class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Bienal</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_biennial" value="<?=$list['price_biennial']; ?>"  class="form-control round" placeholder="Deixe zero se não for usar" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Trienal</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="price_triennial" value="<?=$list['price_triennial']; ?>"  class="form-control round" placeholder="Deixe zero se não for usar">
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