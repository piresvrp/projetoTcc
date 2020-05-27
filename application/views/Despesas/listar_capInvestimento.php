<?php

$title = 'Listar Investimento';

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
            <li class="breadcrumb-item active">Listar Investimento</li>
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
                            <h3 class="h4">Investimento cadastrados no sistema</h3>
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
                            <th class="col-md-2 col-xs-2" style="width: 5%;">Hardware</th>
                            <th class="col-md-2 col-xs-2" style="width: 10%;">Software</th>
                            <th class="col-md-3 col-xs-3" style="width: 10%;">Cap_Giro</th>
                            <th class="col-md-3 col-xs-3" style="width: 10%;">Valor_investido</th>
                            <th class="col-md-3 col-xs-3" style="width: 10%;">C_T Projeto</th>
                            <th class="col-md-3 col-xs-3" style="width: 10%;">Probabilidade</th>
                            <th  class="text-center" style=" width: 15%"> Ação </th>
                                
                                            <tr class="warning no-result">
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cont = 1;
                                         foreach ($cap_investimento as $key => $value) {
                                             $id = $value['idcap_investimento'];
                                             echo '<tr>';
                                             echo "<th scope='row'>$cont</th>";
                                             echo ' <td>' . $value['valorhard'] . ' </td>';
                                             echo ' <td>' . $value['valorsoft'] . ' </td>';
                                             echo ' <td>' . $value['cap_giro'] . ' </td>';
                                             echo ' <td>' . $value['valor_totalinvest'] . ' </td>';
                                             echo ' <td>' . $value['custo_totalprojeto'] . ' </td>';
                                             echo ' <td>' . $value['probabilidade'] . ' </td>';
                                             echo'<td>';
                                             $cont++; ?>     
                                               

                              <?= anchor("Despesas/editarInvestimento/{$value['idcap_investimento']}", '<i class="btn-sm btn-warning fa fa-edit"> </i>') ?>

                            <?= anchor("Despesas/excluirCapinvestimento/{$value['idcap_investimento']}", ' <i class="btn-sm btn-danger fa fa-trash-o"> </i>', array('<a title="Excluir" href="javascript: if(confirm(Tem certeza que deseja excluir?))></a>')) ?>


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