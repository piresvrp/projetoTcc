<!DOCTYPE html>
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css'); ?>" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- css custom-->
        <?php
            if(isset($css)){
                echo $css;
            }
        ?>
        
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
       
        <script src="<?php echo base_url('assets/js/fontawesome.js');?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css');?>">
       
    </head>
    <body>
        <div class="page home-page">
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar">
                    <!-- Search Box-->
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- Navbar Brand --><a href="#" class="navbar-brand">
                                    <div class="brand-text brand-big hidden-lg-down"><strong>I</strong><span>EstimeSoft</span></div>
                                    <div class="brand-text brand-small"><strong>Ship</strong></div></a>
                                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Logout    -->
                                <li class="nav-item"> <?php echo anchor('Usuario/sair', "Sair <i class='fa fa-sign-out'> </i>", array('class' => 'nav-link logout')); ?></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                    <!-- Sidebar Header-->
                    <div class="sidebar-header d-flex align-items-center">
                     <div class="avatar"><img src="<?php echo base_url('assets/img/Avatar.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
                       
                        <div class="title">
                            <h1 class="h4"><?php echo $this->session->userdata('logado')[0]['nome']; ?></h1>
                            <p><?php echo $this->session->userdata('logado')[0]['funcao']; ?></p>
                        </div>
                    </div>
                    <ul class="list-unstyled">

                        <li class="active"><?php echo anchor('redireciona/pagina/inicio', "<i class='icon-home'> </i> Inicio"); ?></li>

                    

                        <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Projeto</a>

                            <ul id="dashvariants" class="collapse list-unstyled">
                                <li><?php echo anchor('Projeto/cadastrarProjeto', "Cadastrar_Projeto"); ?></li>

                                <li><?php echo anchor('Projeto/listarProjeto', "Listar_Projeto"); ?></li> 
                                
                          </ul></li>
                    
                         

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Equipe">
                   <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#collapseExamplePages">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                     <span class="nav-link-text">Equipe</span>
                   </a>
                  <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                            
                             <li><?php echo anchor('Equipe/cadastrarMembro', "Cadastrar_Equipe"); ?></li>

                              <li><?php echo anchor('Equipe/listarMembro', "Listar_Equipe"); ?></li>
                        </ul>
                    </li>


                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Despesas">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#collapseMulti">
                <i class="fa fa-fw fa-wrench"></i>
                 <span class="nav-link-text">Despesas</span>
               </a>
              <ul class="sidenav-second-level collapse" id="collapseMulti">
                                       
                      <li><?php echo anchor('Despesas/cadastrarDespesas', "Cadastrar_Despesas"); ?></li>
                      <li><?php echo anchor('Despesas/listarDespesas', "Listar_Despesas"); ?></li>

                     <li><?php echo anchor('Despesas/cadastrarInvestimento', "Cadastrar_Investimento"); ?></li>
                      <li><?php echo anchor('Despesas/listarCapinvestimento', "Listar_Investimento"); ?></li>
                            </li>
                        </ul> 

                         <li><a href="#fdfdfd" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Usuario</a>
                            <ul id="fdfdfd" class="collapse list-unstyled">

                                <li><?php echo anchor('Usuario/cadastrar_Usuario', "Cadastrar"); ?></li>
                                <li><?php echo anchor('Usuario/listar', "Listar"); ?></li>
                            </ul>
                        </li>   
                          <li><?php echo anchor('Usuario/editar', "<i class='icon-interface-windows'> </i> Editar Perfil"); ?>
                            
                        </li>
                      </ul>                     
                </nav>
