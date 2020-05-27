<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Faça o seu login</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css'); ?>" id="theme-stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
        
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
        
        <script src="https://use.fontawesome.com/99347ac47f.js"></script>
        
        <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    </head>

    <body>
        <div class="page login-page">
            <div class="container d-flex align-items-center">
                <div class="form-holder has-shadow">
                    <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="info d-flex align-items-center">
                                <div class="content">
                                    <div class="logo">
                                        <h1>EstimeSoft</h1>
                                    </div>
                                    <p>faça seu login.</p>
                                </div>
                                <?php
                                if (isset($msg)):
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Os seguintes erros foram encontrados!<br><br></strong> <?php echo $msg; ?>
                                    </div>

                                    <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 bg-white">
                            <div class="form d-flex align-items-center">
                                <div class="content">
                                    <?php
                                    echo "<div class='form-group'>";
                                    echo form_open("Usuario/logar");
                                    echo form_label('E-mail', 'email', array('class' => 'label-material'));
                                    echo form_input(array(
                                        'name' => 'email',
                                        'id' => 'email',
                                        'class' => 'input-material',
                                    ));
                                    echo " </div>";

                                    echo "<div class='form-group'>";
                                    echo form_label('Senha', 'senha', array('class' => 'label-material'));
                                    echo form_password(array(
                                        'name' => 'senha',
                                        'id' => 'senha',
                                        'class' => 'input-material',
                                    ));

                                    echo " </div>";

                                    echo "<br><br>";
                                    echo form_button(array(
                                        "class" => "btn btn-primary",
                                        "content" => "Entrar",
                                        "type" => "submit",
                                        'style' => 'width:33%',
                                    ));

                                    echo form_close();
                                    ?>
                                <div class="text-center">
                                  <a class="d-block small mt-3" href="login.php">Registrar</a>
                                  <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
                                </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/front.js'); ?>"></script>

    </body>
</html>