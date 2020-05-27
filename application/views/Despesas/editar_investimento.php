<!DOCTYPE html>
<?php
$title = 'Editar Investimento';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Editar Investimento</li>
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
 <form class="form-group-sm" action="Despesas/editarInvestimento/$dados->idcap_investimento" method="post">
            <div class="form-group-sm">
                <div class = "form-group row">
                     <div class="col-sm-15">
                            </div>
                            <div class="col-md-5">
                            <label>Hardware:</label>
                            <input type="text" name="valorhard" value="<?php echo (isset($dados->valorhard)) ? $dados->valorhard : ''?>" placeholder="valorhard" class="form-control input-sm chat-input" required="required"/>
                        </div>
                                        
                                    
                        <div class="col-md-5">
                            <label>Software:</label>
                            <input type="text" name="valorsoft" value="<?php echo (isset($dados->valorsoft)) ? $dados->valorsoft : ''?>" placeholder="valorsoft" class="form-control input-sm chat-input" required="required"/>
                        </div>
                                               

                         <div class="col-md-5">
                            <label>Capital:</label>
                            <input type="text" name="cap_giro" value="<?php echo (isset($dados->cap_giro)) ? $dados->cap_giro : ''?>" placeholder="cap_giro" class="form-control input-sm chat-input" required="required"/>
                        </div>
         
                                       
                        <div class="col-md-3">
                            <label>TotalInvestido:</label>
                            <input type="text" name="valor_totalinvest" value="<?php echo (isset($dados->valor_totalinvest)) ? $dados->valor_totalinvest: ''?>" name="valor_totalinvest" placeholder="valor_totalinvest" class="form-control input-sm chat-input" required="required"/>
                        </div>

                         <div class="col-md-2">
                            <label>custo_Totalprojeto:</label>
                            <input type="text" name="custo_totalprojeto" value="<?php echo (isset($dados->custo_totalprojeto)) ? $dados->custo_totalprojeto: ''?>" name="custo_totalprojeto" placeholder=" custo_totalprojeto" class="form-control input-sm chat-input" required="required"/></div>

                         <div class="col-md-4">
                            <label>Probabilidade:</label>
                            <input type="text" name="probabilidade" value="<?php echo (isset($dados->pobabilidade)) ? $dados->probabilidade : ''?>" placeholder="probabilidade" class="form-control input-sm chat-input" required="required"/></div> 
                    </div>

                <input type="hidden" name="idcap_investimento"value="<?php  (isset($dados->idcap_investimento)) ? $dados->idcap_investimento : ''?>"
                 </div>
            </div>
                  
                   <div class = "form-group row">
                     <div class="col-md-12">
                         <div class="col-md-6">
                                    
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