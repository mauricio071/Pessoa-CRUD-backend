<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Editar</title>
  </head>
    <body>
        <h1 class="text-center mt-4 mb-4">Editar</h1>
        <form name="formCad" id="formCad" method="post" action={{route('pessoas.editar', $pessoas->id)}} class="col-8 m-auto">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" value="{{$pessoas->nome}}"><br>
            <input class="form-control" type="text" name="data" id="data" value="{{$pessoas->data}}"><br>
            <input class="form-control" type="text" name="peso" id="peso" value="{{$pessoas->peso}}"><br>
            <input class="form-control" type="text" name="sexo" id="sexo" value="{{$pessoas->sexo}}"><br>
            <input class="form-control" type="text" name="cpf" id="cpf" value="{{$pessoas->cpf}}"><br>
            <input class="btn btn-success" type="submit" value="Editar">
        </form>
    </body>
</html>
