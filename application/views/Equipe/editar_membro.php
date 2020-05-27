<!DOCTYPE html>
<?php
$title = 'Editar Despesas';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Editar Despesas</li>
        </div>
    </ul>
    <!-- Forms Section-->
    <section class="forms"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-14">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Informe todos os dados para efetuar a Edição</h3>
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
 <form class="form-group-sm" action="Equipe/editarMembro/".$dadosMembro['idmembro_equipe'] method="post">
            <div class="form-group-sm">
                <div class = "form-group row">
                     <div class="col-sm-15">
                            </div>
                            <div class="col-md-5">
                            <label>Membro:</label>
                            <input type="text" name="nome_membro" value="<?php echo (isset($dados->nome_membro)) ? $dados->nome_membro : ''?>" placeholder="nome_membro" class="form-control input-sm chat-input" required="required"/>
                        </div>
                               
                                <div class="col-md-3">                                  
                            <label>Nivel:</label>
                            <SELECT name="nivel_senioridade" class="form-control input-sm chat-input" required>
                                <option value="">--</option>
                            <option value="1" <?php echo ($dados->nivel_senioridade == '1') ? 'selected' : ''?>> junior </option>
                            <option value="2" <?php echo ($dados->nivel_senioridade == '2') ? 'selected' : ''?>> pleno </option>
                            <option value="3" <?php echo ($dados->nivel_senioridade == '3') ? 'selected' : ''?>>senior</option>
                               
                                </select>
                            </div>
                    
                              
                              <div class="col-md-3">                                  
                            <label>Cargo:</label>
                            <SELECT name="cargo" class="form-control input-sm chat-input" required>
                                <option value="">--</option>
                            <option value="0" <?php echo ($dados->cargo == '0') ? 'selected' : ''?>> Programador </option>
                            <option value="1" <?php echo ($dados->cargo == '1') ? 'selected' : ''?>> programador pleno </option>
                            <option value="2" <?php echo ($dados->cargo == '2') ? 'selected' : ''?>>programador junior</option>
                            <option value="3" <?php echo ($dados->cargo == '3') ? 'selected' : ''?>>programador senior</option>
                            <option value="4" <?php echo ($dados->cargo == '4') ? 'selected' : ''?>>analista</option>
                             <option value="5" <?php echo ($dados->cargo == '5') ? 'selected' : ''?>>gerente de projeto</option>
                               
                               
                             </select>
                            </div>
                          
                        <div class="col-md-5">
                            <label>Valor da hora:</label>
                            <input type="text" name="valor_hora" value="<?php echo (isset($dados->valor_hora)) ? $dados->valor_hora : ''?>" placeholder="valor_hora" class="form-control input-sm chat-input" required="required"/>
                        </div>
                                               

                <input type="hidden" name="idmembro_equipe"value="<?php  (isset($dados->idmembro_equipe)) ? $dados->idmembro_equipe : ''?>"
                 </div>
            </div>
                  
                   <div class = "form-group row">
                     <div class="col-md-12">
                         <div class="col-md-6">
                           </form>
        
                                    
                              <?php
                                    echo anchor('redireciona/pagina/inicio', "Cancelar", array('class' => 'btn btn-secondary'));
                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                     echo anchor('redireciona/pagina/inicio', "Editar", array('class' => 'btn btn-primary','type' => 'submit','style' => 'width:33%',));
                                   
                                    
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </form>
        
        </section>
   
    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>