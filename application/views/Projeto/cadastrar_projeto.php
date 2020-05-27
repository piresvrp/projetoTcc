<!DOCTYPE html>
<?php
$title = 'Cadastrar novo projeto';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Cadastrar Projeto</li>
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
                            <h3 class="h4">Informe todos os dados para efetuar o cadastro</h3>
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
                            <?php echo form_open("/Projeto/cadastrarProjeto/") ?>
                            <div class="form-group-sm">
                                <div class = "form-group row">
                                    <label class="col-sm-10 form-control-label">DADOS DO PROJETO</label>


                                    <div class="col-md-5">
                                        <label>Nome:</label>
                                        <input type="text" name="nome_projeto" placeholder="nome do projeto" class="form-control input-sm chat-input" required="required"/>
                                    </div>


                                    <div class="col-md-5">
                                        <label>Segmento:</label>
                                        <input type="text" name="segmento_projeto" placeholder="segmento_projeto" class="form-control input-sm chat-input" required="required"/>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Inicio_Projeto:</label>
                                        <input type="date" name="inicio_projeto" placeholder="" class="form-control input-sm chat-input" required="required"/>
                                    </div>

                                    <div class="col-md-5">
                                        <label>Fim:</label>
                                        <input type="date" name="fim_projeto" placeholder="" class="form-control input-sm chat-input" required="required"/>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Descrição:</label>
                                        <input type="text" name="descricao" placeholder="Descrição do projeto" class="form-control input-sm chat-input" required="required"/></div> 

                                    <div class="col-md-5">
                                        <label>Custo parcial:</label>
                                        <input type="text" name="custo_parcial" placeholder="custo parcial" class="form-control input-sm chat-input" required="required"/></div> 
                                </div>

                            </div>
                            <div class = "line"></div>
                            <div class="row">
                                <label class="col-sm-10 form-control-label">DADOS DA FUNCIONALIDADE</label>

                                <div class="col-md-5">
                                    <label>Funcionalidade:</label>
                                    <input type="text" id="nome_funcionalidade" placeholder="nome da funcionalidade" class="form-control input-sm chat-input"/> </div>

                                <div class="col-md-5">
                                    <label>Descrição:</label>
                                    <input type="text"  id="descricao" placeholder="Descrição da funcionalidade" class="form-control input-sm chat-input"/></div> 
                            </div>

                            <div class = "line"></div>
                            <div class="row">                  
                                <label class="col-sm-10 form-control-label">DADOS DA COMPLEXIDADE </label>      
                                

                                <div class="col-md-5">
                                    <label>Complexidade:</label>
                                    <SELECT id="grau_complexidade" class="form-control input-sm chat-input" >
                                        <option value="">grau complexidade</option>
                                        <option value="alta">Alta </option>
                                        <option value="media">Media </option>
                                        <option value="baixo">baixo </option>
                                    </SELECT> </div>

                                <div class="col-md-5">                                  
                                    <label>Tipo Função:</label>
                                    <SELECT  id="tipo_funcao" class="form-control input-sm chat-input" >
                                        <option value="">-função tipo Dado-</option>
                                        <option value="ALI"> Arquivo Logico </option>
                                        <option value="AIE"> Arquivo Interface </option>
                                        <option value="">-função tipo transação-</option>
                                        <option value="EE">Entrada Externa</option>
                                        <option value="SE"> Saida Externa</option>
                                        <option value="CE"> Consulta Externa </option>
                                    </select>
                                </div>                        

                                <div class="col-md-5">
                                    <label>Quant Ponto:</label>
                                    <input type="text" id="quant_pontof" placeholder="Q_pontoFunção de ponto" class="form-control input-sm chat-input"/>
                                
                                <?php
                                echo form_button(array(
                                                    "class" => "btn btn-primary funcionalidade",
                                                    "content" => "Adcionar",
                                                    'style' => 'width:33%',
                                                ));
                                
                                ?>
                                    </div>
                                <div class="adicionar">
                                    
                                </div>
                                <table class="table table-responsive table-hover tabela_funcionalidade" id="tabela_funcionalidade">
                                    <thead>
                                        <tr bgcolor="#eee">
                                            <th>funcionalidade</th>
                                            <th>descrição</th>
                                            <th>grau Complexidade</th>
                                            <th>tipo de função</th> 
                                            <th>Qt dado add</th>                                                                                  
                                            <!--<th>Arquivo_ref add</th> --->                                       
                                            <th>peso add</th>       
                                            <th>opções</th>       
                                        </tr>                                
                                    </thead> 
                                </table> 
                                <div class = "line"></div>
                                <div class="row">
                                    <label class="col-sm-10 form-control-label">DADOS DA LINGUAGEM</label>     
                                    <div class="col-md-5">
                                        <label>Linguagem:</label>
                                        <SELECT name="tipo_linguagem" class="form-control input-sm chat-input" required>
                                            <option value="">-- </option>
                                            <option value="php">php </option>
                                            <option value="C#"> C# </option>
                                            <option value="java">Java</option>
                                            <option value="C++">c++</option>
                                            <option value="python">python </option>
                                            <option value="VisualBasic">viual Basic </option>
                                        </select>
                                    </div>

                                    <div class="col-md-5">
                                        <label>Tempo Linguagem:</label>
                                        <input type="time" name="tempo_gasto" placeholder="tempo_gasto por linguagem" class="form-control input-sm chat-input" required="required"/>
                                    </div></div>
                                <div class = "line">
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

    <script>
        var contador = 1;
        $('.funcionalidade').click( function (){
           nome_funcionalidade =  $('#nome_funcionalidade').val();
           descricao = $('#descricao').val();
           grau_complexidade = $('#grau_complexidade').val();
           tipo_funcao = $('#tipo_funcao').val();
           quant_pontof = $('#quant_pontof').val();
           peso = calcularPeso(grau_complexidade, tipo_funcao);
           
           if(nome_funcionalidade == '' || descricao == '' || grau_complexidade == '' || tipo_funcao == '' || quant_pontof == ''){
               alert('insira todos campos');
               return false;
           }
           $(".adicionar").append("<input type='hidden' id='dadosFunc"+contador+"'name='dadosFunc[]'value='"+nome_funcionalidade+'-'+descricao+'-'+grau_complexidade+'-'+tipo_funcao+'-'+quant_pontof+'-'+peso+"'/>");

           $(".tabela_funcionalidade").append("<tr><td>" + nome_funcionalidade  + "</td><td>" + descricao + "</td><td>" + grau_complexidade + "</td><td>" + tipo_funcao + "</td><td>"+quant_pontof+"</td><td>"+peso+"</td><td><a class='remover'  style='cursor:pointer'onclick='remover("+contador+")'><div title='Remover'><i class='fa fa-times-circle'></i></div></a></td></tr>");
           contador++;
           $('#nome_funcionalidade').val('');
           $('#descricao').val('');
           $('#grau_complexidade').val('');
           $('#tipo_funcao').val('');
           $('#quant_pontof').val('');
           
        });
       
        function remover(id){
        $("#tabela_funcionalidade").on("click", ".remover", function(e){
            $(this).closest('tr').remove();
            $("#dadosFunc"+id).remove();          
         });
        }
        
        function calcularPeso(grau_complexidade, tipo_funcao){
        peso = 0;
            if(grau_complexidade == 'baixo'){
                if(tipo_funcao == 'ALI'){
                    peso = 7;
                }
                if(tipo_funcao == 'AIE'){
                    peso = 5;
                }
                if(tipo_funcao == 'EE'){
                    peso = 3;
                }
                if(tipo_funcao == 'SE'){
                    peso = 4;
                }
                if(tipo_funcao == 'CE'){
                    peso = 3;
                }
            }
            if(grau_complexidade == 'media'){
                
                if(tipo_funcao == 'ALI'){
                    peso = 10;
                }
                if(tipo_funcao == 'AIE'){
                    peso = 7;
                }
                if(tipo_funcao == 'EE'){
                    peso = 4;
                }
                if(tipo_funcao == 'SE'){
                    peso = 5;
                }
                if(tipo_funcao == 'CE'){
                    peso = 4;
                }
                
            }
            if(grau_complexidade == 'alta'){
                
                if(tipo_funcao == 'ALI'){
                    peso = 15;
                }
                if(tipo_funcao == 'AIE'){
                    peso = 10;
                }
                if(tipo_funcao == 'EE'){
                    peso = 6;
                }
                if(tipo_funcao == 'SE'){
                    peso = 7;
                }
                if(tipo_funcao == 'CE'){
                    peso = 6;
                }
                
            }
            
            return peso;
        }
        
        
    </script>