<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Cards Interativos</title>
	<link rel="stylesheet" href="/css/registro.css">
	
</head>
<body>

	<div class="username">{{ session()->get('funcionario')->nome; }}</div>


	<div class="card-container">
	<a href="/funcionario/registro/1" class="card">
		<img src="/img/entra_fi.png" alt="Placeholder Image">
		
		<h3>Entrada</h3>
	</a>
	  
	  <a href="/funcionario/registro/2" class="card">
		<img src="/img/cuinmida.png" alt="Placeholder Image">
		<h3>Almoço</h3>
	  </a>
	  
	  <a href="/funcionario/registro/3" class="card">
		<img src="/img/cuinmida.png" alt="Placeholder Image">
		<h3>Volta do Almoço</h3>
	  </a>
	  
	  <a href="/funcionario/registro/4" class="card">
		<img src="/img/entra_fi.png" alt="Placeholder Image">
		<h3>Fim do Expediente</h3>
	  </a>
	</div>	  


	
	<a class="botao justificativa" href="/funcionario/observacao">Observações</a>
   
</body>
</html>
