<?php
$app = new Module();
$user = new Usuarios();
$lista = $user->VerUsuarios($app->uri(3));


//print_r($lista);
?>

<div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Doctor's Profile -->

                <section id="doctor-profile">
                    <div class="row match-height">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header text-center">
                                    <img src="<?=Helper::avatar($lista[0]['usuario_imagem']); ?>" alt="" class="card-img-top mb-1 img-fluid w-25 rounded-circle">
                                    <h1 class="card-title mb-1"><?=$lista[0]['usuario_apelido']; ?></h1>
                                    <h6 class="text-light"><?=$lista[0]['cargo_nome']; ?></h6>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-bold-500">União:</h6>
                                    <p><?=$lista[0]['uniao_sigla']; ?></p>

                                    <h6 class="text-bold-500">Campo:</h6>
                                    <p><?=$lista[0]['campo_sigla']; ?></p>


                                    <h6 class="text-bold-500">Região:</h6>
                                    <p><?=$lista[0]['regiao_nome']; ?></p>

                                    <h6 class="text-bold-500">Distrito:</h6>
                                    <p><p><?=$lista[0]['distrito_nome']; ?></p></p>

                                    <h6 class="text-bold-500">Diretor:</h6>
                                    <p>$100.00</p>

                                    <h6 class="text-bold-500">Localização:</h6>
                                    <p>Manhattan</p>
                                    <hr class="my-2">
                                    <div id="maps-leaflet-user-location" class="height-250"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">DESBRAVADORES</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Select Date From calender to book an appointment</p>
                                    <div id="clndr-multiday" class="overflow-hidden bg-grey bg-lighten-3"></div>
                                  

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12">
                                        <div class="card-content collapse show">
                                <div class="card-body">
                                <?php  if($lista):   ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Imagem</th>
                                                    <th>Nome</th> 
                                                    <th>Email</th>    
                                                    <th>CPF</th>    
                                                    <th>Região</th> 
                                                    <th>Distrito</th>                                                                                                                                                          
                                                    <th>Controles</th>                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($lista as $c): ?>
                                                <tr>
                                                    <th scope="row">
                                                    <img width="70" height="auto" src="<?=helper::avatar($c['usuario_imagem']); ?>" alt="">                                                 
                                                    <td><?=$c['usuario_nome']; ?></td>
                                                    <td><?=$c['usuario_email']; ?></td>
                                                    <td><?=$c['usuario_cpf']; ?></td>
                                                    <td><?=$c['regiao_nome']; ?></td>
                                                    <td><?=$c['distrito_nome']; ?></td>

                                                    <td> 
                                                        <a class="btn circle btn-success" href="<?=$app->view('perfil/'.$c['id_usuario']); ?>"> <i class="la la-edit" ></i> </a>                                           
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php else: ?>                               
                                <p class="px-1"><span class="text-bold-600"></span>Ainda não há cadastros</p>
                                <?php endif; ?>
                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-danger float-right">Book Appointment</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="clndr" class="clearfix">
                        <script type="text/template" id="clndr-template">
                            <div class="clndr-controls">
                <div class="clndr-previous-button">&lt;</div>
                <div class="clndr-next-button">&gt;</div>
                <div class="current-month">
                    <%= month %>
                    <%= year %>
                </div>

            </div>
            <div class="clndr-grid">
                <div class="days-of-the-week clearfix">
                    <% _.each(daysOfTheWeek, function(day) { %>
                        <div class="header-day">
                            <%= day %>
                        </div>
                    <% }); %>
                </div>
                <div class="days">
                    <% _.each(days, function(day) { %>
                        <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                    <% }); %>
                </div>
            </div>
            <div class="event-listing">
                <div class="event-listing-title">Appointments this month</div>
                <% _.each(eventsThisMonth, function(event) { %>
                    <div class="event-item font-small-3">
                        <div class="event-item-day font-small-2">
                            <%= event.date %>
                        </div>
                        <div class="event-item-name text-bold-600">
                            <%= event.title %>
                        </div>
                        <div class="event-item-location">
                            <%= event.location %>
                        </div>
                    </div>
                <% }); %>
            </div>
        </script>
                    </div>
                </section>