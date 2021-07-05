<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Index</title>
  </head>
    <body>
        <div class="text-center mt-4 mb-4">
            <a href="">
                <button class="btn btn-success">Novo</button>
            </a>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Data</th>
                      <th scope="col">Peso</th>
                      <th scope="col">Sexo</th>
                      <th scope="col">CPF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $pessoa)
                    <tr>
                        <th scope="row">{{$pessoa->id}}</th>
                        <td>{{$pessoa->nome}}</td>
                        <td>{{$pessoa->data}}</td>
                        <td>{{$pessoa->peso}}</td>
                        <td>{{$pessoa->sexo}}</td>
                        <td>{{$pessoa->cpf}}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
