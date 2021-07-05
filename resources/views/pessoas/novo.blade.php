<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Novo</title>
  </head>
    <body>
        <h1 class="text-center mt-4 mb-4">Novo</h1>
        <form name="formCad" id="formCad" method="post" action={{route('pessoas.novo')}} class="col-8 m-auto">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:"><br>
            <input class="form-control" type="text" name="data" id="data" placeholder="Data:"><br>
            <input class="form-control" type="text" name="peso" id="peso" placeholder="Peso:"><br>
            <input class="form-control" type="text" name="sexo" id="sexo" placeholder="Sexo:"><br>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF:"><br>
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
