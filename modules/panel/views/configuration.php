<?php
$app = new Module();
$data = new Configuration();
$lista = $data->ConfigServer();
//var_dump($lista);
?>
<div class="content-header-right col-md-6 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
    </div>
</div>
</div>
<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">Project Info</h4>
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
                                <p>Os dados inserido nessa tela possibilita que todo sistema se integre atravez das apis do Cyber panel.</p>
                            </div>
                        <?php if($lista != false): ?>                              
                            <form class="form form-horizontal" action="<?=$app->controller('edit_configuration'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> API CYBER PANEL integration server</h4>
                                    <input type="hidden" name="id_config"  value="<?=$lista[0]['id_config']; ?>">
  
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >URL server</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_url_server"  class="form-control" value="<?=$lista[0]['config_url_server']; ?>" placeholder="https://host.exemple.com:8090/cloudAPI/" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Admin User</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_serverUserName" placeholder="admin" value="<?=$lista[0]['config_serverUserName']; ?>"  class="form-control"  >
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Token</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_token" class="form-control" value="<?=$lista[0]['config_token']; ?>" placeholder="Basic YRWtaW89QEbbcnBpYTQ4OSMj">
                                        </div>
                                    </div>   
                                    <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                            </form>

                                    <?php else: ?> 

                                        <form class="form form-horizontal" action="<?=$app->controller('insert_configuration'); ?>" method="POST">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> API CYBER PANEL integration server</h4>
                                                                           
                                        <div class="form-group row">
                                        <label class="col-md-3 label-control" >URL server</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_url_server"  class="form-control" placeholder="https://host.exemple.com:8090/cloudAPI/" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Admin User</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_serverUserName" placeholder="admin"  class="form-control"  >
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" >Token</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" name="config_token" class="form-control" placeholder="Basic YRWtaW89QEbbcnBpYTQ4OSMj">
                                        </div>
                                    </div>                                          
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>                                   
                                    <?php endif; ?>                                        
                                    
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