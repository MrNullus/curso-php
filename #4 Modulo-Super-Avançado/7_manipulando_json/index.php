<?php

if (isset($_GET['searchUser']) && !empty($_GET['searchUser'])) {
	$user = $_GET['searchUser'];

	$opts = [
	    'http' => [
	        'method' => 'GET',
	        'header' => [
	            'User-Agent: PHP'
	        ]
		]
	];

	$context = stream_context_create($opts);
	$json = file_get_contents("https://api.github.com/users/$user/followers", false, $context);
	$json = json_decode($json);

	// + new stdClass(); |> Cria um novo objeto 
	$obj = new stdClass();
	$obj->codigo = 111;
	$obj->cidade = "São Paulo";
	$obj->uf = "SP";
	$obj->baixa = 01;
	$obj->alta = 03;
	$obj->ico = ;
	$obj->frase = "Lorem lorem it lorem";
	$obj->data = "...";
	$obj->dia_mes = "Maio";
	$obj->dia_semana = "Algum Dia";
	$obj->selecionada = 1;

	// + Adicionar esse novo objeto a esse json
	# $json->previsao[] = $obj;

	// + Codificar para JSON
	# echo json_encode($json);
} else {
	echo "Informe um usuario!";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Followers</title>
	<style>
		body {
			background:  #1c1c1c;
			color:  #eee;
			font-family: 'Roboto', cursive;
		}
		header {
			text-align: center;
			margin-bottom: 2.2rem;
		}
		header h1 {
			color: #35E1B7;
			font-family: 'Poppins', cursive;
			letter-spacing: 1.6;	
		}
		.box-followers {
			display: flex;
			flex-flow: row wrap;
			align-items: center;
			justify-content: center;
			gap: 2rem;
			padding:  1.4rem 1.2rem;
		}
		.avatar_url {
			width: 150px;
			height: 150px;
			background-repeat: no-repeat;
			background-size: contain;
			border-radius: 5px;	
		}
		.follower {
			display: flex;
	    	flex: 1;
		    flex-flow: column wrap;
		    align-items: center;
		    max-width: 333px;
		    border-radius: 4px;
		    box-shadow: 1px 1px 1px 1px #eee;
		    border: 1px solid black;
		    padding: 1rem 1.45rem;
		    background: #262626;
		    color: greenyellow;
		}
		.info-follower {  
			text-align: left;
		}
		.info-follower a {
			padding-left: 12px;
			color: aqua;
		}
		form {
			display:  flex;
			flex-flow: row wrap;
			gap: 1rem;
			justify-content: center;
			margin-bottom: 2.2rem;
		}
		form .input-field {
			width: 70%;
		}
		form .input-field input {
			width: 100%;
			padding: 0.75rem;
			letter-spacing: 1.4;
			font-size: 1rem;
			font-weight: 600;
		}
		form .input-field input::placeholder {
			letter-spacing: 1.4;
			font-size: 1rem;
			font-weight: bold;
		}
		form button {
			cursor:  pointer; 
			border:  none;
			background: transparent;
			border: 2px solid greenyellow;
			border-radius: 2px;
			width: 10%;
			font-size:  1.4rem;
		}
		form button:hover {
			opacity:  0.5;
			transition: opacity 0.45s linear;
		}
	</style>
</head>

<body>
	<header>
		<h1>My GitHub Followers</h1>
		<h2>meet your followers 🎈</h2>
	</header>


	<form method="GET">
		<div class="input-field">
			<input type="search" name="searchUser" id="searchUser" placeholder="Digite o usuario..." />
		</div>
		<button type="submit">🔍</button>
	</form>

	<?php if (!empty($user)): ?>
	<p style="padding-left: 24px;">User pesquisado: <strong><?php echo $user; ?></strong></p>
	<?php endif; ?>

	<section class="box-followers">
		<?php foreach($json as $follower): ?>
			<div class="follower">
				<div 
					class="avatar_url" 
					style="background-image: url('<?php echo $follower->avatar_url; ?>)'">
				</div>
				<div class="info-follower">
					<h3><?php echo $follower->login; ?></h3>
					<a href="<?php echo $follower->html_url; ?>"><?php echo $follower->html_url; ?></a>
				</div>
			</div>
		<?php endforeach; ?>
	</section>
</body>

</html>