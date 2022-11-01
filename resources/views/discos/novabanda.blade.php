<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Banda</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">

                <table method="post" class="table">

                    @csrf

                    @if (Session::has('success'))

                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    <div class="mb-3">
                        <label for="nome" class="form-label">nome da Banda</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Oficina G3">
                    </div>

                    <div class="mb-3">
                        <label for="estilo" class="form-label">Estilo Musical</label>
                        <input type="text" class="form-control" id="estilo" name="estilo" placeholder="Rock">
                    </div>

                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano do Disco</label>
                        <input type="text" class="form-control" id="ano" name="ano_criacao" placeholder="2013">
                    </div>

                    <div class="mb-3">
                        <label for="totaldisco" class="form-label">Total de disco</label>
                        <input type="test" class="form-control" id="totaldisco" name="total_de_disco" placeholder="10">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </table>

            </div>
        </div>
    </div>
</body>
</html>
