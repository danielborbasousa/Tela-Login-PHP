<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Funciona o Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">Meu Sistema</a>
        <div class="d-flex">
            <a href="login.php" class="btn btn-outline-light me-2">Entrar</a>
            <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
        <div class="container-fluid py-2">
            <h1 class="display-5 fw-bold">Entendendo o Sistema</h1>
            <p class="col-md-10 fs-4">Este é um sistema base de autenticação feito com PHP e MySQL. Abaixo, entenda o que acontece nos bastidores quando você interage com ele.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-4 mb-3">
            <div class="h-100 p-4 text-white bg-dark rounded-3">
                <h2>1. Cadastro (Hashing)</h2>
                <p>Quando você se cadastra, sua senha não é salva como texto puro. O PHP usa um algoritmo de mão única (Bcrypt) para transformar sua senha em um código embaralhado chamado "Hash". Se o banco de dados for vazado, as senhas continuam protegidas.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="h-100 p-4 bg-white border rounded-3 shadow-sm">
                <h2>2. Banco de Dados</h2>
                <p>A comunicação com o MySQL é feita usando "Prepared Statements". Isso significa que o código separa a estrutura do comando SQL dos dados que você digitou, impedindo ataques de SQL Injection onde um usuário mal intencionado tenta manipular o banco.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="h-100 p-4 bg-white border rounded-3 shadow-sm">
                <h2>3. Login (Sessões)</h2>
                <p>No login, o sistema busca seu e-mail e compara a senha digitada com o Hash salvo. Se bater, o PHP inicia uma "Sessão". Isso gera um crachá virtual no servidor que permite que você navegue pelas páginas restritas sem ter que logar de novo a cada clique.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>