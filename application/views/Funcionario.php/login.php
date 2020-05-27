<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css")?>">
</head>
<body>
    <div class="container">
        <?php $dados = $this->session->flashdata("msg");
        if($dados['status']==1){
             echo "<p class='alert alert-success'>".$dados['mensagem']."</p>"; 
        }if($dados['status']==2){
             echo "<p class='alert alert-danger'>".$dados['mensagem']."</p>"; 
        }?>

	<?php if($this->session->   userdata("usuario_logado")):?>

	 <?= anchor('login/logout', 'Logout', array("class"=> "btn btn-primary")) ?>
    <?php else: ?>


   <body class="bg-primary">
        <div class="form-group-sm">
            <div style="padding-left: 10%; padding-right: 45%; padding-bottom: 10%; padding-top: 10%">
                <div class="row">
                    <fieldset style="padding-bottom: 5%; padding-left: 5%; padding-right: 5%; padding-top: 5%; background: #708090">

  
     <h1>Acesso</h1>
     <?php 
     	echo form_open("login/autenticar");
     	echo form_label("E-mail", "email");
     	echo form_input(array(
     	 "name" => "email",
         "id" => "email",
     	"class"=> "form-control",
       "naxlenth" => "255",
       "required"=>""
                    ));
          echo form_label("Senha", "senha");
          echo form_password(array(
            "name" => "senha",
            "id" => "senha",
            "class" => "form-control",
            "naxlenth" => "255",
            "required"=>""
        ));

          echo "<br>";


        echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Login",
                "type" => "submit"
            )); 
 
       echo form_close();
        ?>

        <h1> Cadastrar </h1>
<?php 
            echo form_open("usuario/novo");

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255",
                "required"=>""
                ) );
            

            echo form_label("E-mail", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255",
                "required"=>""
                ) );
        

            echo form_label("Senha", "senha");
            echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255",
                "required"=>""
                ) );
            echo "<br>";

            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
                ));
            echo form_close();
        ?>
    <?php endif; ?>
</body>

</html>
