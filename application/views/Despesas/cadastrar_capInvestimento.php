<?php
$title = 'Cadastrar capIvestimento';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Cadastrar capInvestimento </li>
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
                            <?php echo form_open("Despesas/cadastrarInvestimento/");
                            ?>
                              <div class="form-group-sm">
                             <div class = "form-group row">
                             <div class="col-sm-15"></div>

                                 <div class="col-md-5">
                                  <label>hardware:</label>
                                  <input type="text" name="valorhard" placeholder="custo com hardware" class="form-control input-sm chat-input" required="required"/>
                                </div>

                                <div class="col-md-5">
                                 <label>Software:</label>
                                 <input type="text" name="valorsoft" placeholder="custo com software" class="form-control input-sm chat-input" required="required"/>
                                </div>
                                 <div class="col-md-5">
                                   <label>Capital:</label>
                                   <input type="text" name="cap_giro" placeholder="investimento no proje" class="form-control input-sm chat-input" required="required"/>
                                </div>
                                
                                 <div class="col-md-5">
                                  <label>TotalInvestido:</label>
                                  <input type="text" name="valor_totalinvest" placeholder="investimento total" class="form-control input-sm chat-input" required="required"/>
                                </div>

                                 <div class="col-md-5">
                                  <label>custo_Totalprojeto:</label>
                                  <input type="text" name="custo_totalprojeto" placeholder="valor total do projeto" class="form-control input-sm chat-input" required="required"/>
                                </div>

                                 <div class="col-md-5">
                                <label>Probabilidade:</label>
                               <input type="text" name="probabilidade" placeholder="%%%" class="form-control input-sm chat-input" required="required"/></div>
                           
                                </div>
                            </div>
                        </div>                          
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