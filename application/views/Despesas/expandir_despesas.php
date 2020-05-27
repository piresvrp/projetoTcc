<?php

$title = 'expandir Despesas';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
?>
<!-- Modal -->
<style>
    .DemoModal2{margin:50px;}
</style>
<?php
foreach ($Despesas_fixas as $key => $value):
    $id = $value['iddespesas_fixas'];
    ?>
    <!-- Modal Contents -->
    <div id="<?php echo 'DemoModal' . $id; ?>" class="modal fade " style="margin:50px"> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                    <button type="button" class="close" 
                            data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title">Detalhes da Despesas</h4>
                </div>

                <div class="modal-body"> <!-- modal body -->
                    <table class="table table-hover table-bordered results">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Aluguel</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Condominio</th>
                                 <th class="col-md-3 col-xs-3" style="width: 30%;">Agua</th>
                                <th class="col-md-3 col-xs-3" style="width: 30%;">Luz</th>
                                <th class="col-md-3 col-xs-3" style="width: 30%;">Internet</th>
                                <th class="col-md-3 col-xs-3" style="width: 30%;">salarioFunc</th>
                                <th class="col-md-3 col-xs-3" style="width: 30%;">Outros</th>
                                <th class="col-md-3 col-xs-3" style="width: 30%;">totalGasto</th>
                            </tr>
                               
                            </tr>
                            <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> Nada encontrado!!</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cont = 1;
                            foreach ($Despesas_fixas as $key => $value) {
                                if ($value['iddespesas_fixas'] == $id):
                                    echo '<tr>';
                                    echo "<th scope='row' style='width:5%;'>$cont</th>";
                                    echo ' <td>' . $value['aluguel'] . ' </td>';
                                    echo ' <td>' . $value['condominio'] . ' </td>';
                                    echo ' <td>' . $value['agua'] . ' </td>';
                                     echo ' <td>' . $value['luz'] . ' </td>';
                                      echo ' <td>' . $value['internet'] . ' </td>';
                                       echo ' <td>' . $value['sal_funcionario'] . ' </td>';
                                      echo ' <td>' . $value['outros'] . ' </td>';
                                      echo ' <td>' . $value['total_gasto'] . ' </td>';
                                    echo '</tr>';
                                    $cont++;
                                endif;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer"> <!-- modal footer -->
                    <?= anchor("Despesas/cadastrar_depesasfixas", "<i class='fa fa-reply '></i> Voltar", array("class" => "btn btn-primary")) ?>   
                </div>

            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div><!-- / .modal -->
    <?php

endforeach;
?>