<?php
session_start();
session_unset(); // Limpa as variáveis da sessão
session_destroy(); // Destrói a sessão inteira

// Manda de volta pra tela de login
header("Location: login.php");
exit();
?>