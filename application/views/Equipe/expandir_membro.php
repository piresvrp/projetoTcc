<?php
$title = 'Expandir Membro';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
?>
<!-- Modal -->
<style>
    .DemoModal2{margin:50px;}
</style>
<?php
foreach ($membro_equipe as $key => $value):
    $id = $value['idmembro_equipe'];
    ?>
    <!-- Modal Contents -->
    <div id="<?php echo 'DemoModal' . $id; ?>" class="modal fade " style="margin:50px"> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                    <button type="button" class="close" 
                            data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title">Detalhes do membro</h4>
                </div>

                <div class="modal-body"> <!-- modal body -->
                    <table class="table table-hover table-bordered results">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Nome</th>
                                 <th class="col-md-2 col-xs-2" style="width: 10%;">Nivel</th>
                                
                            
                            <tr class="warning no-result">
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cont = 1;
                            foreach ($membro_equipe as $key => $value) {
                                if ($value['idmembro_equipe'] == $id):
                                    echo '<tr>';
                                    echo "<th scope='row' style='width:5%;'>$cont</th>";
                                    echo ' <td>' . $value['nome_membro'] . ' </td>';
                                    echo ' <td>' . $value['nivel_senioridade'] . ' </td>';
                                   
                                    echo '</tr>';
                                    $cont++;
                                endif;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                    <div class="modal-footer">
                    <?= anchor("Equipe/cadastrarMembro", "<i class='fa fa-reply '></i> Voltar", array("class" => "btn btn-primary")) ?>  
                </div>

            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div><!-- / .modal -->
 
<?php endforeach ?>
