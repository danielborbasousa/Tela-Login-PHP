<?php
require 'conexao.php';
$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        $mensagem = "<div class='alert alert-success'>Cadastro realizado! <a href='login.php' class='alert-link'>Faça login aqui</a>.</div>";
    } else {
        $mensagem = "<div class='alert alert-danger'>Erro ao cadastrar: " . $stmt->error . "</div>";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Meu Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Criar Conta</h3>
        
        <?= $mensagem ?> <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
        <div class="text-center mt-3">
            <a href="index.php" class="text-decoration-none text-secondary">Voltar ao Início</a>
        </div>
    </div>
</div>

</body>
</html>