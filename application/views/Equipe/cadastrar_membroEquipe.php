<!Doctype html>
<?php
$title = 'Cadastrar membroEquipe';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Cadastrar MembroEquipe</li>
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
                        <div class = "card-body">
                            <?php
                            
                            if ($this->session->flashdata('cadastroFinzalizado') != null):
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong><?php echo $this->session->flashdata('cadastroFinzalizado'); ?></strong>
                                </div>

                                <?php
                            endif;
                            
                            if (isset($msg)):
                                ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Os seguintes erros foram encontrados!<br><br></strong> <?php echo $msg; ?>
                                </div>

                                <?php
                            endif;
                            if (isset($success)):
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>(:<br><br></strong> <?php echo $success; ?>
                                </div>

                                <?php
                            endif;
                            ?>
                            <div class = "line"></div>
                             <label class="col-sm-10 form-control-label">DADOS DA EQUIPE</label>
                            <?php echo form_open("Equipe/cadastrarMembro");
                            ?>
                           <div class="form-group-sm">
                              <div class = "form-group row">
                             <div class="col-sm-15"></div>

                                <div class="col-md-5">
                               <label>Nome:</label>
                               <input type="text" name="nome_membro" placeholder="membro da equipe" class="form-control input-sm chat-input" required="required"/>
                                </div>


                                <div class="col-md-5">
                                <label>Nivel:</label>
                                <SELECT name="nivel_senioridade" 
                                class="form-control input-sm chat-input">
                                <option value=" "> Selecione o nivel </option>
                                <option value="1 Junior"> Junior </option>
                                <option value="2 Pleno"> Pleno </option>
                                <option value="3 Senior"> Senior </option></select>
                               </div>

            <div class = "line"></div>
            <div class="row">
                <label class="col-sm-10 form-control-label">DADOS DO CARGO</label>
                        
                            <div class="col-md-5">
                                <label>Cargo:</label>
                                <SELECT id ="cargo" 
                                 class = "form-control input-sm chat-input ">
                                <option value=" "> Cargo </option>
                                <option value="0">Programador</option>
                                <option value="1"> programador pleno</option>
                                <option value="2"> programador junior</option>
                                <option value="3"> programador senior</option>
                                <option value="4">Analista</option>
                                <option value="5">Gerente de Projeto</option>
                               </select>                                                               
                               </div>
                            <div class="col-md-5">
                            <label>Valor da hora :</label>
                            <input type="text" name="valor_hora" placeholder="valor da hora" class="form-control input-sm chat-input" required="required"/>
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