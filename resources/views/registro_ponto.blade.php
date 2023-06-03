<x-layout>
	<title>Exemplo de Cards Interativos</title>
	<link rel="stylesheet" href="/css/registro.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


	<i class="bi bi-person-circle"></i>
	<span class="user"><i class="bi bi-person-circle"></i></span>
	<div class="username">{{ session()->get('funcionario')->nome; }}</div>

	<div class="card-container">
	<a href="/funcionario/registro/1" class="card">
		<img src="/img/entrada.png" alt="Placeholder Image">
		
		<h3>Entrada</h3>
		<div>{{ $entrada_hoje?->data_hora }}</div>
	</a>
	  
	  <a href="/funcionario/registro/2" class="card">
		<img src="/img/entradaalmoco.png" alt="Placeholder Image">
		<h3>Almoço</h3>
		<div class="link">{{ $almoco_hoje?->data_hora }}</div>
	  </a>
	  
	  <a href="/funcionario/registro/3" class="card">
		<img src="/img/saidaalmoco.png" alt="Placeholder Image">
		<h3>Volta do Almoço</h3>
		<div>{{ $volta_hoje?->data_hora }}</div>
	  </a>
	  
	  <a href="/funcionario/registro/4" class="card">
		<img src="/img/saida.png" alt="Placeholder Image">
		<h3>Fim do Expediente</h3>
		<div>{{ $saida_hoje?->data_hora }}</div>
	  </a>

	  <h3>{{$turnomanha}}</h3>
	</div>	  


	
	<a class="botao justificativa" href="/funcionario/observacao">Observações</a>

</x-layout>