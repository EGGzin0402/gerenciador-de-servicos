<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

        <style>

            body{
                background-color: #CCCCCC;

            }

        </style>

</head>

<body>

    <div class="container" style="background-color: white; padding: 0;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Consultar</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" style="padding: 30px;">

            <h4>Cadastrar - Agendamento de Potencias Clientes</h4>
            Sistema utilizado para agendamento de servicos<br><br>

            <form>
                <div class="mb-3">
                    <label for="Nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="Nome">
                </div>

                <div class="mb-3">
                    <label for="Telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="Telefone" placeholder="(XX)XXXXX-XXXX">
                </div>

                <div class="mb-3">
                    <label for="Origem" class="form-label">Origem:</label>
                    <select id="Origem" class="form-select">
                        <option value="Origem1"> Celular </option>
                        <option value="Origem2"> Telefone Residencial </option>
                        <option value="Origem3"> Telefone Comercial </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="DataDoContato" class="form-label">Data do Contato:</label>
                    <input type="date" class="form-control" id="DataDoContato">
                </div>

                <div class="mb-3">
                    <label for="Observacao" class="form-label">Observação:</label>
                    <textarea class="form-control" id="Observacao"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>

        </div>
    </div>

</body>
</html>