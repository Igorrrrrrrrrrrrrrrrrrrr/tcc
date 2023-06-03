<x-layout>
    <link rel="stylesheet" href="/css/historico.css">
    <title>Document</title>

    <i class="bi bi-person-circle"></i>
	<span class="user"><i class="bi bi-person-circle"></i></span>
	<div class="username">{{ session()->get('funcionario')->nome; }}</div>

    

</x-layout>