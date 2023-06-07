<x-layout>
    <link rel="stylesheet" href="/css/home.css">
    <title>Document</title>

    <div class="flex-col children-center gap-40 grow">
        <img class="logo" src="/img/logo.png" alt="">
        <a class="botao login" href="/funcionario/login">Funcionário</a>
        <a class="botao cadastro" onclick="abrirRegistroFuncionarios()">Gestor</a>

        <div class="flex-row gap-20">
            <img class="icone facebook" src="img/facebook-svgrepo-com.svg" alt="">
            <a href="https://instagram.com/ponto.on23?igshid=MmJiY2I4NDBkZg=="><img class="icone instagram" src="img/instagram-svgrepo-com.svg" alt=""></a>
            <a href="https://www.linkedin.com/in/ponto-on-7b358821b/"><img class="icone linkedin" src="img/linkedin-svgrepo-com.svg" alt=""></a>
        </div>
    </div>
</x-layout>