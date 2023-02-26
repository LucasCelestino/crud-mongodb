<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD - Editar Usuário</title>
</head>

<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-dark mb-4">Editar usuário</h2>
        <form enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="name" class="text-dark">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Digite o nome do usuário">
            </div>
            <div class="form-group">
                <label for="email" class="text-dark">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite o email do usuário">
            </div>
            <div class="form-group">
                <label for="dt_birth" class="text-dark">Data de Nascimento</label>
                <input type="date" class="form-control" id="dt_birth">
            </div>
            <div class="form-group">
                <label for="email" class="text-dark">Imagem</label>
                <input type="file" class="form-control" id="email" placeholder="Digite o email do usuário">
            </div>
            <button type="submit" class="btn btn-success mr-2">Editar</button>
            <a href="index.php  " class="text-dark">Voltar</a>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>