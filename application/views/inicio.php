<?php
$title = 'inicio';
require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Inicio</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-violet"><i class="icon-user"></i></div>
                        <div class="title"><span>Novos<br>projetos</span>
                            <div class="progress">
                            </div>
                        </div>
                        <div class="number"><strong>0</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-red"><i class="icon-padnote"></i></div>
                        <div class="title"><span>Projetos<br>Registrados</span>
                        </div>
                        <div class="number"><strong>0</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-green"><i class="icon-bill"></i></div>
                        <div class="title"><span>Novos<br>Investimento</span>
                            <div class="progress">
                            </div>
                        </div>
                        <div class="number"><strong>0</strong></div>
                    </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                    <div class="item d-flex align-items-center">
                        <div class="icon bg-orange"><i class="icon-check"></i></div>
                        <div class="title"><span>Pendencia<br>Documentais</span>
                            <div class="progress">
                            </div>
                        </div>
                        <div class="number"><strong>0</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section-->
    <section class="projects no-padding-top">
        <div class="container-fluid">
            <!-- Project-->

            <br>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="<?php echo base_url('assets/img/project-3.jpg'); ?>" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4"></h3>EM <small>CONSTRUÇÂO </small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down"> Projeto</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>PROJETO</div>
                    </div>
                </div>
            </div>
            <!-- Project-->
            <div class="project">
                <div class="row bg-white has-shadow">
                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="project-title d-flex align-items-center">
                            <div class="image has-shadow"><img src="<?php echo base_url('assets/img/project-4.jpg'); ?>" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h3 class="h4"></h3>PROJETO<small></small>
                            </div>
                        </div>
                        <div class="project-date"><span class="hidden-sm-down">PONTO</span></div>
                    </div>
                    <div class="right-col col-lg-6 d-flex align-items-center">
                        <div class="time"><i class="fa fa-clock-o"></i>FUNÇAO</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>