<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto on</title>
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <nav class="menu-lateral">

		<div class="btn-expandir">
			<i class=""></i>
		</div>
	
		<ul>
		  <li class="item-menu">
			<a href="/funcionario/ponto">
				<span class="icon"><i class="bi bi-house-door"></i></span>
				<span class="txt-link">Home</span>
			</a>
		  </li>
		  <li class="item-menu">
			<a href="/funcionario/historico">
				<span class="icon"><i class="bi bi-calendar3"></i></span>
				<span class="txt-link">Histórico</span>
			</a>
		  </li>
		</ul>
	
	
	  </nav>
    <div class="app-content">
        {{ $slot }}
    </div>

</body>
</html>