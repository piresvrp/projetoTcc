
    <?php
$title = 'Cadastrar novo usuario';

require_once(APPPATH . '/views/header.php');
?>                <div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Cadastrar usuario</li>
        </div>
    </ul>
    <!-- Forms Section-->
    <section class="forms"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Informe todos os dados para efetuar o cadastro</h3>
                        </div>
                        <div class="card-body">
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
                            <div class="line"></div>
                            <?php echo form_open("Usuario/cadastrar_Usuario"); ?>
                            <div class="row">

                                <div class="col-sm-5">
                                    <div class="form-group-material">
                                        <?php
                                        echo form_label('Nome', 'nome', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'nome',
                                            'id' => 'nome',
                                            'placeholder'=> 'nome do usuario',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                        
                                        ?>
                                    </div>
                                     
                                    </div>
                                    <div class="col-sm-5">
                                        <?php
                                        echo form_label('Username', 'username', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'username',
                                            'id' => 'username',
                                            'placeholder'=> '@username',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                        
                                        ?>
                                    </div>
                                    <div class="col-sm-5">
                                        <?php
                                        echo form_label('Cpf', 'cpf', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'cpf',
                                            'id' => 'cpf',
                                            'placeholder'=> 'informe o cpf',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                        
                                        ?>
                                    
                                    </div>
                                     <div class="col-sm-5">
                                        <?php
                                         echo form_label('Telefone', 'telefone', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'telefone',
                                            'placeholder'=> 'informe o telefone',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                       
                                        ?>
                                    
                                    </div>
                                    <div class="col-sm-5">
                                        <?php
                                         echo form_label('Email', 'email', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'email',
                                            'id' => 'email',
                                            'placeholder'=> 'email',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                       
                                        ?>
                                    </div>
                                    <div class="col-sm-5">
                                        <?php
                                        echo form_label('Senha', 'senha', array('class' => 'label-material'));
                                        echo form_password(array(
                                            'name' => 'senha',
                                            'id' => 'senha',
                                            'placeholder'=> 'senha',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                        
                                        ?>
                                         </div>
                                        <div class="col-sm-5">
                                        <?php
                                         echo form_label('Funcao', 'funcao', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'funcao',
                                            'id' => 'funcao',
                                            'placeholder'=> 'nome da funcao',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                       
                                        ?>
                                    </div>

                                            <div class="col-sm-5">
                                            <label >Administrador:</label><SELECT name="adm" class="form-control input-sm chat-input" required>
                                            <option value=""> </option>
                                            <option value="1"> Administrador</option>
                                             <option value="0">Funcionario</option></SELECT>
                                        </div>

                                         <div class="col-sm-5">
                                            <label >Nivel:</label><SELECT name="nivel" class="form-control input-sm chat-input" required>
                                            <option value=""> </option>
                                            <option value="1">1</option>
                                             <option value="0">0</option></SELECT>
                                    </div>
                                     <div class="col-sm-5">
                                        <?php
                                        echo form_label('Status', 'status', array('class' => 'label-material'));
                                        echo form_input(array(
                                            'name' => 'status',
                                            'id' => 'status',
                                            'placeholder'=> 'infome o status',
                                            'class' => 'form-control input-sm chat-input',
                                        ));
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class = "line"></div>

                            <div class = "form-group row">
                              <div class="col-md-12">
                                  <div class="col-md-6">
                                    <?php
                                    echo anchor('redireciona/pagina/inicio', "Cancelar", array('class' => 'btn btn-secondary'));
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo form_button(array(
                                        "class" => "btn btn-primary",
                                        "content" => "Cadastrar",
                                        "type" => "submit",
                                        'style' => 'width:33%',
                                    ));
                                    ?>
                                </div>
                            </div>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>


