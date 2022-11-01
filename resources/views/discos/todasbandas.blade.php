<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discos Bandas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <h1>DISCOS DISCOS</h1>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">

                <table action="table">

                    <thead>
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">Estilo</th>
                          <th scope="col">Criado</th>
                          <th scope="col">Disco</th>
                        </tr>
                      </thead>

                      @if(count($bandas) > 0)
                      @foreach ($bandas as $banda)
                      <tr>
                          <td>{{$banda['nome']}}</td>
                          <td>{{$banda['estilo']}}</td>
                          <td>{{$banda['criado']}}</td>
                          <td>{{$banda['disco']}}</td>
                      </tr>
                      @endforeach
                  @endif

                </table>

            </div>
        </div>
    </div>
</body>
</html>
