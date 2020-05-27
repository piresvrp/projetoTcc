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
                            <h3 class="h4">Informe todos os dados para efetuar a Edição </h3>
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
<form class="form-group-sm" action="Despesas/editar/$dados->iddespesas_fixas" method="post">

            <div class="form-group-sm">
                <div class = "form-group row">
                     <div class="col-sm-15">
                            </div>
                            <div class="col-md-5">
                            <label>Aluguel:</label>
                            <input type="text" name="aluguel" value="<?php echo (isset($dados->aluguel)) ? $dados->aluguel : ''?>" placeholder="aluguel" class="form-control input-sm chat-input" required="required"/>
                        </div>
                                        
                                    
                        <div class="col-md-5">
                            <label>Condominio:</label>
                            <input type="text" name="condominio" value="<?php echo (isset($dados->condominio)) ? $dados->condominio : ''?>" placeholder="condominio" class="form-control input-sm chat-input" required="required"/>
                        </div>
                                               

                         <div class="col-md-5">
                            <label>Agua:</label>
                            <input type="text" name="agua" value="<?php echo (isset($dados->agua)) ? $dados->agua : ''?>" placeholder="Gasto com agua" class="form-control input-sm chat-input" required="required"/>
                        </div>
         
                                       
                        <div class="col-md-3">
                            <label>Luz:</label>
                            <input type="text" value="<?php echo (isset($dados->luz)) ? $dados->luz: ''?>" name="luz" placeholder="Valor da luz" class="form-control input-sm chat-input" required="required"/>
                        </div>

                         <div class="col-md-2">
                            <label>Internet:</label>
                            <input type="text" value="<?php echo (isset($dados->internet)) ? $dados->internet : ''?>" name="internet" placeholder=" valor da internet" class="form-control input-sm chat-input" required="required"/></div>

                         <div class="col-md-4">
                            <label>sal_funcionario:</label>
                            <input type="text" name="sal_funcionario" value="<?php echo (isset($dados->sal_funcionario)) ? $dados->sal_funcionario : ''?>" placeholder="salar funcionario" class="form-control input-sm chat-input" required="required"/></div> 

                             <div class="col-md-4">
                            <label>Outros:</label>
                            <input type="text" name="outros" value="<?php echo (isset($dados->outros)) ? $dados->outros : ''?>" placeholder="outros gastos" class="form-control input-sm chat-input" required="required"/></div> 

                             <div class="col-md-3">
                            <label>Total Gasto:</label>
                            <input type="text" name="total_gasto" value="<?php echo (isset($dados->total_gasto)) ? $dados->total_gasto : ''?>" placeholder="" class="form-control input-sm chat-input" required="required"/>
                        </div>

                    </div>
                <input type="hidden" name="iddespesas_fixas"value="<?php  (isset($dados->iddespesas_fixas)) ? $dados->iddespesas_fixas  : ''?>"
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
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
           </form>
        
        </section>
   
    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>