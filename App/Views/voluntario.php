    <?php require_once('dashboard_components/head.php'); ?>
<body>

    <!-- /#left-panel -->
    <?php require_once('dashboard_components/leftside.php'); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                        <div class="col-md-12">
                                <section class="card">
                                    <div class="twt-feed blue-bg">
                                        <div class="corner-ribon black-ribon">
                                            <a href="#">
                                                    <i class="fas fa-thumbs-up"></i>
                                                    Avaliar
                                            </a>
                                            <br>
                                            <a href="#">
                                                    <i class="fa fa-plus"></i>
                                                    Adicionar a um Projeto
                                            </a>
                                            <br>
                                            <a href="#">
                                                    <i class="fas fa-user-edit"></i>
                                                    Editar Dados
                                            </a>
                                            <br>
                                            <?php 
                                                if ($this->view->voluntario->congelado == 1)
                                                {
                                                        echo '<a href="/descongelarv?q=';
                                                        echo $_GET["q"].'"><i class="far fa-snowflake"></i> Descongelar</a>';
                                                }
                                                else
                                                        echo '<a href="#" data-toggle="modal" data-target="#congelar"><i class="far fa-snowflake"></i> Congelar</a>'; ?>
                                            </a>
                                            
                                        </div>
        
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-light">Voluntário</p>
                                                <h2 class="text-white display-6"><?php echo ($this->view->voluntario->nome) ?></h2>
                                            </div>
                                        </div>           
                                    </div>
                                    <div class="weather-category twt-category">
                                        <ul>
                                            <li class="active">
                                                Status
                                                <h4>Exporiadico</h4>
                                            </li>
                                            <li class="active">
                                                    Perfil
                                                    <h4>E</h4>
                                            </li>
                                            <li class="active">
                                                Nivel
                                                <h4>β</h4>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dados Básicos</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Disponibilidade</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Conhecimento</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                                                    <div class="col-md-6">
                                                        <h4>Email:</h4> <?php echo ($this->view->voluntario->email) ?>
                                                        <h4>CPF:</h4> <?php echo ($this->view->voluntario->cpf) ?>
                                                        <h4>RG:</h4> <?php echo ($this->view->voluntario->rg) ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4>WhatsApp:</h4> <?php echo ($this->view->voluntario->whatsapp) ?>
                                                        <h4>Telefone:</h4> <?php echo ($this->view->voluntario->telefone) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="row" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                                                            <div class="col-md-6">
                                                                <h4>Estado:</h4> <?php echo ($this->view->voluntario->estado) ?>
                                                                <h4>Endereço:</h4> <?php echo ($this->view->voluntario->endereco) ?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <h4>Cidade:</h4> <?php echo ($this->view->voluntario->cidade) ?>
                                                                    <h4>Complemento:</h4> <?php echo ($this->view->voluntario->complemento) ?>
                                                                </div>
                                                                <br>
                                                            <div class="col-md-12">
                                                                    <h4>Disponibilidade de Horas Semanais:</h4> <?php echo ($this->view->voluntario->horas) ?>
                                                                </div>
                                                    </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="row" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                                                            <div class="col-md-6">
                                                                <h4>Formação:</h4> <?php echo ($this->view->voluntario->formacao) ?>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4>Lattes:</h4> <?php echo ($this->view->voluntario->lattes) ?>
                                                                </div>
                                                                <br>
                                                            <div class="col-md-12">
                                                                    <h4>Observações:</h4> <?php echo ($this->view->voluntario->obs) ?>
                                                                </div>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                    <footer class="twt-footer">
                                        <div style="font-size: 12px;
                                        font-weight: 700;
                                        text-transform: uppercase;
                                        border-bottom:   1px solid #dee2e6;
                                        ">
                                            <i class="ti-bookmark-alt"></i>
                                            Documentos
                                        </div>
                                        <div class="row" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                                            <div class="col-md-6">
                                                <a href="#"><h5>Comprovante de Residência <i class="ti-import"></i></h5></a>
                                                <a href="#"><h5>Curriculo <i class="ti-import"></i></h5></a>
                                                <a href="#"><h5>RG <i class="ti-import"></i></h5></a>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#"><h5>CPF (opcional) <i class="ti-import"></i></h5></a>
                                                <a href="#"><h5>Contrato <i class="ti-import"></i></h5></a>
                                                <a href="#"><h5>Certificados <i class="ti-import"></i></h5></a>
                                            </div>
                                        </div>
                                    </footer>
                                </section>
                            </div>



                </div><!-- .animated -->
        </div><!-- .content -->

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer>


<!-- modals -->
<div class="modal fade bd-example-modal-sm" id="congelar" tabindex="-1" role="dialog" aria-labelledby="congelar" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Você quer mesmo congelar esse voluntário?
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary"  href="/congelarv?q=<?php echo $_GET["q"]?>">Congelar</a>
        <button type="button" data-dismiss="modal" class="btn btn-primary">Sair</button>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>



</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
