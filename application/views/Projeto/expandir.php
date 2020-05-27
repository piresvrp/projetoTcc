<?php
$title = 'Espandir projetos';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
?>
<!-- Modal -->
<style>
    .DemoModal2{margin:50px;}
</style>
 <div class="container-fluid">
    <?php
foreach($Projeto as $key => $value):
    $id = $value['idprojeto'];
    ?>
    
           <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                    <button type="button" class="close" 
                            data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title">Detalhes do projeto</h4>
                </div>

                <div class="modal-body"> <!-- modal body -->
                    <table class="table table-hover table-bordered results">
                                                       
                    <thead>
                            <tr>
                            <th>cod</th>
                            <th class="col-md-2 col-xs-2" style="width: 10%;">Nome</th>
                            <th class="col-md-2 col-xs-2" style="width: 10%;">Segmento</th>
                            <th class="col-md-3 col-xs-3" style="width: 10%;">Inicio_projeto</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">DataFim</th>
                                <th class="col-md-3 col-xs-3" style="width:10%;">Descrição</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">CustoParcial</th>
                                 </tr>
                            <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> Nada encontrado!!</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cont = 1;
                            foreach ($Projeto as $key => $value) {
                                if ($value['idprojeto'] == $id):
                                    echo '<tr>';
                                    echo "<th scope='row' style='width:5%;'>$cont</th>";
                                    echo ' <td>' . $value['nome_projeto'] . ' </td>';
                                    echo ' <td>' . $value['segmento_projeto'] . ' </td>';
                                    echo ' <td>' . $value['inicio_projeto'] . ' </td>';
                                    echo ' <td>' . $value['fim_projeto'] . ' </td>';
                                    echo ' <td>' . $value['descricao'] . ' </td>';
                                    echo ' <td>' . $value['custo_parcial'] . ' </td>';
                    
                                    echo '</tr>';
                                    $cont++;
                                endif;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>                                        

               
                 <div class="modal-footer"> <!-- modal footer -->
            <?= anchor("Projeto/listarProjeto", "<i class='fa fa-reply '></i> Voltar", array("class" => "btn btn-primary")) ?>   
        </div>
                       
                    
                </div>

            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div><!-- / .modal -->
 <?php endforeach ?>

 
       
       
           