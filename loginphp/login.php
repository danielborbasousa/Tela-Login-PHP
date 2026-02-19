<?php
session_start();
require 'conexao.php';
$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($usuario = $resultado->fetch_assoc()) {
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['nome_usuario'] = $usuario['nome'];
            $mensagem = "<div class='alert alert-success'>Bem-vindo, " . $usuario['nome'] . "! <br><small>Redirecionando...</small></div>";
            // header("Refresh: 2; url=painel.php"); // Descomente isso futuramente para redirecionar!
        } else {
            $mensagem = "<div class='alert alert-danger'>Senha incorreta.</div>";
        }
    } else {
        $mensagem = "<div class='alert alert-warning'>Usuário não encontrado.</div>";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Meu Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Fazer Login</h3>
        
        <?= $mensagem ?> <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Entrar no Sistema</button>
        </form>
        <div class="text-center mt-3">
            <span class="text-muted">Não tem conta?</span> <a href="cadastro.php" class="text-decoration-none">Cadastre-se</a>
        </div>
    </div>
</div>

</body>
</html>