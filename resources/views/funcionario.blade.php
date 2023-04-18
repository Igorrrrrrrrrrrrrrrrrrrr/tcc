<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/funcionario.css">
    <title>Login</title>
</head>
<body class="children-center gap-1">
    <h1 class="bem vindo">SEJA BEM VINDO(a)!</h1>
    <p class="texto">Login</p>
    <input type="text" id="loginInput">
    <p class="texto">Senha</p>
    <input type="password" id="senhaInput">
    <button class="texto" onclick="login()">Entrar</button>
    <script>
        // Função de login
        function login() {
            // Obter os valores dos campos de login e senha
            var login = document.getElementById("loginInput").value;
            var senha = document.getElementById("senhaInput").value;

            // Verificar se o login e senha estão corretos (exemplo básico)
            if (login === "usuario" && senha === "senha") {
                // Redirecionar para a página de registro de ponto
                window.location.href = "/funcionario/ponto";
            } else {
                alert("Login ou senha incorretos. Por favor, tente novamente.");
            }
        }
    </script>
</body>
</html>
