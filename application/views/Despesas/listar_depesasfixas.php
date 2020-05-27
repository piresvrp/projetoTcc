<?php

$title = 'Listar Despesas';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
?>
<!-- Modal -->
<style>
    .DemoModal2{margin:50px;}
</style>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Listar Despesas</li>
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
                                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Fechar</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Editar</a></div>
                            </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Despesas cadastrados no sistema</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group pull-right">
                                        <input type="text" class="search form-control" placeholder="Pesquisar">
                                    </div>
                                    <span class="counter pull-right"></span>
                                    <table class="table table-hover table-bordered results">
                                        <thead>
                                            <tr>
                                <th>Cod</th>
                                <th class="col-md-2 col-xs-2" style="width: 20%;">Aluguel</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Condominio</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Agua</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Luz</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Internet</th>
                                <th  class="text-center" style=" width: 20%"> Ação </th>
                                
                                            <tr class="warning no-result">
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cont = 1;
                                          foreach ($despesas_fixas as $key => $value){
                                           $id = $value['iddespesas_fixas'];
                                                            
                                                echo '<tr>';
                                               echo "<th scope='row'>$cont</th>";
                                                echo ' <td>' . $value['aluguel'] . ' </td>';
                                                echo ' <td>' . $value['condominio'] . ' </td>';
                                                echo ' <td>' . $value['agua'] . ' </td>';
                                                 echo ' <td>' . $value['luz'] . ' </td>';
                                                  echo ' <td>' . $value['internet'] . ' </td>';
                                                  echo'<td>';
                                                  $cont++;
                                                           
                                                            ?>     
                                               
                             <?= anchor("Despesas/expandirDespesas/{$value['iddespesas_fixas']}", ' <i class="btn-sm btn-info fa fa-eye"> </i>') ?> 

                            <?= anchor("Despesas/editar/{$value['iddespesas_fixas']}", '<i class="btn-sm btn-warning fa fa-edit"> </i>') ?>

                            <?= anchor("despesas/excluirDespesas/{$value['iddespesas_fixas']}", ' <i class="btn-sm btn-danger fa fa-trash-o"> </i>', array('<a title="Excluir" href="javascript: if(confirm(Tem certeza que deseja excluir?))></a>')) ?>

                                              <?php echo '</td></tr>'; 
                                               }?>
                                               
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <?php
                $link = base_url('assets/js/custom_table.js');
                $js = "<script src='$link'></script>";
                require_once(APPPATH . '/views/footer.php');
                ?>