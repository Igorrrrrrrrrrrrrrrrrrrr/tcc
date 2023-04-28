<x-layout>
    <link rel="stylesheet" href="/css/gestor.css">
    <title>Login</title>

    <form  action="/fazer-login" method="post" class="flex-col children-center grow gap-20 text-center">
        <h1 class="bem vindo">CADASTRE SUA EMPRESA!</h1>

        <div class="flex-col gap-10">
            <label class="texto">CNPJ</label>
            <input type="text" name="cnpj"  id="loginInput" required >
        </div>

        <div class="flex-col gap-10">
            <label class="texto">Senha</label>
            <input type="password" name="senha" id="senhaInput" required >
        </div>

        <button type="submit" class="button">Entrar</button>
        @csrf



    </form>

    
</x-layout>