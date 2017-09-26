<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.github.io/templates/blank/theme.css" type="text/css">



    <script language="Javascript">
        function Enviar()
        {
            var nome = $("#nome").val();
            var descricao = $("#descricao").val();

            $.post("criar_projeto.php", {nome:nome, descricao:descricao});

            alert("Projeto criado");

            window.location.replace("http://viniciuszorzanelli.com/relatorio_estrutura");

        }
    </script>




</head>

<body>
  <div class="p-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3">Novo Projeto
            <br>
          </h1>
          <div class="col-md-12">
            <hr class="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form class="">
            <div class="form-group"> <label>Nome do Projeto</label>
              <input type="text" class="form-control" placeholder="Nome" id="nome"> </div>
            <div class="form-group"> <label>Descrição do Projeto</label>
              <input type="text" class="form-control" placeholder="Descrição" id="descricao"> </div>


              <a  class="btn btn-primary" id="btn" onclick="Enviar()">Salvar</a>


          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>