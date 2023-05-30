<x-layout>
	<title>Exemplo de Cards Interativos</title>
	<link rel="stylesheet" href="/css/registro.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<header class="app-header">
		<div class="logo"></div>
	
	<div  class="caixa">
		<ul class="ul">
			<li><div class="linha-vertical"></div></li>
	  		<li class="li"><div class="username">{{ session()->get('funcionario')->nome; }}</div></li>
		</ul>
	</div>
	</header>

	<div class="card-container">
	<a href="/funcionario/registro/1" class="card">
		<img src="/img/entra_fi.png" alt="Placeholder Image">
		
		<h3>Entrada</h3>
		<div>{{ $entrada_hoje?->data_hora }}</div>
	</a>
	  
	  <a href="/funcionario/registro/2" class="card">
		<img src="/img/cuinmida.png" alt="Placeholder Image">
		<h3>Almoço</h3>
		<div class="link">{{ $almoco_hoje?->data_hora }}</div>
	  </a>
	  
	  <a href="/funcionario/registro/3" class="card">
		<img src="/img/cuinmida.png" alt="Placeholder Image">
		<h3>Volta do Almoço</h3>
		<div>{{ $volta_hoje?->data_hora }}</div>
	  </a>
	  
	  <a href="/funcionario/registro/4" class="card">
		<img src="/img/entra_fi.png" alt="Placeholder Image">
		<h3>Fim do Expediente</h3>
		<div>{{ $saida_hoje?->data_hora }}</div>
	  </a>
	</div>	  


	
	<a class="botao justificativa" href="/funcionario/observacao">Observações</a>

</x-layout>