
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplo de formulário de contato</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>
<body>
  <div class="container" style="margin-top:100px;">
    <div class="row justify-content-md-center">
      <div class="col-sm-5">
        <h3 class="text-center">Entre em contato</h3>

        <form data-ftb-id="contact" data-ftb-transport="email" data-ftb-transport-email-to="fabricio.jhonata@gmail.com">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" data-ftb-input-pretty-name="Nome" required placeholder="Digite seu nome">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" data-ftb-input-pretty-name="E-mail" required placeholder="Digite seu e-mail">
          </div>
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" class="form-control" required data-ftb-input-pretty-name="Mensagem" placeholder="Digite sua mensagem"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar mensagem</button>
        </form>
      </div>
    </div>
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>