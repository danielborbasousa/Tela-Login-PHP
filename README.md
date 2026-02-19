# 🔐 Sistema de Autenticação em PHP

Um sistema de login e cadastro simples, rápido e seguro construído com PHP puro, MySQL e estilizado com Bootstrap 5. 

Este projeto foi desenvolvido para demonstrar os fundamentos de autenticação web, gerenciamento de sessões e boas práticas de segurança no backend.

## ✨ Funcionalidades

* **Cadastro de Usuários:** Registro de novos usuários com armazenamento seguro de senhas.
* **Login de Usuários:** Autenticação validando credenciais no banco de dados.
* **Controle de Sessão:** Área restrita (`painel.php`) acessível apenas para usuários logados.
* **Interface Responsiva:** Telas limpas e amigáveis utilizando Bootstrap 5.
* **Segurança Embutida:** * Criptografia de senhas utilizando o algoritmo nativo do PHP (`password_hash` com Bcrypt).
  * Prevenção contra SQL Injection através de *Prepared Statements* via MySQLi.

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP 8+
* **Banco de Dados:** MySQL / MariaDB
* **Frontend:** HTML5, CSS3, Bootstrap 5 (via CDN)
* **Servidor Local:** Apache (XAMPP/WAMP)

## 🚀 Como rodar o projeto localmente

1. **Clone o repositório** para dentro da pasta pública do seu servidor local (ex: `htdocs` no XAMPP ou `www` no WAMP):
   ```bash
   git clone [https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git](https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git)
