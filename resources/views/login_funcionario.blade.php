<x-layout>
    <link rel="stylesheet" href="/css/funcionario.css">


    <title>Login</title>

    <form  action="/funcionario/login" method="post" class="flex-col children-center grow gap-20 text-center">
        <h1 class="bem vindo">SEJA BEM VINDO(a)!</h1>

        <div class="flex-col gap-10">
            <label class="texto">CPF</label>
            <input type="text" name="cpf"  id="loginInput" required >
        </div>

        <div class="flex-col gap-10">
            <label class="texto">Senha</label>
            <input type="password" name="senha" id="senhaInput" required >
        </div>

        <button type="submit" class="button">Entrar</button>
        @csrf
        
        @if($errors->has('login'))
            <div class="error">{{ $errors->first('login') }}</div>
        @endif

    </form>

    
</x-layout>