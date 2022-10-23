<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="estilo.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <title>Seja Solidário</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-warning">
      <div class="container">
        <a href="" class="navbar-brand">
          <img src="img/logo1.png" width="150px" height="80px">
        </a>


        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="nav-principal" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link">Início</a>
            </li>
            <li class="nav-item">
              <a href="#onde" class="nav-link">Onde será o projeto</a>
            </li>
            <li class="nav-item">
              <a href="#sobre" class="nav-link">Sobre</a>
            </li>
            <li class="nav-item">
              <a href="#doacoes" class="nav-link">Doações</a>
            </li>
          </ul>

        </div>
      </div>

    </nav>

  </header>

  <!-- Modal de confirmação de envio de formário -->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sucesso</h4>
        </div>
        <div class="modal-body">
          <p>Formulário enviado. Entraremos em contato. </p>
          <p class="text-warning"><small><span id="result"></span></small></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-md btn-info" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- fim do modal -->
  <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex">
          <div class="align-self-center">
            <img src="img/principal2.gif" width="550px">
          </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
          <img src="img/principal.png">
        </div>
      </div>
    </div>
  </section>

  <section id="onde" class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex">
          <div class="align-self-center">
            <h2>Onde será o projeto ?</h2>
            <p>A principio o projeto se iniciará na cidade de Araçuaí e seus distritos, no vale do Jequitinhonha, norte de Minas Gerais. Cidade com pouco mais de 36 mil habitantes, lugar que sofre bastante com a seca e a falta de oportunidades de trabalho.</p>
          </div>
        </div>
        <div class="col-md-6">
          <article id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30547.706167971824!2d-42.06059845!3d-16.8529624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x74d18315a4e9c91%3A0x34a887ec367daeb7!2zQXJhw6d1YcOtLCBNRywgMzk2MDAtMDAw!5e0!3m2!1spt-BR!2sbr!4v1663719069782!5m2!1spt-BR!2sbr" width="500px" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section id="sobre" class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/secundario.gif" class="img-fluid">
        </div>
        <div class="col-md-6 d-flex">
          <div class="align-self-center">
            <h2>Como vai funcionar ?</h2>
            <p>Você que tem a intenção de doar algo, veja como é simples: Você irá preencher no formulário o que deseja doar e após enviar os dados entraremos em contato para combinar a coleta da mesma e logo após conseguirmos uma boa quantidade de doações iremos estar selecionando alguma comunidade para realizar a doação.</p>
            <h6>"O mundo precisa de mais solidariedade, seja um motivador! Ao doar, você inspira amor e influencia outras pessoas a praticarem atos de bondade."</h6>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="img/facil.gif" width="400px" height="400px" class="img-fluid mb-3">
          <h4>Muito fácil doar</h4>
          <p>
            Você que tem uma roupa ou tênis que não a serve mais, um brinquedo que seu filho ou parente não usa mais, caso tenha condições um material escolar, um alimento ou material de higiene seja solidário e faça uma doação, talvez o que não sirva para você pode ser uma alegria diferente na vida do outro.
          </p>
        </div>
        <div class="col-md-4">
          <img src="img/economize.png" width="400px" height="400px" class="img-fluid mb-4">
          <h4>Economize o seu tempo</h4>
          <p>
            Preenchendo o formulário a nossa equipe entrará em contato e irá combinar a melhor forma para recolher as doações.
          </p>
        </div>
        <div class="col-md-4">
          <img src="img/suporte.gif" width="400px" height="400px" class="img-fluid mb-2">
          <h4>Suporte amigo</h4>
          <p>
            Duvidas? Perguntas? Nosso suporte super legal ajuda você! Estamos aqui para resolver seus problemas e deixar sua vida bem mais fácil! Basta selecionar a opção 'Dúvidas' e enviar sua dúvida.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="doacoes">
    <div class="card-abrir-chamado container mt-5">
      <div class="card">
        <div class="card-header">
          <h3>Doações</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <form id="form" method="post" action="#">
                <div class="form-group">
                  <label>O que quer doar ?</label>
                  <input name='item' type="text" class="form-control" placeholder="O que quer doar ?" required>
                </div>
                <div class="form-group">
                  <label>Categoria</label>
                  <select name='category' class="form-control" required>
                    <option value="Alimentos">Alimentos</option>
                    <option value="Brinquedos">Brinquedos</option>
                    <option value="Vestuário">Vestuário</option>
                    <option value="Dúvidas">Dúvidas</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Contato</label>
                  <input name='contact' type="text" class="form-control" placeholder="Celular, E-mail , Rede Social ..." required>
                </div>
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea name='desc' class="form-control" rows="3"></textarea>
                </div>
                <div class="col-12">
                  <button class="botao btn btn-lg btn-info btn-block" id="submitBtn" type="submit">Enviar</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>




  <footer class="mt-4 mb-4 bg bg-muted">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 mr-auto">
          <div class="align-self-center">
            <p class="fonte3">O mundo sofre com a desigualdade social, que tal fazermos um ato para um mundo melhor ?</p>
          </div>
          <div class="col-md-12 d-flex justify-content-end">
            <a href="" class="btn text-secondary ml-2">
              <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a href="" class="btn text-secondary ml-2">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="" class="btn text-secondary ml-2">
              <i class="fab fa-youtube fa-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {

      $('#submitBtn').click(function() {

        var data = $('#form').serialize();
        let item = $('input[name="item"]').val();
        let category = $('input[name="category"]').val();
        let contact = $('input[name="contact"]').val();

        if (item != '' && contact != '') {
          $.ajax({
            type: "post",
            url: "/projetosejasolidario/database.php",
            data: data,
            success: function(data) {
              $(":input").val("");
              $("#myModal").modal('show');
            }
          });
        }

        event.preventDefault();
      });
    });
  </script>
</body>

</html>