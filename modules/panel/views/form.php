<?php
$app = new Module();
//$data = new Exemplo();
//$lista = $data->UmExemlo();
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
                                <p>This is the basic horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. To define form sections use <code>form-section</code> class with any heading tags.</p>
                            </div>
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">First Name</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput5">Company</label>
                                        <div class="col-md-9 mx-auto">
                                            <input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                                        <div class="col-md-9 mx-auto">
                                            <select id="projectinput6" name="interested" class="form-control">
                                                <option value="none" selected="" disabled="">Interested in</option>
                                                <option value="design">design</option>
                                                <option value="development">development</option>
                                                <option value="illustration">illustration</option>
                                                <option value="branding">branding</option>
                                                <option value="video">video</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                                        <div class="col-md-9 mx-auto">
                                            <select id="projectinput7" name="budget" class="form-control">
                                                <option value="0" selected="" disabled="">Budget</option>
                                                <option value="less than 5000$">less than 5000$</option>
                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                <option value="more than 20000$">more than 20000$</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Select File</label>
                                        <div class="col-md-9 mx-auto">
                                            <label id="projectinput8" class="file center-block">
                                                <input type="file" id="file">
                                                <span class="file-custom"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                                        <div class="col-md-9 mx-auto">
                                            <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                        </div>
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