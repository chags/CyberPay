<?php
$template = new TEngine();
$app = new Module();
$data = new Package();
$list = $data->ListPackages();
?>

            <div class="content-body">
                <!-- Basic Badges start -->
                <section id="basic-badges">
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Basic</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Pacote de hospedagem para site institucional, pouco espaço, desempenho e Economia para seu bolso, se precisar de mais recursos pode migrar para outro pacote</p>
                                        <a href="<?=$app->view('pay'); ?>" class="badge badge-primary">Criar Painel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($list as $c) : ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="text-center"><?=$c['packageName']; ?></h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body text-center">>                                                                               
                                            <p><?=$c['packageName']; ?></p>
                                            <p><?=$c['diskSpace']; ?></p>
                                            <p><?=$c['bandwidth']; ?></p>
                                            <p><?=$c['data_Bases']; ?></p>
                                            <p><?=$c['ftpAccounts']; ?></p>                                                                                       
                                            <a href="<?=$app->view('pay'); ?>" class="badge badge-primary">Criar Painel</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        <?php endforeach; ?>                    
                    </div>
                </section>
</div>
</div>