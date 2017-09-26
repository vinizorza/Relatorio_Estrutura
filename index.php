<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://pingendo.github.io/templates/blank/theme.css" type="text/css">


    <script language="Javascript">
        function Enviar(id){
            $.post("excluir_projeto.php", {id:id});

            alert("Projeto excluido");

            window.location.replace("http://viniciuszorzanelli.com/relatorio_estrutura");
        }
    </script>



</head>

<body>
<div class="p-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center display-3">Projetos</h1>
                <div class="col-md-12">
                    <hr class="">
                </div>
            </div>
        </div>
    </div>
</div>



<?php

require_once 'medoo.php';


$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'viniciuszorzanelli_com',
    'server' => 'viniciuszorzanelli.com.mysql',
    'username' => 'viniciuszorzanelli_com',
    'password' => 'v8QcqyNx',
    'charset' => 'utf8'
]);

$datas = $database->select("PROJETO", [
    "NOME",
    "DESCRICAO",
    "ID"
]);

foreach($datas as $data){

    echo "
    
    
      <div class=\"section w-25 mx-auto bg-faded py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12 py-4\">
          <h2 class=\"text-sm-center text-primary\">".$data["NOME"]."</h2>
          <p class=\"my-1 text-center\">".$data["DESCRICAO"]."</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <a class=\"btn btn-primary btn-block py-2\" href=\"#\">Abrir<i class=\"fa fa-check fa-fw\"></i>
            <br>
          </a>
        </div>
        <div class=\"col-md-4\">
          <a href=\"#\" id=".$data["ID"]." class=\"btn btn-outline-primary btn-block py-2\" onclick=\"Enviar(this.id)\">Excluir</a>
        </div>
        <div class=\"col-md-4\">
          <a href=\"#\" class=\"btn btn-outline-primary\">Alterar
            <br>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"py-0\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <hr class=\"w-25 p-0\">
      </div>
    </div>
  </div>
    ";

}



?>




<div class="py-0">
    <div class="container">
        <div class="row">
            <div class="align-self-center col-md-12 text-center">
                <a class="btn btn-primary btn-lg w-25" href="/relatorio_estrutura/novo_projeto.php" data-toggle="">Novo Projeto &nbsp;<b>+</b>
                    <br>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>